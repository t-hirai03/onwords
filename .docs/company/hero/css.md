# Hero Section - CSS

https://www.onwords.co.jp/company より抽出

## コンテナ (.company-hero)

```css
.company-hero {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0;
  margin: 0 0 40px;
  height: 320px;
  max-width: 100%;
  border-radius: 0;
  position: relative;
}

/* 背景画像 - ::before疑似要素 */
.company-hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("https://images.unsplash.com/photo-1560179707-f14e90ef3623?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8Mnx8Y29tcGFueXxlbnwwfHx8fDE3NTkxOTA2NDJ8MA&ixlib=rb-4.1.0&q=80&w=1080");
  background-size: cover;
  background-position: center;
  z-index: -1;
}

@media screen and (max-width: 840px) {
  .company-hero {
    margin: 0 0 50px;
    height: 208.797px;
    border-radius: 0;
  }
}
```

## ラベル (.company-hero__label)

```css
.company-hero__label {
  font-size: 20px;
  font-weight: 500;
  color: rgb(255, 255, 255);
  line-height: 20px;
  letter-spacing: 0.6px;
  margin: 0;
  text-align: center;
}

@media screen and (max-width: 840px) {
  .company-hero__label {
    font-size: 16px;
    line-height: 16px;
    letter-spacing: 0.48px;
  }
}
```

## タイトル (.company-hero__title)

```css
.company-hero__title {
  font-size: 40px;
  font-weight: 700;
  color: rgb(255, 255, 255);
  line-height: 64px;
  letter-spacing: normal;
  margin: 0;
  text-align: center;
}

@media screen and (max-width: 840px) {
  .company-hero__title {
    font-size: 28px;
    line-height: 44.8px;
  }
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **モバイル**: max-width: 840px
