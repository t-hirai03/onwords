# MVセクション - HTML構造

## 完全なHTML構造（STUDIO）

```html
<div data-s-95bd5643-b376-405b-883f-df46a2fe2717="" class="sd appear">
  <div data-s-b961441a-40a6-4dff-9d47-a028b090760e=""
       data-r-0_0_3_1b87f9ae-8be7-4065-bbed-1e8f7a7d481d_b961441a-40a6-4dff-9d47-a028b090760e=""
       class="image sd">
    <p data-s-2b5eef86-9fc0-46d5-b6bf-d397fd82520f=""
       data-r-0_0_0_3_1b87f9ae-8be7-4065-bbed-1e8f7a7d481d_2b5eef86-9fc0-46d5-b6bf-d397fd82520f=""
       class="text sd appear">Privacy Policy</p>
    <h1 data-s-709037ca-8f77-4f62-b342-67316d010aa3=""
        data-r-1_0_0_3_1b87f9ae-8be7-4065-bbed-1e8f7a7d481d_709037ca-8f77-4f62-b342-67316d010aa3=""
        class="text sd appear">プライバシーポリシー</h1>
    <div data-s-6ba96760-5673-4c04-987f-7d3338845fd5="" class="sd appear"></div>
    <style>
      .sd[data-r-0_0_3_1b87f9ae-8be7-4065-bbed-1e8f7a7d481d_b961441a-40a6-4dff-9d47-a028b090760e]:before {
        background-image: url("https://storage.googleapis.com/studio-design-asset-files/projects/brqEMjnwq4/s-1376x320_v-fms_webp_15cd0a94-3531-4853-9edf-2d3eae3647ec.webp")
      }
    </style>
  </div>
</div>
```

## 簡略化したHTML構造（WordPress実装用）

```html
<section class="privacypolicy-hero-wrapper">
  <div class="privacypolicy-hero">
    <p class="privacypolicy-hero__label">Privacy Policy</p>
    <h1 class="privacypolicy-hero__title">プライバシーポリシー</h1>
  </div>
</section>
```

## 要素の説明

### 外側ラッパー (.privacypolicy-hero-wrapper)
- 余白管理用のラッパー要素
- `max-width: 1312px`（コンテンツ幅1280px + 左右余白16px）
- `margin: 0 auto 40px`（中央寄せ、下余白40px）
- `padding: 0 16px`（左右余白16px）

### ヒーローセクション (.privacypolicy-hero)
- 背景画像を持つメインコンテナ
- 背景画像は`::before`疑似要素で実装
- `height: 320px`
- `border-radius: 20px`

### ラベル (.privacypolicy-hero__label)
- 英語ラベル "Privacy Policy"
- 白文字、フォントサイズ20px
- 中央揃え

### タイトル (.privacypolicy-hero__title)
- 日本語タイトル "プライバシーポリシー"
- 白文字、フォントサイズ40px、太字
- 中央揃え

## 背景画像

画像パス（WordPress実装時）:
```php
<?php echo get_template_directory_uri(); ?>/assets/images/privacypolicy/mv/s-1376x320_v-fms_webp_15cd0a94-3531-4853-9edf-2d3eae3647ec.webp
```

元の画像URL（STUDIO）:
```
https://storage.googleapis.com/studio-design-asset-files/projects/brqEMjnwq4/s-1376x320_v-fms_webp_15cd0a94-3531-4853-9edf-2d3eae3647ec.webp
```
