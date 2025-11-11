# 抽出済みセクション一覧

本番サイト（https://www.onwords.co.jp/）から抽出したHTML/CSSのドキュメントリストです。

## 使い方

1. `/extract-studio-section` コマンドを実行
2. ページとセクションを指定してHTML/CSS/レスポンシブスタイルを抽出
3. このディレクトリに構造化ドキュメントとして保存
4. コーディング時に参照してピクセルパーフェクト実装

## 抽出済みセクション

### トップページ (/)

- [ ] `top_hero.md` - ヒーローセクション
- [ ] `top_about.md` - 会社概要セクション
- [ ] `top_message.md` - 代表メッセージセクション
- [ ] `top_business.md` - 事業内容セクション
- [ ] `top_news.md` - お知らせセクション
- [ ] `top_inquiry.md` - お問い合わせセクション

### 事業内容ページ (/business)

- [ ] `business_hero.md` - ヒーローセクション
- [ ] `business_local_dx.md` - 地域観光DX事業
- [ ] `business_inbound.md` - 訪日マーケティングパートナー事業

### お知らせページ (/news)

- [ ] `news_filter.md` - フィルターボタン
- [ ] `news_hero.md` - ヒーローセクション
- [ ] `news_list.md` - お知らせ一覧

### 会社情報ページ (/company)

- [ ] `company_hero.md` - ヒーローセクション
- [ ] `company_overview.md` - 会社概要
- [ ] `company_history.md` - 沿革
- [ ] `company_access.md` - アクセス

## 注意事項

- data-s-* 属性のUUIDはSTUDIO固有のもの
- WordPressでは独自のBEMクラス名を使用する
- CSS変数（--gap-h, --gap-v等）の値も正確に記録する
- 疑似要素（::before, ::after）のcontentも忘れずに記録する
