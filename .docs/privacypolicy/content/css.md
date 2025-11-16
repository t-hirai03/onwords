# コンテンツセクション - CSSスタイル

## 抽出元の計算済みスタイル

### .privacypolicy-content（外側コンテナ）

```css
.privacypolicy-content {
  background-color: transparent;
  padding: 0;
  margin: 0;
}
```

### .privacypolicy-content__inner（内側コンテナ）

```css
.privacypolicy-content__inner {
  max-width: 1000px;         /* コンテンツ幅 */
  margin: 0 auto;             /* 中央寄せ */
  padding: 0 16px;            /* 左右余白16px */
}
```

### 段落 (p)

```css
.privacypolicy-content__inner p {
  color: rgb(51, 51, 51);     /* #333333 */
  font-size: 16px;
  font-weight: 400;
  line-height: 22.4px;        /* 1.4倍 */
  margin-bottom: 10px;
  white-space: normal;
}
```

### リンク (a)

```css
.privacypolicy-content__inner a {
  color: rgb(51, 51, 51);
  text-decoration: underline;
  cursor: pointer;
  transition: color 0.3s ease;
}

.privacypolicy-content__inner a:hover {
  color: rgb(0, 102, 204);    /* ホバー時の色変更 */
}

.privacypolicy-content__inner a strong {
  font-weight: 700;
}
```

## レスポンシブ対応（全ブレークポイント）

### タブレット（max-width: 1140px）

```css
@media (max-width: 1140px) {
  .privacypolicy-content__inner {
    max-width: 900px;
  }

  .privacypolicy-content__inner p {
    font-size: 15px;
    line-height: 21px;
  }
}
```

### タブレット小（max-width: 840px）

```css
@media (max-width: 840px) {
  .privacypolicy-content__inner {
    max-width: 100%;
  }

  .privacypolicy-content__inner p {
    font-size: 14px;
    line-height: 19.6px;
  }
}
```

### スマホ（max-width: 767px）

```css
@media (max-width: 767px) {
  .privacypolicy-content__inner {
    padding: 0 16px;           /* 左右余白16px */
  }

  .privacypolicy-content__inner p {
    font-size: 14px;
    line-height: 19.6px;
    margin-bottom: 8px;
  }
}
```

### スマホ小（max-width: 540px）

```css
@media (max-width: 540px) {
  .privacypolicy-content__inner p {
    font-size: 13px;
    line-height: 18.2px;
  }
}
```

## 注意事項

- **余白管理**: 外側コンテナ（.privacypolicy-content__inner）で余白を管理
- **calc()は使用しない**: `max-width: 1000px` + `margin: 0 auto` + `padding: 0 16px` パターンで全デバイス対応
- **リンク**: 外部リンクには`target="_blank"` `rel="noopener noreferrer"`を追加
- **改行**: `<br>`タグをそのまま使用してOK
- **全角スペース**: インデント用の全角スペース（`　`）もそのまま使用
