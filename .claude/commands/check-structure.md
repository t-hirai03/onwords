# HTML階層構造とCSS確認の完全ワークフロー

要素を実装する際は、必ずHTML階層構造を確認し、各階層に当たっているCSSを正確に抽出します。

## 確認手順

### Step 1: HTML構造の確認

```javascript
// Chrome DevTools MCPでevaluate_scriptを使用
() => {
  const element = document.querySelector('セレクタ');

  return {
    // 要素自体の情報
    tagName: element.tagName,
    className: element.className,

    // HTML構造（outerHTML）
    outerHTML: element.outerHTML,

    // 子要素の階層構造
    children: Array.from(element.children).map(child => ({
      tagName: child.tagName,
      className: child.className,
      children: Array.from(child.children).map(grandchild => ({
        tagName: grandchild.tagName,
        className: grandchild.className
      }))
    })),

    // 子要素の数
    childrenCount: element.children.length
  };
}
```

### Step 2: 各階層の通常状態CSSを確認

```javascript
// 親要素のCSS
() => {
  const parent = document.querySelector('親セレクタ');
  const styles = window.getComputedStyle(parent);

  return {
    // すべての重要なプロパティを取得
    position: styles.position,
    display: styles.display,
    flexDirection: styles.flexDirection,
    alignItems: styles.alignItems,
    justifyContent: styles.justifyContent,
    padding: styles.padding,
    margin: styles.margin,
    background: styles.background,
    color: styles.color,
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight,
    borderRadius: styles.borderRadius,
    overflow: styles.overflow,
    zIndex: styles.zIndex,
    transition: styles.transition
  };
}

// 子要素のCSS（各階層ごとに実行）
() => {
  const child = document.querySelector('子セレクタ');
  const styles = window.getComputedStyle(child);

  return {
    position: styles.position,
    top: styles.top,
    left: styles.left,
    right: styles.right,
    bottom: styles.bottom,
    width: styles.width,
    height: styles.height,
    background: styles.background,
    opacity: styles.opacity,
    zIndex: styles.zIndex,
    transition: styles.transition
  };
}
```

### Step 3: ホバー時の各階層のCSSを確認

```javascript
// ホバー前にスタイルを取得
// → mcp__chrome-devtools__hover または mcp__playwright__browser_hover でホバー
// → 再度スタイルを取得

// 親要素のホバー状態
() => {
  const parent = document.querySelector('親セレクタ');
  const styles = window.getComputedStyle(parent);

  return {
    // ホバー時に変化するプロパティを確認
    background: styles.background,
    color: styles.color,
    transform: styles.transform,
    opacity: styles.opacity,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction
  };
}

// 子要素のホバー状態（親のホバーで子がどう変わるか）
() => {
  const child = document.querySelector('子セレクタ');
  const styles = window.getComputedStyle(child);

  return {
    position: styles.position,
    left: styles.left,
    right: styles.right,
    background: styles.background,
    opacity: styles.opacity,
    transform: styles.transform,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction
  };
}
```

## チェックリスト

実装前に必ず確認：

- [ ] HTML階層構造を確認（`outerHTML`, `children` を取得）
- [ ] 親要素の通常状態CSSを取得
- [ ] すべての子要素の通常状態CSSを取得（階層ごと）
- [ ] ホバー後、親要素のCSSを確認
- [ ] ホバー後、すべての子要素のCSSを確認（階層ごと）
- [ ] `position`, `z-index` の関係を理解
- [ ] `overflow: hidden` などのレイアウト制御を確認
- [ ] トランジションプロパティを各階層で確認

## よくある間違い

❌ **HTML構造が違う:**
```html
<!-- 本番: 画像が上、テキストが下 -->
<a class="card">
  <div class="card__image"></div>
  <div class="card__text">テキスト</div>
</a>

<!-- ❌ 間違い: 画像がテキストの中 -->
<a class="card">
  <div class="card__text">
    <img class="card__image">
    テキスト
  </div>
</a>
```

❌ **CSSが階層構造と合っていない:**
```css
/* 本番: 画像は独立した要素 */
.card__image {
  width: 476px;
  height: 300px;
}

/* ❌ 間違い: カード全体に背景画像 */
.card {
  background-image: url(...);
}
```

## 禁止事項

❌ **絶対にやってはいけないこと：**
- 親要素だけ確認して子要素を確認しない
- 通常状態だけ確認してホバー状態を確認しない
- HTML構造を確認せずに推測で実装する
- 「だいたい同じ構造だろう」と仮定する

✅ **必ずやること：**
- すべての階層のHTML構造を正確に把握
- 各階層の通常状態とホバー状態のCSSを完全に取得
- 親子関係（`position: relative/absolute`, `z-index`）を正確に再現
- `overflow`, `clip-path` などのレイアウト制御を見落とさない
