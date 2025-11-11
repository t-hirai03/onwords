# OUR STRENGTHS セクション - 詳細ドキュメント

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing
セクション: OUR STRENGTHS（インバウンドの集客支援になぜOnwordsが選ばれるのか）

## セクション構造

```html
<section class="inbound-strengths fade-in-up">
  <div class="inbound-strengths__container">
    <!-- ヘッダー -->
    <div class="inbound-strengths__header fade-in-up">
      <p class="inbound-strengths__label">OUR STRENGTHS</p>
      <h2 class="inbound-strengths__title">インバウンドの集客支援になぜOnwordsが選ばれるのか</h2>
    </div>

    <div class="inbound-strengths__content">
      <!-- Sticky Navigation (Desktop only) -->
      <nav class="inbound-strengths__nav">
        <ul class="inbound-strengths__nav-list">
          <li class="inbound-strengths__nav-item">
            <a href="#feature-1" class="inbound-strengths__nav-link">
              01. 訪日インバウンドに特化した専門性
            </a>
          </li>
          <li class="inbound-strengths__nav-item">
            <a href="#feature-2" class="inbound-strengths__nav-link">
              02. WAmazingの独自データに基づいた施策
            </a>
          </li>
          <li class="inbound-strengths__nav-item">
            <a href="#feature-3" class="inbound-strengths__nav-link">
              03. 現地スタッフがもたらすリアルな視点
            </a>
          </li>
        </ul>
      </nav>

      <!-- Details List -->
      <ul class="inbound-strengths__details">
        <!-- Detail 01 -->
        <li id="feature-1" class="inbound-strengths__detail fade-in-up"
            style="background-image: url('...');">
          <div class="inbound-strengths__detail-overlay"></div>
          <div class="inbound-strengths__detail-content">
            <span class="inbound-strengths__detail-number">01</span>
            <h3 class="inbound-strengths__detail-title">訪日インバウンドに特化した専門性</h3>
            <p class="inbound-strengths__detail-description">
              訪日インバウンド市場は独自のノウハウが求められる特殊な領域です。数多くの実績と知見を持つ私たちは、貴社のビジネスに最適な戦略を立案から実行までワンストップで支援。一般的なマーケティング会社では解決が難しいインバウンド特有の課題にも、専門家として的確にお応えします。
            </p>
          </div>
        </li>

        <!-- Detail 02 -->
        <li id="feature-2" class="inbound-strengths__detail fade-in-up"
            style="background-image: url('...');">
          <div class="inbound-strengths__detail-overlay"></div>
          <div class="inbound-strengths__detail-content">
            <span class="inbound-strengths__detail-number">02</span>
            <h3 class="inbound-strengths__detail-title">WAmazingの独自データに基づいた施策</h3>
            <p class="inbound-strengths__detail-description">
              約70万人規模の訪日外国人会員基盤を持つWAmazing社と業務提携を締結。同社が保有するオンライン旅行サービス（OTA）の予約データや行動データなど、他に類を見ない生きたデータを活用することで、訪日旅行者のリアルなニーズを深く洞察します。これにより、データドリブンな意思決定に基づいた、より精度の高いインバウンド戦略と施策の実行を可能にします。
            </p>
          </div>
        </li>

        <!-- Detail 03 -->
        <li id="feature-3" class="inbound-strengths__detail fade-in-up">
          <div class="inbound-strengths__detail-overlay"></div>
          <div class="inbound-strengths__detail-content">
            <span class="inbound-strengths__detail-number">03</span>
            <h3 class="inbound-strengths__detail-title">現地スタッフがもたらすリアルな視点</h3>
            <p class="inbound-strengths__detail-description">
              台湾、香港のマーケットに精通した現地スタッフが、チームに多数在籍しています。数値データだけでは分からない、最新のトレンドや文化、嗜好をリアルタイムに把握。現地の感覚を施策に反映することで、訪日旅行者の心に響く、質の高いプロモーションを実現します。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
```

## 背景画像

| 項目 | 画像URL | 保存先 |
|------|---------|--------|
| 01. 訪日インバウンドに特化した専門性 | https://images.unsplash.com/photo-1700621861859-96294b8a6d78... | `assets/images/business/inboundmarketing/strength_01_fuji.webp` |
| 02. WAmazingの独自データに基づいた施策 | https://images.unsplash.com/photo-1686061593213-98dad7c599b9... | `assets/images/business/inboundmarketing/strength_02_data.webp` |
| 03. 現地スタッフがもたらすリアルな視点 | なし（背景画像なし） | - |

## CSS スタイル

### ベーススタイル

