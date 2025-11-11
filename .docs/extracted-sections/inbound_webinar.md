# WEBINAR セクション - 詳細ドキュメント

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing
セクション: WEBINAR（ウェビナー情報）

## セクション構造

```html
<section class="inbound-webinar fade-in-up">
  <div class="inbound-webinar__container">
    <!-- ヘッダー -->
    <div class="inbound-webinar__header fade-in-up">
      <p class="inbound-webinar__label">WEBINAR</p>
      <h2 class="inbound-webinar__title">ウェビナー情報</h2>
    </div>

    <!-- ウェビナーリスト (2列グリッド) -->
    <ul class="inbound-webinar__list">
      <li class="inbound-webinar__item fade-in-up">
        <a href="/knowledge/webinar/inbound-winter-strategy-251120" class="inbound-webinar__link">
          <div class="inbound-webinar__meta">
            <time class="inbound-webinar__date">2025/11/6</time>
            <span class="inbound-webinar__status inbound-webinar__status--upcoming">これから開催</span>
            <span class="inbound-webinar__target">民間企業様向け</span>
          </div>
          <h3 class="inbound-webinar__item-title">
            冬季・春節の訪日需要を逃すな！ 冬シーズンの訪日インバウンド需要とデータに基づく集客手法
          </h3>
        </a>
      </li>

      <li class="inbound-webinar__item fade-in-up">
        <a href="/knowledge/webinar/inboundstrategy-20251028" class="inbound-webinar__link">
          <div class="inbound-webinar__meta">
            <time class="inbound-webinar__date">2025/9/11</time>
            <span class="inbound-webinar__status inbound-webinar__status--ended">終了</span>
            <span class="inbound-webinar__target">民間企業様向け</span>
          </div>
          <h3 class="inbound-webinar__item-title">
            成果を出すための「逆算」思考 ～最新インバウンド概況と、明日から使える戦略の作り方～
          </h3>
        </a>
      </li>
    </ul>

    <!-- すべて見るボタン -->
    <div class="inbound-webinar__button-wrapper">
      <a href="/knowledge/webinar" class="btn-primary">
        すべてのウェビナーを見る
      </a>
    </div>
  </div>
</section>
```

## 本番サイトのウェビナー情報（2件）

| No | 開催日 | タイトル | ステータス | 対象 | URL |
|----|--------|---------|----------|------|-----|
| 1 | 2025/11/6 | 冬季・春節の訪日需要を逃すな！ 冬シーズンの訪日インバウンド需要とデータに基づく集客手法 | これから開催 | 民間企業様向け | /knowledge/webinar/inbound-winter-strategy-251120 |
| 2 | 2025/9/11 | 成果を出すための「逆算」思考 ～最新インバウンド概況と、明日から使える戦略の作り方～ | 終了 | 民間企業様向け | /knowledge/webinar/inboundstrategy-20251028 |

## CSS スタイル

### ベーススタイル

```css
/* Section Container (共通スタイル) */
.inbound-webinar {
  max-width: 1312px;
  margin: 80px auto;
  padding: 0 16px;
}

/* Header (共通スタイル) */
.inbound-webinar__header {
  text-align: center;
  margin-block-end: 60px;
}

.inbound-webinar__label {
  color: rgb(217, 30, 24);
  font-size: 14px;
  font-weight: 700;
  margin-block-end: 16px;
}

.inbound-webinar__title {
  color: rgb(34, 34, 34);
  font-size: 28px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
}

/* Webinar Grid List */
.inbound-webinar__list {
  list-style: none;
  margin: 0 0 40px;
  padding: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 32px;
}

.inbound-webinar__item {
  margin: 0;
}

/* Webinar Link (Card) */
.inbound-webinar__link {
  display: block;
  padding: 24px;
  background-color: #f9f9f9;
  border-radius: 8px;
  text-decoration: none;
  color: inherit;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.inbound-webinar__link:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

/* Meta Information (Date, Status, Target) */
.inbound-webinar__meta {
  display: flex;
  gap: 12px;
  margin-block-end: 16px;
  flex-wrap: wrap;
}

.inbound-webinar__date {
  font-size: 14px;
  color: rgb(85, 85, 85);
}

/* Status Badge */
.inbound-webinar__status {
  display: inline-block;
  padding: 4px 12px;
  font-size: 12px;
  border-radius: 4px;
  font-weight: 500;
}

.inbound-webinar__status--upcoming {
  background-color: rgb(217, 30, 24);
  color: #fff;
}

.inbound-webinar__status--ended {
  background-color: #e0e0e0;
  color: rgb(85, 85, 85);
}

/* Target Badge */
.inbound-webinar__target {
  display: inline-block;
  padding: 4px 12px;
  font-size: 12px;
  background-color: #e0e0e0;
  border-radius: 4px;
  color: rgb(85, 85, 85);
}

/* Webinar Title */
.inbound-webinar__item-title {
  font-size: 16px;
  font-weight: 700;
  line-height: 1.6;
  color: rgb(34, 34, 34);
  margin: 0;
}

/* Button Wrapper (共通スタイル) */
.inbound-webinar__button-wrapper {
  text-align: center;
  margin-block-start: 40px;
}

/* No Posts Message (共通スタイル) */
.inbound-webinar__no-posts {
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
  .inbound-webinar__list {
    grid-template-columns: 1fr;
  }
}
```

