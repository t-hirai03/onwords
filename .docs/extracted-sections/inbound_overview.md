# 訪日マーケティングページ - 全体構造

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing

## ページ構成

全8セクションで構成されています。

### 1. ヒーローセクション

**data-s-id**: `3f54f08c-ade8-4e43-aa52-311c56a42f5d`

**構造**:
```
<section> ヒーロー全体
  └── <div> 内側コンテナ（左右2カラム）
      ├── <div> テキストコンテナ
      │   ├── <h2> 訪日マーケティングパートナー事業
      │   └── <p> データが動かす、確実な訪日集客へ...
      └── <img> 画像
```

**詳細ドキュメント**: `inbound_hero.md`

### 2. OUR STRENGTHS（3つの強み）

**data-s-id**: `42e79239-5b2b-4ffa-8478-21fb98e85f39`

**構造**:
```
<section> セクション全体
  └── <div> section-inner
      ├── <div> ヘッダー
      │   ├── <p> OUR STRENGTHS
      │   └── <h2> インバウンドの集客支援になぜOnwordsが選ばれるのか
      └── <div> コンテンツ
          ├── <div> sticky ナビゲーション
          │   └── <ul> 3つの強みリンク
          │       ├── <li><a> 01. 訪日インバウンドに特化した専門性
          │       ├── <li><a> 02. WAmazingの独自データに基づいた施策
          │       └── <li><a> 03. 現地スタッフがもたらすリアルな視点
          └── <ul> 詳細説明リスト
              ├── <li id="feature-1"> 01の詳細
              ├── <li id="feature-2"> 02の詳細
              └── <li id="feature-3"> 03の詳細
```

**特徴**:
- sticky ナビゲーション（スクロール時に固定）
- アンカーリンクで各詳細にジャンプ
- 各詳細には背景画像あり（Unsplash）

### 3. SERVICES（サービス一覧）

**data-s-id**: `87b405ec-f4a9-4e59-ac79-eb472346ef43`

**構造**:
```
<section> セクション全体
  └── <div> section-inner
      ├── <div> ヘッダー
      │   ├── <p> SERVICES
      │   └── <h2> サービス一覧
      └── <ul> サービスカード一覧
          ├── <li> 戦略策定
          ├── <li> 記事作成・PR
          ├── <li> ダイレクト情報発信
          ├── <li> 在留・海外KOL
          ├── <li> 海外SNS運用代行
          ├── <li> 訪日旅行者向け広告
          ├── <li> 調査
          ├── <li> 翻訳
          └── <li> メディアバイング
```

**特徴**:
- 9つのサービスカード
- 各カードには見出し + 説明文

### 4. CASE STUDY（導入事例）

**data-s-id**: `599a59c3-2b5d-49c6-9597-77f79775486c`

**構造**:
```
<div> セクション全体
  └── <div> コンテナ
      ├── <div> ヘッダー
      │   ├── <p> CASE STUDY
      │   └── <h2> 導入事例
      ├── <ul> 導入事例カード（2件）
      │   ├── <a> 特定エリアで事業展開するデベロッパー
      │   └── <a> 全国展開するアパレルブランド
      └── <a> すべての導入事例を見る（ボタン）
```

**WordPress実装**:
- カスタム投稿タイプ「導入事例（case）」から2件取得
- タクソノミーで「訪日マーケティングパートナー事業」でフィルタリング

### 5. OUR BUSINESS RECORD（取引実績）

**data-s-id**: `8a27fe8a-d997-4771-b66a-0b4c084e3038`

**構造**:
```
<section> セクション全体
  └── <div> section-inner
      ├── <div> ヘッダー
      │   ├── <p> OUR BUSINESS RECORD
      │   └── <h2> 取引実績
      └── <ul> 企業ロゴ一覧
          ├── <li> ロゴ1
          ├── <li> ロゴ2
          ├── <li> ロゴ3
          ├── <li> ロゴ4
          └── <li> ロゴ5
```

**WordPress実装**:
- Advanced Custom Fields（ACF）でロゴ画像を管理
- または直接HTMLに記載

### 6. WEBINAR（ウェビナー情報）

**data-s-id**: `a6e5504c-cc6e-4389-8edb-967cdded7b3c`

**構造**:
```
<div> セクション全体
  └── <div> コンテナ
      ├── <div> ヘッダー
      │   ├── <p> WEBINAR
      │   └── <h2> ウェビナー情報
      ├── <ul> ウェビナーカード（2件）
      │   ├── <a> 冬季・春節の訪日需要を逃すな！...
      │   └── <a> 成果を出すための「逆算」思考...
      └── <a> すべてのウェビナーを見る（ボタン）
```

