# Columns Section - Tablet (768px)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 768px x 1024px

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

## カード

```css
.columns-card {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 100%;
  background-color: rgb(255, 255, 255);
  border-radius: 8px;
  border: 1px solid rgb(235, 235, 235);
}
```

## 画像ラッパー

```css
.columns-card__image {
  width: 100%;
  height: 200px;
  overflow: hidden;
  border-radius: 8px;
}
```

## コンテンツラッパー

```css
.columns-card__content {
  gap: 0;
  padding: 20px 0 0;
}
```

## 日付

```css
.columns-card__date {
  font-size: 13px;
  line-height: 22.75px;
}
```

## タイトル

```css
.columns-card__title {
  font-size: 18px;
  line-height: 28.8px;
}
```

## 変更点（デスクトップとの差異）

- セクション: `flex-direction: column`, `gap: 32px`, `max-width: calc(90% - 80px)`
- カード: `width: 100%`, `max-width: 100%`（横1列表示）
- 日付: `font-size: 13px`, `line-height: 22.75px`
- タイトル: `font-size: 18px`, `line-height: 28.8px`
