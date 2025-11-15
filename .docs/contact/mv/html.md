# MVセクション - HTML構造

抽出日: 2025-11-16
URL: https://www.onwords.co.jp/contact

## 完全なHTML構造

```html
<div data-s-95bd5643-b376-405b-883f-df46a2fe2717="" class="sd appear">
  <div data-s-b961441a-40a6-4dff-9d47-a028b090760e=""
       data-r-0_0_3_01e11206-9969-435e-8c41-a1c4291d9d75_b961441a-40a6-4dff-9d47-a028b090760e=""
       class="image sd">
    <p data-s-2b5eef86-9fc0-46d5-b6bf-d397fd82520f=""
       data-r-0_0_0_3_01e11206-9969-435e-8c41-a1c4291d9d75_2b5eef86-9fc0-46d5-b6bf-d397fd82520f=""
       class="text sd appear">Contact</p>
    <h1 data-s-709037ca-8f77-4f62-b342-67316d010aa3=""
        data-r-1_0_0_3_01e11206-9969-435e-8c41-a1c4291d9d75_709037ca-8f77-4f62-b342-67316d010aa3=""
        class="text sd appear">お問い合わせ</h1>
    <div data-s-6ba96760-5673-4c04-987f-7d3338845fd5="" class="sd appear"></div>
    <style>
      .sd[data-r-0_0_3_01e11206-9969-435e-8c41-a1c4291d9d75_b961441a-40a6-4dff-9d47-a028b090760e]:before {
        background-image: url("https://images.unsplash.com/photo-1610375228550-d5cabc1d4090?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8NXx8ZnVqaXNhbnxlbnwwfHx8fDE3NTkxOTEwMDl8MA&ixlib=rb-4.1.0&q=80&w=1080")
      }
    </style>
  </div>
</div>
```

## 要素の階層構造

```
.contact-hero-wrapper [外側ラッパー]
  └── .contact-hero [画像コンテナ]
        ├── ::before [背景画像疑似要素]
        ├── .contact-hero__label [ラベル "Contact"]
        ├── .contact-hero__title [タイトル "お問い合わせ"]
        └── .contact-hero__overlay [オーバーレイ]
```

## WordPress実装用のHTML（BEMクラス）

```html
<div class="contact-hero-wrapper">
  <div class="contact-hero">
    <p class="contact-hero__label">Contact</p>
    <h1 class="contact-hero__title">お問い合わせ</h1>
    <div class="contact-hero__overlay"></div>
  </div>
</div>
```

## 実装メモ

- **背景画像**: ::before疑似要素で実装（CSSで設定）
- **オーバーレイ**: 茶色の半透明レイヤー（rgba(73, 58, 44, 0.6)）
- **テキスト**: ラベルとタイトルは白色で中央配置
- **z-index**: テキスト（z-index: 1）、オーバーレイ（z-index: 0）、背景画像（z-index: -2）
