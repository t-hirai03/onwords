# CLAUDE.md

このファイルは、Claude Code (claude.ai/code) がこのリポジトリで作業する際のガイダンスを提供します。

## プロジェクト概要

株式会社OnwordsのコーポレートサイトをSTUDIOからWordPressに移行するためのカスタムテーマプロジェクトです。現在、移行作業のフェーズ1-2の初期段階にあります。

**本番サイト（移行元）**: https://www.onwords.co.jp/ (STUDIOで構築)
**ローカル環境**: http://localhost:10018/
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

## 実装時の重要ルール

### 必ずSTUDIOサイトから情報を取得する

**CRITICAL**: すべての実装において、必ず移行元のSTUDIOサイト（https://www.onwords.co.jp/）から情報を取得してください。

#### Chrome DevTools MCP と Playwright MCP の使用

実装前に以下の手順を踏むこと：

1. **Chrome DevTools MCP または Playwright MCP で該当ページを開く**
   ```
   - mcp__chrome-devtools__navigate_page または
   - mcp__playwright__browser_navigate
   ```

2. **HTML構造、CSS、JavaScript、テキストコンテンツを確認**
   ```
   - mcp__chrome-devtools__take_snapshot (アクセシビリティツリー)
   - mcp__chrome-devtools__evaluate_script (計算済みスタイル取得)
   - mcp__playwright__browser_hover (ホバー状態の確認)
   ```

   **画像の確認方法（重要）**:
   - **ネットワークリクエストで画像URLを確認**: `mcp__chrome-devtools__list_network_requests` でresourceTypes=["image"]を指定
   - **CSS疑似要素（::before, ::after）で画像が表示されている可能性**:
     - HTMLに`<img>`タグがなく、ネットワークリクエストにも画像が見つからない場合、CSS疑似要素で背景画像として表示されている可能性が高い
     - `window.getComputedStyle(element, '::before')` で疑似要素のスタイルを確認
     - 特に`backgroundImage`プロパティを確認すること
   - **画像の遅延読み込み**: ページをスクロールしてから再度ネットワークリクエストを確認

3. **スクリーンショットの撮影と格納**
   ```
   - mcp__chrome-devtools__take_screenshot (スクリーンショット撮影)
   - mcp__playwright__browser_take_screenshot (スクリーンショット撮影)
   ```

   **CRITICAL**: スクリーンショットは必ず `chrome-devtools-mcp/` ディレクトリに格納すること
   - 本番サイトとローカル環境の比較検証用
   - ファイル名は用途が分かるように命名（例: `local-hero-final.png`, `production-hero.png`）
   - このディレクトリはコミットに含めない（開発中の一時ファイル）

4. **取得した情報を元に実装**
   - 推測や仮実装は禁止
   - 実際のサイトの値を正確に反映

#### 禁止事項

❌ **やってはいけないこと：**
- STUDIOサイトを確認せずに推測で実装する
- 「おそらくこうだろう」という仮定で進める
- ダミーデータやプレースホルダーを使う
- 過去の記憶や一般的な実装パターンだけで作業する

✅ **必ずやること：**
- 実装するコンポーネント・機能がSTUDIOサイトのどの部分に該当するか確認
- Chrome DevTools MCP または Playwright MCP で実際の構造・スタイル・内容を取得
- 取得したデータを元に正確に実装

#### Playwright MCP のトラブルシューティング

**問題**: Playwright MCPで `about:blank` エラーや `Browser is already in use` エラーが発生する場合

**原因**: ブラウザプロセスが異常終了し、バックグラウンドで残っている

**解決方法**:

1. **ブラウザプロセスをクリアする**
   ```bash
   pkill -f "mcp-chrome"
   ```

2. **Playwrightブラウザを閉じる**
   ```
   mcp__playwright__browser_close
   ```

3. **再度ナビゲートする**
   ```
   mcp__playwright__browser_navigate (url: "https://www.onwords.co.jp/")
   ```

**手順例**:
```bash
# 1. プロセスをクリア
pkill -f "mcp-chrome"

# 2. 新しいページに移動
mcp__playwright__browser_navigate (url: "https://www.onwords.co.jp/")
```

**注意**:
- `about:blank` エラーが出たら、必ずプロセスをクリアしてから再試行
- Chrome DevTools MCP でも同様の問題が発生する場合は、同じ手順で対処可能

### 実装後の動作確認（必須）

**CRITICAL**: 実装完了後、必ずローカル環境で動作確認を行い、STUDIOサイトと完全に一致していることを確認してください。

#### 動作確認手順

1. **ローカル環境にアクセス**
   ```
   - mcp__chrome-devtools__navigate_page で http://localhost:10018/ を開く
   - または mcp__playwright__browser_navigate でローカル環境にアクセス
   ```

2. **実装した機能の動作確認**
   - 実装した機能が正しく動作するか確認
   - JavaScript機能（クリック、ホバー、アニメーション）をテスト
   - エラーがコンソールに出ていないか確認（`mcp__chrome-devtools__list_console_messages`）

