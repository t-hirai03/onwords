# Access Section - HTML

```html
<section class="access">
  <div class="access__header">
    <p class="access__label">ACCESS</p>
    <h2 class="access__title">アクセス</h2>
  </div>

  <iframe
    src="https://www.google.com/maps/embed?pb=..."
    class="access__map"
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>
```

## 構造

- `access` - セクション全体
  - `access__header` - ヘッダー（ラベル + タイトル）
  - `access__map` - Google Maps埋め込み（iframe）

## Google Maps URL

本番サイトのGoogle Maps埋め込みURLを使用します。
住所: 東京都港区虎ノ門３丁目１７−１ Tokyu Reit 虎ノ門ビル ６Ｆ
