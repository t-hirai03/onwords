# STUDIOサイトのセクション抽出コマンド

本番サイト（https://www.onwords.co.jp/）から特定セクションのHTML/CSS/レスポンシブスタイルを正確に抽出し、構造化ドキュメントとして保存します。

## 抽出アプローチ

### 推奨: 主要構造のみ抽出（効率的）

**ページ全体の構造を把握してから、必要なセクションのみ詳細抽出する**

1. **全体構造の把握** - ページ内の全セクションを特定し、見出しと主要な要素を記録
2. **画像の収集** - ページ内のすべての画像URLを収集し、curlコマンドでダウンロード
3. **概要ドキュメント作成** - `{ページ名}_overview.md` を作成して全体構造を保存
4. **詳細抽出は必要時のみ** - コーディング時に必要なセクションのみ詳細HTML/CSSを抽出

**メリット:**
- 大量のdata-s-*属性を処理する必要がない
- 全体像を把握してから実装できる
- 必要な情報だけを効率的に取得

### 詳細抽出（特定セクションのみ）

重要なセクション（ヒーロー、複雑なコンポーネント等）のみ詳細HTML/CSS/レスポンシブスタイルを抽出

## 実行手順

### 1. ブラウザで本番サイトにアクセス

Chrome DevTools MCP または Playwright MCP を使用:

```
mcp__playwright__browser_navigate
url: "https://www.onwords.co.jp/{ページパス}"
```

### 2. ページのスナップショットを取得

```
mcp__playwright__browser_snapshot
```

### 3. 対象セクションのHTML構造を取得

DevToolsのElements パネルで対象セクションを特定し、outerHTMLを取得:

```javascript
mcp__playwright__browser_evaluate
function: |
  () => {
    const section = document.querySelector('[data-s-{セクションのUUID}]');
    return section ? section.outerHTML : null;
  }
```

### 4. 各要素のcomputed styleを取得

セクション内のすべての要素について、data-s-* 属性に対応するCSSを取得:

```javascript
mcp__playwright__browser_evaluate
function: |
  () => {
    const styles = [];
    const elements = document.querySelectorAll('[data-s-{セクションのUUID}] [data-s-*]');

    elements.forEach(el => {
      const dataId = Array.from(el.attributes)
        .find(attr => attr.name.startsWith('data-s-'))
        ?.name.replace('data-s-', '');

      if (dataId) {
        // style要素からCSSルールを取得
        const styleSheets = Array.from(document.styleSheets);
        const rules = [];

        styleSheets.forEach(sheet => {
          try {
            Array.from(sheet.cssRules || sheet.rules || []).forEach(rule => {
              if (rule.selectorText && rule.selectorText.includes(dataId)) {
                rules.push({
                  selector: rule.selectorText,
                  cssText: rule.style.cssText
                });
              }
            });
          } catch (e) {
            // CORS制限でアクセスできないスタイルシートはスキップ
          }
        });

        styles.push({
          dataId: dataId,
          element: el.tagName.toLowerCase(),
          rules: rules
        });
      }
    });

    return styles;
  }
```

### 5. レスポンシブスタイル（@media query）を取得

```javascript
mcp__playwright__browser_evaluate
function: |
  () => {
    const mediaRules = [];
    const styleSheets = Array.from(document.styleSheets);

    styleSheets.forEach(sheet => {
      try {
        Array.from(sheet.cssRules || sheet.rules || []).forEach(rule => {
          if (rule.type === CSSRule.MEDIA_RULE) {
            const mediaText = rule.media.mediaText;
            const nestedRules = [];

            Array.from(rule.cssRules || rule.rules || []).forEach(nestedRule => {
              if (nestedRule.selectorText && nestedRule.selectorText.includes('data-s-')) {
                nestedRules.push({
                  selector: nestedRule.selectorText,
                  cssText: nestedRule.style.cssText
                });
              }
            });

            if (nestedRules.length > 0) {
              mediaRules.push({
                media: mediaText,
                rules: nestedRules
              });
            }
          }
        });
      } catch (e) {
        // CORS制限でアクセスできないスタイルシートはスキップ
      }
    });

    return mediaRules;
  }
```

### 6. 画像URLを収集してダウンロード

ページ内のすべての画像URLを取得:

```javascript
mcp__playwright__browser_evaluate
function: |
  () => {
    const images = [];

    // main内のすべての画像を取得
    const main = document.querySelector('main');
    if (!main) return [];

    // img要素
    main.querySelectorAll('img').forEach(img => {
      if (img.src && !img.src.startsWith('data:')) {
        images.push({
          type: 'img',
          src: img.src,
          alt: img.alt || ''
        });
      }
    });

    // CSS background-image
    const styleElements = main.querySelectorAll('style');
    styleElements.forEach(style => {
      const cssText = style.textContent;
      const urlMatches = cssText.matchAll(/background-image:\s*url\("([^"]+)"\)/g);
      for (const match of urlMatches) {
        images.push({
          type: 'background',
          src: match[1]
        });
      }
    });

    return images;
  }
```

**curlコマンドでダウンロード:**

```bash
mkdir -p assets/images/business
curl -o "assets/images/business/hero.webp" "{画像URL}"
```

### 7. 結果を構造化ドキュメントとして保存

`.docs/extracted-sections/{ページ名}_{セクション名}.md` に保存:

```markdown
# {ページ名} - {セクション名}

抽出日: YYYY-MM-DD
URL: https://www.onwords.co.jp/{ページパス}

## HTML構造

\`\`\`html
{outerHTML}
\`\`\`

## ベーススタイル

\`\`\`css
{data-s-* 属性のCSSルール}
\`\`\`

## レスポンシブスタイル

\`\`\`css
{@media queryのCSSルール}
\`\`\`

## 実装メモ

- 要素数: X個
- 主要なクラス: .sd, .text, .appear
- 特記事項: {気づいた点}
```

## 実装時の注意点

1. **data-s-* 属性は使用しない** - WordPress側では独自のBEMクラス名を使用
2. **CSS変数を確認** - --gap-h, --gap-v などのカスタムプロパティも記録
3. **疑似要素を確認** - ::before, ::after の content も記録
4. **フォント設定を確認** - font-family, font-weight, font-size を正確に記録
5. **余白・サイズを確認** - padding, margin, gap, width, max-width を正確に記録

## 保存先ディレクトリ構造

```
.docs/
└── extracted-sections/
    ├── top_hero.md              # トップページ - ヒーロー
    ├── top_about.md             # トップページ - 会社概要
    ├── top_message.md           # トップページ - 代表メッセージ
    ├── top_business.md          # トップページ - 事業内容
    ├── business_local_dx.md     # 事業内容 - 地域観光DX
    ├── business_inbound.md      # 事業内容 - 訪日マーケティング
    └── ...
```

## 使い方

1. `/extract-studio-section` コマンドを実行
2. 抽出したいページとセクションを指定
3. Claude が自動的に本番サイトにアクセスし、HTML/CSS/レスポンシブスタイルを抽出
4. `.docs/extracted-sections/` に構造化ドキュメントとして保存
5. コーディング時にこのドキュメントを参照して、ピクセルパーフェクトに実装
