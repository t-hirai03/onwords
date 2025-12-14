# Onwords WordPress Theme

株式会社OnwordsのコーポレートサイトをSTUDIOからWordPressに移行するカスタムテーマ

## 概要

| 項目 | 内容 |
|------|------|
| 移行元 | https://www.onwords.co.jp/ （STUDIO / Nuxt.js） |
| 移行先 | https://onwords.info/ （WordPress） |
| 開発期間 | 2024/10/31 - 2024/12/13（約44日） |

## 技術スタック

- **CMS**: WordPress
- **開発支援**: Claude Code + MCP（Model Context Protocol）
- **スクレイピング**: Playwright MCP
- **CI/CD**: GitHub Actions
- **FTP Deploy**: 変更ファイルのみ自動デプロイ

## プロジェクト規模

| 項目 | 数値 |
|------|------|
| 総コード行数 | 13,125行 |
| PHPファイル | 48 |
| CSSファイル | 20（約7,500行） |
| JSファイル | 7 |
| 画像ファイル | 69 |
| 総コミット数 | 177 |

### 実装ページ

- トップページ
- 事業内容（概要・地域観光DX・訪日マーケティング）
- 会社情報・企業理念
- お知らせ（一覧・詳細）
- 導入事例（一覧・詳細）
- ナレッジ・コラム（一覧・詳細）
- ウェビナー（一覧・詳細）
- 資料ダウンロード（一覧・詳細）
- お問い合わせ
- プライバシーポリシー
- 404エラーページ

### カスタム投稿タイプ

- `news` - お知らせ
- `case` - 導入事例
- `column` - コラム
- `document` - 資料
- `webinar` - ウェビナー

## 開発効率化の取り組み

### Claude Code + MCP による自動化

STUDIOサイトはNuxt.js（SPA）で構築されているため、通常のスクレイピングではDOMが取得困難。
**Playwright MCP** を使用することで、JavaScriptが実行された後の完全なDOMとComputed Stylesを正確に抽出。

#### 効率化に寄与した要素

| 要素 | 内容 |
|------|------|
| **CLAUDE.md** | 694行の詳細なプロンプト設計でコード品質を標準化 |
| **Playwright MCP** | SPAサイトからの正確なDOM/CSS抽出 |
| **カスタムコマンド** | `/extract-studio-section`、`/review-code`などの作業標準化 |
| **GitHub Actions** | CI、自動デプロイ、Release Drafterによる運用自動化 |

### 手動作業との比較（推定）

| 作業 | 手動 | Claude Code | 削減率 |
|------|------|-------------|--------|
| SPA HTML/CSS抽出 | 80-120h | 15-25h | 70-80% |
| WPテーマ開発 | 100-150h | 40-60h | 50-60% |
| レスポンシブ対応 | 40-60h | 15-25h | 55-65% |
| CI/CD構築 | 8-12h | 2-4h | 65-75% |
| テスト・調整 | 30-50h | 15-25h | 40-50% |
| **合計** | **260-390h** | **90-140h** | **60-65%** |

**結果: 約50-60%の開発時間短縮を実現**

## GitHub Actions

### CI（ci.yml）
PRに対してPHP構文チェックを自動実行

### Deploy（deploy.yml）
mainブランチへのpush時、変更ファイルのみをFTPで自動デプロイ

### Release Drafter（release-drafter.yml）
マージ時にリリースノートを自動生成・公開

## ディレクトリ構成

```
onwords/
├── assets/
│   ├── css/          # スタイルシート（ページ別に分割）
│   ├── js/           # JavaScript
│   ├── images/       # 画像ファイル
│   └── fonts/        # フォント
├── template-parts/
│   ├── sections/     # ページセクション
│   └── components/   # 再利用コンポーネント
├── inc/              # PHP関数・設定
├── .github/
│   ├── workflows/    # GitHub Actions
│   └── actions/      # カスタムアクション
└── CLAUDE.md         # Claude Code用プロンプト設計
```

## ローカル開発環境

- **ツール**: Local by Flywheel
- **URL**: http://localhost:10018/

## ライセンス

Private - 株式会社Onwords
