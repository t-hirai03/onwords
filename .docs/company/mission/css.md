# Mission Section - CSS

https://www.onwords.co.jp/company より抽出

## セクション全体 (.mission)

```css
.mission {
  display: flex;
  flex-direction: column;
  gap: normal;
  padding: 90px 40px 30px;
  margin: 0;
  background-color: transparent; /* 背景は親要素またはbackground-imageで管理 */
  border-radius: 0;
  min-height: auto;
}

@media screen and (max-width: 375px) {
  .mission {
    padding: 90px 40px 30px;
  }
}
```

## ヘッダー (.mission__header)

```css
.mission__header {
  display: flex;
  flex-direction: column;
  gap: 2px;
  align-items: center;
  margin-bottom: 20px;
}
```

## ラベル (.mission__label)

```css
.mission__label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  letter-spacing: normal;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .mission__label {
    font-size: 15px;
  }
}
```

## タイトル (.mission__title)

```css
.mission__title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .mission__title {
    font-size: 32px;
    line-height: 51.2px;
  }
}
```

## コンテンツ (.mission__content)

```css
.mission__content {
  display: flex;
  flex-direction: column;
  gap: 10px;
  align-items: center;
  margin-bottom: 0;
}
```

## メインタイトル (.mission__main-title)

```css
.mission__main-title {
  font-size: 32px;
  font-weight: 700;
  color: rgba(0, 0, 0, 0); /* グラデーションで表示 */
  line-height: 44.8px;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .mission__main-title {
    font-size: 24px;
    line-height: 33.6px;
  }
}
```

## サブタイトル (.mission__sub-title)

```css
.mission__sub-title {
  font-size: 24px;
  font-weight: 400;
  color: rgb(51, 51, 51);
  line-height: 33.6px;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .mission__sub-title {
    font-size: 18px;
    line-height: 25.2px;
  }
}
```

## 説明文 (.mission__desc-text)

```css
.mission__desc-text {
  font-size: 20px;
  line-height: 28px;
  color: rgb(51, 51, 51);
  margin: 0;
  text-align: center;
}

@media screen and (max-width: 375px) {
  .mission__desc-text {
    font-size: 16px;
    line-height: 22.4px;
  }
}
```

## ボタン (.mission__button)

```css
.mission__button {
  padding: 10px 16px;
  background-color: transparent;
  color: rgb(51, 51, 51);
  font-size: 16px;
  font-weight: 400;
  border-radius: 24px;
  border: 0px none rgb(51, 51, 51);
  text-decoration: none;
  display: inline-block;
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **モバイル**: max-width: 375px

## 注意

- メインタイトルの「もっと楽しい日本に」は、実際には赤いグラデーションが適用されています（color: rgba(0, 0, 0, 0)）
- 背景色は本番サイトでは赤系のグラデーション背景が設定されています