## 機能とインタラクション

### ホバーエフェクト

ウェビナーカードにマウスをホバーすると:
- 4px上に浮き上がる (`transform: translateY(-4px)`)
- 影が濃くなる (`box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1)`)
- トランジション時間: 0.3s ease

### グリッドレイアウト

- デスクトップ: 2列グリッド
- タブレット・モバイル (840px以下): 1列グリッド

### WordPress動的コンテンツ

カスタム投稿タイプ「webinar」から以下の条件で取得:
- 投稿数: 2件
- 順序: 新しい順

### ACFカスタムフィールド

- `webinar_date` - 開催日（Date Picker）
- `webinar_status` - ステータス（Select: upcoming / ended）
- `webinar_target` - 対象（Select: business / government）

## WordPress 実装ノート

### PHPテンプレート

ファイル: `template-parts/sections/inbound-webinar.php`

```php
<?php
// Query webinars
$webinar_args = array(
  'post_type'      => 'webinar',
  'posts_per_page' => 2,
  'orderby'        => 'date',
  'order'          => 'DESC',
);

$webinar_query = new WP_Query( $webinar_args );
?>

<section class="inbound-webinar fade-in-up">
  <div class="inbound-webinar__container">
    <div class="inbound-webinar__header fade-in-up">
      <p class="inbound-webinar__label">WEBINAR</p>
      <h2 class="inbound-webinar__title">ウェビナー情報</h2>
    </div>

    <?php if ( $webinar_query->have_posts() ) : ?>
      <ul class="inbound-webinar__list">
        <?php while ( $webinar_query->have_posts() ) : $webinar_query->the_post(); ?>
          <?php
          $webinar_date   = get_field( 'webinar_date' );
          $webinar_status = get_field( 'webinar_status' );
          $webinar_target = get_field( 'webinar_target' );
          ?>
          <li class="inbound-webinar__item fade-in-up">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="inbound-webinar__link">
              <div class="inbound-webinar__meta">
                <?php if ( $webinar_date ) : ?>
                  <time class="inbound-webinar__date"><?php echo esc_html( $webinar_date ); ?></time>
                <?php endif; ?>

                <?php if ( $webinar_status ) : ?>
                  <span class="inbound-webinar__status inbound-webinar__status--<?php echo esc_attr( $webinar_status ); ?>">
                    <?php echo $webinar_status === 'upcoming' ? 'これから開催' : '終了'; ?>
                  </span>
                <?php endif; ?>

                <?php if ( $webinar_target ) : ?>
                  <span class="inbound-webinar__target">
                    <?php echo $webinar_target === 'business' ? '民間企業様向け' : '自治体様向け'; ?>
                  </span>
                <?php endif; ?>
              </div>
              <h3 class="inbound-webinar__item-title"><?php echo esc_html( get_the_title() ); ?></h3>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <div class="inbound-webinar__button-wrapper">
        <a href="<?php echo esc_url( home_url( '/knowledge/webinar' ) ); ?>" class="btn-primary">
          すべてのウェビナーを見る
        </a>
      </div>

    <?php else : ?>
      <p class="inbound-webinar__no-posts">現在、ウェビナー情報はありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</section>
```

### カスタム投稿タイプ

ファイル: `inc/custom-post-types.php`

```php
function onwords_register_webinar_post_type() {
  $labels = array(
    'name'               => 'ウェビナー',
    'singular_name'      => 'ウェビナー',
    // ...
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'rewrite'            => array( 'slug' => 'knowledge/webinar' ),
    'has_archive'        => 'knowledge/webinar',
    'menu_icon'          => 'dashicons-video-alt3',
    'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
  );

  register_post_type( 'webinar', $args );
}
add_action( 'init', 'onwords_register_webinar_post_type' );
```

### ACFフィールド定義

ファイル: `inc/acf-fields.php`

