# 会社概要ページ 抽出データ

抽出日: 2025-11-15
抽出元: https://www.onwords.co.jp/company

## ページ構成

1. **ヒーローセクション** - Company / 会社概要
2. **経営陣紹介セクション** - BOARD MEMBER / 経営陣紹介
3. **ミッションセクション** - MISSION / ミッション
4. **会社概要セクション** - COMPANY / 会社概要
5. **アクセスセクション** - ACCESS / アクセス

---

## 1. 経営陣紹介セクション（BOARD MEMBER）

### セクション全体のスタイル
```css
padding: 0;
margin: 0;
background-color: transparent;
```

### ラベル（BOARD MEMBER）
```css
font-size: 15px;
font-weight: 600;
color: rgb(230, 1, 18); /* 赤色 */
letter-spacing: normal;
margin-bottom: 0;
```

### タイトル（経営陣紹介）
```css
font-size: 32px;
font-weight: 700;
color: rgb(34, 34, 34);
margin-bottom: 0;
margin-top: 0;
```

### 経営陣カード
```css
/* デスクトップ */
display: flex;
flex-direction: row;
gap: normal;
margin-bottom: 10px;
padding: 40px;

/* モバイル（375px幅） */
flex-direction: column;
padding: 30px;
margin-bottom: 10px;
```

### 経営陣の写真
```css
width: 150px;
height: 150px;
border-radius: 50%; /* 円形 */
margin-bottom: 0;
```

**STUDIOの実装方法:**
- 画像は`::before`疑似要素の`background-image`として設定
- `<style>`タグ内にインラインで定義

**画像ファイル:**
- 成澤豪（代表取締役社長）: `/assets/images/company/board-members/narisawa.webp`
- 加藤史子（取締役副社長）: `/assets/images/company/board-members/kato.webp`
- 竹原淳（取締役）: `/assets/images/company/board-members/takehara.webp`
- 青木理恵（取締役）: `/assets/images/company/board-members/aoki.webp`

### 名前
```css
font-size: 20px;
font-weight: 700;
color: rgb(51, 51, 51);
margin-bottom: 10px;
```

### 役職
```css
font-size: 15px;
font-weight: 400;
color: rgb(51, 51, 51);
margin-bottom: 0;
```

### プロフィール説明文
```css
font-size: 14px;
line-height: 24.5px;
color: rgb(51, 51, 51);
margin-top: 0;
```

---

## 2. ミッションセクション（MISSION）

### セクション全体のスタイル
```css
padding: 0;
background-color: transparent;
text-align: start;
```

### ラベル（MISSION）
```css
font-size: 16px;
font-weight: 600;
color: rgb(230, 1, 18); /* 赤色 */
margin-bottom: 0;
```

### メインタイトル（もっと楽しい日本に）
**テキスト:**
```
もっと楽しい日本に
Bring out Japan's fun side
```

**スタイル:**
```css
/* "もっと楽しい日本に" は本番サイトで確認が必要 */
/* Bring out Japan's fun side */
font-size: 24px;
font-weight: 400;
color: rgb(51, 51, 51);
```

### 説明文
**テキスト:**
```
日本を訪れる人も、迎える人も、みんなが楽しめる場所へ。
そして、地域の魅力を日本の活力に。

Make Japan a more enjoyable place for visitors and locals alike.
Harness regional charms to create a vibrant country
```

### ボタン（企業理念を見る）
```css
background-color: transparent; /* ボーダーボタン */
color: rgb(51, 51, 51);
padding: 10px 16px;
border-radius: 24px;
font-size: 16px;
```

**リンク先:** https://www.onwords.co.jp/company/philosophy

---

## 3. 会社概要セクション（COMPANY）

### セクション全体のスタイル
```css
padding: 0;
background-color: transparent;
```

### ラベル（COMPANY）
```css
font-size: 16px;
font-weight: 600;
color: rgb(230, 1, 18); /* 赤色 */
```

### タイトル（会社概要）
```css
font-size: 36px;
font-weight: 700;
color: rgb(34, 34, 34);
margin-bottom: 0;
```

### 会社情報テーブル

| 項目 | 内容 |
|------|------|
| **会社名** | 株式会社Onwords（かぶしきがいしゃオンワーズ） |
| **設立日** | 2025年8月1日 |
| **資本金** | 1,000万円 |
| **経営陣** | 代表取締役社長　成澤豪<br>取締役副社長　　加藤史子<br>取締役　　　　　竹原淳<br>取締役　　　　　青木理恵 |
| **事業内容** | ・地域観光DX事業<br>自治体、観光協会、DMOに向けたインバウンドに特化した観光コンサルティング事業を展開<br>調査、商品開発、販売整備、情報発信などをワンストップで提供<br><br>・訪日マーケティングパートナー事業<br>国内企業向けにインバウンドの送客支援やコンサルティング事業を展開<br>訪日OTAの利用者データや会員基盤を活用したマーケティング支援を行う |
| **所在地** | 〒105-0001<br>東京都港区虎ノ門３丁目１７−１ Tokyu Reit 虎ノ門ビル ６Ｆ |

### テーブルスタイル

**ラベル（左列）:**
```css
font-size: 16px;
font-weight: 400;
color: rgb(51, 51, 51);
background-color: transparent;
```

**値（右列）:**
```css
font-size: 16px;
font-weight: 400;
color: rgb(51, 51, 51);
```

**会社名の値のみ:**
```css
font-size: 18.72px; /* h3要素 */
font-weight: 400;
color: rgb(51, 51, 51);
```

---

## 実装メモ

### HTML構造
- STUDIOサイトでは、大量の`data-s-*`属性が使用されている
- WordPressでは、BEM形式のクラス名を使用して再実装する

### 画像の読み込み
- 本番サイトでは、`::before`疑似要素 + `background-image`を使用
- WordPressでは、通常の`<img>`タグまたは同じ疑似要素方式を使用可能

### レスポンシブ対応
- 経営陣カードは、デスクトップで`flex-direction: row`、モバイルで`column`
- paddingもデスクトップ40px、モバイル30pxに変更

### 色の統一
- 赤色（ラベル・ボタン）: `rgb(230, 1, 18)` = `#E60112`
- テキスト色（濃い灰色）: `rgb(34, 34, 34)` = `#222222`
- テキスト色（灰色）: `rgb(51, 51, 51)` = `#333333`
