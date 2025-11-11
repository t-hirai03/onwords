# OUR BUSINESS RECORD セクション - 詳細ドキュメント

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing
セクション: OUR BUSINESS RECORD（取引実績）

## セクション構造

```html
<section class="inbound-business-record fade-in-up">
  <div class="inbound-business-record__container">
    <!-- ヘッダー -->
    <div class="inbound-business-record__header fade-in-up">
      <p class="inbound-business-record__label">OUR BUSINESS RECORD</p>
      <h2 class="inbound-business-record__title">取引実績</h2>
    </div>

    <!-- ロゴグリッドリスト (5列グリッド) -->
    <ul class="inbound-business-record__list">
      <li class="inbound-business-record__item fade-in-up">
        <img
          src="assets/images/business/inboundmarketing/client_logo_01.webp"
          alt="クライアント企業ロゴ"
          class="inbound-business-record__logo"
          loading="lazy"
        >
      </li>

      <li class="inbound-business-record__item fade-in-up">
        <img
          src="assets/images/business/inboundmarketing/client_logo_02.webp"
          alt="クライアント企業ロゴ"
          class="inbound-business-record__logo"
          loading="lazy"
        >
      </li>

      <li class="inbound-business-record__item fade-in-up">
        <img
          src="assets/images/business/inboundmarketing/client_logo_03.webp"
          alt="クライアント企業ロゴ"
          class="inbound-business-record__logo"
          loading="lazy"
        >
      </li>

      <!-- 本番サイトには5つのロゴがありますが、現在は3つのみ実装 -->
    </ul>
  </div>
</section>
```

## ロゴ画像

| No | 画像ファイル | 保存先 |
|----|------------|--------|
| 1 | client_logo_01.webp | `assets/images/business/inboundmarketing/` |
| 2 | client_logo_02.webp | `assets/images/business/inboundmarketing/` |
| 3 | client_logo_03.webp | `assets/images/business/inboundmarketing/` |

本番サイトには5つのロゴが表示されていますが、現在の実装では3つのみです。

## CSS スタイル

### ベーススタイル

```css
/* Section Container (共通スタイル) */
.inbound-business-record {
  max-width: 1312px;
  margin: 80px auto;
  padding: 0 16px;
}

/* Header (共通スタイル) */
.inbound-business-record__header {
  text-align: center;
  margin-block-end: 60px;
}

.inbound-business-record__label {
  color: rgb(217, 30, 24);
  font-size: 14px;
  font-weight: 700;
  margin-block-end: 16px;
}

.inbound-business-record__title {
  color: rgb(34, 34, 34);
  font-size: 28px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
}

/* Logo Grid List */
.inbound-business-record__list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 24px;
}

/* Logo Item (Card with border) */
.inbound-business-record__item {
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  background-color: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
}

/* Logo Image */
.inbound-business-record__logo {
  max-width: 100%;
  height: auto;
  object-fit: contain;
}
```

### レスポンシブスタイル

#### タブレット (max-width: 840px)

```css
@media screen and (max-width: 840px) {
  /* 3列グリッドに変更 */
  .inbound-business-record__list {
    grid-template-columns: repeat(3, 1fr);
  }
}
```

#### モバイル (max-width: 540px)

```css
@media screen and (max-width: 540px) {
  /* 2列グリッドに変更 */
  .inbound-business-record__list {
    grid-template-columns: repeat(2, 1fr);
  }
}
```

## 機能とインタラクション

### グリッドレイアウト

- デスクトップ: 5列グリッド
- タブレット (840px以下): 3列グリッド
- モバイル (540px以下): 2列グリッド

### フェードインアニメーション

- 各ロゴアイテムに `.fade-in-up` クラス
- IntersectionObserver で実装
- スクロール時に順次表示

## WordPress 実装ノート

### PHPテンプレート

ファイル: `template-parts/sections/inbound-business-record.php`

```php
<section class="inbound-business-record fade-in-up">
  <div class="inbound-business-record__container">
    <div class="inbound-business-record__header fade-in-up">
      <p class="inbound-business-record__label">OUR BUSINESS RECORD</p>
      <h2 class="inbound-business-record__title">取引実績</h2>
    </div>

    <ul class="inbound-business-record__list">
      <li class="inbound-business-record__item fade-in-up">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/business/inboundmarketing/client_logo_01.webp' ); ?>"
          alt="クライアント企業ロゴ"
          class="inbound-business-record__logo"
          loading="lazy"
        >
      </li>
      <!-- 残りのロゴ項目 -->
    </ul>
  </div>
</section>
```

