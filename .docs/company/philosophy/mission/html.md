# Mission Section - HTML構造

## 概要

ミッションセクション。「MISSION」ラベル、「ミッション」タイトル、メインテキスト（日本語・英語）、説明文（日本語・英語）で構成。

## HTML構造

```html
<section class="philosophy-mission">
  <div class="philosophy-mission__inner">
    <div class="philosophy-mission__header">
      <p class="philosophy-mission__label">MISSION</p>
      <h2 class="philosophy-mission__title">ミッション</h2>
    </div>
    <div class="philosophy-mission__main-text">
      <p class="philosophy-mission__text-ja-main">もっと楽しい日本に</p>
      <p class="philosophy-mission__text-en-main">Bring out Japan's fun side</p>
    </div>
    <div class="philosophy-mission__description">
      <p class="philosophy-mission__text-ja-desc">
        日本を訪れる人も、迎える人も、みんなが楽しめる場所へ。<br>
        そして、地域の魅力を日本の活力に。
      </p>
      <p class="philosophy-mission__text-en-desc">
        Make Japan a more enjoyable place for visitors and locals alike.<br>
        Harness regional charms to create a vibrant country
      </p>
    </div>
  </div>
</section>
```

## 要素の説明

### `.philosophy-mission`

- セクション全体のコンテナ
- フレックスコンテナ（縦方向、中央配置）

### `.philosophy-mission__inner`

- セクションの内側コンテナ
- max-width: 1280px
- padding: 90px 40px（上下・左右）

### `.philosophy-mission__header`

- ラベルとタイトルのラッパー
- margin-bottom: 20px
- gap: 2px

### `.philosophy-mission__label`

- 英語ラベル "MISSION"
- 赤文字 (rgb(230, 1, 18))
- font-weight: 600

### `.philosophy-mission__title`

- 日本語タイトル "ミッション"
- h2タグ
- 濃いグレー (rgb(34, 34, 34))
- font-weight: 700

### `.philosophy-mission__main-text`

- メインテキストのラッパー
- padding-top: 20px
- gap: 10px

### `.philosophy-mission__text-ja-main`

- 日本語メインテキスト「もっと楽しい日本に」
- グラデーションテキスト（赤）
- font-weight: 700

### `.philosophy-mission__text-en-main`

- 英語メインテキスト "Bring out Japan's fun side"
- グレー文字 (rgb(51, 51, 51))

### `.philosophy-mission__description`

- 説明文のラッパー
- padding-top: 30px
- gap: 10px

### `.philosophy-mission__text-ja-desc`

- 日本語説明文
- グラデーションテキスト（黒）
- font-weight: 500

### `.philosophy-mission__text-en-desc`

- 英語説明文
- グレー文字 (rgb(51, 51, 51))
