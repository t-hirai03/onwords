# Columns Section - Desktop (1440px)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 1440px x 900px

## セクション全体

```css
.columns-section {
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  gap: normal;
  padding: 0;
  margin: 0 40px;
  max-width: calc(100% - 80px);
}
```

## 見出しコンテナ

```css
.columns-heading {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
  margin: 0 0 20px;
}
```

## ラベル（COLUMNS）

```css
.columns-label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  line-height: 28px;
  text-align: center;
  margin: 0;
}
```

## タイトル（記事一覧）

```css
.columns-title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  text-align: center;
  margin: 0;
}
```

## リスト

```css
.columns-list {
  display: flex;
  flex-direction: column;
  gap: normal;
  padding: 0;
  margin: 0 40px;
  max-width: calc(100% - 80px);
  width: calc(100% - 80px);
}
```

## リストアイテム

```css
.columns-item {
  display: flex;
  padding: 0;
  margin: 0;
  max-width: 100%;
  width: 100%;
}
```

## カード

```css
.columns-card {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  width: calc(32% - 21.76px);
  max-width: calc(32% - 21.76px);
  background-color: rgb(255, 255, 255);
  border-radius: 8px;
  border: 1px solid rgb(235, 235, 235);
  overflow: visible;
}
```

## 画像ラッパー

```css
.columns-card__image {
  display: flex;
  width: 100%;
  height: 200px;
  overflow: hidden;
  border-radius: 8px;
}
```

## 画像

```css
.columns-card__image img {
  width: 100%;
  height: auto;
  object-fit: fill;
}
```

## コンテンツラッパー

```css
.columns-card__content {
  display: flex;
  flex-direction: column;
  gap: 0;
  padding: 20px 0 0;
}
```

## ヘッダーラッパー

```css
.columns-card__header {
  display: flex;
  flex-direction: column;
  gap: 0;
}
```

## 日付

```css
.columns-card__date {
  font-size: 14px;
  font-weight: 500;
  color: rgb(34, 34, 34);
  line-height: 24.5px;
  margin: 0;
}
```

## タイトル

```css
.columns-card__title {
  font-size: 20px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 32px;
  margin: 0;
}
```

## タグ

```css
.columns-card__tag-text {
  font-size: 12px;
  font-weight: 500;
  color: rgb(34, 34, 34);
  line-height: 21px;
  margin: 0;
  padding: 0 6px;
  background-color: rgb(246, 246, 246);
  border-radius: 2px;
  display: flex;
  width: auto;
}
```

## すべて見るボタン

```css
.columns-view-all {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px 12px;
  margin-top: 0;
  background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
  border-radius: 0;
  text-decoration: none;
}

.columns-view-all__text {
  font-size: 16px;
  font-weight: 500;
  color: rgb(255, 255, 255);
  line-height: 28px;
}
```
