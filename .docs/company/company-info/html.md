# Company Info Section - HTML

```html
<section class="company-info">
  <div class="company-info__header">
    <p class="company-info__label">COMPANY</p>
    <h2 class="company-info__title">会社概要</h2>
  </div>

  <div class="company-info__content">
    <div class="company-info__row">
      <p class="company-info__row-label">会社名</p>
      <h3 class="company-info__row-content">
        株式会社Onwords<br>
        （かぶしきがいしゃオンワーズ）
      </h3>
    </div>

    <div class="company-info__row">
      <p class="company-info__row-label">設立日</p>
      <p class="company-info__row-content">2025年8月1日</p>
    </div>

    <div class="company-info__row">
      <p class="company-info__row-label">資本金</p>
      <p class="company-info__row-content">1,000万円</p>
    </div>

    <div class="company-info__row">
      <p class="company-info__row-label">経営陣</p>
      <p class="company-info__row-content">
        代表取締役社長 成澤豪<br>
        取締役副社長 加藤史子<br>
        取締役 竹原淳<br>
        取締役 青木理恵
      </p>
    </div>

    <div class="company-info__row">
      <p class="company-info__row-label">事業内容</p>
      <p class="company-info__row-content">
        ・地域観光DX事業<br>
        自治体、観光協会、DMOに向けたインバウンドに特化した観光コンサルティング事業を展開<br>
        調査、商品開発、販売整備、情報発信などをワンストップで提供<br>
        <br>
        ・訪日マーケティングパートナー事業<br>
        国内企業向けにインバウンドの送客支援やコンサルティング事業を展開<br>
        訪日OTAの利用者データや会員基盤を活用したマーケティング支援を行う
      </p>
    </div>

    <div class="company-info__row">
      <p class="company-info__row-label">所在地</p>
      <p class="company-info__row-content">
        〒105-0001<br>
        東京都港区虎ノ門３丁目１７−１ Tokyu Reit 虎ノ門ビル ６Ｆ
      </p>
    </div>
  </div>
</section>
```

## 構造

- `company-info` - セクション全体
  - `company-info__header` - ヘッダー（ラベル + タイトル）
  - `company-info__content` - テーブル風のコンテンツ
    - `company-info__row` - 各行（ラベル + 内容）
      - `company-info__row-label` - ラベル（会社名、設立日等）
      - `company-info__row-content` - 内容（h3またはp）
