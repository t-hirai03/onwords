# Hero Section - CSS

https://www.onwords.co.jp/knowledge より抽出

## コンテナ (.hero-container)

```css
.hero-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 4px;
  padding: 0;
  margin: 20px 32px 30px;
  max-width: calc(100% - 64px);
  border-radius: 20px;
}

@media screen and (max-width: 1140px) {
  .hero-container {
    margin: 20px 0 0;
    max-width: 90%;
  }
}

@media screen and (max-width: 840px) {
  .hero-container {
    padding: 20px 0;
    margin: 0;
    max-width: 100%;
    border-radius: 0;
  }
}
```

## ラベル (.hero-label)

```css
.hero-label {
  font-size: 20px;
  font-weight: 500;
  color: rgb(0, 0, 0);
  line-height: 20px;
  letter-spacing: 0.6px;
  margin: 0;
  text-align: center;
}

@media screen and (max-width: 840px) {
  .hero-label {
    font-size: 16px;
    line-height: 16px;
    letter-spacing: 0.48px;
  }
}
```

## タイトル (.hero-title)

```css
.hero-title {
  font-size: 40px;
  font-weight: 700;
  color: rgb(0, 0, 0);
  line-height: 64px;
  letter-spacing: normal;
  margin: 0;
  text-align: center;
}

@media screen and (max-width: 840px) {
  .hero-title {
    font-size: 28px;
    line-height: 44.8px;
  }
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **タブレット**: max-width: 1140px
- **モバイル**: max-width: 840px
