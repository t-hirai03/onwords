# 記事本文 CSS

https://www.onwords.co.jp/case/retail-poc-strategy より抽出

## コンテナ

```css
/* デフォルト（デスクトップ） */
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] {
  max-width: calc(100% - 40px);
  width: 728px;
  margin: 28px 20px 0;
  padding: 0;
  display: block;
}

/* タブレット */
@media (max-width: 840px) {
  [data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] {
    max-width: 100%;
    margin: 10px 0 0;
  }
}

/* モバイル */
@media (max-width: 540px) {
  [data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] {
    margin: 0;
  }
}
```

## 大見出し（h2）

```css
/* デフォルト（デスクトップ） */
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] h2 {
  font-size: 24px;
  font-weight: 700;
  line-height: 38.4px;
  color: rgb(34, 34, 34);
  margin: 40px 0 24px;
  padding: 0 0 4px;
  border-bottom: 2px solid rgb(231, 74, 74);
}

/* タブレット */
@media (max-width: 840px) {
  [data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] h2 {
    font-size: 28px;
    line-height: 44.8px;
    margin: 40px 0 16px;
  }
}

/* モバイル */
@media (max-width: 540px) {
  [data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] h2 {
    font-size: 22px;
    line-height: 35.2px;
  }
}
```

## 中見出し（h3）

```css
/* デフォルト（デスクトップ） */
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] h3 {
  font-size: 20px;
  font-weight: 700;
  line-height: 30px;
  color: rgb(231, 74, 74);
  margin: 10px 0;
  padding: 0;
}

/* タブレット・モバイル */
@media (max-width: 840px) {
  [data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] h3 {
    font-size: 20px;
    line-height: 30px;
  }
}
```

## 小見出し（h4）

```css
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] h4 {
  font-size: 18px;
  font-weight: 700;
  line-height: 27px;
  color: rgb(255, 154, 154);
  margin: 10px 0;
  padding: 0;
}
```

## 段落（p）

```css
/* デフォルト（デスクトップ） */
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] p {
  font-size: 16px;
  font-weight: 400;
  line-height: 28.8px;
  color: rgb(34, 34, 34);
  margin: 20px 0;
}

/* モバイル */
@media (max-width: 540px) {
  [data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] p {
    font-size: 14px;
    line-height: 25.2px;
  }
}
```

## リスト（ul）

```css
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] ul {
  margin: 20px 0;
  padding: 10px 40px;
  list-style-type: none;
}

[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] li {
  font-size: 16px;
  font-weight: 400;
  line-height: 25.44px;
  color: rgb(34, 34, 34);
  margin: 10px 0;
  padding-left: 0;
  position: relative;
}

/* カスタムマーカー（赤い丸） */
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] li::before {
  content: "";
  display: inline-block;
  width: 6px;
  height: 6px;
  background-color: rgb(231, 74, 74);
  border-radius: 50%;
  margin-right: 10px;
  vertical-align: middle;
}
```

## 太字（strong）

```css
[data-s-cb6f14b5-017c-4be9-a52f-1818ad2def70] strong {
  font-weight: 700;
}
```

## 色の定義

| 要素 | カラーコード |
|-----|------------|
| テキスト（黒） | rgb(34, 34, 34) |
| h3見出し（赤） | rgb(231, 74, 74) |
| h4見出し（薄い赤） | rgb(255, 154, 154) |
| リストマーカー（赤） | rgb(231, 74, 74) |
| h2下線（赤） | rgb(231, 74, 74) |
