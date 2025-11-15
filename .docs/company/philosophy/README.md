# 企業理念ページ ドキュメント

本番サイト（https://www.onwords.co.jp/company/philosophy）から抽出したHTML構造とCSSスタイルを記録したドキュメント群です。

## 目的

WordPressテーマで企業理念ページを実装する際に、本番サイト（STUDIO）と完全に同じ見た目を再現するための参考資料として使用します。

## ディレクトリ構造

```
.docs/company/philosophy/
├── README.md          # このファイル
├── hero/              # ヒーローセクション
│   ├── html.md        # HTML構造
│   └── css.md         # CSSスタイル（全ブレークポイント対応）
├── purpose/           # パーパスセクション
│   ├── html.md        # HTML構造
│   └── css.md         # CSSスタイル（全ブレークポイント対応）
├── mission/           # ミッションセクション
│   ├── html.md        # HTML構造
│   └── css.md         # CSSスタイル（全ブレークポイント対応）
└── values/            # バリューセクション
    ├── html.md        # HTML構造
    └── css.md         # CSSスタイル（全ブレークポイント対応）
```

## 各セクションの説明

### 1. ヒーローセクション（hero/）

ページ上部のヒーローセクション

- **html.md**: 背景画像・英語ラベル・日本語タイトルを含むHTML構造
- **css.md**: PC・タブレット・スマホ全てのブレークポイントに対応したスタイル

**主な要素:**

- 背景画像（::before疑似要素）
- "Company Philosophy" ラベル
- "企業理念" タイトル（h1）
- 角丸（デスクトップ・タブレットのみ、モバイルは角丸なし）

### 2. パーパスセクション（purpose/）

パーパスの説明セクション

- **html.md**: ラベル・タイトル・英語テキスト・日本語テキストを含むHTML構造
- **css.md**: PC・タブレット・スマホ全てのブレークポイントに対応したスタイル

**主な要素:**

- "PURPOSE" ラベル（赤文字）
- "パーパス" タイトル（h2）
- 英語テキスト（グラデーションテキスト・赤）
- 日本語テキスト

### 3. ミッションセクション（mission/）

ミッションの説明セクション

- **html.md**: ラベル・タイトル・メインテキスト・説明文を含むHTML構造
- **css.md**: PC・タブレット・スマホ全てのブレークポイントに対応したスタイル

**主な要素:**

- "MISSION" ラベル（赤文字）
- "ミッション" タイトル（h2）
- メインテキスト（日本語: グラデーションテキスト・赤、英語: グレー）
- 説明文（日本語: グラデーションテキスト・黒、英語: グレー）
- 上下パディング: 90px

### 4. バリューセクション（values/）

バリューの説明セクション

- **html.md**: ラベル・タイトル・4つのバリュー項目を含むHTML構造
- **css.md**: PC・タブレット・スマホ全てのブレークポイントに対応したスタイル

**主な要素:**

- "VALUES" ラベル（赤文字）
- "バリュー" タイトル（h2）
- 4つのバリュー項目（ulリスト）
  - 日本語バリューテキスト（グラデーションテキスト・赤）
  - 英語バリューテキスト（グラデーションテキスト・黒）
  - 日本語説明文
  - 英語説明文

## ブレークポイント

全セクション共通で以下のブレークポイントに対応:

| デバイス | ブレークポイント |
|---------|----------------|
| デスクトップ | デフォルト |
| タブレット | max-width: 768px |
| モバイル | max-width: 500px |

## グラデーションテキストについて

各セクションで以下のグラデーションテキストが使用されています:

### パーパスセクション
- 英語テキスト: `linear-gradient(90deg, rgb(231, 74, 74), rgb(231, 74, 74))` - 赤色

### ミッションセクション
- 日本語メインテキスト: `linear-gradient(90deg, rgb(231, 74, 74), rgb(231, 74, 74))` - 赤色
- 日本語説明文: `linear-gradient(90deg, rgb(0, 0, 0) 100%, rgb(231, 74, 74) 100%)` - 黒色

### バリューセクション
- 日本語バリュー: `linear-gradient(90deg, rgb(231, 74, 74), rgb(231, 74, 74))` - 赤色
- 英語バリュー: `linear-gradient(90deg, rgb(0, 0, 0) 100%, rgb(231, 74, 74) 100%)` - 黒色

**実装方法:**
```css
.element {
  background-image: linear-gradient(90deg, rgb(231, 74, 74), rgb(231, 74, 74));
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
```

## 使用方法

1. **html.md** - HTML構造を確認し、WordPressテンプレートでPHP化する
2. **css.md** - CSSスタイルをコピーして `assets/css/philosophy.css` に実装
3. **data-s-*属性** - STUDIOの自動生成属性なので、WordPressでは独自のBEMクラスに置き換える

## 注意事項

- **data-s-*属性**: STUDIO特有の自動生成属性のため、WordPress実装時は削除して独自のクラス名に置き換える
- **CSS変数**: `var(--s-font-*)`, `var(--s-color-*)` などはSTUDIO固有のため、テーマのCSS変数に置き換える
- **背景画像**: `https://images.unsplash.com/...` は外部URLのため、WordPress管理画面でアップロードした画像パスに変更する
- **グラデーションテキスト**: `-webkit-background-clip` と `-webkit-text-fill-color` を使用

## 実装の流れ

1. HTML構造を確認してWordPressテンプレートを作成
2. CSSスタイルを `philosophy.css` に実装（data-s-*属性 → BEMクラスに変換）
3. レスポンシブ対応（全ブレークポイントで確認）
4. `/review-code` コマンドで最終確認

## 参考リンク

- 本番サイト: https://www.onwords.co.jp/company/philosophy
- WordPress実装: `page-philosophy.php` または `template-parts/philosophy/*.php`
- CSS: `assets/css/philosophy.css`
