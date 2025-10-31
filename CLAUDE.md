# CLAUDE.md

このファイルは、Claude Code (claude.ai/code) がこのリポジトリで作業する際のガイダンスを提供します。

## プロジェクト概要

株式会社OnwordsのコーポレートサイトをSTUDIOからWordPressに移行するためのカスタムテーマプロジェクトです。現在、移行作業のフェーズ1-2の初期段階にあります。

**移行元サイト**: https://www.onwords.co.jp/ (STUDIOで構築)
**元の技術**: STUDIO (Nuxt.jsベース)
**移行先プラットフォーム**: WordPress (カスタムテーマ)
**目標**: ピクセル単位で完全に同じ見た目を再現する

### 移行戦略

1. **Chrome DevTools MCP** を使用して、移行元サイトのHTML構造を分析・抽出
2. すべてのCSS（Nuxt.jsページ内の `<style>` タグを含む）を抽出し、整理された `.css` ファイルに統合
3. すべてのJavaScriptを抽出し、WordPress統合用にリファクタリング
4. WordPressテンプレート構造を使用して、完全に同じ見た目を再現
5. Nuxt.jsのコンポーネントパターンをWordPress PHPテンプレートに変換

**重要**: STUDIOサイトはNuxt.jsで構築されているため、以下の点に注意が必要：
- HTML構造はVue.js/Nuxt.jsの規約を使用（data属性、コンポーネントラッパーがある可能性）
- CSSはページ内の `<style>` タグに埋め込まれていることが多い（外部ファイルに抽出する必要あり）
- JavaScriptはVue.jsのリアクティビティパターンを含む可能性（バニラJSまたは標準的なWordPressパターンに変換が必要）
- HTMLはWordPressテンプレート階層とPHPテンプレートタグに適応させる必要あり

## 開発環境

- **ローカル環境**: Local by Flywheel
- **作業ディレクトリ**: `/Users/t_hirai/Local Sites/onwords/app/public/wp-content/themes/onwords`
- **テーマ名**: onwords
- **WordPressバージョン**: 最新版（Local経由）

## プロジェクト計画ドキュメント

`.docs/` ディレクトリに重要な計画ドキュメントがあります。**実装作業を開始する前に必ず読んでください**:

1. `.docs/01_site_analysis.md` - STUDIOサイトの完全な構造分析
2. `.docs/02_component_plan.md` - WordPressテンプレート設計とコンポーネント分割
3. `.docs/03_css_js_extraction_plan.md` - CSS/JS整理戦略
4. `.docs/04_migration_workflow.md` - 詳細なチェックリスト付き10フェーズの移行計画

## テーマアーキテクチャ

### 計画中のディレクトリ構造

```
onwords/
├── functions.php           # テーマセットアップ、メニュー、カスタム投稿タイプ、スクリプト読み込み
├── header.php             # サイトヘッダー（ロゴ、ナビゲーション）
├── footer.php             # サイトフッター（2つのナビゲーションメニュー）
├── front-page.php         # トップページテンプレート
├── page.php               # 汎用固定ページテンプレート
├── single-news.php        # お知らせ個別ページ
├── archive-news.php       # お知らせ一覧ページ
├── 404.php                # 404エラーページ
├── assets/
│   ├── css/
│   │   ├── reset.css
│   │   ├── variables.css    # CSSカスタムプロパティ
│   │   ├── base.css
│   │   ├── layout.css
│   │   ├── components.css
│   │   ├── sections.css
│   │   ├── navigation.css
│   │   └── responsive.css
│   ├── js/
│   │   ├── utils.js
│   │   ├── navigation.js    # ハンバーガーメニュー、スクロールエフェクト
│   │   ├── animations.js    # スクロールアニメーション、エフェクト
│   │   ├── smooth-scroll.js
│   │   └── main.js          # 初期化処理
│   ├── images/
│   └── fonts/
├── template-parts/
│   ├── sections/           # トップページのセクション
│   │   ├── hero.php
│   │   ├── about.php
│   │   ├── message.php
│   │   ├── business.php
│   │   ├── news.php
│   │   └── inquiry.php
│   └── components/         # 再利用可能なコンポーネント
│       ├── news-item.php
│       └── business-card.php
└── inc/
    ├── custom-post-types.php  # 'news' 投稿タイプの登録
    ├── enqueue-scripts.php    # CSS/JS読み込み
    └── menus.php              # メニュー登録
```

### カスタム投稿タイプ

**お知らせ (News)**
- 投稿タイプスラッグ: `news`
- タクソノミー: `news_category` (階層あり)
- デフォルトカテゴリ: 「お知らせ」「プレスリリース」
- テンプレート: `archive-news.php`, `single-news.php`

### ナビゲーションメニュー

3つのメニューロケーションを登録する必要があります:
1. `header-menu` - ヘッダーナビゲーション
2. `footer-main-menu` - フッター主要リンク（TOP、会社概要、採用情報など）
3. `footer-policy-menu` - フッターポリシーリンク（プライバシーポリシー、セキュリティ、コンプライアンスなど）