**WordPress実装**:
- カスタム投稿タイプ「ウェビナー（webinar）」から2件取得
- カスタムフィールド:
  - 開催日
  - ステータス（これから開催 / 終了）
  - 対象（民間企業様向け / 自治体様向け）

### 7. DOCUMENTS（お役立ち資料）

**data-s-id**: `928ac55b-8728-4be9-a382-5bd6d0d0933c`

**構造**:
```
<div> セクション全体
  └── <div> コンテナ
      ├── <div> ヘッダー
      │   ├── <p> DOCUMENTS
      │   └── <h2> お役立ち資料
      ├── <ul> 資料カード（1件）
      │   └── <a> 【企業様向け】訪日マーケティングパートナー事業のご案内
      └── <a> すべての資料を見る（ボタン）
```

**WordPress実装**:
- カスタム投稿タイプ「資料（document）」から1件取得
- カスタムフィールド:
  - 公開日
  - 対象（民間企業様向け / 自治体様向け）

## 共通パターン

### セクション構造

ほとんどのセクションが以下のパターンを採用:

```html
<section data-s-{UUID} class="section sd appear">
  <div data-s-section-inner-{UUID} class="section-inner sd appear">
    <!-- ヘッダー -->
    <div class="sd appear">
      <p class="text sd appear">ENGLISH LABEL</p>
      <h2 class="text sd appear">日本語見出し</h2>
    </div>

    <!-- コンテンツ -->
    <div class="sd appear">
      ...
    </div>
  </div>
</section>
```

### ヘッダースタイル

- 英語ラベル（例: SERVICES）: 小さめ、赤色、太字
- 日本語見出し（例: サービス一覧）: 大きめ、黒色、太字

### アニメーションクラス

- `.sd` - Studio Design（STUDIO標準クラス）
- `.appear` - フェードインアニメーション用

### CSS変数

- `--gap-h-{UUID}` - 横方向のgap
- `--gap-v-{UUID}` - 縦方向のgap
- `--gap-uuid` - 対応するUUID

## コーディング時の注意点

1. **data-s-*属性は使用しない** - WordPress側では独自のBEMクラス名を使用
2. **セクションごとにHTML/CSSを個別に抽出** - 必要なセクションの詳細だけを取得
3. **カスタム投稿タイプの設計** - WEBINAR、DOCUMENTS、CASE STUDYは投稿タイプで管理
4. **共通コンポーネント化** - ヘッダー部分、カードレイアウトは再利用可能に設計

## 詳細HTML/CSSの抽出方法

特定のセクションの詳細が必要な場合は、以下のスクリプトで抽出:

```javascript
// セクションのdata-s-idを指定
const dataId = '87b405ec-f4a9-4e59-ac79-eb472346ef43'; // SERVICES

// HTML取得
const section = document.querySelector(`[data-s-${dataId}]`);
const html = section.outerHTML;

// data-s-*属性を収集
const dataIds = new Set();
const collectDataIds = (element) => {
  Array.from(element.attributes).forEach(attr => {
    if (attr.name.startsWith('data-s-')) {
      dataIds.add(attr.name.replace('data-s-', ''));
    }
  });
  Array.from(element.children).forEach(child => collectDataIds(child));
};
collectDataIds(section);

// CSS取得（ベーススタイル + レスポンシブ）
// 上記のヒーローセクションと同じ方法で取得
```

## 画像一覧とダウンロード

### ヒーローセクション

| 画像 | URL | 保存先 |
|------|-----|--------|
| メイン画像 | `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-1152x648_v-fs_webp_0e1fc66c-d727-4f51-97eb-b378e3cb4581.webp` | `assets/images/business/inbound_hero.webp` |

### OUR STRENGTHS（背景画像 - Unsplash）

| セクション | URL | 保存先 |
|-----------|-----|--------|
| 01. 訪日インバウンドに特化した専門性 | `https://images.unsplash.com/photo-1700621861859-96294b8a6d78?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MjV8fCVFNiU5NyVBNSVFNiU5QyVBQyVFMyU4MCU4MCVFNSVBRiU4QyVFNSVBMyVBQiVFNSVCMSVCMXxlbnwwfHx8fDE3NTY3OTY3MTR8MA&ixlib=rb-4.1.0&q=80&w=1080` | `assets/images/business/strength_01_fuji.webp` |
| 02. WAmazingの独自データ | `https://images.unsplash.com/photo-1686061593213-98dad7c599b9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8Njh8fCVFMyU4MyU4NyVFMyU4MyVCQyVFMyU4MiVCRiVFMyU4MCU4MCVFMyU4MyU4NiVFMyU4MiVBRiVFMyU4MyU4RSVFMyU4MyVBRCVFMyU4MiVCOCVFMyU4MyVCQyVFMyU4MCU4MCVFMyU4MyU5RSVFMyU4MyVCQyVFMyU4MiVCMSVFMyU4MyU4NiVFMyU4MiVBMyVFMyU4MyVCMyVFMyU4MiVCMHxlbnwwfHx8fDE3NTY3OTY5NTB8MA&ixlib=rb-4.1.0&q=80&w=1080` | `assets/images/business/strength_02_data.webp` |

