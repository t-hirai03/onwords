# Documents Section - Desktop (1440px)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 1440px x 900px

## セクション全体

```css
.documents-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
  padding: 0;
  margin: 0 0 20px;
  max-width: 100%;
  width: 1200px;
}
```

## ラベル（DOCUMENTS）

```css
.documents-label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  line-height: 28px;
  letter-spacing: normal;
  margin: 0;
  text-align: center;
}
```

## タイトル（お役立ち資料）

```css
.documents-title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  letter-spacing: normal;
  margin: 0;
  text-align: center;
}
```

## リスト

```css
.documents-list {
  display: flex;
  flex-direction: column;
  gap: normal;
  padding: 0;
  margin: 0;
  max-width: 100%;
  width: 1280px;
}
```

## リストアイテム

```css
.documents-list__items {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 32px;
  justify-content: center;
  align-items: stretch;
}
```

## カード

```css
.documents-card {
  display: flex;
  flex-direction: column;
  width: 375.039px;
  max-width: calc(32% - 21.76px);
  background-color: rgb(255, 255, 255);
  border-radius: 8px;
  border: 1px solid rgb(235, 235, 235);
}
```

## 画像ラッパー

```css
.documents-card__image {
  display: flex;
  width: 373.039px;
  height: 200px;
  overflow: hidden;
  border-radius: 8px;
}
```

## コンテンツラッパー

```css
.documents-card__content {
  display: flex;
  flex-direction: column;
  gap: 16px;
  padding: 0;
}
```

## ヘッダーラッパー

```css
.documents-card__header {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
```

## 日付

```css
.documents-card__date {
  font-size: 14px;
  font-weight: 500;
  color: rgb(34, 34, 34);
  line-height: 24.5px;
  margin: 0;
}
```

## タイトル

```css
.documents-card__title {
  font-size: 20px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 32px;
  margin: 0;
}
```

## タグコンテナ

```css
.documents-card__tag-container {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
```

## タグ

```css
.documents-card__tag-text {
  font-size: 12px;
  font-weight: 500;
  color: rgb(34, 34, 34);
  line-height: 21px;
  margin: 0;
  padding: 0 6px;
  background-color: rgb(246, 246, 246);
  border-radius: 2px;
  display: flex;
  width: 12px;
}
```

