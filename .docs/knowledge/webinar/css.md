# Webinar Section - CSS

https://www.onwords.co.jp/knowledge より抽出

## セクション全体 (.webinar-section)

```css
.webinar-section {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 2px;
  margin: 0 0 20px;
  max-width: 100%;
}
```

## 見出しコンテナ (.webinar-heading)

```css
.webinar-heading {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 2px;
  margin: 0 0 20px;
}
```

## ラベル (.webinar-label)

```css
.webinar-label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  line-height: 28px;
  text-align: center;
  margin: 0;
}

@media screen and (max-width: 840px) {
  .webinar-label {
    font-size: 15px;
    line-height: 26.25px;
  }
}
```

## タイトル (.webinar-title)

```css
.webinar-title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  text-align: center;
  margin: 0;
}

@media screen and (max-width: 840px) {
  .webinar-title {
    font-size: 32px;
    line-height: 51.2px;
  }
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **タブレット**: max-width: 1140px (変更なし)
- **モバイル**: max-width: 840px
