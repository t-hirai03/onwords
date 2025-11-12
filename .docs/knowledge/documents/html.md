# Documents Section - HTML

```html
<section class="documents-section">
  <!-- 見出し -->
  <div class="documents-heading">
    <p class="documents-label">DOCUMENTS</p>
    <h2 class="documents-title">お役立ち資料</h2>
  </div>

  <!-- 資料リスト -->
  <ul class="documents-list">
    <!-- 資料カード1（タグなし） -->
    <li class="documents-item">
      <a href="/knowledge/document/company-profile" class="documents-card">
        <div class="documents-card__content">
          <!-- 日付とタイトル -->
          <div class="documents-card__header">
            <p class="documents-card__date">2025/9/11</p>
            <p class="documents-card__title">会社概要資料</p>
          </div>
          <!-- タグ（空） -->
          <div class="documents-card__tags">
            <p class="documents-card__tag-text"></p>
          </div>
        </div>
      </a>
    </li>

    <!-- 資料カード2（タグあり） -->
    <li class="documents-item">
      <a href="/knowledge/document/inbound-marketin-gpartner-service" class="documents-card">
        <div class="documents-card__content">
          <div class="documents-card__header">
            <p class="documents-card__date">2025/8/22</p>
            <p class="documents-card__title">【企業様向け】訪日マーケティングパートナー事業のご案内</p>
          </div>
          <!-- タグ -->
          <p class="documents-card__tag-text">民間企業様向け</p>
        </div>
      </a>
    </li>

    <!-- 資料カード3（タグあり） -->
    <li class="documents-item">
      <a href="/knowledge/document/regional-partnership-service" class="documents-card">
        <div class="documents-card__content">
          <div class="documents-card__header">
            <p class="documents-card__date">2025/8/21</p>
            <p class="documents-card__title">【自治体・DMO様向け】地域連携部のご案内</p>
          </div>
          <!-- タグ -->
          <p class="documents-card__tag-text">自治体・DMO様向け</p>
        </div>
      </a>
    </li>
  </ul>

  <!-- すべて見るボタン -->
  <a href="/knowledge/document" class="documents-view-all">
    <p class="documents-view-all__text">すべての資料を見る</p>
  </a>
</section>
```

## 構造

- **セクション全体**: `section.documents-section`
  - **見出しコンテナ**: `div.documents-heading`
    - ラベル: `p.documents-label` (DOCUMENTS)
    - タイトル: `h2.documents-title` (お役立ち資料)
  - **資料リスト**: `ul.documents-list`
    - 各資料: `li.documents-item` > `a.documents-card`
      - カードコンテンツ: `div.documents-card__content`
        - ヘッダー: `div.documents-card__header`
          - 日付: `p.documents-card__date`
          - タイトル: `p.documents-card__title`
        - タグ: `p.documents-card__tag-text` または `div.documents-card__tags` > `p.documents-card__tag-text`（空）
  - **すべて見るボタン**: `a.documents-view-all` > `p.documents-view-all__text`

## 特記事項

- タグは単一のparagraphで表示される（columnsやwebinarのようなulリストではない）
- タグがない場合は空のparagraphが表示される
- タグは1つのみ表示される（columnsやwebinarと異なる）
