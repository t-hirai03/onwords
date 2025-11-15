# Company Info Section - CSS

https://www.onwords.co.jp/company より抽出

## セクション全体 (.company-info)

```css
.company-info {
  display: flex;
  flex-direction: column;
  gap: normal;
  padding: 90px 0 0;
  margin: 0;
  max-width: 100%;
}
```

## ヘッダー (.company-info__header)

```css
.company-info__header {
  display: flex;
  flex-direction: column;
  gap: 2px;
  align-items: center;
  margin-bottom: 20px;
}
```

## ラベル (.company-info__label)

```css
.company-info__label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  margin: 0;
}

@media screen and (max-width: 375px) {
  .company-info__label {
    font-size: 15px;
  }
}
```

## タイトル (.company-info__title)

```css
.company-info__title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .company-info__title {
    font-size: 32px;
    line-height: 51.2px;
  }
}
```

## コンテンツ (.company-info__content)

```css
.company-info__content {
  display: flex;
  flex-direction: column;
  gap: normal;
  max-width: 90%;
  margin: 0 auto;
}
```

## 行 (.company-info__row)

```css
.company-info__row {
  display: flex;
  flex-direction: row;
  gap: normal;
  border-bottom: 1px solid rgb(238, 238, 238);
  padding: 0;
}

@media screen and (max-width: 375px) {
  .company-info__row {
    flex-direction: column;
    gap: normal;
  }
}
```

## 行ラベル (.company-info__row-label)

```css
.company-info__row-label {
  font-size: 16px;
  font-weight: 400;
  color: rgb(51, 51, 51);
  width: 240px;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .company-info__row-label {
    width: auto;
  }
}
```

## 行コンテンツ (.company-info__row-content)

```css
.company-info__row-content {
  font-size: 18.72px;
  font-weight: 400;
  color: rgb(51, 51, 51);
  line-height: 26.208px;
  margin: 0;
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **モバイル**: max-width: 375px

## 注意

- 行は横並び（flex-direction: row）がデフォルト
- モバイルでは縦並び（flex-direction: column）に切り替わる
- 各行の下に1pxのボーダーが入る（rgb(238, 238, 238)）