3. **見た目の完全一致を確認**
   - **デスクトップ表示**: 1920px, 1140pxで確認
   - **タブレット表示**: 768px, 540pxで確認
   - **モバイル表示**: 375px, 320pxで確認
   - 各ブレークポイントでSTUDIOサイトと並べて比較

4. **細かい差異の確認（重要）**

   **文字の配置（左寄せ/中央寄せ）**:
   - デスクトップとモバイルで配置が変わる場合がある
   - `text-align`, `align-items`, `justify-content` を確認
   - 例: フッターはデスクトップで中央寄せ、モバイルで左寄せの可能性

   **フォントサイズ**:
   - デスクトップとモバイルで font-size が異なる場合がある
   - 1px単位で正確に確認（`mcp__chrome-devtools__evaluate_script` で計算済みスタイル取得）
   - 例: デスクトップ 16px → モバイル 14px

   **余白（padding/margin）**:
   - ブレークポイントごとに余白が変わる
   - 上下左右すべての余白を確認

   **要素の表示/非表示**:
   - デスクトップとモバイルで表示される要素が変わる
   - 例: デスクトップナビ（デスクトップのみ）、ハンバーガーメニュー（モバイルのみ）

   **ホバー・初期表示アニメーションの確認（重要）**:
   - **ボタン・リンクのホバーアニメーション**: すべてのボタン、リンク、クリッカブル要素で必ずホバー状態を確認
     - 色の変化、背景のグラデーション、不透明度の変化
     - トランジションのタイミング（duration, timing-function, delay）
     - スライドイン背景、シャドウ、スケール変化など
     - `mcp__chrome-devtools__hover` または `mcp__playwright__browser_hover` でホバー状態を確認
   - **コンテンツの初期表示アニメーション**: すべてのセクション、カード、画像で初期表示アニメーションを確認
     - スクロールして要素がビューポートに入った時のアニメーション（フェードイン、スライドイン）
     - Intersection Observerの動作確認
     - **アニメーションのタイミングと遅延時間を正確に合わせる（CRITICAL）**:
       - `transitionDuration` (例: `0.3s`, `0.6s`, `0.8s`, `1.0s`)
       - `transitionTimingFunction` (例: `cubic-bezier(0.4, 0.4, 0, 1)`, `ease-in-out`)
       - `transitionDelay` (例: `0s`, `0.3s`)
       - **必ず本番サイトから正確な値を取得してミリ秒単位で合わせること**
       - **アニメーション速度が「速すぎる」「遅すぎる」場合は本番サイトと比較して調整**
       - 推測や「だいたい同じ」は禁止
     - 通常状態: `opacity: 0, transform: translateY(20px)` など
     - アニメーション後: `opacity: 1, transform: translateY(0)` など
     - **共通アニメーションクラスの使用**: 繰り返し使うアニメーション（フェードイン等）は共通CSSクラスで定義すること
   - **確認方法**:
     ```javascript
     // ホバー前の状態を確認
     () => {
       const element = document.querySelector('.button');
       const styles = window.getComputedStyle(element);
       return {
         background: styles.background,
         opacity: styles.opacity,
         transition: styles.transition
       };
     }

     // ホバー後（mcp__chrome-devtools__hoverを使用後）
     () => {
       const element = document.querySelector('.button');
       const styles = window.getComputedStyle(element);
       return {
         background: styles.background,
         opacity: styles.opacity,
         transitionDuration: styles.transitionDuration
       };
     }

     // 初期表示アニメーション確認（スクロール前）
     () => {
       const element = document.querySelector('.section .sd');
       return {
         classes: element.className,
         hasAppear: element.classList.contains('appear'),
         opacity: window.getComputedStyle(element).opacity,
         transform: window.getComputedStyle(element).transform
       };
     }
     ```

5. **比較確認スクリプト例**
   ```javascript
   // STUDIOサイトとローカルで同じ要素のスタイルを比較
   () => {
     const element = document.querySelector('.footer__menu a');
     const styles = window.getComputedStyle(element);
     return {
       fontSize: styles.fontSize,
       fontWeight: styles.fontWeight,
       textAlign: styles.textAlign,
       display: styles.display,
       alignItems: styles.alignItems,
       justifyContent: styles.justifyContent
     };
   }
   ```

#### 禁止事項

❌ **絶対にやってはいけないこと：**
- 実装後、ローカル環境を確認せずに作業完了とする
- 「動くからOK」で見た目の確認を省略する
- デスクトップだけ確認してモバイルを確認しない
- 1つのブレークポイントだけ確認して他を省略する
- 「だいたい同じ」で妥協する

✅ **必ずやること：**
- 実装したすべての機能をローカル環境で動作確認
- すべてのブレークポイント（デスクトップ、タブレット、モバイル）で確認
- STUDIOサイトとローカル環境を並べて目視で比較
- 文字サイズ、配置、余白が1px単位で一致しているか確認
- 問題があれば即座に修正してから次のタスクに進む

### 画像ファイル名の命名規則

