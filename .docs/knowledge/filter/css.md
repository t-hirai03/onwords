# Filter Section - CSS

https://www.onwords.co.jp/knowledge より抽出

## コンテナ (.filter-container)

```css
.filter-container {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 20px;
  padding: 10px;
  margin: 0;
  list-style: none;
}
```

## リストアイテム (.filter-item)

```css
.filter-item {
  display: flex;
  flex-direction: column;
  justify-content: normal;
  align-items: center;
  gap: 10px;
  max-width: calc(20% - 16px);
}
```

## テキストリンク (.filter-link)

```css
.filter-link {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  font-size: 20px;
  font-weight: 500;
  color: rgb(51, 51, 51);
  line-height: 28px;
  text-decoration: none;
  cursor: pointer;
}

@media screen and (max-width: 840px) {
  .filter-link {
    font-size: 18px;
    line-height: 25.2px;
  }
}
```

## アイコン (.filter-icon)

```css
.filter-icon {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.filter-icon .material-icons {
  color: rgb(226, 56, 56);
  font-size: 24px;
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
- **タブレット**: max-width: 1140px (変更なし)
- **モバイル**: max-width: 840px