### CSS整理戦略

- **CSSカスタムプロパティの使用**: `variables.css`で色、スペーシング、フォントを定義
- **BEM命名規則**: クラス名は Block__Element--Modifier 形式
- **モバイルファーストのレスポンシブデザイン**: ブレークポイント:
  - モバイル: 〜767px
  - タブレット: 768px〜1023px
  - デスクトップ: 1024px〜
- **モジュール化されたCSSファイル**: `wp_enqueue_style()` で依存関係順に読み込み

### JavaScript整理戦略

- **ES6+構文**: const/let、アロー関数、テンプレートリテラルを使用
- **バニラJavaScript優先**: 必要でなければjQueryは使わない
- **モジュールパターン**: 機能ごとに整理
- **イベント委譲**: パフォーマンスのため
- **Intersection Observer API**: スクロールアニメーション用
- すべてのスクリプトは `wp_enqueue_script()` で `true` フラグを指定してフッターで読み込み

## お問い合わせフォーム

**推奨プラグイン**: Contact Form 7
- 軽量でカスタマイズ可能
- カスタムCSSで完全にスタイル制御可能
- 最新版ではjQuery依存なし
- `template-parts/sections/inquiry.php` でショートコード統合

## 現在の実装状況

**完了済み**:
- 基本テーマファイルの作成 (`style.css`, `index.php`)
- `.docs/` 内の計画ドキュメント
- ローカルWordPress環境のセットアップ

**次のステップ** (`.docs/04_migration_workflow.md` 参照):
- STUDIOサイトからCSS/JSを抽出
- すべての画像とアセットを抽出
- フォントを抽出してライセンス確認
- ディレクトリ構造の作成
- `functions.php` でテーマセットアップを実装

## STUDIO移行の作業方法

### Chrome DevTools MCPの使用

**主要ツール**: Chrome DevTools MCP統合を使用して、移行元サイトを分析します。

サイト分析用の利用可能なMCPコマンド:
- `mcp__chrome-devtools__navigate_page` - https://www.onwords.co.jp/ に移動
- `mcp__chrome-devtools__take_snapshot` - ページ構造のアクセシビリティツリースナップショットを取得
- `mcp__chrome-devtools__take_screenshot` - 開発中の視覚的リファレンスをキャプチャ
- `mcp__chrome-devtools__list_network_requests` - すべての読み込まれたリソースを表示
- `mcp__chrome-devtools__evaluate_script` - JSを実行して計算済みスタイルを抽出

**ワークフロー**:
1. `take_snapshot` でセマンティックなHTML構造を取得
2. `take_screenshot` で開発中の視覚的リファレンスを取得
3. `list_network_requests` ですべてのCSS/JS/画像ファイルを特定
4. `evaluate_script` で要素から計算済みスタイルを抽出

### STUDIO/Nuxt.js固有の注意事項

**重要**: 移行元サイトはSTUDIO（Nuxt.jsベース）で構築されています。これには特別な対応が必要です:

#### HTML構造の変換

**Nuxt.jsパターン → WordPressパターン**:
- Vue.jsのdata属性を削除 (`data-v-*`, `data-nuxt-*`)
- `<nuxt-link>` を標準的な `<a>` タグに変換し、WordPressのパーマリンクを使用
- クライアントサイドルーティングをWordPressナビゲーションに置き換え
- Vueコンポーネントラッパーを削除し、構造をフラット化
- セマンティックタグをWordPressテンプレート階層構造に変換

**例**:
```html
<!-- Nuxt.js（移行元） -->
<div data-v-123abc class="hero">
  <nuxt-link to="/about">About</nuxt-link>
</div>

<!-- WordPress（移行先） -->
<div class="hero">
  <a href="<?php echo get_permalink($about_page); ?>">About</a>
</div>
```

#### CSSの抽出と整理

**重要な課題**: Nuxt.jsはページHTML内の `<style>` タグにスタイルを含むことが多い。

**抽出プロセス**:
1. Chrome DevTools → Elements → 各セクションを検査
2. `<head>` 内およびページ全体の `<style>` タグを探す
3. すべてのインラインスタイル（scopedとglobalの両方）をコピー
4. Computedタブで実際に適用されているスタイルを確認
5. 抽出したCSSを以下の構造に従ってモジュール化されたファイルに整理:
   - `reset.css` - CSSリセット/ノーマライズ
   - `variables.css` - CSSカスタムプロパティ（計算済みスタイルから色、スペーシング、フォントを抽出）
   - `base.css` - 基本要素のスタイル
   - `layout.css` - レイアウト/グリッドシステム
   - `components.css` - 再利用可能なコンポーネントスタイル
   - `sections.css` - セクション固有のスタイル
   - `navigation.css` - ヘッダー/フッターナビゲーション
   - `responsive.css` - メディアクエリ

**重要**:
- Vue固有のscoped style属性を削除（`[data-v-*]` セレクタ）
- scopedセレクタをBEMクラス名に変換
- 複数のインライン `<style>` タグからの重複スタイルを統合
- すべての `!important` 宣言を抽出し、可能であればリファクタリング