### CSS ファイル

ファイル: `assets/css/business.css`
- 行 971-1101: ベーススタイル（共通ヘッダーを含む）
- 行 1289-1291: タブレットレスポンシブ
- 行 1340-1342: モバイルレスポンシブ

### 画像ファイル

ディレクトリ: `assets/images/business/inboundmarketing/`
- `client_logo_01.webp` (200×200px)
- `client_logo_02.webp` (200×200px)
- `client_logo_03.webp` (201×200px)

### アニメーションクラス

- `.fade-in-up` - IntersectionObserver で実装
- スクロール時にフェードインアニメーション
- `assets/js/animations.js` で管理

## デザイン仕様

### カラー

| 要素 | カラーコード | 説明 |
|------|------------|------|
| ラベル（OUR BUSINESS RECORD） | `rgb(217, 30, 24)` | 赤色 |
| タイトル | `rgb(34, 34, 34)` | ダークグレー |
| カード背景 | `#fff` | 白色 |
| カードボーダー | `#e0e0e0` | ライトグレー |

### タイポグラフィ

| 要素 | フォントサイズ | フォントウェイト | 行高 |
|------|--------------|----------------|------|
| ラベル | 14px | 700 | - |
| タイトル | 28px | 700 | 1.5 |

### スペーシング

| 要素 | 値 | 説明 |
|------|---|------|
| セクション外側マージン | `80px auto` | 上下80px、左右中央 |
| セクションパディング | `0 16px` | 左右16px |
| ヘッダー下マージン | `60px` | - |
| グリッドgap | `24px` | ロゴ間の間隔 |
| カードパディング | `24px` | 全方向 |

### レイアウト

| 要素 | 値 | 説明 |
|------|---|------|
| コンテナ最大幅 | `1312px` | 1280px + 16px × 2 |
| グリッド列（デスクトップ） | `repeat(5, 1fr)` | 5列 |
| グリッド列（タブレット） | `repeat(3, 1fr)` | 3列 |
| グリッド列（モバイル） | `repeat(2, 1fr)` | 2列 |
| カード角丸 | `8px` | - |
| カードボーダー幅 | `1px` | - |

## 実装チェックリスト

- [x] HTML構造の作成
- [x] BEMクラス命名規則の適用
- [x] CSSベーススタイルの実装
- [x] グリッドレイアウトの実装
- [x] レスポンシブスタイルの実装
- [x] フェードインアニメーションの適用
- [x] 3つのロゴ画像の配置
- [ ] 残り2つのロゴ画像の追加（本番サイト準拠）

## 本番サイトとの差異

### ロゴの数

- **本番サイト**: 5つのロゴ
- **現在の実装**: 3つのロゴ

残り2つのロゴを追加する必要があります。

## カスタマイズ方法

### ロゴの追加

ロゴを追加するには:

1. ロゴ画像を `assets/images/business/inboundmarketing/` に配置
2. PHPテンプレートに新しい `<li>` 要素を追加:

```php
<li class="inbound-business-record__item fade-in-up">
  <img
    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/business/inboundmarketing/client_logo_04.webp' ); ?>"
    alt="クライアント企業ロゴ"
    class="inbound-business-record__logo"
    loading="lazy"
  >
</li>
```

### ACFでの動的管理（オプション）

静的HTMLの代わりに、Advanced Custom Fields（ACF）でロゴを管理する場合:

1. ACFでリピーターフィールド「client_logos」を作成
2. サブフィールド「logo_image」（画像タイプ）を追加
3. PHPテンプレートを以下のように変更:

```php
<?php if ( have_rows( 'client_logos' ) ) : ?>
  <ul class="inbound-business-record__list">
    <?php while ( have_rows( 'client_logos' ) ) : the_row(); ?>
      <li class="inbound-business-record__item fade-in-up">
        <?php
        $logo = get_sub_field( 'logo_image' );
        if ( $logo ) :
          ?>
          <img
            src="<?php echo esc_url( $logo['url'] ); ?>"
            alt="<?php echo esc_attr( $logo['alt'] ); ?>"
            class="inbound-business-record__logo"
            loading="lazy"
          >
        <?php endif; ?>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
```