### 導入事例（サムネイル）

| 事例 | URL | 保存先 |
|------|-----|--------|
| 商業施設のPoC戦略 | `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-1066x800_v-fs_webp_5e276314-cce2-45cf-8f89-8f1d488971cf_small.webp` | WordPress投稿のアイキャッチ画像 |
| アパレルブランドROAS成功 | `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-1566x1261_v-fms_webp_f9302d6b-0a4e-416a-b208-38def2e3e054_small.webp` | WordPress投稿のアイキャッチ画像 |

### 取引実績（企業ロゴ）

| ロゴ | URL | 保存先 |
|------|-----|--------|
| ロゴ1 | `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-200x200_ee64fd27-ec7b-460c-89d1-93de8a09dd4d.webp` | `assets/images/business/client_logo_01.webp` |
| ロゴ2 | `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-200x200_631f5029-ca81-4821-b6ba-5ec250988ea4.webp` | `assets/images/business/client_logo_02.webp` |
| ロゴ3 | `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-201x200_6d556456-7523-4ddb-a637-fd7bedf4b5f4.webp` | `assets/images/business/client_logo_03.webp` |

### 画像ダウンロード方法

**curlコマンドで一括ダウンロード:**

```bash
# ヒーローセクション
curl -o "assets/images/business/inbound_hero.webp" "https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-1152x648_v-fs_webp_0e1fc66c-d727-4f51-97eb-b378e3cb4581.webp"

# OUR STRENGTHS背景画像
curl -o "assets/images/business/strength_01_fuji.webp" "https://images.unsplash.com/photo-1700621861859-96294b8a6d78?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MjV8fCVFNiU5NyVBNSVFNiU5QyVBQyVFMyU4MCU4MCVFNSVBRiU4QyVFNSVBMyVBQiVFNSVCMSVCMXxlbnwwfHx8fDE3NTY3OTY3MTR8MA&ixlib=rb-4.1.0&q=80&w=1080"
curl -o "assets/images/business/strength_02_data.webp" "https://images.unsplash.com/photo-1686061593213-98dad7c599b9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8Njh8fCVFMyU4MyU4NyVFMyU4MyVCQyVFMyU4MiVCRiVFMyU4MCU4MCVFMyU4MyU4NiVFMyU4MiVBRiVFMyU4MyU4RSVFMyU4MyVBRCVFMyU4MiVCOCVFMyU4MyVCQyVFMyU4MCU4MCVFMyU4MyU5RSVFMyU4MyVCQyVFMyU4MiVCMSVFMyU4MyU4NiVFMyU4MiVBMyVFMyU4MyVCMyVFMyU4MiVCMHxlbnwwfHx8fDE3NTY3OTY5NTB8MA&ixlib=rb-4.1.0&q=80&w=1080"

# 取引実績ロゴ
curl -o "assets/images/business/client_logo_01.webp" "https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-200x200_ee64fd27-ec7b-460c-89d1-93de8a09dd4d.webp"
curl -o "assets/images/business/client_logo_02.webp" "https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-200x200_631f5029-ca81-4821-b6ba-5ec250988ea4.webp"
curl -o "assets/images/business/client_logo_03.webp" "https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-201x200_6d556456-7523-4ddb-a637-fd7bedf4b5f4.webp"
```

## 次のステップ

1. **画像をダウンロード** - 上記のcurlコマンドで一括ダウンロード

2. WordPress側のカスタム投稿タイプを設計
   - `webinar` - ウェビナー情報
   - `document` - お役立ち資料
   - `case` - 導入事例（既存）

3. 共通コンポーネントのCSS設計
   - `.section-header` - セクションヘッダー
   - `.service-card` - サービスカード
   - `.case-card` - 導入事例カード
   - `.webinar-card` - ウェビナーカード
   - `.document-card` - 資料カード

4. 必要なセクションのみ詳細HTML/CSSを抽出してコーディング
