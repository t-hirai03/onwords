# お問い合わせページ ドキュメント

本番サイト（https://www.onwords.co.jp/contact/）から抽出したHTML構造とCSSスタイルを記録したドキュメント群です。

## 目的

WordPressテーマでお問い合わせページを実装する際に、本番サイト（STUDIO）と完全に同じ見た目を再現するための参考資料として使用します。

## ディレクトリ構造

```
.docs/contact/
├── README.md          # このファイル
├── mv/                # MVセクション
│   ├── html.md        # HTML構造
│   └── css.md         # CSSスタイル（全ブレークポイント対応）
└── form/              # フォームセクション
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
- "Contact" ラベル
- "お問い合わせ" タイトル
- オーバーレイ（茶色の半透明）

### 2. フォームセクション（form/）

HubSpot埋め込みフォーム（後でプラグインで実装）

- **html.md**: フォームのHTML構造（参考）
- **css.md**: フォームのスタイル（参考）

**主な要素:**
- 問い合わせカテゴリー（ドロップダウン）
- 姓・名
- Eメール
- 電話番号
- 会社名
- 部署名
- お問い合わせ内容
- プライバシーポリシー同意チェックボックス
- 送信ボタン

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
2. **css.md** - CSSスタイルをコピーして `assets/css/contact.css` に実装
3. **data-s-*属性** - STUDIOの自動生成属性なので、WordPressでは独自のBEMクラスに置き換える

## 注意事項

- **data-s-*属性**: STUDIO特有の自動生成属性のため、WordPress実装時は削除して独自のクラス名に置き換える
- **CSS変数**: `var(--s-font-*)`, `var(--s-color-*)` などはSTUDIO固有のため、テーマのCSS変数に置き換える
- **画像URL**: `https://images.unsplash.com/...` は本番環境のURLのため、ダウンロードした画像パス（`assets/images/contact/hero-bg.jpg`）に変更する

## 実装の流れ

1. HTML構造を確認してWordPressテンプレートを作成
2. CSSスタイルを `contact.css` に実装（data-s-*属性 → BEMクラスに変換）
3. フォームはプラグイン（Contact Form 7等）で実装
4. レスポンシブ対応（全ブレークポイントで確認）
5. `/review-code` コマンドで最終確認

## 参考リンク

- 本番サイト: https://www.onwords.co.jp/contact/
- WordPress実装: `page-contact.php` または固定ページテンプレート
- CSS: `assets/css/contact.css`
