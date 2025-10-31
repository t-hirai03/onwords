# CSS/JS 抽出・整理方針

## CSS抽出方法

### 1. Chrome DevToolsで全CSSを取得
```
手順:
1. Chrome DevToolsを開く (F12)
2. Elements タブを選択
3. Computed タブで全スタイルを確認
4. Sources タブでCSSファイルを一つずつ確認・保存
5. インラインスタイルも抽出

抽出対象:
- 外部CSSファイル
- インラインCSS (<style>タグ)
- インラインスタイル属性 (style="...")
```

### 2. CSS整理方針

#### ファイル分割
```
assets/css/
├── reset.css           # CSSリセット/ノーマライズ
├── variables.css       # CSS変数（色、フォント、サイズ等）
├── base.css           # 基本スタイル（body, h1-h6, p等）
├── layout.css         # レイアウト（グリッド、コンテナ等）
├── components.css     # コンポーネント（ボタン、カード等）
├── sections.css       # セクション別スタイル
├── navigation.css     # ヘッダー・フッターナビゲーション
├── responsive.css     # メディアクエリ
└── main.css          # 上記をインポートするメインファイル
```

#### CSS変数の定義例
```css
:root {
  /* カラー */
  --color-primary: #000000;
  --color-secondary: #ffffff;
  --color-accent: #ff0000; /* 要確認 */
  --color-text: #333333;
  --color-text-light: #666666;
  --color-bg: #ffffff;
  --color-bg-dark: #f5f5f5;

  /* フォント */
  --font-primary: 'Noto Sans JP', sans-serif; /* 要確認 */
  --font-secondary: 'Roboto', sans-serif; /* 要確認 */

  /* フォントサイズ */
  --font-size-xs: 0.75rem;    /* 12px */
  --font-size-sm: 0.875rem;   /* 14px */
  --font-size-base: 1rem;     /* 16px */
  --font-size-lg: 1.125rem;   /* 18px */
  --font-size-xl: 1.25rem;    /* 20px */
  --font-size-2xl: 1.5rem;    /* 24px */
  --font-size-3xl: 2rem;      /* 32px */
  --font-size-4xl: 2.5rem;    /* 40px */
  --font-size-5xl: 3rem;      /* 48px */

  /* スペーシング */
  --space-xs: 0.25rem;   /* 4px */
  --space-sm: 0.5rem;    /* 8px */
  --space-md: 1rem;      /* 16px */
  --space-lg: 1.5rem;    /* 24px */
  --space-xl: 2rem;      /* 32px */
  --space-2xl: 3rem;     /* 48px */
  --space-3xl: 4rem;     /* 64px */
  --space-4xl: 6rem;     /* 96px */

  /* ブレークポイント */
  --breakpoint-sm: 640px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 1024px;
  --breakpoint-xl: 1280px;
  --breakpoint-2xl: 1536px;

  /* その他 */
  --border-radius: 4px;
  --border-radius-lg: 8px;
  --transition-speed: 0.3s;
  --box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
```

#### クラス命名規則: BEM (Block Element Modifier)
```css
/* Block */
.hero {}

/* Element */
.hero__title {}
.hero__subtitle {}

/* Modifier */
.hero--dark {}
.hero__title--large {}
```

## JavaScript抽出方法

### 1. Chrome DevToolsで全JSを取得
```
手順:
1. Chrome DevToolsを開く (F12)
2. Sources タブを選択
3. JSファイルを一つずつ確認・保存
4. インラインスクリプトも抽出
5. イベントリスナーを確認 (Elements > Event Listeners)

抽出対象:
- 外部JSファイル
- インラインJS (<script>タグ)
- イベントハンドラ (onclick等)
```

### 2. JavaScript整理方針

#### ファイル分割
```
assets/js/
├── utils.js           # ユーティリティ関数
├── navigation.js      # ナビゲーション制御（ハンバーガーメニュー等）
├── animations.js      # アニメーション（スクロールアニメーション等）
├── smooth-scroll.js   # スムーススクロール
├── forms.js          # フォーム関連
└── main.js           # メインスクリプト（初期化処理等）
```

