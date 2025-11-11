# STUDIOサイトからの抽出手順

このコマンドは、本番のSTUDIOサイト（https://www.onwords.co.jp/）からHTML/CSS/JS/画像を抽出する詳細手順を提供します。

## 実行手順

### 1. ページを開く

```
mcp__playwright__browser_navigate または mcp__chrome-devtools__navigate_page
URL: https://www.onwords.co.jp/[対象ページ]
```

### 2. HTML構造とコンテンツを確認

```javascript
// アクセシビリティツリーでページ構造を取得
mcp__chrome-devtools__take_snapshot

// 特定要素のHTML構造を取得
mcp__chrome-devtools__evaluate_script
() => {
  const element = document.querySelector('セレクタ');
  return {
    outerHTML: element.outerHTML,
    children: Array.from(element.children).map(child => ({
      tagName: child.tagName,
      className: child.className
    }))
  };
}
```

### 3. CSS（計算済みスタイル）を抽出

```javascript
// 通常状態のCSSを取得
() => {
  const element = document.querySelector('セレクタ');
  const styles = window.getComputedStyle(element);

  return {
    // レイアウト
    display: styles.display,
    position: styles.position,
    flexDirection: styles.flexDirection,
    alignItems: styles.alignItems,
    justifyContent: styles.justifyContent,

    // ボックスモデル
    width: styles.width,
    height: styles.height,
    padding: styles.padding,
    margin: styles.margin,
    borderRadius: styles.borderRadius,

    // タイポグラフィ
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight,
    letterSpacing: styles.letterSpacing,
    textAlign: styles.textAlign,

    // 色
    color: styles.color,
    background: styles.background,
    backgroundColor: styles.backgroundColor,

    // アニメーション
    opacity: styles.opacity,
    transition: styles.transition,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction,
    transitionDelay: styles.transitionDelay,
    transform: styles.transform
  };
}
```

### 4. ホバー状態を確認

```javascript
// ホバー前にスタイルを取得
// → mcp__chrome-devtools__hover または mcp__playwright__browser_hover
// → 再度スタイルを取得して差分を確認
```

### 5. 疑似要素（::before, ::after）を確認

```javascript
() => {
  const element = document.querySelector('セレクタ');
  const before = window.getComputedStyle(element, '::before');
  const after = window.getComputedStyle(element, '::after');

  return {
    before: {
      content: before.content,
      backgroundImage: before.backgroundImage,
      position: before.position,
      width: before.width,
      height: before.height,
      fontFamily: before.fontFamily
    },
    after: {
      content: after.content,
      backgroundImage: after.backgroundImage
    }
  };
}
```

### 6. 画像を確認・ダウンロード

```javascript
// ネットワークリクエストから画像URLを取得
mcp__chrome-devtools__list_network_requests
resourceTypes: ["image"]

// 元のファイル名を保持してダウンロード
// assets/images/[セクション名]/[元のファイル名]
```

### 7. スクリーンショットを撮影

```javascript
// 本番サイトのスクリーンショット
mcp__playwright__browser_take_screenshot
filename: "chrome-devtools-mcp/production-[ページ名]-[セクション名].png"
fullPage: true
```

## 禁止事項

❌ **絶対にやってはいけないこと：**
- STUDIOサイトを確認せずに推測で実装する
- 計算済みスタイルを取得せずに目視で判断する
- ダミーデータやプレースホルダーを使う
- 画像ファイル名をリネームする

✅ **必ずやること：**
- すべてのプロパティを計算済みスタイルから取得
- ホバー状態も必ず確認
- 画像は元のファイル名で保存
- スクリーンショットを chrome-devtools-mcp/ に保存