**重要**: STUDIOサイトから画像をダウンロードする際は、必ず以下のルールに従うこと：

#### ルール

1. **元のファイル名を保持する**
   - サイトで使用されている画像のファイル名をそのまま使用
   - リネームや変更は禁止

2. **具体例**
   ```
   ❌ 悪い例:
   元サイト: s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg
   保存名: logo.svg (変更している)

   ✅ 良い例:
   元サイト: s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg
   保存名: s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg (同じ)
   ```

3. **確認方法**
   - Chrome DevTools MCP の `list_network_requests` で画像URLを確認
   - URLからファイル名を抽出してそのまま使用

#### 理由

- 元サイトとの対応関係を明確にする
- デバッグやメンテナンスを容易にする
- 将来的な差分確認を可能にする

### アイコンの実装方法

**重要**: STUDIOサイトで使用されているアイコンは必ず正確に確認して実装してください。

#### Font Awesome アイコンの確認方法

1. **Chrome DevTools MCP で要素を検査**
   ```javascript
   // アイコン要素を検査するスクリプト例
   const icon = element.querySelector('i, .icon, [class*="fa-"]');
   const styles = window.getComputedStyle(icon);
   return {
     classes: icon.className,
     fontFamily: styles.fontFamily,
     content: window.getComputedStyle(icon, '::before').content
   };
   ```

2. **確認すべき項目**
   - Font Awesome のバージョン（例: "Font Awesome 6 Free"）
   - アイコンのクラス名（例: `fa-solid fa-arrow-up-right-from-square`）
   - スタイル（Solid: `font-weight: 900`, Regular: `font-weight: 400`, etc.）
   - ユニコード値（例: `\f08e`）

#### STUDIOサイトで使用中のアイコン

**外部リンクアイコン（採用情報、ポリシーリンクなど）:**
- Font Awesome 6 Free
- クラス: `fa-solid fa-arrow-up-right-from-square`
- ユニコード: `\f08e`
- フォントウェイト: `900` (Solid)
- フォントサイズ: `14px`

#### 実装例

```css
/* 正しい実装 - Font Awesome 6 */
.header__nav-link--external::after {
  font-family: "Font Awesome 6 Free";
  font-weight: 900; /* Solid style */
  content: "\f08e"; /* fa-arrow-up-right-from-square */
  font-size: 14px;
  line-height: 1;
}

/* 間違った実装 - テキストの矢印 */
.header__nav-link--external::after {
  content: "↗"; /* ❌ これは使わない */
}
```

#### Font Awesome の読み込み

```php
// inc/enqueue-scripts.php
wp_enqueue_style(
  'font-awesome',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
  array(),
  '6.5.1'
);
```

#### 禁止事項

❌ **やってはいけないこと：**
- STUDIOサイトでFont Awesomeを使っているのに、テキスト記号（"↗"など）で代用する
- アイコンのユニコード値を確認せずに推測する
- Font Awesomeのバージョンを確認せずに実装する

✅ **必ずやること：**
- Chrome DevTools MCPでアイコンの実装を確認
- Font Familyとユニコード値を正確に取得
- CSSで同じFont Familyとユニコードを使用

## CSSレイアウトのベストプラクティス

### width/heightの固定を避ける

**CRITICAL**: `width`と`height`を固定値で指定すると、コンテンツが切れたり、レスポンシブ対応が困難になります。

#### 推奨する方針

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

/* ✅ 推奨 - Flexbox/Gridで自然なサイズ調整 */
.container {
  display: flex;
  flex-direction: column;
  /* widthは指定しない - 親要素に従う */
}

/* ✅ 推奨 - フルスクリーンの場合 */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  /* heightは指定しない - 自動的に画面全体をカバー */
}
```

#### 例外（固定値OK）

以下の場合は固定値を使用してもOK：
- ロゴ画像: `width: 180px`
- アイコン: `width: 24px; height: 24px`
- 明確なデザイン仕様があるボタンサイズ
- アスペクト比を保つ必要がある画像

#### 実例：モバイルメニューの問題（教訓）

**問題が発生したコード**:
```html
<!-- ❌ モバイルメニューが<header>内にネストされていた -->
<header class="header">
  <!-- header の高さが68pxに制限 -->
  <nav class="header__mobile-menu">
    <!-- メニュー項目 -->
  </nav>
</header>
```

**問題点**:
- `<header>`の高さが約68pxで固定
- モバイルメニューが親要素の高さに制限され、「事業内容」しか表示されない
- スクロール不可

**修正後のコード**:
```html
<!-- ✅ モバイルメニューを<header>の外に配置 -->
<header class="header">
  <!-- ヘッダーコンテンツ -->
</header>

<nav class="header__mobile-menu">
  <!-- メニュー項目 - 全て表示される -->