```php
acf_add_local_field_group(
  array(
    'key'      => 'group_webinar',
    'title'    => 'ウェビナー情報',
    'fields'   => array(
      array(
        'key'           => 'field_webinar_date',
        'label'         => '開催日',
        'name'          => 'webinar_date',
        'type'          => 'date_picker',
        'required'      => 1,
        'display_format' => 'Y/n/j',
        'return_format'  => 'Y/n/j',
      ),
      array(
        'key'           => 'field_webinar_status',
        'label'         => 'ステータス',
        'name'          => 'webinar_status',
        'type'          => 'select',
        'required'      => 1,
        'choices'       => array(
          'upcoming' => 'これから開催',
          'ended'    => '終了',
        ),
      ),
      array(
        'key'           => 'field_webinar_target',
        'label'         => '対象',
        'name'          => 'webinar_target',
        'type'          => 'select',
        'required'      => 1,
        'choices'       => array(
          'business'   => '民間企業様向け',
          'government' => '自治体様向け',
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param'    => 'post_type',
          'operator' => '==',
          'value'    => 'webinar',
        ),
      ),
    ),
  )
);
```

### CSS ファイル

ファイル: `assets/css/business.css`
- 行 971-1177: ベーススタイル（共通ヘッダーを含む）
- 行 1235-1242: ボタンとメッセージ（共通スタイル）
- 行 1293-1295: タブレットレスポンシブ

### アニメーションクラス

- `.fade-in-up` - IntersectionObserver で実装
- スクロール時にフェードインアニメーション
- `assets/js/animations.js` で管理

## デザイン仕様

### カラー

| 要素 | カラーコード | 説明 |
|------|------------|------|
| ラベル（WEBINAR） | `rgb(217, 30, 24)` | 赤色 |
| タイトル | `rgb(34, 34, 34)` | ダークグレー |
| カード背景 | `#f9f9f9` | ライトグレー |
| 日付テキスト | `rgb(85, 85, 85)` | ミディアムグレー |
| ステータス（これから開催）背景 | `rgb(217, 30, 24)` | 赤色 |
| ステータス（これから開催）テキスト | `#fff` | 白色 |
| ステータス（終了）背景 | `#e0e0e0` | ライトグレー |
| ステータス（終了）テキスト | `rgb(85, 85, 85)` | ミディアムグレー |
| 対象バッジ背景 | `#e0e0e0` | ライトグレー |
| 対象バッジテキスト | `rgb(85, 85, 85)` | ミディアムグレー |
| カードタイトル | `rgb(34, 34, 34)` | ダークグレー |
| カード影（ホバー時） | `rgba(0, 0, 0, 0.1)` | 半透明黒 |

### タイポグラフィ

| 要素 | フォントサイズ | フォントウェイト | 行高 |
|------|--------------|----------------|------|
| ラベル | 14px | 700 | - |
| タイトル | 28px | 700 | 1.5 |
| 日付 | 14px | 400 | - |
| ステータスバッジ | 12px | 500 | - |
| 対象バッジ | 12px | 400 | - |
| カードタイトル | 16px | 700 | 1.6 |

### スペーシング

| 要素 | 値 | 説明 |
|------|---|------|
| セクション外側マージン | `80px auto` | 上下80px、左右中央 |
| セクションパディング | `0 16px` | 左右16px |
| ヘッダー下マージン | `60px` | - |
| リスト下マージン | `40px` | - |
| グリッドgap | `32px` | カード間の間隔 |
| カードパディング | `24px` | 全方向 |
| メタ情報gap | `12px` | バッジ間 |
| メタ情報下マージン | `16px` | - |
| バッジパディング | `4px 12px` | - |

### レイアウト

| 要素 | 値 | 説明 |
|------|---|------|
| コンテナ最大幅 | `1312px` | 1280px + 16px × 2 |
| グリッド列（デスクトップ） | `repeat(2, 1fr)` | 2列 |
| グリッド列（タブレット） | `1fr` | 1列 |
| カード角丸 | `8px` | - |
| バッジ角丸 | `4px` | - |
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
- [x] ACFカスタムフィールドの設定
- [x] ステータスバッジの条件分岐表示
- [x] 対象バッジの条件分岐表示
- [x] 投稿がない場合のメッセージ表示

## 共通コンポーネント

このセクションは以下の共通コンポーネントを使用:

### ボタン

- `.btn-primary` - プライマリボタン（赤いグラデーション）
- `components.css` で定義

## WordPress管理画面での設定

### 必要な投稿データ

各ウェビナー投稿に以下が必要:
1. タイトル（例: 「冬季・春節の訪日需要を逃すな！...」）
2. ACFフィールド:
   - 開催日: 2025/11/6
   - ステータス: これから開催 / 終了
   - 対象: 民間企業様向け / 自治体様向け
