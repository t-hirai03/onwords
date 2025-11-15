# Access Section - CSS

https://www.onwords.co.jp/company より抽出

## セクション全体 (.access)

```css
.access {
  display: flex;
  flex-direction: column;
  gap: normal;
  padding: 90px 0;
  margin: 0;
  max-width: 100%;
}
```

## ヘッダー (.access__header)

```css
.access__header {
  display: flex;
  flex-direction: column;
  gap: 2px;
  align-items: center;
  margin-bottom: 20px;
}
```

## ラベル (.access__label)

```css
.access__label {
  font-size: 16px;
  font-weight: 600;
  color: rgb(230, 1, 18);
  margin: 0;
}

@media screen and (max-width: 375px) {
  .access__label {
    font-size: 15px;
  }
}
```

## タイトル (.access__title)

```css
.access__title {
  font-size: 36px;
  font-weight: 700;
  color: rgb(34, 34, 34);
  line-height: 57.6px;
  margin: 0;
}

@media screen and (max-width: 375px) {
  .access__title {
    font-size: 32px;
    line-height: 51.2px;
  }
}
```

## マップ (.access__map)

```css
.access__map {
  width: 1280px;
  height: 569.758px;
  border: 0;
  margin: 0 auto;
}

@media screen and (max-width: 375px) {
  .access__map {
    width: 324px;
    height: 450.406px;
  }
}
```

## ブレークポイント

- **デスクトップ**: デフォルト (1440px)
  - マップ幅: 1280px
  - マップ高さ: 569.758px
- **モバイル**: max-width: 375px
  - マップ幅: 324px
  - マップ高さ: 450.406px

## 注意

- Google Maps埋め込みはiframeを使用
- レスポンシブでマップのサイズが変更される
- borderは0で設定