</nav>
```

```css
/* ✅ 正しいモバイルメニューのスタイル */
.header__mobile-menu {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  /* heightは指定しない - 画面全体をカバー */
  overflow-y: auto; /* コンテンツが多い場合はスクロール */
}
```

### アイコンのフォントサイズを全ブレークポイントで統一

**CRITICAL**: アイコンのフォントサイズは、デスクトップ・タブレット・モバイル全てで統一してください。

#### 推奨する実装

```css
/* ✅ 正しい実装 - 全ブレークポイントで同じサイズ */
.header__nav-link--external::after {
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  content: "\f08e";
  font-size: 14px; /* デスクトップ・タブレット・モバイル共通 */
  line-height: 1;
}

/* ❌ 間違った実装 - ブレークポイントごとに異なるサイズ */
.icon {
  font-size: 16px; /* デスクトップ */
}

@media (max-width: 540px) {
  .icon {
    font-size: 14px; /* モバイル - 統一感がない */
  }
}
```

#### 理由

- **視覚的一貫性**: アイコンサイズが変わると、ユーザー体験が不統一になる
- **ブランド統一**: デザインシステムの一貫性を保つ
- **保守性**: 一箇所で管理できる

#### 確認方法

STUDIOサイトから実装する際は、必ず全ブレークポイントでアイコンサイズを確認：

```javascript
// Chrome DevTools MCPで各ブレークポイントを確認
// 1. デスクトップ (1920px)
// 2. タブレット (768px)
// 3. モバイル (375px)

const icon = document.querySelector('.icon');
const styles = window.getComputedStyle(icon);
return {
  fontSize: styles.fontSize,
  fontWeight: styles.fontWeight,
  fontFamily: styles.fontFamily
};
```

#### 禁止事項

❌ **やってはいけないこと：**
- アイコンサイズをブレークポイントごとに変える（特別な理由がない限り）
- テキストサイズに合わせてアイコンサイズを変更する（アイコンは固定サイズ）
- 確認せずに「モバイルは小さくしたほうがいい」と推測する

✅ **必ずやること：**
- STUDIOサイトの全ブレークポイントでアイコンサイズを確認
- 取得した値を全ブレークポイントで統一して使用
- メディアクエリ内でアイコンサイズを上書きしない

### 外部リンクアイコンの実装（::before疑似要素）

**CRITICAL**: 外部リンクアイコンは`::before`疑似要素でFont Awesomeを使用します。

#### 正しい実装方法

```css
/* ✅ 正しい実装 - ::before with Font Awesome */
.link-external::before {
  font-family: "Font Awesome 6 Free";
  font-weight: 900; /* Solid style */
  content: "\f08e"; /* fa-arrow-up-right-from-square */
  font-size: 18px; /* アイコンサイズ */
  line-height: 1;
  margin-left: 4px; /* テキストとの距離 */
}

/* ❌ 間違った実装 - テキスト記号 */
.link-external::before {
  content: "↗"; /* 使わない */
}

/* ❌ 間違った実装 - ::after */
.link-external::after {
  content: "\f08e"; /* ::afterではなく::beforeを使う */
}
```

#### 実装例：モバイルメニューの採用情報

STUDIOサイトでは、採用情報リンクに外部リンクアイコン（Font Awesome）とarrowアイコン（Material Icons）の両方が表示されます。

```html
<!-- HTML構造 -->
<a href="https://example.com" class="header__mobile-menu-recruitment" target="_blank">
  採用情報
</a>
```

```css
/* CSS - 2つのアイコンを持つリンク */
.header__mobile-menu-recruitment {
  display: flex;
  align-items: center;
  gap: 8px;
}

/* ::before - 外部リンクアイコン（小さい） */
.header__mobile-menu-recruitment::before {
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  content: "\f08e"; /* fa-arrow-up-right-from-square */
  font-size: 18px; /* 小さめ */
  line-height: 1;
  margin-left: 4px;
  order: 1; /* テキストの後 */
}

/* ::after - arrowアイコン（大きい） */
.header__mobile-menu-recruitment::after {
  content: "›";
  font-size: 32px; /* 大きめ */
  line-height: 1;
  order: 2; /* 外部リンクアイコンの後 */
}
```

#### 禁止事項

❌ **やってはいけないこと：**
- テキスト記号（"↗"）で代用する
- `::after`を使う（`::before`を使うこと）
- Font Familyを省略する
- ユニコード値を推測する

✅ **必ずやること：**
- `::before`疑似要素を使用
- Font Awesome 6のユニコード`\f08e`を使用
- フォントファミリーとウェイトを正確に指定

### ナビゲーションArrowアイコンの実装（Material Icons + `<i>`タグ）

**CRITICAL**: ナビゲーションのarrow rightアイコンは、CSS疑似要素ではなく、HTMLに`<i>`タグを追加してMaterial Iconsで実装します。

#### STUDIOサイトの実装

```html
<i class="icon material-icons">keyboard_arrow_right</i>
```

#### 正しい実装方法

**HTML構造**:
```html
<!-- ✅ 正しい実装 - <i>タグでMaterial Icons -->
<a href="/page" class="header__mobile-menu-item">
  ページ名
  <i class="icon material-icons">keyboard_arrow_right</i>
</a>

