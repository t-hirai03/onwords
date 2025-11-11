# CLAUDE.md

このファイルは、Claude Code (claude.ai/code) がこのリポジトリで作業する際のガイダンスを提供します。

## プロジェクト概要

株式会社OnwordsのコーポレートサイトをSTUDIOからWordPressに移行するためのカスタムテーマプロジェクトです。

**本番サイト（移行元）**: https://www.onwords.co.jp/ (STUDIOで構築、Nuxt.jsベース)
**ローカル環境**: http://localhost:10018/
**移行先プラットフォーム**: WordPress (カスタムテーマ)
**目標**: ピクセル単位で完全に同じ見た目を再現する

## 基本方針

### CRITICAL: ピクセルパーフェクト実装が必須

- **すべての実装で本番サイトから情報を取得する** - 推測・仮実装は禁止
- **Chrome DevTools MCP / Playwright MCP を使用** - 計算済みスタイルを正確に抽出
- **HTML構造とCSSを完全に一致させる** - 階層構造、BEM命名規則、疑似要素を正確に再現
- **実装後は必ず検証する** - 全ブレークポイント（デスクトップ・タブレット・モバイル）で確認

### 抽出アプローチ: 主要構造のみ抽出（推奨）

**効率的にページを再現するため、以下のアプローチを採用:**

1. **全体構造の把握** - ページ内の全セクションを特定し、見出しと主要な要素を記録
2. **画像の収集** - ページ内のすべての画像URLを収集し、curlコマンドでダウンロード
3. **概要ドキュメント作成** - `{ページ名}_overview.md` を作成して全体構造を保存
4. **詳細抽出は必要時のみ** - コーディング時に必要なセクションのみ詳細HTML/CSSを抽出

**メリット:**
- 大量のdata-s-*属性を処理する必要がない
- 全体像を把握してから実装できる
- 必要な情報だけを効率的に取得
- 画像は事前にダウンロードしてローカルで管理

### カスタムコマンド

詳細な実装手順は以下のカスタムコマンドを参照してください：

- `/studio-extract` - STUDIOサイトからHTML/CSS/JS/画像を抽出する詳細手順
- `/extract-studio-section` - 本番サイトの特定セクションのHTML/CSS/レスポンシブスタイルを抽出し、構造化ドキュメントとして保存（`.docs/extracted-sections/` に保存）
- `/verify-implementation` - 実装後の動作確認チェックリスト
- `/check-structure` - HTML階層構造とCSS確認の完全ワークフロー
- `/pixel-perfect` - 完全コピーのアプローチとプロパティ抽出手順
- `/review-code` - コーディング後のルール準拠チェック（CLAUDE.mdのCSSルール、HTML構造、STUDIOサイトとの見た目比較）

### 実装ワークフロー

**コーディング作業後は必ず以下の順番で実行してください：**

1. **コーディング完了**
2. **`/review-code` コマンドを実行** - CLAUDE.mdのCSSルール準拠、HTML構造、STUDIOサイトとの見た目比較を確認
3. **問題があれば即座に修正** - すべてのチェック項目がクリアされるまで繰り返す
4. **すべてクリアしたら次のタスクへ** - コミット・プッシュ・PR作成

このワークフローを守ることで、CLAUDE.mdのルールに沿った高品質なコードを保証できます。

## 開発環境

- **ローカル環境**: Local by Flywheel
- **作業ディレクトリ**: `/Users/t_hirai/Local Sites/onwords/app/public/wp-content/themes/onwords`
- **テーマ名**: onwords
- **WordPressバージョン**: 最新版（Local経由）

## テーマアーキテクチャ

### ディレクトリ構造

