# CASE STUDY セクション - 詳細ドキュメント

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing
セクション: CASE STUDY（導入事例）

## セクション構造

```html
<section class="inbound-case-study fade-in-up">
  <div class="inbound-case-study__container">
    <!-- ヘッダー -->
    <div class="inbound-case-study__header fade-in-up">
      <p class="inbound-case-study__label">CASE STUDY</p>
      <h2 class="inbound-case-study__title">導入事例</h2>
    </div>

    <!-- 導入事例リスト (2列グリッド) -->
    <ul class="inbound-case-study__list">
      <li class="inbound-case-study__item fade-in-up">
        <a href="/case/retail-poc-strategy" class="inbound-case-study__link">
          <div class="inbound-case-study__image">
            <img src="..." alt="導入事例" loading="lazy">
          </div>
          <div class="inbound-case-study__content">
            <h3 class="inbound-case-study__item-title">
              特定エリアで事業展開するデベロッパー<br>
              インバウンド施策の「勝ちパターン」を可視化する商業施設のPoC戦略
            </h3>
            <div class="inbound-case-study__tags">
              <span class="inbound-case-study__tag">訪日マーケティングパートナー事業</span>
            </div>
          </div>
        </a>
      </li>

      <li class="inbound-case-study__item fade-in-up">
        <a href="/case/apparel-roas-success" class="inbound-case-study__link">
          <div class="inbound-case-study__image">
            <img src="..." alt="導入事例" loading="lazy">
          </div>
          <div class="inbound-case-study__content">
            <h3 class="inbound-case-study__item-title">
              全国展開するアパレルブランド<br>
              アパレルブランドがROAS600%を達成した、データに基づくインバウンド集客戦略
            </h3>
            <div class="inbound-case-study__tags">
              <span class="inbound-case-study__tag">訪日マーケティングパートナー事業</span>
            </div>
          </div>
        </a>
      </li>
    </ul>

    <!-- すべて見るボタン -->
    <div class="inbound-case-study__button-wrapper">
      <a href="/case/tag/inbound-marketing-partner" class="btn-primary">
        すべての導入事例を見る
      </a>
    </div>
  </div>
</section>
```

## 本番サイトの導入事例（2件）

| No | タイトル | カテゴリ | URL |
|----|---------|---------|-----|
| 1 | 特定エリアで事業展開するデベロッパー<br>インバウンド施策の「勝ちパターン」を可視化する商業施設のPoC戦略 | 訪日マーケティングパートナー事業 | /case/retail-poc-strategy |
| 2 | 全国展開するアパレルブランド<br>アパレルブランドがROAS600%を達成した、データに基づくインバウンド集客戦略 | 訪日マーケティングパートナー事業 | /case/apparel-roas-success |

## CSS スタイル

### ベーススタイル

```css
/* Section Container */
.inbound-case-study {
  max-width: 1312px;
  margin: 80px auto;
  padding: 0 16px;
}

/* Header (共通スタイル) */
.inbound-case-study__header {
  text-align: center;
  margin-block-end: 60px;
}

.inbound-case-study__label {
  color: rgb(217, 30, 24);
  font-size: 14px;
  font-weight: 700;
  margin-block-end: 16px;
}

.inbound-case-study__title {
  color: rgb(34, 34, 34);
  font-size: 28px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
}

/* Case Study Grid List */
.inbound-case-study__list {
  list-style: none;
  margin: 0 0 40px;
  padding: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 32px;
}

.inbound-case-study__item {
  margin: 0;
}

/* Case Study Link (Card) */
.inbound-case-study__link {
  display: block;
  text-decoration: none;
  color: inherit;
  transition: transform 0.3s ease;
}

.inbound-case-study__link:hover {
  transform: translateY(-4px);
}

/* Case Study Image */
.inbound-case-study__image {
  margin-block-end: 20px;
  border-radius: 8px;
  overflow: hidden;
}

.inbound-case-study__image img {
  width: 100%;
  height: auto;
  display: block;
}

/* Case Study Content */
.inbound-case-study__content {
  padding: 16px 0;
}

.inbound-case-study__item-title {
  font-size: 18px;
  font-weight: 700;
  margin-block-end: 12px;
  color: rgb(34, 34, 34);
}

/* Tags */
.inbound-case-study__tags {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
}

.inbound-case-study__tag {
  display: inline-block;
  padding: 4px 12px;
  font-size: 12px;
  background-color: #f0f0f0;
  border-radius: 4px;
  color: rgb(85, 85, 85);
}

/* Button Wrapper (共通スタイル) */
.inbound-case-study__button-wrapper {
  text-align: center;
  margin-block-start: 40px;
}

/* No Posts Message (共通スタイル) */
.inbound-case-study__no-posts {
  text-align: center;
  color: rgb(85, 85, 85);
  font-size: 16px;
  padding: 40px 0;
}
```

### レスポンシブスタイル

#### タブレット (max-width: 840px)

```css
@media screen and (max-width: 840px) {
  /* 1列グリッドに変更 */
  .inbound-case-study__list {
    grid-template-columns: 1fr;
  }
}
```

## 機能とインタラクション

### ホバーエフェクト

導入事例カードにマウスをホバーすると:
- 4px上に浮き上がる (`transform: translateY(-4px)`)
- トランジション時間: 0.3s ease

### グリッドレイアウト

- デスクトップ: 2列グリッド
- タブレット・モバイル (840px以下): 1列グリッド

### WordPress動的コンテンツ

カスタム投稿タイプ「case」から以下の条件で取得:
- 投稿数: 2件
- タクソノミーフィルタ: `case_category` の `inbound-marketing-partner`
- 順序: 新しい順

## WordPress 実装ノート

### PHPテンプレート

