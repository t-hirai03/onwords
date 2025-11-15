# Columns Section - Mobile (500px以下)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 500px x 667px

## セクション全体

```css
.columns-section {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 32px;
  padding: 0 0 20px;
  margin: 0 40px;
  max-width: calc(90% - 80px);
}
```

## ラベル（COLUMNS）

```css
.columns-label {
  font-size: 15px;
  line-height: 26.25px;
}
```

## タイトル（記事一覧）

```css
.columns-title {
  font-size: 32px;
  line-height: 51.2px;
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
  margin: 0 20px;
  max-width: calc(100% - 40px);
  width: calc(100% - 40px);
}
```

## カード

```css
.columns-card {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin: 0;
  background-color: rgb(255, 255, 255);
  border-radius: 8px;
  border: 1px solid rgb(235, 235, 235);
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

## コンテンツラッパー

```css
.columns-card__content {
  display: flex;
  flex-direction: column;
  gap: 4px;
  padding: 20px 0 0;
}
```

## ヘッダーラッパー

```css
.columns-card__header {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
```

## 日付

```css
.columns-card__date {
  font-size: 13px;
  font-weight: 500;
  color: rgb(34, 34, 34);
  line-height: 22.75px;
  margin: 0;
}
```

## タイトル

```css
.columns-card__title {
  font-size: 18px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 28.8px;
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

## 変更点（タブレットとの差異）

- ラベル: `font-size: 15px`, `line-height: 26.25px`
- タイトル: `font-size: 32px`, `line-height: 51.2px`
- リストアイテム: `margin: 0 20px`, `max-width: calc(100% - 40px)`, `width: calc(100% - 40px)`
- コンテンツ: `gap: 4px`
- ヘッダー: `gap: 2px`
