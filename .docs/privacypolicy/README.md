# プライバシーポリシーページ ドキュメント

本番サイト（https://www.onwords.co.jp/privacypolicy）から抽出したHTML構造とCSSスタイルを記録したドキュメント群です。

## 目的

WordPressテーマでプライバシーポリシーページを実装する際に、本番サイト（STUDIO）と完全に同じ見た目を再現するための参考資料として使用します。

## ディレクトリ構造

```
.docs/privacypolicy/
├── README.md          # このファイル
├── mv/                # MVセクション（ヒーロー）
│   ├── html.md        # HTML構造
│   └── css.md         # CSSスタイル（全ブレークポイント対応）
└── content/           # コンテンツセクション
    ├── html.md        # HTML構造
    └── css.md         # CSSスタイル（全ブレークポイント対応）
```

## 各セクションの説明

### 1. MVセクション（mv/）

ページ上部のヒーローセクション

- **html.md**: 背景画像・ラベル・タイトルを含むHTML構造
- **css.md**: PC・タブレット・スマホ全てのブレークポイントに対応したスタイル

**主な要素:**
- 背景画像（::before疑似要素）
- "Privacy Policy" ラベル
- "プライバシーポリシー" タイトル
- オーバーレイ

### 2. コンテンツセクション（content/）

プライバシーポリシーの本文

- **html.md**: 条文を含むHTML構造
- **css.md**: PC・タブレット・スマホ全てのブレークポイントに対応したスタイル

**主な要素:**
- 条文のタイトル（太字）
- 条文の本文（段落）
- リンク（下線付き）

## ブレークポイント

全セクション共通で以下のブレークポイントに対応:

| デバイス | ブレークポイント |
|---------|----------------|
| デスクトップ | デフォルト |
| タブレット | max-width: 1140px |
| タブレット（小） | max-width: 840px |
| スマホ | max-width: 540px |
| スマホ（小） | max-width: 320px |

## 使用方法

1. **html.md** - HTML構造を確認し、WordPressテンプレートでPHP化する
2. **css.md** - CSSスタイルをコピーして `assets/css/privacypolicy.css` に実装
3. **data-s-*属性** - STUDIOの自動生成属性なので、WordPressでは独自のBEMクラスに置き換える

## 注意事項

- **data-s-*属性**: STUDIO特有の自動生成属性のため、WordPress実装時は削除して独自のクラス名に置き換える
- **CSS変数**: `var(--s-font-*)`, `var(--s-color-*)` などはSTUDIO固有のため、テーマのCSS変数に置き換える
- **画像URL**: `https://storage.googleapis.com/studio-design-asset-files/...` は本番環境のURLのため、WordPress管理画面でアップロードした画像パスに変更する

## 実装の流れ

1. HTML構造を確認してWordPressテンプレートを作成（page-privacypolicy.php または固定ページテンプレート）
2. CSSスタイルを `privacypolicy.css` に実装（data-s-*属性 → BEMクラスに変換）
3. レスポンシブ対応（全ブレークポイントで確認）
4. `/review-code` コマンドで最終確認

## 参考リンク

- 本番サイト: https://www.onwords.co.jp/privacypolicy
- WordPress実装: `page-privacypolicy.php`
- CSS: `assets/css/privacypolicy.css`