#### 予想される機能
```javascript
// navigation.js
- ハンバーガーメニューの開閉
- スクロール時のヘッダー固定/背景変更
- モバイルメニューの制御

// animations.js
- スクロールアニメーション（フェードイン、スライドイン等）
- パララックス効果（あれば）
- ヒーローセクションのアニメーション

// smooth-scroll.js
- アンカーリンクのスムーススクロール
- スクロール位置の監視（ナビゲーションハイライト等）

// forms.js
- フォームバリデーション（Contact Form 7を使う場合は不要かも）
- カスタムフォーム動作

// main.js
- DOMContentLoaded時の初期化
- 各モジュールの呼び出し
```

#### モダンJavaScript方針
```javascript
// ES6+の使用
- const/let（varは使わない）
- アロー関数
- テンプレートリテラル
- 分割代入
- モジュール（import/export）

// イベント委譲の活用
// パフォーマンス最適化
- デバウンス/スロットル
- Intersection Observer API（スクロールアニメーション）
- passive イベントリスナー
```

## 依存ライブラリの確認

### 確認すべき項目
```
1. jQueryの使用有無
   - 使用している場合: WordPress同梱版を使用
   - 使用していない場合: Vanilla JSで実装

2. アニメーションライブラリ
   - GSAP
   - Anime.js
   - AOS (Animate On Scroll)
   - その他

3. スライダー/カルーセル
   - Swiper
   - Slick
   - Splide
   - その他

4. その他
   - Lottie (アニメーション)
   - Three.js (3D)
   - Particles.js
```

## WordPress での読み込み（functions.php）

### CSS/JSのエンキュー
```php
function onwords_enqueue_scripts() {
    // CSS
    wp_enqueue_style('onwords-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0');
    wp_enqueue_style('onwords-variables', get_template_directory_uri() . '/assets/css/variables.css', array('onwords-reset'), '1.0.0');
    wp_enqueue_style('onwords-base', get_template_directory_uri() . '/assets/css/base.css', array('onwords-variables'), '1.0.0');
    wp_enqueue_style('onwords-layout', get_template_directory_uri() . '/assets/css/layout.css', array('onwords-base'), '1.0.0');
    wp_enqueue_style('onwords-components', get_template_directory_uri() . '/assets/css/components.css', array('onwords-layout'), '1.0.0');
    wp_enqueue_style('onwords-sections', get_template_directory_uri() . '/assets/css/sections.css', array('onwords-components'), '1.0.0');
    wp_enqueue_style('onwords-navigation', get_template_directory_uri() . '/assets/css/navigation.css', array('onwords-sections'), '1.0.0');
    wp_enqueue_style('onwords-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('onwords-navigation'), '1.0.0');
    wp_enqueue_style('onwords-style', get_stylesheet_uri(), array('onwords-responsive'), '1.0.0');

    // JavaScript
    // jQueryが必要な場合
    // wp_enqueue_script('jquery');

    // カスタムスクリプト
    wp_enqueue_script('onwords-utils', get_template_directory_uri() . '/assets/js/utils.js', array(), '1.0.0', true);
    wp_enqueue_script('onwords-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('onwords-utils'), '1.0.0', true);
    wp_enqueue_script('onwords-animations', get_template_directory_uri() . '/assets/js/animations.js', array('onwords-utils'), '1.0.0', true);
    wp_enqueue_script('onwords-smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('onwords-utils'), '1.0.0', true);
    wp_enqueue_script('onwords-main', get_template_directory_uri() . '/assets/js/main.js', array('onwords-navigation', 'onwords-animations', 'onwords-smooth-scroll'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'onwords_enqueue_scripts');
```

## 抽出作業の優先順位

1. **最優先**: レイアウト・デザインの基本CSS
2. **高**: ナビゲーション（ヘッダー・フッター）のCSS/JS
3. **高**: 各セクションのCSS
4. **中**: アニメーション・インタラクション
5. **低**: エフェクト・装飾

## 注意事項

- STUDIOで自動生成されたクラス名は意味のある名前に変更
- 不要なベンダープレフィックスは削除（Autoprefixerを後で使用）
- インライン重要度（!important）は極力避ける
- CSSは可能な限りモジュール化・再利用可能に
- JavaScriptは極力依存ライブラリを減らす（軽量化）