```css
/* Section Container */
.inbound-strengths {
  max-width: 1312px;
  margin: 80px auto;
  padding: 0 16px;
}

/* Header */
.inbound-strengths__header {
  text-align: center;
  margin-block-end: 60px;
}

.inbound-strengths__label {
  color: rgb(217, 30, 24);
  font-size: 14px;
  font-weight: 700;
  margin-block-end: 16px;
}

.inbound-strengths__title {
  color: rgb(34, 34, 34);
  font-size: 28px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
}

/* Content Layout */
.inbound-strengths__content {
  display: flex;
  gap: 40px;
}

/* Sticky Navigation (Desktop) */
.inbound-strengths__nav {
  flex: 0 0 280px;
  position: sticky;
  top: 100px;
  align-self: flex-start;
}

.inbound-strengths__nav-list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.inbound-strengths__nav-item {
  margin: 0;
}

.inbound-strengths__nav-link {
  display: block;
  padding: 12px 16px;
  color: rgb(34, 34, 34);
  font-size: 14px;
  font-weight: 500;
  text-decoration: none;
  border-left: 3px solid transparent;
  transition: all 0.3s ease;
}

.inbound-strengths__nav-link:hover {
  border-left-color: rgb(217, 30, 24);
  background-color: rgba(217, 30, 24, 0.05);
}

/* Details List */
.inbound-strengths__details {
  flex: 1;
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

/* Detail Item (with background image) */
.inbound-strengths__detail {
  position: relative;
  min-height: 400px;
  padding: 60px 40px;
  border-radius: 12px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
}

/* Overlay (darkens background image) */
.inbound-strengths__detail-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1;
}

/* Detail Content (text on top of overlay) */
.inbound-strengths__detail-content {
  position: relative;
  z-index: 2;
  color: #fff;
}

.inbound-strengths__detail-number {
  display: block;
  font-size: 48px;
  font-weight: 700;
  margin-block-end: 16px;
  opacity: 0.8;
}

.inbound-strengths__detail-title {
  font-size: 24px;
  font-weight: 700;
  margin-block-end: 20px;
}

.inbound-strengths__detail-description {
  font-size: 15px;
  line-height: 1.75;
  margin: 0;
}
```

### レスポンシブスタイル

#### タブレット (max-width: 840px)

```css
@media screen and (max-width: 840px) {
  /* Hide sticky navigation on tablet/mobile */
  .inbound-strengths__nav {
    display: none;
  }

  /* Stack content vertically */
  .inbound-strengths__content {
    flex-direction: column;
  }
}
```

#### モバイル (max-width: 540px)

```css
@media screen and (max-width: 540px) {
  /* Reduce detail item height and padding */
  .inbound-strengths__detail {
    min-height: 300px;
    padding: 40px 24px;
  }

  /* Smaller number */
  .inbound-strengths__detail-number {
    font-size: 36px;
  }

  /* Smaller title */
  .inbound-strengths__detail-title {
    font-size: 20px;
  }
}
```

## 機能とインタラクション

### Sticky Navigation

デスクトップ表示時のみ、左側のナビゲーションがスクロールに追従します:
- `position: sticky`
- `top: 100px` - ヘッダーの高さを考慮
- タブレット・モバイルでは非表示 (`display: none`)

### Smooth Scroll

ナビゲーションリンクをクリックすると、対応する詳細項目へスムーズスクロール:
- JavaScript: `assets/js/smooth-scroll.js`
- `scrollIntoView({ behavior: 'smooth', block: 'start' })`

```javascript
document.addEventListener('DOMContentLoaded', function() {
  const inboundNavLinks = document.querySelectorAll('.inbound-strengths__nav-link');

  if (inboundNavLinks.length > 0) {
    inboundNavLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }
});
```

### Background Overlay

各詳細項目の背景画像には、テキストの可読性を確保するためのオーバーレイ:
- `.inbound-strengths__detail-overlay`
- `background: rgba(0, 0, 0, 0.5)` - 50%の黒い半透明オーバーレイ
- `z-index: 1` - 背景画像の上、テキストの下

## WordPress 実装ノート

### PHPテンプレート

ファイル: `template-parts/sections/inbound-strengths.php`

