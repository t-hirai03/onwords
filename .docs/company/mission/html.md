# Mission Section - HTML

```html
<section class="mission">
  <div class="mission__header">
    <p class="mission__label">MISSION</p>
    <h2 class="mission__title">ミッション</h2>
  </div>

  <div class="mission__content">
    <p class="mission__main-title">もっと楽しい日本に</p>
    <p class="mission__sub-title">Bring out Japan's fun side</p>
  </div>

  <div class="mission__description">
    <p class="mission__desc-text">
      日本を訪れる人も、迎える人も、みんなが楽しめる場所へ。
      そして、地域の魅力を日本の活力に。
    </p>
    <p class="mission__desc-text">
      Make Japan a more enjoyable place for visitors and locals alike.
      Harness regional charms to create a vibrant country
    </p>
  </div>

  <a href="/company/philosophy" class="mission__button">
    <p>企業理念を見る</p>
  </a>
</section>
```

## 構造

- `mission` - セクション全体（赤背景）
  - `mission__header` - ヘッダー（ラベル + タイトル）
  - `mission__content` - メインメッセージ（日本語 + 英語）
  - `mission__description` - 説明文（日本語 + 英語）
  - `mission__button` - 企業理念へのリンクボタン