<!-- ❌ 間違った実装 - CSS疑似要素 -->
<a href="/page" class="header__mobile-menu-item">
  ページ名
  <!-- ::after { content: "›"; } は使わない -->
</a>
```

**CSS**:
```css
/* Material Iconsのスタイル調整 */
.header__mobile-menu-item .material-icons {
  font-size: 28px; /* STUDIOサイトと同じサイズ */
  line-height: 1;
  color: var(--nav-link-color);
}

/* デスクトップメニューのサブメニューarrowは疑似要素でOK */
.header__menu .sub-menu a::before {
  content: "›";
  font-size: 18px;
}
```

#### Material Iconsの読み込み

```php
// inc/enqueue-scripts.php
wp_enqueue_style(
  'material-icons',
  'https://fonts.googleapis.com/icon?family=Material+Icons',
  array(),
  null
);
```

#### 適用箇所

**モバイルメニュー:**
- 通常のメニューアイテム → `<i class="material-icons">keyboard_arrow_right</i>`
- 採用情報 → Font Awesome外部リンクアイコン + Material Icons arrow（両方）
- お問い合わせボタン → Material Icons arrow

**デスクトップメニュー:**
- サブメニューのarrow → CSS疑似要素でOK（既存のまま）

#### 禁止事項

❌ **やってはいけないこと：**
- CSS疑似要素（`::after { content: "›"; }`）で代用する
- テキスト記号を使う
- Material Iconsを使わない

✅ **必ずやること：**
- HTMLに`<i class="icon material-icons">keyboard_arrow_right</i>`を追加
- Material Iconsフォントを読み込む
- font-sizeを28pxに設定（STUDIOサイトと同じ）

### モバイル時のインナー余白ルール

**CRITICAL**: モバイル表示（767px以下）では、すべてのセクションの内側コンテナに16pxの左右余白を設定してください。

#### 推奨する実装

```css
/* ✅ 正しい実装 - モバイルでインナー余白16px */
@media (max-width: 767px) {
  /* セクションコンテナに左右16pxの余白 */
  .about__container,
  .message__container,
  .business__container,
  .news__container,
  .inquiry__container {
    padding: 0 16px;
  }

  /* セクション独自のpadding設定がある場合 */
  .about__container {
    padding: 56px 16px 0; /* 上56px、左右16px、下0 */
  }
}
```

#### 理由

- **視覚的一貫性**: すべてのセクションで統一された左右余白を保つ
- **モバイルユーザビリティ**: 画面端に適切な余白を確保し、テキストの可読性を向上
- **保守性**: 統一ルールにより、一貫したレイアウトを維持しやすい

#### 適用箇所

**モバイル表示で左右16px余白が必要なコンテナ:**
- `.about__container`
- `.message__container`
- `.business__container`
- `.news__container`
- `.inquiry__container`
- その他、メインコンテンツを含むセクションコンテナすべて

#### 禁止事項

❌ **やってはいけないこと：**
- モバイルでインナー余白を省略する
- セクションごとに異なる余白値を使う（特別な理由がない限り）
- 本番サイトを確認せずに余白値を推測する

✅ **必ずやること：**
- すべてのセクションコンテナに`padding: 0 16px`を設定
- セクション独自のpadding（上下）がある場合は組み合わせる（例: `padding: 56px 16px 0`）
- 本番サイトで実際の余白を確認してから実装

### 完全コピーのアプローチ（公式要求）

**CRITICAL**: このプロジェクトは本番サイト（https://www.onwords.co.jp/）を運用している株式会社Onwordsからの正式な依頼です。

#### 基本方針

**ピクセルパーフェクトな再現が必須**

- STUDIOサイトのすべての要素を完全にコピーする
- 「おそらくこうだろう」という推測は一切禁止
- Chrome DevTools MCPを使用して、すべてのプロパティを正確に抽出する
- アニメーション、トランジション、余白、レイアウトプロパティを完璧に再現する

#### Chrome DevTools MCPでの抽出項目

以下のすべてのプロパティを抽出してください：

1. **レイアウトプロパティ**
   - `display`, `flex-direction`, `align-items`, `justify-content`
   - `position`, `top`, `right`, `bottom`, `left`
   - `width`, `height`, `max-width`, `max-height`

2. **ボックスモデル**
   - `margin` (上下左右すべて)
   - `padding` (上下左右すべて)
   - `border`, `border-radius`

3. **タイポグラフィ（最重要）**
   - `font-size`, `font-weight`, `font-family` - **絶対に正確に合わせる**
   - `line-height`, `letter-spacing` - **1px単位で正確に合わせる**
   - `text-align`, `text-decoration`
   - **注意**: 見た目が似ていても、font-size/font-weight/line-heightが1pxでも違えば必ず修正すること

4. **色とビジュアル**
   - `color`, `background`, `background-color`
   - `opacity`
   - グラデーション（`linear-gradient`, `radial-gradient`）

5. **アニメーションとトランジション（最重要）**
   - `transition` (すべてのプロパティ)
   - `transition-duration` (ミリ秒単位で正確に)
   - `transition-timing-function` (cubic-bezier値を含む)
   - `transition-property` (何がトランジションするか)
   - `animation`, `animation-duration`, `animation-timing-function`

6. **ホバー状態**
   - 通常状態とホバー状態の両方を確認
   - `:hover` 時に変更されるすべてのプロパティ

#### 抽出用のJavaScriptスクリプト例

```javascript
// Chrome DevTools MCPでevaluate_scriptを使用
// 通常状態の抽出
() => {
  const element = document.querySelector('.header__nav-link--contact');
  const styles = window.getComputedStyle(element);

  return {
    // レイアウト
    display: styles.display,
    alignItems: styles.alignItems,
    justifyContent: styles.justifyContent,

    // ボックスモデル
    padding: styles.padding,
    margin: styles.margin,
    borderRadius: styles.borderRadius,

    // タイポグラフィ
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight,

    // 色
    color: styles.color,
    background: styles.background,
    backgroundColor: styles.backgroundColor,

    // アニメーション
    opacity: styles.opacity,
    transition: styles.transition,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction
  };
}
```

#### 実装例：お問い合わせボタン（完全コピー）

**STUDIOサイトから抽出したすべてのプロパティ**:

```css
/* 通常状態 - すべてのプロパティを明示的に指定 */
.header__nav-link--contact {
  /* レイアウト */
  display: flex;
  align-items: center;
  justify-content: center;

  /* ボックスモデル */
  padding: 10px 16px;
  margin: 0;
  border-radius: 4px;

  /* タイポグラフィ */
  font-size: 16px;
  font-weight: 400;
  line-height: 16px;

  /* 色 */
  color: #333333; /* rgb(51, 51, 51) */
  background: #e74a4a; /* rgb(231, 74, 74) - 通常は赤ベタ塗り */

  /* アニメーション - STUDIO サイトから正確にコピー */
  opacity: 1;
  transition: all 0.3s cubic-bezier(0.4, 0.4, 0, 1);
}