```php
<section class="inbound-strengths fade-in-up">
  <div class="inbound-strengths__container">
    <div class="inbound-strengths__header fade-in-up">
      <p class="inbound-strengths__label">OUR STRENGTHS</p>
      <h2 class="inbound-strengths__title">インバウンドの集客支援になぜOnwordsが選ばれるのか</h2>
    </div>

    <div class="inbound-strengths__content">
      <!-- Sticky Navigation -->
      <nav class="inbound-strengths__nav">
        <ul class="inbound-strengths__nav-list">
          <li class="inbound-strengths__nav-item">
            <a href="#feature-1" class="inbound-strengths__nav-link">01. 訪日インバウンドに特化した専門性</a>
          </li>
          <!-- ... -->
        </ul>
      </nav>

      <!-- Details List -->
      <ul class="inbound-strengths__details">
        <li id="feature-1" class="inbound-strengths__detail fade-in-up"
            style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/business/inboundmarketing/strength_01_fuji.webp' ); ?>');">
          <div class="inbound-strengths__detail-overlay"></div>
          <div class="inbound-strengths__detail-content">
            <span class="inbound-strengths__detail-number">01</span>
            <h3 class="inbound-strengths__detail-title">訪日インバウンドに特化した専門性</h3>
            <p class="inbound-strengths__detail-description">
              訪日インバウンド市場は独自のノウハウが求められる特殊な領域です...
            </p>
          </div>
        </li>
        <!-- ... -->
      </ul>
    </div>
  </div>
</section>
```

### CSS ファイル

ファイル: `assets/css/business.css`
- 行 787-906: ベーススタイル
- 行 1273-1279: タブレットレスポンシブ
- 行 1323-1334: モバイルレスポンシブ

### JavaScript ファイル

ファイル: `assets/js/smooth-scroll.js`
- スムーズスクロール機能を実装

### アニメーションクラス

- `.fade-in-up` - IntersectionObserver で実装
- スクロール時にフェードインアニメーション
- `assets/js/animations.js` で管理

## デザイン仕様

### カラー

| 要素 | カラーコード | 説明 |
|------|------------|------|
| ラベル（OUR STRENGTHS） | `rgb(217, 30, 24)` | 赤色 |
| タイトル | `rgb(34, 34, 34)` | ダークグレー |
| ナビゲーションリンク（通常） | `rgb(34, 34, 34)` | ダークグレー |
| ナビゲーションリンク（ホバー） | `rgb(217, 30, 24)` | 赤色（左ボーダー） |
| ナビゲーション背景（ホバー） | `rgba(217, 30, 24, 0.05)` | 薄い赤 |
| 詳細コンテンツテキスト | `#fff` | 白色 |
| 背景オーバーレイ | `rgba(0, 0, 0, 0.5)` | 半透明黒 |

### タイポグラフィ

| 要素 | フォントサイズ | フォントウェイト | 行高 |
|------|--------------|----------------|------|
| ラベル | 14px | 700 | - |
| タイトル | 28px | 700 | 1.5 |
| ナビゲーションリンク | 14px | 500 | - |
| 詳細番号 | 48px (モバイル: 36px) | 700 | - |
| 詳細タイトル | 24px (モバイル: 20px) | 700 | - |
| 詳細説明 | 15px | 400 | 1.75 |

### スペーシング

| 要素 | 値 | 説明 |
|------|---|------|
| セクション外側マージン | `80px auto` | 上下80px、左右中央 |
| セクションパディング | `0 16px` | 左右16px |
| ヘッダー下マージン | `60px` | - |
| コンテンツgap | `40px` | ナビとdetails間 |
| ナビゲーションリンクgap | `16px` | 縦方向 |
| 詳細リストgap | `40px` | 項目間 |
| 詳細アイテムパディング | `60px 40px` (モバイル: `40px 24px`) | 内側余白 |

### レイアウト

| 要素 | 値 | 説明 |
|------|---|------|
| コンテナ最大幅 | `1312px` | 1280px + 16px × 2 |
| ナビゲーション幅 | `280px` | 固定幅 |
| 詳細リスト幅 | `flex: 1` | 残りのスペース |
| 詳細アイテム最小高さ | `400px` (モバイル: `300px`) | - |
| 詳細アイテム角丸 | `12px` | - |

## 実装チェックリスト

- [x] HTML構造の作成
- [x] BEMクラス命名規則の適用
- [x] CSSベーススタイルの実装
- [x] レスポンシブスタイルの実装
- [x] 背景画像の配置
- [x] Sticky navigation の実装
- [x] Smooth scroll JavaScriptの実装
- [x] フェードインアニメーションの適用
- [x] 本番サイトとの説明文の一致確認

## 本番サイトとの差異

実装済みのコードは本番サイトと以下の点で異なります:

### 説明文の短縮版が使用されている

現在のPHPテンプレートでは簡略化された説明文が使用されていますが、本番サイトでは上記のより詳細な説明文が使用されています。

必要に応じて、PHPテンプレートの説明文を本番サイトの内容に合わせて更新する必要があります。
