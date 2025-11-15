# Purpose Section - HTML構造

## 概要

パーパスセクション。「PURPOSE」ラベル、「パーパス」タイトル、英語テキスト、日本語テキストで構成。

## HTML構造

```html
<section class="philosophy-purpose">
  <div class="philosophy-purpose__inner">
    <div class="philosophy-purpose__header">
      <p class="philosophy-purpose__label">PURPOSE</p>
      <h2 class="philosophy-purpose__title">パーパス</h2>
    </div>
    <div class="philosophy-purpose__content">
      <p class="philosophy-purpose__text-en">Create growth and success for employees, customers, and communities</p>
      <p class="philosophy-purpose__text-ja">従業員、顧客、地域の成長と成功の追求</p>
    </div>
  </div>
</section>
```

## 要素の説明

### `.philosophy-purpose`

- セクション全体のコンテナ
- フレックスコンテナ（縦方向、中央配置）

### `.philosophy-purpose__inner`

- セクションの内側コンテナ
- max-width: 1280px
- padding-bottom: 90px

### `.philosophy-purpose__header`

- ラベルとタイトルのラッパー
- margin-bottom: 20px
- gap: 2px

### `.philosophy-purpose__label`

- 英語ラベル "PURPOSE"
- 赤文字 (rgb(230, 1, 18))
- font-weight: 600

### `.philosophy-purpose__title`

- 日本語タイトル "パーパス"
- h2タグ
- 濃いグレー (rgb(34, 34, 34))
- font-weight: 700

### `.philosophy-purpose__content`

- テキストコンテンツのラッパー
- padding-top: 20px
- gap: 10px

### `.philosophy-purpose__text-en`

- 英語テキスト
- グラデーションテキスト（赤）
- background-image: linear-gradient(90deg, rgb(231, 74, 74), rgb(231, 74, 74))
- background-clip: text
- -webkit-background-clip: text
- -webkit-text-fill-color: transparent

### `.philosophy-purpose__text-ja`

- 日本語テキスト
- グレー文字 (rgb(51, 51, 51))