/* ホバー状態 - 変更されるプロパティのみ */
.header__nav-link--contact:hover {
  opacity: 1;
  color: #ffffff; /* rgb(255, 255, 255) */
  background: linear-gradient(90deg, rgb(230, 1, 18) 0%, rgb(238, 156, 23) 51%, rgb(248, 82, 30) 100%);

  /* ホバー時のトランジション - STUDIO サイトで指定されているもの */
  transition-duration: 400ms; /* 0.4s - 正確に */
  transition-timing-function: ease-in-out;
}
```

#### 重要なポイント

1. **すべてのプロパティを抽出**
   - 視覚的に見えるものだけでなく、レイアウトプロパティも含む
   - `opacity: 1` のように、デフォルト値でも明示的に指定されている場合は記述する

2. **トランジションタイミングを正確に**
   - ミリ秒単位で正確に（例: `400ms` を `0.4s` にしない）
   - `cubic-bezier` の値を正確にコピー

3. **グラデーションを正確に**
   - カラーストップの位置（`0%`, `51%`, `100%`）を正確に
   - RGB値をそのまま使用

4. **コメントで説明を追加**
   - 通常状態とホバー状態を明記
   - STUDIOサイトから取得したことを記載（例: `/* from STUDIO site (完全コピー) */`）

5. **タイポグラフィは1px単位で正確に合わせる（最重要）**
   - `font-size`, `font-weight`, `line-height` は絶対に正確に合わせる
   - 見た目が似ていても、1pxでも違えば必ず修正すること
   - 特に `line-height` は見落としやすいので注意
   - 例: 16px/400/16px と 14px/500/24.5px は見た目が似ていても全く違う

#### 禁止事項

❌ **絶対にやってはいけないこと：**
- 一部のプロパティだけを抽出して「だいたい同じ」で済ませる
- トランジションタイミングを適当に設定する（例: 400ms → 500ms）
- グラデーションの色やストップ位置を変更する
- レイアウトプロパティを省略する
- **font-size, font-weight, line-heightを目視だけで判断して推測する**
- **「見た目が似てるからこれでいいだろう」と妥協する**

✅ **必ずやること：**
- Chrome DevTools MCPで**すべての**計算済みスタイルを抽出
- 通常状態とホバー状態の両方を確認
- アニメーション・トランジションを完全に再現
- **font-size, font-weight, line-heightを必ず計算済みスタイルから正確に取得**
- 実装後、ローカル環境でSTUDIOサイトと並べて比較検証

### HTML階層構造とCSS確認の完全ワークフロー

**CRITICAL**: 要素を実装する際は、必ずHTML階層構造を確認し、各階層に当たっているCSSを正確に抽出してください。

#### 確認手順（必須）

**Step 1: HTML構造の確認**

```javascript
// Chrome DevTools MCPでevaluate_scriptを使用
() => {
  const element = document.querySelector('セレクタ');

  return {
    // 要素自体の情報
    tagName: element.tagName,
    className: element.className,

    // HTML構造（outerHTML）
    outerHTML: element.outerHTML,

    // 子要素の階層構造
    children: Array.from(element.children).map(child => ({
      tagName: child.tagName,
      className: child.className,
      children: Array.from(child.children).map(grandchild => ({
        tagName: grandchild.tagName,
        className: grandchild.className
      }))
    })),

    // 子要素の数
    childrenCount: element.children.length
  };
}
```

**Step 2: 各階層の通常状態CSSを確認**

```javascript
// 親要素のCSS
() => {
  const parent = document.querySelector('親セレクタ');
  const styles = window.getComputedStyle(parent);

  return {
    // すべての重要なプロパティを取得
    position: styles.position,
    display: styles.display,
    flexDirection: styles.flexDirection,
    alignItems: styles.alignItems,
    justifyContent: styles.justifyContent,
    padding: styles.padding,
    margin: styles.margin,
    background: styles.background,
    color: styles.color,
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight,
    borderRadius: styles.borderRadius,
    overflow: styles.overflow,
    zIndex: styles.zIndex,
    transition: styles.transition
  };
}

