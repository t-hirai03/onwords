# コーディング後のルール準拠チェック

実装完了後、CLAUDE.mdのCSSルール、HTML構造、STUDIOサイトとの見た目が完全に一致しているか確認します。

## チェック項目

### 1. CLAUDE.mdのCSSルール準拠チェック

#### ✅ 余白とwidth設定の重要ルール

**必須パターンを使用しているか:**
```css
/* ✅ 正しいパターン */
.container {
  max-width: 1312px;  /* 1280px + 16px × 2 */
  margin: 0 auto;      /* 中央寄せ */
  padding: 0 16px;     /* 左右の余白 */
}
```

**❌ 禁止パターンを使用していないか確認:**
```css
/* ❌ calc()とmarginの組み合わせ */
.container {
  max-width: calc(100% - 64px);
  margin: 0 32px;
}

/* ❌ calc()とpaddingの組み合わせ */
.container {
  max-width: calc(100% - 32px);
  margin: 0 16px;
}

/* ❌ widthにcalc()を使う */
.container {
  width: calc(100% - 64px);
  padding: 0 32px;
}
```

**確認方法:**
```bash
# CSSファイル内でcalc()とmargin/paddingの組み合わせを検索
grep -n "calc(100%" assets/css/*.css | grep -E "(margin|padding)"
```

#### ✅ width/heightの固定を避ける

**確認方法:**
```bash
# 固定値のwidth/heightを検索（アイコンサイズなど意図的な場合を除く）
grep -n "width: [0-9]*px" assets/css/*.css
grep -n "height: [0-9]*px" assets/css/*.css
```

**正しい実装:**
```css
/* ✅ 推奨 - 制約を使う */
.element {
  max-width: 500px;
  min-height: 300px;
}

/* ❌ 避けるべき - 固定値 */
.element {
  width: 500px;
  height: 300px;
}
```

#### ✅ フッター前のコンテンツには下余白を設定しない

**確認方法:**
```bash
# 最後のセクションに下余白がないか確認
# page-*.php や archive-*.php の最後のセクションをチェック
```

**正しい実装:**
```css
/* ✅ 最下層コンテンツ - 下余白なし */
.last-content {
  padding: 80px 0 0;  /* 下余白なし */
}

/* ❌ 下余白がある */
.last-content {
  padding: 80px 0;  /* フッターとの間に余白が重複 */
}
```

#### ✅ レスポンシブでの余白設定は不要

**標準パターンを使用していれば、メディアクエリでの余白調整は不要:**
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
  /* フォントサイズなど、必要なプロパティのみ調整 */
  .container h1 {
    font-size: 24px;
  }
}
```

**確認方法:**
```bash
# メディアクエリ内でmax-width/margin/paddingを上書きしていないか確認
grep -A 10 "@media" assets/css/*.css | grep -E "(max-width|margin|padding)" | grep -v "padding: 0"
```

#### ✅ アイコンのフォントサイズを全ブレークポイントで統一

**確認方法:**
```bash
# アイコンのフォントサイズがメディアクエリで変更されていないか確認
grep -n "font-family.*Font Awesome\|Material Icons" assets/css/*.css
```

**正しい実装:**
```css
/* ✅ 全ブレークポイントで同じサイズ */
.icon::before {
  font-family: "Font Awesome 6 Free";
  font-size: 14px; /* デスクトップ・タブレット・モバイル共通 */
  line-height: 1;
}

/* レスポンシブでサイズを変更しない */
@media (max-width: 767px) {
  .icon::before {
    /* ❌ font-size: 12px; - サイズ変更禁止 */
  }
}
```

#### ✅ BEM命名規則に従っているか

**確認方法:**
```bash
# クラス名を抽出してBEM形式をチェック
grep -oE "class=\"[^\"]*\"" page-*.php archive-*.php | grep -v "__" | grep -v "--"
```

**正しい命名:**
```css
/* ✅ BEM形式 */
.block {}
.block__element {}
.block__element--modifier {}
.block--modifier {}

/* ❌ BEM以外の形式 */
.blockElement {}
.block-element {}
.BlockElement {}
```

#### ✅ 特定のページ名を含まず汎用的なクラス名を使用

**確認方法:**
```bash
# ページ固有の名前が含まれていないか確認
grep -n "class.*news-" assets/css/components.css
grep -n "class.*case-" assets/css/components.css
```

**正しい命名:**
```css
/* ✅ 汎用的な名前 */
.archive-filter        /* すべてのアーカイブページで使用可能 */
.archive-hero          /* すべてのアーカイブページで使用可能 */
.btn-primary           /* すべてのページで使用可能 */