ファイル: `template-parts/sections/inbound-case-study.php`

```php
<?php
// Query case studies filtered by taxonomy
$case_args = array(
  'post_type'      => 'case',
  'posts_per_page' => 2,
  'tax_query'      => array(
    array(
      'taxonomy' => 'case_category',
      'field'    => 'slug',
      'terms'    => 'inbound-marketing-partner',
    ),
  ),
);

$case_query = new WP_Query( $case_args );
?>

<section class="inbound-case-study fade-in-up">
  <div class="inbound-case-study__container">
    <div class="inbound-case-study__header fade-in-up">
      <p class="inbound-case-study__label">CASE STUDY</p>
      <h2 class="inbound-case-study__title">導入事例</h2>
    </div>

    <?php if ( $case_query->have_posts() ) : ?>
      <ul class="inbound-case-study__list">
        <?php while ( $case_query->have_posts() ) : $case_query->the_post(); ?>
          <li class="inbound-case-study__item fade-in-up">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="inbound-case-study__link">
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="inbound-case-study__image">
                  <?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
                </div>
              <?php endif; ?>
              <div class="inbound-case-study__content">
                <h3 class="inbound-case-study__item-title"><?php echo esc_html( get_the_title() ); ?></h3>
                <?php
                $terms = get_the_terms( get_the_ID(), 'case_category' );
                if ( $terms && ! is_wp_error( $terms ) ) :
                  ?>
                  <div class="inbound-case-study__tags">
                    <?php foreach ( $terms as $term ) : ?>
                      <span class="inbound-case-study__tag"><?php echo esc_html( $term->name ); ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <div class="inbound-case-study__button-wrapper">
        <a href="<?php echo esc_url( home_url( '/case/tag/inbound-marketing-partner' ) ); ?>" class="btn-primary">
          すべての導入事例を見る
        </a>
      </div>

    <?php else : ?>
      <p class="inbound-case-study__no-posts">現在、導入事例はありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</section>
```

### カスタム投稿タイプとタクソノミー

- **投稿タイプ**: `case`
- **タクソノミー**: `case_category`
- **フィルタースラッグ**: `inbound-marketing-partner`

### CSS ファイル

ファイル: `assets/css/business.css`
- 行 971-1074: ベーススタイル
- 行 1235-1242: ボタンとメッセージ（共通スタイル）
- 行 1285-1287: タブレットレスポンシブ

### アニメーションクラス

- `.fade-in-up` - IntersectionObserver で実装
- スクロール時にフェードインアニメーション
- `assets/js/animations.js` で管理

## デザイン仕様

### カラー

| 要素 | カラーコード | 説明 |
|------|------------|------|
| ラベル（CASE STUDY） | `rgb(217, 30, 24)` | 赤色 |
| タイトル | `rgb(34, 34, 34)` | ダークグレー |
| カードタイトル | `rgb(34, 34, 34)` | ダークグレー |
| タグ背景 | `#f0f0f0` | ライトグレー |
| タグテキスト | `rgb(85, 85, 85)` | ミディアムグレー |

### タイポグラフィ

| 要素 | フォントサイズ | フォントウェイト | 行高 |
|------|--------------|----------------|------|
| ラベル | 14px | 700 | - |
| タイトル | 28px | 700 | 1.5 |
| カードタイトル | 18px | 700 | - |
| タグ | 12px | 400 | - |

### スペーシング

| 要素 | 値 | 説明 |
|------|---|------|
| セクション外側マージン | `80px auto` | 上下80px、左右中央 |
| セクションパディング | `0 16px` | 左右16px |
| ヘッダー下マージン | `60px` | - |
| リスト下マージン | `40px` | - |
| グリッドgap | `32px` | カード間の間隔 |
| 画像下マージン | `20px` | - |
| コンテンツパディング | `16px 0` | 上下のみ |
| タイトル下マージン | `12px` | - |
| タグ間gap | `8px` | - |
| タグパディング | `4px 12px` | - |

### レイアウト

| 要素 | 値 | 説明 |
|------|---|------|
| コンテナ最大幅 | `1312px` | 1280px + 16px × 2 |
| グリッド列（デスクトップ） | `repeat(2, 1fr)` | 2列 |
| グリッド列（タブレット） | `1fr` | 1列 |
| 画像角丸 | `8px` | - |
| タグ角丸 | `4px` | - |
| カードホバー移動 | `translateY(-4px)` | 上に4px |

## 実装チェックリスト

- [x] HTML構造の作成
- [x] BEMクラス命名規則の適用
- [x] CSSベーススタイルの実装
- [x] グリッドレイアウトの実装
- [x] レスポンシブスタイルの実装
- [x] ホバーエフェクトの実装
- [x] フェードインアニメーションの適用
- [x] WP_Queryによる動的コンテンツ取得
- [x] タクソノミーフィルタリング
- [x] アイキャッチ画像の表示
- [x] タグの表示
- [x] 投稿がない場合のメッセージ表示

## 共通コンポーネント

このセクションは以下の共通コンポーネントを使用:

### ボタン

- `.btn-primary` - プライマリボタン（赤いグラデーション）
- `components.css` で定義

## WordPress管理画面での設定

### 必要な投稿データ

各導入事例投稿に以下が必要:
1. タイトル（例: 「特定エリアで事業展開するデベロッパー...」）
2. アイキャッチ画像（推奨サイズ: 1066×800px）
3. カテゴリ: 「訪日マーケティングパートナー事業」（スラッグ: `inbound-marketing-partner`）

### タクソノミー設定

カスタムタクソノミー `case_category` に以下のタームを作成:
- 名前: 訪日マーケティングパートナー事業
- スラッグ: `inbound-marketing-partner`
