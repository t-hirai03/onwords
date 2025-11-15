# MVセクション - CSSスタイル

## 抽出元の計算済みスタイル

### .privacypolicy-hero-wrapper（外側ラッパー）
```css
.privacypolicy-hero-wrapper {
  max-width: 1312px;        /* 1280px + 16px × 2 */
  margin: 0 auto 40px;       /* 中央寄せ、下余白40px */
  padding: 0 16px;           /* 左右余白16px */
}
```

### .privacypolicy-hero（ヒーローセクション）
```css
.privacypolicy-hero {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 320px;
  border-radius: 20px;
  overflow: hidden;
}

/* 背景画像（::before疑似要素） */
.privacypolicy-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/privacypolicy/mv/s-1376x320_v-fms_webp_15cd0a94-3531-4853-9edf-2d3eae3647ec.webp');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -1;
}
```

### .privacypolicy-hero__label（ラベル）
```css
.privacypolicy-hero__label {
  color: rgb(255, 255, 255);
  font-size: 20px;
  font-weight: 500;
  letter-spacing: 0.6px;
  line-height: 20px;
  text-align: center;
  margin-bottom: 0;
}
```

### .privacypolicy-hero__title（タイトル）
```css
.privacypolicy-hero__title {
  color: rgb(255, 255, 255);
  font-size: 40px;
  font-weight: 700;
  letter-spacing: normal;
  line-height: 64px;
  text-align: center;
  margin: 0;
}
```

## レスポンシブ対応（全ブレークポイント）

### タブレット（max-width: 1140px）
```css
@media (max-width: 1140px) {
  .privacypolicy-hero {
    height: 280px;
  }

  .privacypolicy-hero__label {
    font-size: 18px;
  }

  .privacypolicy-hero__title {
    font-size: 36px;
    line-height: 56px;
  }
}
```

### タブレット小（max-width: 840px）
```css
@media (max-width: 840px) {
  .privacypolicy-hero {
    height: 240px;
  }

  .privacypolicy-hero__label {
    font-size: 16px;
  }

  .privacypolicy-hero__title {
    font-size: 32px;
    line-height: 48px;
  }
}
```

### スマホ（max-width: 767px）
```css
@media (max-width: 767px) {
  /* 余白と角丸をなくす */
  .privacypolicy-hero-wrapper {
    padding: 0;
    margin-bottom: 32px;
  }

  .privacypolicy-hero {
    height: 200px;
    border-radius: 0;
  }

  .privacypolicy-hero__label {
    font-size: 14px;
    line-height: 18px;
  }

  .privacypolicy-hero__title {
    font-size: 28px;
    line-height: 40px;
  }
}
```

### スマホ小（max-width: 540px）
```css
@media (max-width: 540px) {
  .privacypolicy-hero {
    height: 180px;
  }

  .privacypolicy-hero__label {
    font-size: 12px;
  }

  .privacypolicy-hero__title {
    font-size: 24px;
    line-height: 36px;
  }
}
```

## 注意事項

- **余白管理**: 外側ラッパー（.privacypolicy-hero-wrapper）で余白を管理し、内側（.privacypolicy-hero）には余白を設定しない
- **背景画像**: `::before`疑似要素で実装し、z-index: -1で背景に配置
- **レスポンシブ**: スマホ（767px以下）では余白と角丸をなくして画面いっぱいに表示
- **calc()は使用しない**: `max-width: 1312px` + `margin: 0 auto` + `padding: 0 16px` パターンで全デバイス対応
