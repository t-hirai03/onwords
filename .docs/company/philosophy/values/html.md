# Values Section - HTML構造

## 概要

バリューセクション。「VALUES」ラベル、「バリュー」タイトル、4つのバリュー項目（日本語・英語タイトル、日本語・英語説明文）で構成。

## HTML構造

```html
<section class="philosophy-values">
  <div class="philosophy-values__inner">
    <div class="philosophy-values__header">
      <p class="philosophy-values__label">VALUES</p>
      <h2 class="philosophy-values__title">バリュー</h2>
    </div>
    <div class="philosophy-values__content">
      <ul class="philosophy-values__list">
        <li class="philosophy-values__item">
          <p class="philosophy-values__value-ja">正しく</p>
          <p class="philosophy-values__value-en">Integrity</p>
          <p class="philosophy-values__desc-ja">-プロとして、人として、誠実に行動する</p>
          <p class="philosophy-values__desc-en">-Do the right thing,as professionals, and as people</p>
        </li>
        <li class="philosophy-values__item">
          <p class="philosophy-values__value-ja">支え合う</p>
          <p class="philosophy-values__value-en">Teamwork</p>
          <p class="philosophy-values__desc-ja">-仲間と助け合い、チームで力を最大にする</p>
          <p class="philosophy-values__desc-en">-Support one another to achieve our full potential as a team</p>
        </li>
        <li class="philosophy-values__item">
          <p class="philosophy-values__value-ja">挑戦を楽しむ</p>
          <p class="philosophy-values__value-en">Embracing challenges</p>
          <p class="philosophy-values__desc-ja">-新しい考え、挑戦を歓迎する。失敗から学び、誇ろう</p>
          <p class="philosophy-values__desc-en">-Be open to new ideas and opportunities. Treat failure as a lesson, and a source of pride</p>
        </li>
        <li class="philosophy-values__item">
          <p class="philosophy-values__value-ja">個の尊重</p>
          <p class="philosophy-values__value-en">Respect for the individual</p>
          <p class="philosophy-values__desc-ja">-個人の想い、意見、直感を大事にする</p>
          <p class="philosophy-values__desc-en">-Honor personal beliefs, opinions,and instincts</p>
        </li>
      </ul>
    </div>
  </div>
</section>
```

## 要素の説明

### `.philosophy-values`

- セクション全体のコンテナ
- フレックスコンテナ（縦方向、中央配置）

### `.philosophy-values__inner`

- セクションの内側コンテナ
- max-width: 1280px
- padding: 90px 40px（上下・左右）

### `.philosophy-values__header`

- ラベルとタイトルのラッパー
- margin-bottom: 20px
- gap: 2px

### `.philosophy-values__label`

- 英語ラベル "VALUES"
- 赤文字 (rgb(230, 1, 18))
- font-weight: 600

### `.philosophy-values__title`

- 日本語タイトル "バリュー"
- h2タグ
- 濃いグレー (rgb(34, 34, 34))
- font-weight: 700

### `.philosophy-values__content`

- コンテンツラッパー
- padding-top: 10px
- gap: 10px

### `.philosophy-values__list`

- ulリスト
- padding: 10px
- gap: 30px（アイテム間の余白）

### `.philosophy-values__item`

- liアイテム
- gap: 0px（内部要素間の余白なし）

### `.philosophy-values__value-ja`

- 日本語バリューテキスト（例: 正しく）
- グラデーションテキスト（赤）
- font-weight: 700

### `.philosophy-values__value-en`

- 英語バリューテキスト（例: Integrity）
- グラデーションテキスト（黒）
- font-weight: 700
- margin-bottom: 10px

### `.philosophy-values__desc-ja`

- 日本語説明文
- グレー文字 (rgb(51, 51, 51))

### `.philosophy-values__desc-en`

- 英語説明文
- グレー文字 (rgb(51, 51, 51))
