# Webinar Section - HTML

```html
<section class="webinar-section">
  <!-- 見出し -->
  <div class="webinar-heading">
    <p class="webinar-label">WEBINAR</p>
    <h2 class="webinar-title">ウェビナー情報</h2>
  </div>

  <!-- ウェビナーリスト -->
  <ul class="webinar-list">
    <!-- ウェビナーカード1 -->
    <li class="webinar-item">
      <a href="/knowledge/webinar/inbound-winter-strategy-251120" class="webinar-card">
        <div class="webinar-card__content">
          <!-- 日付とタイトル -->
          <div class="webinar-card__header">
            <p class="webinar-card__date">2025/11/6</p>
            <p class="webinar-card__title">冬季・春節の訪日需要を逃すな！ 冬シーズンの訪日インバウンド需要とデータに基づく集客手法</p>
          </div>
          <!-- タグ -->
          <ul class="webinar-card__tags">
            <li class="webinar-card__tag">
              <p class="webinar-card__tag-text">民間企業様向け</p>
            </li>
            <li class="webinar-card__tag">
              <p class="webinar-card__tag-text">これから開催</p>
            </li>
          </ul>
        </div>
      </a>
    </li>

    <!-- ウェビナーカード2 -->
    <li class="webinar-item">
      <a href="/knowledge/webinar/inboundstrategy-20251028" class="webinar-card">
        <div class="webinar-card__content">
          <div class="webinar-card__header">
            <p class="webinar-card__date">2025/9/11</p>
            <p class="webinar-card__title">成果を出すための「逆算」思考 ～最新インバウンド概況と、明日から使える戦略の作り方～</p>
          </div>
          <ul class="webinar-card__tags">
            <li class="webinar-card__tag">
              <p class="webinar-card__tag-text">民間企業様向け</p>
            </li>
            <li class="webinar-card__tag">
              <p class="webinar-card__tag-text">終了</p>
            </li>
          </ul>
        </div>
      </a>
    </li>
  </ul>

  <!-- すべて見るボタン -->
  <a href="/knowledge/webinar" class="webinar-view-all">
    <p class="webinar-view-all__text">すべてのウェビナーを見る</p>
  </a>
</section>
```

## 構造

- **セクション全体**: `section.webinar-section`
  - **見出しコンテナ**: `div.webinar-heading`
    - ラベル: `p.webinar-label` (WEBINAR)
    - タイトル: `h2.webinar-title` (ウェビナー情報)
  - **ウェビナーリスト**: `ul.webinar-list`
    - 各ウェビナー: `li.webinar-item` > `a.webinar-card`
      - カードコンテンツ: `div.webinar-card__content`
        - ヘッダー: `div.webinar-card__header`
          - 日付: `p.webinar-card__date`
          - タイトル: `p.webinar-card__title`
        - タグリスト: `ul.webinar-card__tags`
          - タグ: `li.webinar-card__tag` > `p.webinar-card__tag-text`
  - **すべて見るボタン**: `a.webinar-view-all` > `p.webinar-view-all__text`

## 特記事項

- タグは2つまで表示される（例: 「民間企業様向け」「これから開催」）
- columnsセクションと構造は同じだが、クラス名が異なる