// 子要素のCSS（各階層ごとに実行）
() => {
  const child = document.querySelector('子セレクタ');
  const styles = window.getComputedStyle(child);

  return {
    position: styles.position,
    top: styles.top,
    left: styles.left,
    right: styles.right,
    bottom: styles.bottom,
    width: styles.width,
    height: styles.height,
    background: styles.background,
    opacity: styles.opacity,
    zIndex: styles.zIndex,
    transition: styles.transition
  };
}
```

**Step 3: ホバー時の各階層のCSSを確認**

```javascript
// ホバー後に実行
// 親要素のホバー状態
() => {
  const parent = document.querySelector('親セレクタ');
  const styles = window.getComputedStyle(parent);

  return {
    // ホバー時に変化するプロパティを確認
    background: styles.background,
    color: styles.color,
    transform: styles.transform,
    opacity: styles.opacity,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction
  };
}

// 子要素のホバー状態（親のホバーで子がどう変わるか）
() => {
  const child = document.querySelector('子セレクタ');
  const styles = window.getComputedStyle(child);

  return {
    position: styles.position,
    left: styles.left,
    right: styles.right,
    background: styles.background,
    opacity: styles.opacity,
    transform: styles.transform,
    transitionDuration: styles.transitionDuration,
    transitionTimingFunction: styles.transitionTimingFunction
  };
}
```

#### 実装例：お問い合わせボタン（完全な階層確認）

**HTML構造確認結果**:
```html
<a class="ボタン親要素">
  <div class="背景レイヤー"></div>  <!-- 絶対配置の背景 -->
  <p class="テキスト">お問い合わせ</p>
