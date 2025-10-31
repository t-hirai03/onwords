# コンポーネント分割計画

## WordPressテンプレート構造

### 基本テンプレートファイル

#### 1. header.php
```
役割: サイト共通ヘッダー
含む要素:
- <!DOCTYPE>、<html>、<head>タグ
- wp_head()
- サイトロゴ
- ナビゲーションメニュー（ハンバーガー）
- <body>開始タグ

使用する関数:
- get_template_directory_uri() (ロゴ画像パス)
- wp_nav_menu() (メニュー表示)
```

#### 2. footer.php
```
役割: サイト共通フッター
含む要素:
- フッターロゴ
- キャッチコピー
- ナビゲーションリンク（2列）
  - メインナビ（TOP、会社概要、採用情報、導入事例、ナレッジ）
  - ポリシーナビ（プライバシーポリシー、各種方針）
- コピーライト
- wp_footer()
- </body>、</html>終了タグ

使用する関数:
- wp_nav_menu() × 2 (メインナビ、ポリシーナビ)
```

#### 3. functions.php
```
役割: テーマの機能定義
含む機能:
- テーマサポート設定
- メニューの登録（ヘッダーメニュー、フッターメインメニュー、フッターポリシーメニュー）
- CSS/JSのエンキュー
- カスタム投稿タイプ「お知らせ」の登録
- カスタムタクソノミー「お知らせカテゴリ」の登録
```

#### 4. front-page.php または index.php
```
役割: トップページ
含む要素:
- get_header()
- ヒーローセクション
- ABOUTセクション
- MESSAGEセクション
- BUSINESSセクション
- NEWSセクション (WP_Queryでお知らせ取得)
- INQUIRYセクション
- get_footer()
```

## パーツテンプレート (template-parts/)

### セクションパーツ

#### template-parts/sections/hero.php
```
役割: ヒーローセクション
パラメータ:
- $title (キャッチコピー)
- $subtitle (サブコピー)
- $background_type (画像/動画/アニメーション)
```

#### template-parts/sections/about.php
```
役割: ABOUTセクション
パラメータ:
- $section_title
- $heading
- $content
- $image (オプション)
```

#### template-parts/sections/message.php
```
役割: MESSAGEセクション
パラメータ:
- $section_title
- $heading
- $messages (配列: 役職、名前、メッセージ、画像)
```

#### template-parts/sections/business.php
```
役割: BUSINESSセクション
パラメータ:
- $section_title
- $heading
- $business_items (配列: タイトル、説明、リンク、画像)
```

#### template-parts/sections/news.php
```
役割: NEWSセクション
パラメータ:
- $section_title
- $heading
- $news_query (WP_Query オブジェクト)
- $show_more_link
```

#### template-parts/sections/inquiry.php
```
役割: INQUIRYセクション
パラメータ:
- $section_title
- $heading
- $form_shortcode (Contact Form 7 または WPForms)
```

### コンポーネントパーツ

#### template-parts/components/news-item.php
```
役割: ニュースアイテム
パラメータ:
- $post (WP_Post オブジェクト)
- $show_category
- $show_date
```

#### template-parts/components/business-card.php
```
役割: 事業カード
パラメータ:
- $title
- $description
- $link
- $icon (オプション)
```

## お問い合わせフォーム検討

### オプション1: Contact Form 7
```
メリット:
- 最も人気のあるプラグイン
- 軽量
- カスタマイズ性が高い
- 無料

デメリット:
- UIがやや古い
- スパム対策に別プラグイン必要（reCAPTCHA等）
```

### オプション2: WPForms
```
メリット:
- モダンなUI
- ドラッグ&ドロップで簡単
- スパム対策内蔵
- 多機能

デメリット:
- 無料版は機能制限あり
- やや重い
```

### オプション3: カスタム実装
```
メリット:
- 完全にコントロール可能
- デザインの自由度が最も高い
- プラグイン依存なし

デメリット:
- 開発工数が高い
- セキュリティ対策を自前で実装
- メンテナンスコスト高
```

### 推奨: Contact Form 7
```
理由:
- シンプルで軽量
- カスタマイズしやすい
- デザインをCSSで完全に制御可能
- 実績が豊富
```

## カスタム投稿タイプ

### お知らせ (news)
```
投稿タイプ名: news
ラベル: お知らせ
サポート: title, editor, thumbnail, excerpt
階層: なし
公開: あり
アーカイブ: あり (archive-news.php)
シングル: あり (single-news.php)
```

### お知らせカテゴリ (news_category)
```
タクソノミー名: news_category
ラベル: お知らせカテゴリ
階層: あり
投稿タイプ: news

デフォルトカテゴリ:
- お知らせ
- プレスリリース
```

## ファイル構造案

```
onwords/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── single.php
├── single-news.php
├── archive.php
├── archive-news.php
├── page.php
├── 404.php
├── assets/
│   ├── css/
│   │   ├── main.css (メインスタイル)
│   │   ├── components.css (コンポーネント用)
│   │   └── responsive.css (レスポンシブ)
│   ├── js/
│   │   ├── main.js (メインスクリプト)
│   │   ├── navigation.js (ナビゲーション用)
│   │   └── animations.js (アニメーション用)
│   ├── images/
│   └── fonts/
├── template-parts/
│   ├── sections/
│   │   ├── hero.php
│   │   ├── about.php
│   │   ├── message.php
│   │   ├── business.php
│   │   ├── news.php
│   │   └── inquiry.php
│   └── components/
│       ├── news-item.php
│       └── business-card.php
├── inc/
│   ├── custom-post-types.php
│   ├── enqueue-scripts.php
│   └── menus.php
└── .docs/
    ├── 01_site_analysis.md
    ├── 02_component_plan.md
    └── 03_migration_workflow.md
```
