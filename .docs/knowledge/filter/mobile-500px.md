# Filter Section - Mobile (500px以下)

抽出元: https://www.onwords.co.jp/knowledge/
画面サイズ: 500px x 667px

## セクション全体のコンテナ

```css
.filter-container {
  display: flex;
  flex-direction: column; /* デスクトップは row */
  justify-content: center;
  align-items: center;
  gap: 20px;
  padding: 10px;
  margin: 0;
  max-width: 100%;
  width: 436.5px;
}
```

## フィルターリストアイテム（各フィルター項目）

```css
.filter-item {
  display: flex;
  flex-direction: row; /* デスクトップは column */
  justify-content: normal;
  align-items: center;
  gap: 10px;
  padding: 0;
  margin: 0;
  max-width: 100%;
  width: 80px;
}
```

## テキストリンク（記事一覧、ウェビナー情報、お役立ち資料）

```css
.filter-text-link {
  font-size: 14px;
  font-weight: 500;
  color: rgb(51, 51, 51);
  line-height: 19.6px;
}
```

## アイコンリンク（Font Awesome）

```css
.filter-icon-link {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 14px;
  height: 16px;
  font-size: 16px;
}
```

## 変更点（タブレットとの差異）

**コンテナ:**
- `flex-direction`: `row` → `column`（縦並びに変更）
- `width`: `677.695px` → `436.5px`

**フィルターアイテム:**
- `flex-direction`: `column` → `row`（横並びに変更）
- `width`: `115.539px` → `80px`
- `max-width`: `calc(20% - 16px)` → `100%`

**テキストリンク:**
- `font-size`: `18px` → `14px`
- `line-height`: `25.2px` → `19.6px`

**アイコンリンク:**
- `width`: `21px` → `14px`
- `height`: `24px` → `16px`
- `font-size`: `24px` → `16px`

## レイアウトの変化

モバイルでは、各フィルターアイテムが「テキスト + アイコン」の横並びになり、それらのアイテムが縦に並ぶレイアウトに変更されます。