/* ❌ 特定ページ名を含む */
.news-archive-filter   /* newsにしか使えない */
.case-archive-hero     /* caseにしか使えない */
.news__view-all        /* newsにしか使えない */
```

### 2. HTML構造チェック

#### ✅ セマンティックHTMLを使用しているか

**確認項目:**
- `<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<aside>`, `<footer>` を適切に使用
- `<div>` の乱用を避ける
- 見出しタグ（`<h1>`～`<h6>`）の階層が正しい

**確認方法:**
```bash
# divの使用頻度を確認
grep -o "<div" page-*.php archive-*.php | wc -l

# セマンティックタグの使用を確認
grep -E "<(header|nav|main|article|section|aside|footer)" page-*.php archive-*.php
```

#### ✅ 適切なタグを使用しているか

- リスト: `<ul>`, `<ol>`, `<li>`
- リンク: `<a>`
- ボタン: `<button>` または `<a>` (用途に応じて)
- 画像: `<img>` with `alt` attribute
- フォーム: `<form>`, `<input>`, `<label>`

### 3. STUDIOサイトとの見た目比較

#### ステップ1: STUDIOサイトを確認

```javascript
// Playwright MCPでSTUDIOサイトにアクセス
mcp__playwright__browser_navigate
URL: https://www.onwords.co.jp/[対象ページ]

// スクリーンショット撮影（デスクトップ）
mcp__playwright__browser_take_screenshot
filename: "studio-desktop-[ページ名].png"

// モバイル表示に切り替え
mcp__playwright__browser_resize
width: 375
height: 812

// スクリーンショット撮影（モバイル）
mcp__playwright__browser_take_screenshot
filename: "studio-mobile-[ページ名].png"
```

#### ステップ2: ローカル環境を確認

```javascript
// ローカル環境にアクセス
mcp__playwright__browser_navigate
URL: http://localhost:10018/[対象ページ]

// スクリーンショット撮影（デスクトップ）
mcp__playwright__browser_take_screenshot
filename: "local-desktop-[ページ名].png"

// モバイル表示に切り替え
mcp__playwright__browser_resize
width: 375
height: 812

// スクリーンショット撮影（モバイル）
mcp__playwright__browser_take_screenshot
filename: "local-mobile-[ページ名].png"
```

#### ステップ3: 計算済みスタイルを比較

**重要なスタイルを抽出:**
```javascript
// STUDIOサイトとローカル環境で同じセレクタのスタイルを取得
mcp__playwright__browser_evaluate
function: () => {
  const element = document.querySelector('対象セレクタ');
  const styles = window.getComputedStyle(element);
  return {
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight,
    color: styles.color,
    backgroundColor: styles.backgroundColor,
    padding: styles.padding,
    margin: styles.margin,
    width: styles.width,
    height: styles.height,
    display: styles.display,
    alignItems: styles.alignItems,
    justifyContent: styles.justifyContent,
    textAlign: styles.textAlign
  };
}
```

#### ステップ4: 全ブレークポイントで確認

**デスクトップ:**
- 1920px
- 1140px

**タブレット:**
- 768px
- 540px

**モバイル:**
- 375px
- 320px

### 4. 最終チェックリスト

#### CSS

- [ ] `max-width: 1312px` + `margin: 0 auto` + `padding: 0 16px` パターンを使用
- [ ] calc()とmarginの組み合わせを使用していない
- [ ] width/heightの固定を避けている（max-width/min-heightを使用）
- [ ] フッター前のコンテンツに下余白がない
- [ ] レスポンシブで余白を上書きしていない
- [ ] アイコンのフォントサイズが全ブレークポイントで統一
- [ ] BEM命名規則に従っている
- [ ] 汎用的なクラス名を使用（ページ固有の名前を含まない）

#### HTML

- [ ] セマンティックHTMLを使用
- [ ] 適切なタグを使用
- [ ] 見出しタグの階層が正しい
- [ ] 画像にalt属性を設定

#### 見た目

- [ ] STUDIOサイトとローカル環境のスクリーンショットを比較
- [ ] 全ブレークポイントで確認（デスクトップ・タブレット・モバイル）
- [ ] 文字サイズ、配置、余白が1px単位で一致
- [ ] ホバー状態、アニメーションタイミングが一致

## レビュー後のアクション

### 問題が見つかった場合

1. 即座に修正する
2. 修正後、再度このチェックリストを実行
3. すべてのチェック項目がクリアされるまで繰り返す

### すべてクリアした場合

1. 変更をコミット
2. リモートにプッシュ
3. PRを作成（必要に応じて）

## 禁止事項

❌ **絶対にやってはいけないこと:**
- チェックリストを実行せずに作業完了とする
- 「だいたい同じ」で妥協する
- 一部のブレークポイントだけ確認して他を省略する
- 問題を見つけても後回しにする

✅ **必ずやること:**
- すべてのチェック項目を確認
- 問題があれば即座に修正
- 修正後、再度レビューを実行
- すべてクリアしてから次のタスクに進む