```
onwords/
├── functions.php           # テーマセットアップ
├── header.php             # サイトヘッダー
├── footer.php             # サイトフッター
├── front-page.php         # トップページ
├── page.php               # 汎用固定ページ
├── single-news.php        # お知らせ個別ページ（未実装）
├── archive-news.php       # お知らせ一覧ページ（未実装）
├── 404.php                # 404エラーページ（未実装）
├── assets/
│   ├── css/
│   │   ├── base.css           # リセットCSS・ベーススタイル
│   │   ├── variables.css      # CSS変数
│   │   ├── navigation.css     # ヘッダー・メニュー
│   │   ├── breadcrumb.css     # パンくずリスト
│   │   ├── footer.css         # フッター
│   │   ├── components.css     # 共通コンポーネント
│   │   ├── pagination.css     # ページネーション
│   │   ├── top.css            # トップページ専用（条件付き読み込み）
│   │   ├── business.css       # 事業内容ページ専用（条件付き読み込み）
│   │   ├── news.css           # お知らせページ専用（条件付き読み込み）
│   │   └── responsive.css     # レスポンシブ調整
│   ├── js/
│   │   ├── navigation.js
│   │   ├── animations.js
│   │   ├── smooth-scroll.js
│   │   └── main.js
│   ├── images/
│   │   ├── top/           # トップページ固有の画像
│   │   │   ├── hero/
│   │   │   ├── about/
│   │   │   ├── message/
│   │   │   └── business/
│   │   └── common/        # 共通画像（ロゴなど）
│   │       └── logo/
│   └── fonts/
├── template-parts/
│   ├── sections/          # ページセクション
│   │   ├── hero.php
│   │   ├── about.php
│   │   ├── message.php
│   │   ├── business.php
│   │   ├── news.php
│   │   └── inquiry.php
│   └── components/        # 再利用可能なコンポーネント
│       ├── news-item.php
│       └── business-card.php
└── inc/
    ├── custom-post-types.php
    ├── enqueue-scripts.php
    └── menus.php
```

### assetsディレクトリの管理

**画像の格納ルール:**
- トップページで使用する画像 → `images/top/セクション名/`
- 複数ページで共通使用する画像 → `images/common/`
- **画像ファイル名は元のファイル名を保持する**（リネーム禁止）

**アセットのパス取得:**
```php
<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg
```

### CSS設計とファイル管理

**🚨 CRITICAL: ページごとにCSSファイルを分割し、条件付き読み込みを行う**

**CSS設計方針:**
- **sections.cssは廃止する** - ページごとに分割して管理
- **トップページ**: `top.css` - front-page.phpで使用するスタイル
- **事業内容ページ**: `business.css` - 事業関連ページで使用するスタイル
- **お知らせページ**: `news.css` - お知らせ関連ページで使用するスタイル
- **共通コンポーネント**: `components.css` - 全ページで使用する汎用スタイル

**条件付き読み込み（inc/enqueue-scripts.php）:**
```php
// トップページのみ
if ( is_front_page() ) {
    wp_enqueue_style( 'onwords-top', get_template_directory_uri() . '/assets/css/top.css', array( 'onwords-variables' ), '1.0.0' );
}

// 事業内容ページのみ
if ( is_page( array( 'business', 'business-local', 'business-inbound' ) ) ) {
    wp_enqueue_style( 'onwords-business', get_template_directory_uri() . '/assets/css/business.css', array( 'onwords-variables' ), '1.0.0' );
}

// お知らせページのみ
if ( is_post_type_archive( 'news' ) || is_singular( 'news' ) ) {
    wp_enqueue_style( 'onwords-news', get_template_directory_uri() . '/assets/css/news.css', array( 'onwords-variables' ), '1.0.0' );
}
```

**読み込み順序:**
1. base.css（リセットCSS・ベーススタイル）
2. variables.css（CSS変数）
3. navigation.css（ヘッダー・メニュー）
4. breadcrumb.css（パンくずリスト）
5. footer.css（フッター）
6. components.css（共通コンポーネント）
7. pagination.css（ページネーション）
8. **ページ固有CSS（top.css / business.css / news.css）** ← 条件付き読み込み
9. responsive.css（レスポンシブ調整）

**メリット:**
- 必要なCSSのみ読み込み、パフォーマンス向上
- ページごとにスタイルが整理され、保守性が向上
- 特定ページのスタイル変更が他ページに影響しない

### カスタム投稿タイプ

**お知らせ (News)**
- 投稿タイプスラッグ: `news`
- タクソノミー: `news_category` (階層あり)
- デフォルトカテゴリ: 「お知らせ」「プレスリリース」
- テンプレート: `archive-news.php`, `single-news.php`

### ナビゲーションメニュー

3つのメニューロケーション:
1. `header-menu` - ヘッダーナビゲーション
2. `footer-main-menu` - フッター主要リンク
3. `footer-policy-menu` - フッターポリシーリンク

**ヘッダーメニューの静的リンク（WordPressメニューに含めない）:**
- **採用情報** - 外部リンクアイコン付き（Font Awesome `\f08e`）
- **お問い合わせ** - 赤いグラデーションボタン

