# MVセクション - CSSスタイル

抽出日: 2025-11-16
URL: https://www.onwords.co.jp/contact

## デスクトップ（デフォルト）

### 外側ラッパー

```css
.contact-hero-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 1188px;
  max-width: 100%;
  margin: 0 0 40px;
  padding: 0;
  background-color: transparent;
}
```

### 画像コンテナ

```css
.contact-hero {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 1124px;
  height: 320px;
  border-radius: 20px;
  position: relative;
  overflow: visible;
  background-color: transparent;
}

/* 背景画像（疑似要素） */
.contact-hero::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 1124px;
  height: 320px;
  background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/contact/hero-bg.jpg");
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  border-radius: 20px;
  z-index: -2;
  opacity: 1;
}
```

### ラベル（Contact）

```css
.contact-hero__label {
  font-family: "Noto Sans JP", sans-serif;
  font-size: 20px;
  font-weight: 500;
  line-height: 20px;
  letter-spacing: 0.6px;
  color: #ffffff;
  text-align: center;
  margin: 0;
  padding: 0;
  position: relative;
  z-index: 1;
}
```

### タイトル（お問い合わせ）

```css
.contact-hero__title {
  font-family: "Noto Sans JP", sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 64px;
  letter-spacing: normal;
  color: #ffffff;
  text-align: center;
  margin: 0;
  padding: 0;
  position: relative;
  z-index: 1;
}
```

### オーバーレイ

```css
.contact-hero__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 1124px;
  height: 320px;
  background-color: rgba(73, 58, 44, 0.6);
  opacity: 1;
  z-index: 0;
  border-radius: 20px;
}
```

## タブレット（max-width: 1140px）

```css
@media (max-width: 1140px) {
  .contact-hero-wrapper {
    width: 100%;
  }

  .contact-hero {
    width: 100%;
  }

  .contact-hero::before {
    width: 100%;
  }

  .contact-hero__overlay {
    width: 100%;
  }
}
```

## スマホ（max-width: 767px）

```css
@media (max-width: 767px) {
  .contact-hero-wrapper {
    margin: 0 0 32px;
    padding: 0 16px;
  }

  .contact-hero {
    height: 240px;
    border-radius: 12px;
  }

  .contact-hero::before {
    height: 240px;
    border-radius: 12px;
  }

  .contact-hero__label {
    font-size: 16px;
    line-height: 16px;
    letter-spacing: 0.48px;
  }

  .contact-hero__title {
    font-size: 28px;
    line-height: 44.8px;
  }

  .contact-hero__overlay {
    height: 240px;
    border-radius: 12px;
  }
}
```

## 実装メモ

### 重要なポイント

1. **背景画像**: ::before疑似要素で実装し、z-index: -2で最背面に配置
2. **オーバーレイ**: 茶色の半透明（rgba(73, 58, 44, 0.6)）でz-index: 0
3. **テキスト**: z-index: 1でオーバーレイより前面に配置
4. **角丸**: デスクトップは20px、スマホは12px
5. **高さ**: デスクトップは320px、スマホは240px
6. **余白**: CLAUDE.mdのルールに従い、max-width + margin: 0 auto + padding: 0 16px パターンを使用

### レスポンシブ対応

- **タブレット**: 幅を100%に変更
- **スマホ**: 高さ、フォントサイズ、角丸を調整
