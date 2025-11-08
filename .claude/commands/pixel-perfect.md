# 完全コピーのアプローチ（ピクセルパーフェクト実装）

このプロジェクトは本番サイト（https://www.onwords.co.jp/）を運用している株式会社Onwordsからの正式な依頼です。

## 基本方針

**ピクセルパーフェクトな再現が必須**

- STUDIOサイトのすべての要素を完全にコピーする
- 「おそらくこうだろう」という推測は一切禁止
- Chrome DevTools MCPを使用して、すべてのプロパティを正確に抽出する
- アニメーション、トランジション、余白、レイアウトプロパティを完璧に再現する

## Chrome DevTools MCPでの抽出項目

以下のすべてのプロパティを抽出してください：

### 1. レイアウトプロパティ
- `display`, `flex-direction`, `align-items`, `justify-content`
- `position`, `top`, `right`, `bottom`, `left`
- `width`, `height`, `max-width`, `max-height`

### 2. ボックスモデル
- `margin` (上下左右すべて)
- `padding` (上下左右すべて)
- `border`, `border-radius`

### 3. タイポグラフィ（最重要）
- `font-size`, `font-weight`, `font-family` - **絶対に正確に合わせる**
- `line-height`, `letter-spacing` - **1px単位で正確に合わせる**
- `text-align`, `text-decoration`
- **注意**: 見た目が似ていても、font-size/font-weight/line-heightが1pxでも違えば必ず修正すること

### 4. 色とビジュアル
- `color`, `background`, `background-color`
- `opacity`
- グラデーション（`linear-gradient`, `radial-gradient`）

### 5. アニメーションとトランジション（最重要）
- `transition` (すべてのプロパティ)
- `transition-duration` (ミリ秒単位で正確に)
- `transition-timing-function` (cubic-bezier値を含む)
- `transition-property` (何がトランジションするか)
- `animation`, `animation-duration`, `animation-timing-function`

### 6. ホバー状態
- 通常状態とホバー状態の両方を確認
- `:hover` 時に変更されるすべてのプロパティ

## 抽出用のJavaScriptスクリプト例

```javascript
// Chrome DevTools MCPでevaluate_scriptを使用
// 通常状態の抽出
() => {
  const element = document.querySelector('.header__nav-link--contact');
  const styles = window.getComputedStyle(element);

  return {
    // レイアウト
    display: styles.display,
    alignItems: styles.alignItems,
    justifyContent: styles.justifyContent,

    // ボックスモデル
    padding: styles.padding,
    margin: styles.margin,
    borderRadius: styles.borderRadius,

    // タイポグラフィ
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight,

    // 色
    color: styles.color,
    background: styles.background,
    backgroundColor: styles.backgroundColor,

    // アニメーション
    opacity: styles.opacity,
    transition: styles.transition,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction
  };
}
```

## 実装例：お問い合わせボタン（完全コピー）

**STUDIOサイトから抽出したすべてのプロパティ**:

```css
/* 通常状態 - すべてのプロパティを明示的に指定 */
.header__nav-link--contact {
  /* レイアウト */
  display: flex;
  align-items: center;
  justify-content: center;

  /* ボックスモデル */
  padding: 10px 16px;
  margin: 0;
  border-radius: 4px;

  /* タイポグラフィ */
  font-size: 16px;
  font-weight: 400;
  line-height: 16px;

  /* 色 */
  color: #333333; /* rgb(51, 51, 51) */
  background: #e74a4a; /* rgb(231, 74, 74) - 通常は赤ベタ塗り */

  /* アニメーション - STUDIO サイトから正確にコピー */
  opacity: 1;
  transition: all 0.3s cubic-bezier(0.4, 0.4, 0, 1);
}

/* ホバー状態 - 変更されるプロパティのみ */
.header__nav-link--contact:hover {
  opacity: 1;
  color: #ffffff; /* rgb(255, 255, 255) */
  background: linear-gradient(90deg, rgb(230, 1, 18) 0%, rgb(238, 156, 23) 51%, rgb(248, 82, 30) 100%);

  /* ホバー時のトランジション - STUDIO サイトで指定されているもの */
  transition-duration: 400ms; /* 0.4s - 正確に */
  transition-timing-function: ease-in-out;
}
```

## 重要なポイント

1. **すべてのプロパティを抽出**
   - 視覚的に見えるものだけでなく、レイアウトプロパティも含む
   - `opacity: 1` のように、デフォルト値でも明示的に指定されている場合は記述する

2. **トランジションタイミングを正確に**
   - ミリ秒単位で正確に（例: `400ms` を `0.4s` にしない）
   - `cubic-bezier` の値を正確にコピー

3. **グラデーションを正確に**
   - カラーストップの位置（`0%`, `51%`, `100%`）を正確に
   - RGB値をそのまま使用

4. **コメントで説明を追加**
   - 通常状態とホバー状態を明記
   - STUDIOサイトから取得したことを記載（例: `/* from STUDIO site (完全コピー) */`）

5. **タイポグラフィは1px単位で正確に合わせる（最重要）**
   - `font-size`, `font-weight`, `line-height` は絶対に正確に合わせる
   - 見た目が似ていても、1pxでも違えば必ず修正すること
   - 特に `line-height` は見落としやすいので注意
   - 例: 16px/400/16px と 14px/500/24.5px は見た目が似ていても全く違う

## 禁止事項

❌ **絶対にやってはいけないこと：**
- 一部のプロパティだけを抽出して「だいたい同じ」で済ませる
- トランジションタイミングを適当に設定する（例: 400ms → 500ms）
- グラデーションの色やストップ位置を変更する
- レイアウトプロパティを省略する
- **font-size, font-weight, line-heightを目視だけで判断して推測する**
- **「見た目が似てるからこれでいいだろう」と妥協する**

✅ **必ずやること：**
- Chrome DevTools MCPで**すべての**計算済みスタイルを抽出
- 通常状態とホバー状態の両方を確認
- アニメーション・トランジションを完全に再現
- **font-size, font-weight, line-heightを必ず計算済みスタイルから正確に取得**
- 実装後、ローカル環境でSTUDIOサイトと並べて比較検証