## 命名規則

- **CSSクラス**: BEM形式（例: `hero__title`, `business-card--featured`）
- **PHP関数**: スネークケース + `onwords_` プレフィックス（例: `onwords_enqueue_scripts()`）
- **テンプレートファイル**: WordPress標準（例: `archive-{post-type}.php`）
- **アセットファイル**: ケバブケース（例: `smooth-scroll.js`, `base.css`）

## 共通CSSコンポーネント

複数ページで再利用可能なコンポーネントは `assets/css/components.css` に定義されています。

### アーカイブページ用コンポーネント

お知らせ、導入事例、ナレッジなどのアーカイブページで共通使用:

```css
/* フィルターボタン */
.archive-filter                    /* フィルターセクション全体 */
.archive-filter__container         /* 内側コンテナ（max-width: 1312px） */
.archive-filter__nav               /* ボタンナビゲーション */
.archive-filter__button            /* 各フィルターボタン */
.archive-filter__button--active    /* アクティブ状態のボタン */

/* ヒーローセクション */
.archive-hero-wrapper              /* ヒーロー外側ラッパー */
.archive-hero                      /* ヒーローセクション */
.archive-hero__overlay             /* オーバーレイ（背景暗く） */
.archive-hero__container           /* コンテンツコンテナ */
.archive-hero__label               /* 英語ラベル（例: NEWS） */
.archive-hero__title               /* タイトル（例: お知らせ） */

/* リストセクション */
.archive-list__container           /* リストコンテナ */
.archive-list__items               /* リスト項目の親要素 */
.archive-list__no-posts            /* 投稿がない場合のメッセージ */
```

**使用例（ニュースアーカイブ）:**
```php
<!-- フィルターボタン -->
<div class="archive-filter">
  <div class="archive-filter__container">
    <nav class="archive-filter__nav">
      <a href="/news/" class="archive-filter__button archive-filter__button--active">すべて</a>
      <a href="/news/?news_category=press-release" class="archive-filter__button">プレスリリース</a>
    </nav>
  </div>
</div>

<!-- ヒーローセクション -->
<div class="archive-hero-wrapper">
  <section class="archive-hero" style="background-image: url(...);">
    <div class="archive-hero__overlay"></div>
    <div class="archive-hero__container">
      <p class="archive-hero__label">News</p>
      <h1 class="archive-hero__title">お知らせ</h1>
    </div>
  </section>
</div>

<!-- リスト -->
<div class="archive-list__container">
  <ul class="archive-list__items">
    <!-- 記事項目 -->
  </ul>
</div>
```

### ボタンコンポーネント

```css
/* プライマリボタン（赤いグラデーションボタン） */
.btn-primary
.btn-primary:hover
```

**使用例:**
```html
<a href="/news" class="btn-primary">すべてのお知らせを見る</a>
```

### ニュース項目コンポーネント

```css
.news-item                  /* ニュース項目全体 */
.news-item:hover            /* ホバー時（背景色変化） */
.news-item__meta            /* 日付とカテゴリのコンテナ */
.news-item__date            /* 投稿日 */
.news-item__category        /* カテゴリラベル（赤背景） */
.news-item__title           /* タイトル */
.news-item:hover .news-item__title  /* ホバー時のタイトル色 */
```

**使用例:**
```html
<a href="/news/post-slug/" class="news-item">
  <div class="news-item__meta">
    <p class="news-item__date">2025/11/07</p>
    <p class="news-item__category">お知らせ</p>
  </div>
  <h3 class="news-item__title">記事タイトル</h3>
</a>
```

### ビジネスカードコンポーネント

```css
.card                       /* カード全体 */
.card--business             /* ビジネスカード専用スタイル */
.card__image                /* カード画像 */
.card__image--local-dx      /* 地域観光DX事業の画像 */
.card__image--inbound-marketing  /* 訪日マーケティングの画像 */
.card__text-container       /* テキストコンテナ */
.card__title                /* カードタイトル */
.card__description          /* カード説明文 */
```

### 共通アニメーション

```css
/* スクロールインアニメーション */
.fade-in-up                 /* 初期状態（非表示） */
.fade-in-up.appear          /* 表示状態 */

/* 速度バリエーション */
.fade-in-up--fast           /* 0.3s */
.fade-in-up--normal         /* 0.6s */
.fade-in-up--slow           /* 0.8s */
.fade-in-up--slower         /* 1.0s */

/* ディレイバリエーション */
.fade-in-up--delay-sm       /* 0.1s */
.fade-in-up--delay-md       /* 0.3s */
.fade-in-up--delay-lg       /* 0.5s */
```

