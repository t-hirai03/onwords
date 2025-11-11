# DOCUMENTS セクション - 詳細ドキュメント

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing
セクション: DOCUMENTS（お役立ち資料）

## セクション構造

```html
<section class="inbound-documents fade-in-up">
  <div class="inbound-documents__container">
    <!-- ヘッダー -->
    <div class="inbound-documents__header fade-in-up">
      <p class="inbound-documents__label">DOCUMENTS</p>
      <h2 class="inbound-documents__title">お役立ち資料</h2>
    </div>

    <!-- 資料リスト (1件のみ表示) -->
    <ul class="inbound-documents__list">
      <li class="inbound-documents__item fade-in-up">
        <a href="/knowledge/document/inbound-marketin-gpartner-service" class="inbound-documents__link">
          <div class="inbound-documents__meta">
            <time class="inbound-documents__date">2025/8/22</time>
            <span class="inbound-documents__target">民間企業様向け</span>
          </div>
          <h3 class="inbound-documents__item-title">
            【企業様向け】訪日マーケティングパートナー事業のご案内
          </h3>
        </a>
      </li>
    </ul>

    <!-- すべて見るボタン -->
    <div class="inbound-documents__button-wrapper">
      <a href="/knowledge/document" class="btn-primary">
        すべての資料を見る
      </a>
    </div>
  </div>
</section>
```

## 本番サイトの資料情報（1件）

| No | 公開日 | タイトル | 対象 | URL |
|----|--------|---------|------|-----|
| 1 | 2025/8/22 | 【企業様向け】訪日マーケティングパートナー事業のご案内 | 民間企業様向け | /knowledge/document/inbound-marketin-gpartner-service |

## CSS スタイル

### ベーススタイル

```css
/* Section Container (共通スタイル) */
.inbound-documents {
  max-width: 1312px;
  margin: 80px auto 0; /* 下マージンなし（最終セクション） */
  padding: 0 16px;
}

/* Header (共通スタイル) */
.inbound-documents__header {
  text-align: center;
  margin-block-end: 60px;
}

.inbound-documents__label {
  color: rgb(217, 30, 24);
  font-size: 14px;
  font-weight: 700;
  margin-block-end: 16px;
}

.inbound-documents__title {
  color: rgb(34, 34, 34);
  font-size: 28px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
}

/* Documents List (Single column, no grid) */
.inbound-documents__list {
  list-style: none;
  margin: 0 0 40px;
  padding: 0;
}

.inbound-documents__item {
  margin: 0;
}

/* Document Link (Card) */
.inbound-documents__link {
  display: block;
  padding: 24px;
  background-color: #f9f9f9;
  border-radius: 8px;
  text-decoration: none;
  color: inherit;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.inbound-documents__link:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

/* Meta Information (Date, Target) */
.inbound-documents__meta {
  display: flex;
  gap: 12px;
  margin-block-end: 16px;
  flex-wrap: wrap;
}

.inbound-documents__date {
  font-size: 14px;
  color: rgb(85, 85, 85);
}

/* Target Badge */
.inbound-documents__target {
  display: inline-block;
  padding: 4px 12px;
  font-size: 12px;
  background-color: #e0e0e0;
  border-radius: 4px;
  color: rgb(85, 85, 85);
}

/* Document Title */
.inbound-documents__item-title {
  font-size: 16px;
  font-weight: 700;
  line-height: 1.6;
  color: rgb(34, 34, 34);
  margin: 0;
}

/* Button Wrapper (共通スタイル) */
.inbound-documents__button-wrapper {
  text-align: center;
  margin-block-start: 40px;
}

/* No Posts Message (共通スタイル) */
.inbound-documents__no-posts {
  text-align: center;
  color: rgb(85, 85, 85);
  font-size: 16px;
  padding: 40px 0;
}
```

## 機能とインタラクション

### ホバーエフェクト

資料カードにマウスをホバーすると:
- 4px上に浮き上がる (`transform: translateY(-4px)`)
- 影が濃くなる (`box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1)`)
- トランジション時間: 0.3s ease

### レイアウト

- シングルカラム（グリッドなし）
- 1件のみ表示

### WordPress動的コンテンツ

カスタム投稿タイプ「document」から以下の条件で取得:
- 投稿数: 1件
- 順序: 新しい順

### ACFカスタムフィールド

- `document_date` - 公開日（Date Picker）
- `document_target` - 対象（Select: business / government）

## WordPress 実装ノート

### PHPテンプレート

ファイル: `template-parts/sections/inbound-documents.php`

