# Documents Section - CSS

https://www.onwords.co.jp/knowledge より抽出

## セクション全体 (.documents-section)

```css
.documents-section {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 2px;
  margin: 0 0 20px;
  max-width: 100%;
}
```

## 見出しコンテナ (.documents-heading)

```css
.documents-heading {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 2px;
  margin: 0 0 20px;
}
```

## ラベル (.documents-label)

```css
.documents-label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  line-height: 28px;
  text-align: center;
  margin: 0;
}

@media screen and (max-width: 840px) {
  .documents-label {
    font-size: 15px;
    line-height: 26.25px;
  }
}
```

## タイトル (.documents-title)

```css
.documents-title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  text-align: center;
  margin: 0;
}

@media screen and (max-width: 840px) {
  .documents-title {
    font-size: 32px;
    line-height: 51.2px;
  }
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **タブレット**: max-width: 1140px (変更なし)
- **モバイル**: max-width: 840px
