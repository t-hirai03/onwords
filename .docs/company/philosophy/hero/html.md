# Hero Section - HTML構造

## 概要

企業理念ページのヒーローセクション。背景画像・英語ラベル・日本語タイトルで構成。

## HTML構造

```html
<div class="philosophy-hero-wrapper">
  <div class="philosophy-hero">
    <p class="philosophy-hero__label">Company Philosophy</p>
    <h1 class="philosophy-hero__title">企業理念</h1>
  </div>
</div>
```

## 要素の説明

### `.philosophy-hero-wrapper`

- ヒーローセクション全体のラッパー
- フレックスコンテナ（縦方向中央配置）
- 下マージンで次のセクションとの間隔を確保

### `.philosophy-hero`

- 背景画像を持つメインコンテナ
- `::before` 疑似要素で背景画像を表示
- フレックスコンテナ（縦方向、中央配置、4pxのgap）
- 角丸（デスクトップ・タブレットのみ、モバイルは0）

### `.philosophy-hero__label`

- 英語ラベル "Company Philosophy"
- 白文字、letter-spacing: 0.6px

### `.philosophy-hero__title`

- 日本語タイトル "企業理念"
- h1タグ
- 白文字、太字、大きめのフォントサイズ

## 背景画像

- ダウンロード済み: `background.jpg`
- 元URL: <https://images.unsplash.com/photo-1543269865-cbf427effbad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MTh8fG9mZmljZSUyMG1lZXRpbmd8ZW58MHx8fHwxNzU5MTkwODY1fDA&ixlib=rb-4.1.0&q=80&w=1080>
- background-size: cover
- background-position: 50% 50%