### クラス命名の重要ルール

**特定のページ名を含めない - 汎用的な名前を使用**

```css
/* ❌ 避けるべき - 特定ページ名を含む */
.news-archive-filter
.news__view-all
.case-archive-hero

/* ✅ 推奨 - 汎用的な名前 */
.archive-filter        /* すべてのアーカイブページで使用可能 */
.btn-primary           /* すべてのページでボタンとして使用可能 */
.archive-hero          /* すべてのアーカイブページで使用可能 */
```

**理由:**
- 導入事例（Case）、ナレッジ（Knowledge）など他のアーカイブページでも同じスタイルを使用できる
- コードの重複を防ぎ、保守性が向上
- CSSファイルサイズの削減

## CSSレイアウトのベストプラクティス

### width/heightの固定を避ける

```css
/* ❌ 避けるべき - 固定値 */
.element {
  width: 500px;
  height: 300px;
}

/* ✅ 推奨 - 制約を使う */
.element {
  max-width: 500px;
  min-height: 300px;
}
```

### アイコンのフォントサイズを全ブレークポイントで統一

```css
/* ✅ 正しい実装 - 全ブレークポイントで同じサイズ */
.header__nav-link--external::after {
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  content: "\f08e";
  font-size: 14px; /* デスクトップ・タブレット・モバイル共通 */
  line-height: 1;
}
```

### 外部リンクアイコンの実装

**Font Awesome 6 を使用（::before疑似要素）:**
```css
.link-external::before {
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  content: "\f08e"; /* fa-arrow-up-right-from-square */
  font-size: 18px;
  line-height: 1;
  margin-left: 4px;
}
```

### ナビゲーションArrowアイコンの実装

**Material Icons + `<i>` タグを使用:**
```html
<a href="/page" class="header__mobile-menu-item">
  ページ名
  <i class="icon material-icons">keyboard_arrow_right</i>
</a>
```

### モバイル時のインナー余白ルール

```css
/* モバイル表示（767px以下）では、すべてのセクションの内側コンテナに16pxの左右余白 */
@media (max-width: 767px) {
  .about__container,
  .message__container,
  .business__container,
  .news__container,
  .inquiry__container {
    padding: 0 16px;
  }
}
```

### 余白とwidth設定の重要ルール

**🚨 CRITICAL: 絶対に忘れないこと 🚨**

**必ず `max-width: 1312px` + `margin: 0 auto` + `padding: 0 16px` のパターンを使用する**

このパターンにより、PC・タブレット・モバイル全てで自動的に適切な余白が確保されます。

**❌ 絶対に使用禁止のパターン:**

```css
/* ❌ calc()とmarginの組み合わせ - 絶対に使わない */
.container {
  max-width: calc(100% - 64px);
  margin: 0 32px;
}

/* ❌ calc()とpaddingの組み合わせ - 絶対に使わない */
.container {
  max-width: calc(100% - 32px);
  margin: 0 16px;
}

/* ❌ widthにcalc()を使う - 冗長で不要 */
.container {
  width: calc(100% - 64px);
  padding: 0 32px;
}
```

**✅ 正しいパターン（必ずこれを使う）:**

```css
/* ✅ 標準パターン: コンテンツ幅1280px + 左右余白16px */
.container {
  max-width: 1312px;  /* 1280px + 16px × 2 */
  margin: 0 auto;      /* 中央寄せ */
  padding: 0 16px;     /* 左右の余白 */
}

/* ✅ これだけでPC・タブレット・モバイル全て対応 */
/* ✅ レスポンシブでmax-width/margin/paddingの上書き不要 */
```

**このパターンを使う理由:**
- PC・タブレット・モバイル全デバイスで自動対応
- メディアクエリでの余白調整が不要
- コードがシンプルで保守しやすい
- calc()の複雑な計算が不要

**親要素で余白を管理する - 子要素に重複設定しない**

