# Table of Contents (TOC) - CSS

https://www.onwords.co.jp/knowledge/column/inbound-ad より抽出

## 目次コンテナ (.toc)

```css
.toc {
  padding: 24px 24px 8px;
  background-color: rgb(245, 245, 245);
  border-radius: 2px;
  font-size: 14px;
  font-weight: 300;
  line-height: 15.4px;
  color: rgb(97, 97, 97);
}
```

## リスト (.toc_list)

```css
.toc_list {
  margin: 0;
  padding: 0;
  list-style: none;
}
```

## 目次項目 (.toc_item)

```css
.toc_item {
  margin: 0 0 16px;
  padding: 0 0 0 32px;
  list-style: none;
}
```

## h2レベル項目 (.toc_item--2)

```css
.toc_item--2 {
  padding: 0 0 0 32px;
}
```

## h3レベル項目 (.toc_item--3)

```css
.toc_item--3 {
  padding: 0 0 0 64px;
}
```

## リンク (.toc_item a)

```css
.toc_item a {
  font-size: 14px;
  font-weight: 300;
  line-height: 15.4px;
  color: rgb(97, 97, 97);
  text-decoration: none;
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px) - 上記スタイル
- **タブレット**: 768px - 変更なし
- **モバイル**: 375px - 変更なし

全てのブレークポイントで同じスタイルが適用されます。