**例**:
```css
/* Nuxt.jsインラインスタイル（移行元） */
<style>
.hero[data-v-123abc] {
  background: #000;
}
</style>

/* WordPress外部CSS（移行先） */
/* assets/css/sections.css 内 */
.hero {
  background: var(--color-bg-dark);
}
```

#### JavaScriptの抽出と変換

**Nuxt.js → WordPress JS移行**:
- Vue.jsのリアクティビティを削除（`ref`, `reactive`, `computed` なし）
- Nuxtライフサイクルフックを標準的なDOMイベントに置き換え
- VueイベントハンドラをバニラJavaScriptに変換
- Nuxtプラグインとモジュールを削除
- WordPress対応パターンを使用（ビルドツール不要）

**例**:
```javascript
// Nuxt.js（移行元）
export default {
  mounted() {
    this.initMenu();
  },
  methods: {
    initMenu() { /* ... */ }
  }
}

// WordPress（移行先） - assets/js/navigation.js
document.addEventListener('DOMContentLoaded', () => {
  initMenu();
});

function initMenu() { /* ... */ }
```

### 移行元サイトからのアセット抽出

Chrome DevTools MCPと手動抽出を使用:

1. **HTML構造**: 各ページで `mcp__chrome-devtools__take_snapshot` を使用
2. **CSS**:
   - Sourcesタブ → 外部CSSファイルをダウンロード
   - Elementsタブ → すべての `<style>` タグの内容をコピー
   - Computedタブ → 適用されているスタイルを確認
3. **JavaScript**:
   - Sourcesタブ → すべてのJSファイルをダウンロード
   - インライン `<script>` タグを探す
   - 変換が必要なVue.jsパターンをメモ
4. **画像**:
   - `mcp__chrome-devtools__list_network_requests` ですべての画像を検索
   - Networkタブからダウンロード
   - レスポンシブバリアント（srcset）を確認
5. **フォント**:
   - Computedタブ → font-familyを確認
   - Networkタブ → Webフォントファイルをダウンロード
   - 使用許諾ライセンスを確認

### トップページのセクション（front-page.php）

トップページは以下のセクションで構成されています（順番通り）:
1. **Hero** - 「もっと楽しい日本に」（アニメーション背景付き）
2. **About** - 会社概要（「Onwordsとは？」）
3. **Message** - 役員メッセージ（代表取締役社長、取締役副社長）
4. **Business** - 2つのサービスカード（地域観光DX、マーケティングパートナー）
5. **News** - 最新のお知らせ（'news' 投稿タイプのWP_Query）
6. **Inquiry** - お問い合わせフォーム（Contact Form 7ショートコード）

各セクションは `template-parts/sections/` に配置し、`front-page.php` で `get_template_part()` を使って読み込みます。

## 命名規則

- **CSSクラス**: BEM形式（例: `hero__title`, `business-card--featured`）
- **PHP関数**: スネークケース + `onwords_` プレフィックス（例: `onwords_enqueue_scripts()`）
- **テンプレートファイル**: WordPress標準（例: `archive-{post-type}.php`）
- **アセットファイル**: ケバブケース（例: `smooth-scroll.js`, `base.css`）

## 重要な注意事項

- **ピクセル単位での完全一致**: 最終的なWordPressサイトは、STUDIOサイトと視覚的に完全に一致する必要がある
- **Chrome DevTools MCPの使用**: 移行元サイトの構造分析には必ずMCPツール（`mcp__chrome-devtools__*`）を使用すること
- **Nuxt.jsからWordPressへの変換**:
  - すべてのインライン `<style>` タグを抽出し、外部 `.css` ファイルに統合
  - Vue.js固有の属性とパターンを削除
  - コンポーネント構造をWordPressテンプレートパーツに変換
  - クライアントサイドルーティングをWordPressパーマリンクに置き換え
- **CSS整理は重要**: Nuxt.jsページにはスタイルが埋め込まれているため、適切に抽出して整理する必要がある
- **アセット抽出を最優先**: テンプレートを構築する前に、必ずCSS/JS/画像を抽出して整理する
- **コンポーネントの再利用性**: 保守性のため `template-parts/` を積極的に活用
- **パフォーマンス**: 画像の最適化（WebP変換）、本番環境用にCSS/JSをミニファイ
- **アクセシビリティ**: セマンティックHTML、適切な見出し階層、必要に応じてARIAラベルを使用
- **Gitワークフロー**: 現在は `main` ブランチ（フェーズ2でブランチ戦略決定予定）

## 作業開始前の必須事項

**必ずToDoリストを作成してから作業を開始してください。**

TodoWriteツールを使用して:
1. これから行う作業のタスクリストを作成
2. 各タスクを順番に進め、完了したらステータスを更新
3. 複数の作業がある場合は、すべてToDoに記載してから開始

これにより、作業の進捗が明確になり、抜け漏れを防ぐことができます。
