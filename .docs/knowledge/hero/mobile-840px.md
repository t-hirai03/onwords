# Hero Section - Mobile (max-width: 840px)

抽出元: https://www.onwords.co.jp/knowledge/
適用条件: @media screen and (max-width: 840px)

## コンテナ

```css
.knowledge-hero {
  padding: 20px 0;
  margin: 0;
  max-width: 100%;
  border-radius: 0;
}
```

## ラベル（Knowledge）

```css
.knowledge-hero__label {
  font-size: 16px;
  line-height: 16px;
  letter-spacing: 0.48px;
}
```

## タイトル（ナレッジ）

```css
.knowledge-hero__title {
  font-size: 28px;
  line-height: 44.8px;
}
```

## 変更点（デスクトップとの差異）

**コンテナ:**
- `padding`: `0` → `20px 0`
- `margin`: `20px 32px 30px` → `0`
- `max-width`: `calc(100% - 64px)` → `100%`
- `border-radius`: `20px` → `0`

**ラベル:**
- `font-size`: `20px` → `16px`
- `line-height`: `20px` → `16px`
- `letter-spacing`: `0.6px` → `0.48px`

**タイトル:**
- `font-size`: `40px` → `28px`
- `line-height`: `64px` → `44.8px`
