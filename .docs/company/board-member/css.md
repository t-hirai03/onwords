# Board Member Section - CSS

https://www.onwords.co.jp/company より抽出

## セクション全体 (.board-member)

```css
.board-member {
  display: flex;
  flex-direction: column;
  padding: 0 50px;
  margin: 0;
  max-width: 100%;
  background-color: transparent;
}

@media screen and (max-width: 840px) {
  .board-member {
    padding: 0;
  }
}

@media screen and (max-width: 375px) {
  .board-member {
    padding: 0;
  }
}
```

## ヘッダー (.board-member__header)

```css
.board-member__header {
  display: flex;
  flex-direction: column;
  gap: 2px;
  align-items: center;
  margin-bottom: 20px;
}
```

## ラベル (.board-member__label)

```css
.board-member__label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  letter-spacing: normal;
  margin: 0;
}

@media screen and (max-width: 840px) {
  .board-member__label {
    font-size: 15px;
  }
}
```

## タイトル (.board-member__title)

```css
.board-member__title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  margin: 0;
}

@media screen and (max-width: 840px) {
  .board-member__title {
    font-size: 32px;
    line-height: 51.2px;
  }
}
```

## カードコンテナ (.board-member__cards)

```css
.board-member__cards {
  display: flex;
  flex-direction: row;
  gap: normal;
  width: 1180px;
}

@media screen and (max-width: 840px) {
  .board-member__cards {
    width: 742.5px;
  }
}

@media screen and (max-width: 375px) {
  .board-member__cards {
    width: 324px;
  }
}
```

## カード (.board-member__card)

```css
.board-member__card {
  display: flex;
  flex-direction: row;
  gap: normal;
  padding: 40px;
  margin-bottom: 10px;
  width: 1160px;
}

@media screen and (max-width: 840px) {
  .board-member__card {
    flex-direction: row;
    padding: 40px;
    width: 722.5px;
  }
}

@media screen and (max-width: 375px) {
  .board-member__card {
    flex-direction: column;
    padding: 30px;
    width: 304px;
  }
}
```

## カード画像 (.board-member__card-image)

```css
.board-member__card-image {
  width: 432px;
  height: 223px;
  border-radius: 0;
  overflow: visible;
}

@media screen and (max-width: 840px) {
  .board-member__card-image {
    width: 257px;
    height: 223px;
  }
}

@media screen and (max-width: 375px) {
  .board-member__card-image {
    width: 146.398px;
    height: 236.797px;
  }
}
```

## カード名 (.board-member__card-name)

```css
.board-member__card-name {
  font-size: 20px;
  font-weight: 700;
  color: rgb(51, 51, 51);
  margin: 0 0 10px;
}
```

## カード役職 (.board-member__card-position)

```css
.board-member__card-position {
  font-size: 15px;
  font-weight: 400;
  color: rgb(51, 51, 51);
  margin: 0;
}
```

## カード経歴 (.board-member__card-bio)

```css
.board-member__card-bio {
  font-size: 20px;
  line-height: 20px;
  color: rgb(51, 51, 51);
  white-space: normal;
  margin: 0 0 10px;
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **タブレット**: max-width: 840px
- **モバイル**: max-width: 375px
