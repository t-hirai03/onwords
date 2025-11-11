# 記事ヘッダー CSS

https://www.onwords.co.jp/case/retail-poc-strategy より抽出

## タイトル（h1）

```css
/* デフォルト（デスクトップ） */
[data-s-5e124421-e81a-499b-9c4c-edac8e00e0fb] {
  font-size: 36px;
  font-weight: 700;
  line-height: 57.6px;
  color: rgb(34, 34, 34);
  margin: 0;
  text-align: left;
}

/* タブレット */
@media (max-width: 840px) {
  [data-s-5e124421-e81a-499b-9c4c-edac8e00e0fb] {
    font-size: 32px;
    line-height: 51.2px;
  }
}

/* モバイル */
@media (max-width: 540px) {
  [data-s-5e124421-e81a-499b-9c4c-edac8e00e0fb] {
    font-size: 24px;
    line-height: 38.4px;
  }
}
```

## メタ情報コンテナ

```css
[data-s-a84c0e23-ea79-47ee-9ee0-6674bb161192] {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-top: 24px;
}
```

## クライアント名

```css
/* クライアント名コンテナ */
[data-s-8ec5b71d-7210-4983-9d19-f3cfa6b77385] {
  display: flex;
  align-items: center;
}

/* クライアント名テキスト */
[data-s-8494bf58-fb49-4ab7-921e-f4e1973be9e7] {
  font-size: 18px;
  font-weight: 500;
  line-height: 31.5px;
  color: rgb(34, 34, 34);
  margin: 0;
  padding: 0;
}
```

## カテゴリリスト

```css
/* カテゴリリスト */
[data-s-99eb6741-9a20-4ac6-b3fd-6300cd64f2b4] {
  display: flex;
  flex-direction: row;
  gap: 5px;
  margin: 0;
  padding: 0;
  list-style: none;
}

/* カテゴリ項目 */
[data-s-5a443889-66b1-4564-b9d0-8abd845f72ed] {
  display: flex;
  list-style: none;
}

/* カテゴリテキスト */
[data-s-3678b3c8-10ba-4af7-97b4-d9864ba6aa31] {
  font-size: 12px;
  font-weight: 500;
  line-height: 21px;
  color: rgb(34, 34, 34);
  padding: 2px 6px;
  background-color: rgb(246, 246, 246);
  border-radius: 2px;
  margin: 0;
}
```

## 投稿日

```css
[data-s-96bad291-4461-4305-8f94-c85df93baa8b] {
  font-size: 14px;
  font-weight: 500;
  line-height: 24.5px;
  color: rgb(66, 66, 66);
  margin: 0;
}
```