```php
<?php
// Query documents
$document_args = array(
  'post_type'      => 'document',
  'posts_per_page' => 1,
  'orderby'        => 'date',
  'order'          => 'DESC',
);

$document_query = new WP_Query( $document_args );
?>

<section class="inbound-documents fade-in-up">
  <div class="inbound-documents__container">
    <div class="inbound-documents__header fade-in-up">
      <p class="inbound-documents__label">DOCUMENTS</p>
      <h2 class="inbound-documents__title">お役立ち資料</h2>
    </div>

    <?php if ( $document_query->have_posts() ) : ?>
      <ul class="inbound-documents__list">
        <?php while ( $document_query->have_posts() ) : $document_query->the_post(); ?>
          <?php
          $document_date   = get_field( 'document_date' );
          $document_target = get_field( 'document_target' );
          ?>
          <li class="inbound-documents__item fade-in-up">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="inbound-documents__link">
              <div class="inbound-documents__meta">
                <?php if ( $document_date ) : ?>
                  <time class="inbound-documents__date"><?php echo esc_html( $document_date ); ?></time>
                <?php endif; ?>

                <?php if ( $document_target ) : ?>
                  <span class="inbound-documents__target">
                    <?php echo $document_target === 'business' ? '民間企業様向け' : '自治体様向け'; ?>
                  </span>
                <?php endif; ?>
              </div>
              <h3 class="inbound-documents__item-title"><?php echo esc_html( get_the_title() ); ?></h3>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <div class="inbound-documents__button-wrapper">
        <a href="<?php echo esc_url( home_url( '/knowledge/document' ) ); ?>" class="btn-primary">
          すべての資料を見る
        </a>
      </div>

    <?php else : ?>
      <p class="inbound-documents__no-posts">現在、お役立ち資料はありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</section>
```

### カスタム投稿タイプ

ファイル: `inc/custom-post-types.php`

```php
function onwords_register_document_post_type() {
  $labels = array(
    'name'               => 'お役立ち資料',
    'singular_name'      => 'お役立ち資料',
    // ...
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'rewrite'            => array( 'slug' => 'knowledge/document' ),
    'has_archive'        => 'knowledge/document',
    'menu_icon'          => 'dashicons-media-document',
    'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
  );

  register_post_type( 'document', $args );
}
add_action( 'init', 'onwords_register_document_post_type' );
```

### ACFフィールド定義

ファイル: `inc/acf-fields.php`

```php
acf_add_local_field_group(
  array(
    'key'      => 'group_document',
    'title'    => 'お役立ち資料情報',
    'fields'   => array(
      array(
        'key'           => 'field_document_date',
        'label'         => '公開日',
        'name'          => 'document_date',
        'type'          => 'date_picker',
        'required'      => 1,
        'display_format' => 'Y/n/j',
        'return_format'  => 'Y/n/j',
      ),
      array(
        'key'           => 'field_document_target',
        'label'         => '対象',
        'name'          => 'document_target',
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
          'value'    => 'document',
        ),
      ),
    ),
  )
);
```

### CSS ファイル

ファイル: `assets/css/business.css`
- 行 971-982: セクションコンテナ（共通スタイル）
- 行 984-1013: ヘッダー（共通スタイル）
- 行 1179-1232: 資料リストスタイル
- 行 1235-1242: ボタンとメッセージ（共通スタイル）

### アニメーションクラス

- `.fade-in-up` - IntersectionObserver で実装
- スクロール時にフェードインアニメーション
- `assets/js/animations.js` で管理

## デザイン仕様

### カラー

| 要素 | カラーコード | 説明 |
|------|------------|------|
| ラベル（DOCUMENTS） | `rgb(217, 30, 24)` | 赤色 |
| タイトル | `rgb(34, 34, 34)` | ダークグレー |
| カード背景 | `#f9f9f9` | ライトグレー |
| 日付テキスト | `rgb(85, 85, 85)` | ミディアムグレー |
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
| 対象バッジ | 12px | 400 | - |
| カードタイトル | 16px | 700 | 1.6 |

### スペーシング

| 要素 | 値 | 説明 |
|------|---|------|
| セクション外側マージン | `80px auto 0` | 上80px、左右中央、下なし |
| セクションパディング | `0 16px` | 左右16px |
| ヘッダー下マージン | `60px` | - |
| リスト下マージン | `40px` | - |
| カードパディング | `24px` | 全方向 |
| メタ情報gap | `12px` | バッジ間 |
| メタ情報下マージン | `16px` | - |
| バッジパディング | `4px 12px` | - |

### レイアウト

| 要素 | 値 | 説明 |
|------|---|------|
| コンテナ最大幅 | `1312px` | 1280px + 16px × 2 |
| カード角丸 | `8px` | - |
| バッジ角丸 | `4px` | - |
| カードホバー移動 | `translateY(-4px)` | 上に4px |

## 実装チェックリスト

- [x] HTML構造の作成
- [x] BEMクラス命名規則の適用
- [x] CSSベーススタイルの実装
- [x] ホバーエフェクトの実装
- [x] フェードインアニメーションの適用
- [x] WP_Queryによる動的コンテンツ取得
- [x] ACFカスタムフィールドの設定
- [x] 対象バッジの条件分岐表示
- [x] 投稿がない場合のメッセージ表示

## 共通コンポーネント

このセクションは以下の共通コンポーネントを使用:

### ボタン

- `.btn-primary` - プライマリボタン（赤いグラデーション）
- `components.css` で定義

## WordPress管理画面での設定

### 必要な投稿データ

各資料投稿に以下が必要:
1. タイトル（例: 「【企業様向け】訪日マーケティングパートナー事業のご案内」）
2. ACFフィールド:
   - 公開日: 2025/8/22
   - 対象: 民間企業様向け / 自治体様向け

## セクション特性

### 最終セクション

このセクションはページの最後のセクションのため:
- `margin: 80px auto 0` - 下マージンなし
- フッターが上余白を持つため、重複余白を回避

### シングルカラムレイアウト

- グリッドレイアウトを使用しない
- 1件のみ表示
- カードは幅100%で表示
