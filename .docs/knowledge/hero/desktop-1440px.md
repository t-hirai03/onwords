# Hero Section - Desktop (1440px)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 1440px x 900px

## コンテナ

```css
.knowledge-hero {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 4px;
  padding: 0;
  margin: 20px 32px 30px;
  max-width: calc(100% - 64px);
  border-radius: 20px;
}
```

## ラベル（Knowledge）

```css
.knowledge-hero__label {
  font-size: 20px;
  font-weight: 500;
  color: rgb(0, 0, 0);
  line-height: 20px;
  letter-spacing: 0.6px;
  margin: 0;
  text-align: center;
}
```

## タイトル（ナレッジ）

```css
.knowledge-hero__title {
  font-size: 40px;
  font-weight: 700;
  color: rgb(0, 0, 0);
  line-height: 64px;
  letter-spacing: normal;
  margin: 0;
  text-align: center;
}
```
