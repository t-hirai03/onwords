# Filter Section - Desktop (1440px)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 1440px x 900px

## セクション全体のコンテナ

```css
.filter-container {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 20px;
  padding: 10px;
  margin: 0;
  max-width: 100%;
  width: 1152px;
}
```

## フィルターリストアイテム（各フィルター項目）

```css
.filter-item {
  display: flex;
  flex-direction: column;
  justify-content: normal;
  align-items: center;
  gap: 10px;
  padding: 0;
  margin: 0;
  max-width: calc(20% - 16px);
  width: 210.398px;
}
```

## テキストリンク（記事一覧、ウェビナー情報、お役立ち資料）

```css
.filter-text-link {
  display: flex;
  font-size: 20px;
  font-weight: 500;
  color: rgb(51, 51, 51);
  line-height: 28px;
  letter-spacing: normal;
  text-decoration: none;
  padding: 0;
  background-color: transparent;
  border-radius: 0;
}
```

## アイコンリンク（Font Awesome）

```css
.filter-icon-link {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 21px;
  height: 24px;
  font-size: 24px;
  padding: 0;
  margin: 0;
  background-color: transparent;
  border-radius: 0;
}
```

**HTML構造:**
```html
<a href="#columns" class="icon fa-solid fa-angles-down">
  <!-- Font Awesome アイコンは::before疑似要素で表示 -->
</a>
```

**Font Awesome設定:**
- クラス: `fa-solid fa-angles-down`
- ::before疑似要素:
  - font-family: "Font Awesome 6 Free"
  - font-weight: 900
  - font-size: 24px

