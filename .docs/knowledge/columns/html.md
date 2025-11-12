# Columns Section - HTML

```html
<section class="columns-section">
  <!-- 見出し -->
  <div class="columns-heading">
    <p class="columns-label">COLUMNS</p>
    <h2 class="columns-title">記事一覧</h2>
  </div>

  <!-- 記事リスト -->
  <ul class="columns-list">
    <!-- 記事カード1 -->
    <li class="columns-item">
      <a href="/knowledge/column/inbound-ad" class="columns-card">
        <div class="columns-card__content">
          <!-- 日付とタイトル -->
          <div class="columns-card__header">
            <p class="columns-card__date">2025/9/30</p>
            <p class="columns-card__title">広告費を無駄にしない！オフライン成果を可視化するインバウンド広告戦略</p>
          </div>
          <!-- タグ -->
          <ul class="columns-card__tags">
            <li class="columns-card__tag">
              <p class="columns-card__tag-text">広告運用</p>
            </li>
          </ul>
        </div>
      </a>
    </li>

    <!-- 記事カード2 -->
    <li class="columns-item">
      <a href="/knowledge/column/taiwan-influencer" class="columns-card">
        <div class="columns-card__content">
          <div class="columns-card__header">
            <p class="columns-card__date">2025/9/9</p>
            <p class="columns-card__title">台湾インフルエンサーで成果を出す！費用対効果を最大化する選定戦略</p>
          </div>
          <ul class="columns-card__tags">
            <li class="columns-card__tag">
              <p class="columns-card__tag-text">インフルエンサー</p>
            </li>
          </ul>
        </div>
      </a>
    </li>
  </ul>

  <!-- すべて見るボタン -->
  <a href="/knowledge/column" class="columns-view-all">
    <p class="columns-view-all__text">すべての記事を見る</p>
  </a>
</section>
```

## 構造

- **セクション全体**: `section.columns-section`
  - **見出しコンテナ**: `div.columns-heading`
    - ラベル: `p.columns-label` (COLUMNS)
    - タイトル: `h2.columns-title` (記事一覧)
  - **記事リスト**: `ul.columns-list`
    - 各記事: `li.columns-item` > `a.columns-card`
      - カードコンテンツ: `div.columns-card__content`
        - ヘッダー: `div.columns-card__header`
          - 日付: `p.columns-card__date`
          - タイトル: `p.columns-card__title`
        - タグリスト: `ul.columns-card__tags`
          - タグ: `li.columns-card__tag` > `p.columns-card__tag-text`
  - **すべて見るボタン**: `a.columns-view-all` > `p.columns-view-all__text`