</a>
```

**親要素（`<a>`）の CSS**:
- 通常状態: `position: relative`, `overflow: hidden`, `background: linear-gradient(90deg, ...)`
- ホバー状態: 背景は変わらない（子要素の背景が表示される）

**子要素1（`<div>` 背景レイヤー）の CSS**:
- 通常状態: `position: absolute`, `left: -260px`, `opacity: 0` - 画面外
- ホバー状態: `left: 0px`, `right: -174px`, `opacity: 1`, `background: linear-gradient(75deg, ...)` - スライドイン

**子要素2（`<p>` テキスト）の CSS**:
- 通常状態: `position: relative`, `z-index: 1` - 前面に表示
- ホバー状態: 変化なし

#### チェックリスト

実装前に必ず確認：

- [ ] HTML階層構造を確認（`outerHTML`, `children` を取得）
- [ ] 親要素の通常状態CSSを取得
- [ ] すべての子要素の通常状態CSSを取得（階層ごと）
- [ ] ホバー後、親要素のCSSを確認
- [ ] ホバー後、すべての子要素のCSSを確認（階層ごと）
- [ ] `position`, `z-index` の関係を理解
- [ ] `overflow: hidden` などのレイアウト制御を確認
- [ ] トランジションプロパティを各階層で確認

#### 禁止事項

❌ **絶対にやってはいけないこと：**
- 親要素だけ確認して子要素を確認しない
- 通常状態だけ確認してホバー状態を確認しない
- HTML構造を確認せずに推測で実装する
- 「だいたい同じ構造だろう」と仮定する

✅ **必ずやること：**
- すべての階層のHTML構造を正確に把握
- 各階層の通常状態とホバー状態のCSSを完全に取得
- 親子関係（`position: relative/absolute`, `z-index`）を正確に再現
- `overflow`, `clip-path` などのレイアウト制御を見落とさない

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

### assetsディレクトリの管理

**重要**: すべての静的アセット（画像、CSS、JavaScript）は `assets/` ディレクトリに集約して管理します。

#### ディレクトリ構成

```
assets/
├── css/          # すべてのCSSファイル
├── js/           # すべてのJavaScriptファイル
├── images/       # すべての画像ファイル
└── fonts/        # Webフォントファイル
```

#### 各ディレクトリの役割

**assets/css/**
- STUDIOサイトから抽出したすべてのCSSを整理して配置
- Nuxt.jsのインライン `<style>` タグから抽出したスタイルもここに統合
- モジュール化された複数のCSSファイルに分割（reset.css, variables.css, base.css等）
- `wp_enqueue_style()` で読み込み順序を管理

**assets/js/**
- STUDIOサイトから抽出したJavaScriptを配置
- Vue.js/Nuxt.jsのパターンをバニラJavaScriptに変換したファイル
- 機能ごとにファイルを分割（navigation.js, animations.js等）
- `wp_enqueue_script()` でフッターに読み込み

**assets/images/**
- ロゴ、アイコン、背景画像、コンテンツ画像などすべての画像を配置
- サブディレクトリで整理することも可能：
  ```
  images/
  ├── logo/          # ロゴファイル
  ├── icons/         # アイコン類
  ├── backgrounds/   # 背景画像
  └── content/       # コンテンツ用画像
  ```
- 本番環境では最適化（WebP変換、圧縮）を行う

**assets/fonts/**
- カスタムWebフォントファイルを配置
- ライセンス確認済みのフォントのみ配置
- `@font-face` でCSSから読み込み

#### アセットのパス取得方法

WordPressテンプレート内でアセットを参照する際は、必ず `get_template_directory_uri()` を使用：

```php
<!-- CSS読み込み（functions.phpで） -->
<?php
wp_enqueue_style('onwords-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
?>

<!-- 画像表示（テンプレートファイルで） -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="Onwords">

<!-- JavaScript読み込み（functions.phpで） -->
<?php
wp_enqueue_script('onwords-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
?>
```

#### ファイル命名規則

- **ケバブケース**を使用: `smooth-scroll.js`, `hero-section.css`
- **説明的な名前**を付ける: `header-logo.svg`, `business-card-bg.jpg`
- **バージョン番号**は付けない（Gitで管理）
- **最小化ファイル**は `.min.css`, `.min.js` のサフィックスを付ける（本番環境用）

#### 画像の最適化

開発時の注意点：
- 元画像は高解像度で保存（後で最適化）
- SVGは可能な限り使用（ロゴ、アイコン）
- JPG/PNGは本番環境でWebP変換を検討
- レスポンシブ画像は `srcset` 属性を使用

#### 画像ダウンロード時の命名規則

**重要**: STUDIOサイトから画像をダウンロードする際は、必ず以下のルールに従うこと：

- **元のファイル名を保持**: サイトで表示されている画像のファイル名をそのまま使用する
- **例**:
  - 元サイトのURL: `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg`
  - 保存先: `assets/images/logo/s-300x91_222424ad-5eb2-43c8-8327-98b3cd560f8f.svg`
- **理由**:
  - 元サイトとの対応関係を明確にする
  - デバッグ時に元画像を簡単に特定できる
  - バージョン管理時に変更履歴を追跡しやすい
- **例外**: 明確な理由があり、チーム内で合意がある場合のみリネーム可能

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

#### ヘッダーメニューの静的リンク

**重要**: 以下のリンクは `header.php` に静的に実装されており、WordPressメニューには**含めないでください**：

- **採用情報** - 外部リンクアイコン（↗）付き
  - URL: `https://hrmos.co/pages/changeholdings/jobs?category=2166892462807429120`
  - 理由: 外部リンクとして特別なスタイル（アイコン表示）が必要
- **お問い合わせ** - 赤いグラデーションボタン
  - URL: `/contact`
  - 理由: 特別なボタンスタイル（グラデーション背景）が必要

**WordPressメニュー（header-menu）に含めるべき項目**:
- 事業内容（サブメニュー: 地域観光DX事業、訪日マーケティングパートナー事業）
- 導入事例
- ナレッジ（サブメニュー: 記事一覧、ウェビナー情報、お役立ち資料）
- 会社概要（サブメニュー: 企業理念）
- お知らせ

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

### ToDoリスト作成方法

プロジェクトには以下のツールが利用可能です：

#### 1. TodoWriteツール（標準）
基本的なタスク管理に使用：
1. これから行う作業のタスクリストを作成
2. 各タスクを順番に進め、完了したらステータスを更新
3. 複数の作業がある場合は、すべてToDoに記載してから開始

#### 2. spec-workflow MCP（大規模な機能開発向け）
spec-workflow MCPがインストールされています。以下の場合に使用を依頼することがあります：
- 大規模な機能開発や実装を行う場合
- 要件定義からタスク分割まで体系的に管理する必要がある場合
- 複数フェーズにまたがる作業を計画する場合

spec-workflowを使用する場合は、以下のワークフローに従います：
1. 要件定義（Requirements）の作成
2. 設計ドキュメント（Design）の作成
3. タスク一覧（Tasks）の作成
4. 実装（Implementation）の実行

**注意**: どちらのツールを使用する場合でも、必ずタスクリストを作成してから作業を開始してください。これにより、作業の進捗が明確になり、抜け漏れを防ぐことができます。