```css
/* ✅ 親要素で余白を管理 */
.news-archive-list__container {
  max-width: 1312px;
  margin: 0 auto;
  padding: 0 16px;  /* ← ここで左右16pxずつ確保 */
}

/* ✅ 子要素 - 左右の余白は不要 */
.news-archive-list__items {
  width: 100%;
  /* ❌ padding: 0 16px; - 不要！親要素で設定済み */
  /* ❌ width: calc(100% - 32px); - 不要！ */
}
```

**背景画像を持つ要素はラッパーで余白を管理**

```css
/* ✅ ラッパーで余白を管理 */
.hero-wrapper {
  max-width: 1312px;
  margin: 0 auto 40px;
  padding: 0 16px;
}

/* ✅ 背景画像要素 - paddingを設定しない */
.hero {
  width: 100%;
  height: 320px;
  background-image: url(...);
  border-radius: 20px;
  /* ❌ padding: 0 16px; - 画像が画面いっぱいに広がる問題 */
}
```

**フッター前のコンテンツには下余白を設定しない**

```css
/* ✅ 最下層コンテンツ - 下余白なし */
.last-content {
  padding: 0 32px;
}

/* フッターに上余白があるため重複不要 */
footer {
  padding-top: 80px;
}
```

**レスポンシブでの余白設定は不要**

**🚨 CRITICAL: `max-width: 1312px` + `margin: 0 auto` + `padding: 0 16px` パターンを使えば、メディアクエリでの余白調整は一切不要**

```css
/* ✅ ベーススタイルだけで全デバイス対応 */
.container {
  max-width: 1312px;
  margin: 0 auto;
  padding: 0 16px;
}

/* ✅ レスポンシブでは余白を上書きしない */
@media (max-width: 768px) {
  /* ❌ max-width/margin/paddingの上書き不要 */
  /* .container {
    max-width: calc(100% - 32px);
    margin: 0 16px;
  } */

  /* ✅ フォントサイズなど、必要なプロパティのみ調整 */
  .container h1 {
    font-size: 24px;
  }
}
```

**例外: 特定のブレークポイントで異なる余白が必要な場合のみ上書き**

```css
/* タブレットでのみ異なる余白が必要な場合 */
@media (min-width: 768px) and (max-width: 1023px) {
  .special-container {
    padding: 0 24px;  /* タブレットだけ24px */
  }
}
```

**スマホで余白・角丸をなくす場合の対応**

```css
@media (max-width: 767px) {
  .hero-wrapper {
    padding: 0;           /* 余白なし */
    margin-bottom: 32px;
  }

  .hero {
    border-radius: 0;     /* 角丸なし */
  }
}
```

## Playwright MCP のトラブルシューティング

**問題**: `about:blank` エラーや `Browser is already in use` エラーが発生する場合

**解決方法**:
```bash
# 1. ブラウザプロセスをクリア
pkill -f "mcp-chrome"

# 2. 新しいページに移動
mcp__playwright__browser_navigate (url: "https://www.onwords.co.jp/")
```

## プロジェクト計画ドキュメント

`.docs/` ディレクトリに重要な計画ドキュメントがあります:
1. `.docs/01_site_analysis.md` - STUDIOサイトの完全な構造分析
2. `.docs/02_component_plan.md` - WordPressテンプレート設計
3. `.docs/03_css_js_extraction_plan.md` - CSS/JS整理戦略
4. `.docs/04_migration_workflow.md` - 10フェーズの移行計画

## 作業開始前の必須事項

**必ずToDoリストを作成してから作業を開始してください。**

### 利用可能なツール

#### 1. TodoWriteツール（標準）
基本的なタスク管理に使用：
1. これから行う作業のタスクリストを作成
2. 各タスクを順番に進め、完了したらステータスを更新
3. 複数の作業がある場合は、すべてToDoに記載してから開始

#### 2. spec-workflow MCP（大規模な機能開発向け）
以下の場合に使用：
- 大規模な機能開発や実装を行う場合
- 要件定義からタスク分割まで体系的に管理する必要がある場合

spec-workflowのワークフロー：
1. 要件定義（Requirements）の作成
2. 設計ドキュメント（Design）の作成
3. タスク一覧（Tasks）の作成
4. 実装（Implementation）の実行

**注意**: どちらのツールを使用する場合でも、必ずタスクリストを作成してから作業を開始してください。

## お問い合わせフォーム

**推奨プラグイン**: Contact Form 7
- 軽量でカスタマイズ可能
- カスタムCSSで完全にスタイル制御可能
- `template-parts/sections/inquiry.php` でショートコード統合
