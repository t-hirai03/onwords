# コンテンツセクション - HTML構造

## 概要

プライバシーポリシーの本文は81個の段落（`<p>`タグ）で構成されています。
各段落は条文のタイトル、本文、リンクなどを含みます。

## 簡略化したHTML構造（WordPress実装用）

```html
<div class="privacypolicy-content">
  <div class="privacypolicy-content__inner">

    <!-- 冒頭文 -->
    <p>株式会社Onwords（以下「当社」といいます。）は、個人のプライバシーに影響を与えうる情報を取り扱う事業領域が拡大するなか、その情報の有用性に配慮しつつ、個人の人格尊重及び個人の権利利益を保護することが、当社における最重要事項のひとつであると認識しております。<br>
    　当社は、個人のプライバシーに影響を与えうる情報を取り扱うにあたり、個人情報の保護に関する法令、指針及びガイドライン並びにこのプライバシーポリシーに定められた事項を遵守します。</p>

    <p></p> <!-- 空段落（余白） -->

    <!-- 第1条 -->
    <p>第１条（取得する個人情報とその利用目的）<br>
    　当社は、次の個人情報を取得し、それぞれの利用目的を達成するために必要な範囲で利用します。</p>

    <p>　①取引先に関する情報</p>
    <p>　　・契約手続、取引先管理、商品及びサービスの提供及びこれらに付随する業務遂行のため。</p>
    <p>　　・商品及びサービスの開発及び改善並びにマーケティング活動のため。</p>
    <p>　　・イベント、商品及びサービスの案内その他情報提供のため。</p>

    <!-- （中略：②〜⑦の項目が続く） -->

    <p></p> <!-- 空段落（余白） -->

    <!-- 第2条以降も同様の構造 -->

    <!-- リンクを含む段落の例 -->
    <p>② 共同して利用する者の範囲<br>
    　<a href="https://www.changeholdings.co.jp/company/about/#group"><strong><u>当社グループ</u></strong></a>（株式会社チェンジホールディングス及びその国内子会社をいいます。）</p>

    <!-- 外部リンクの例 -->
    <p>① 名称：Google Analytics<br>
    提供者：Google LLC<br>
    プライバシーポリシー：<br>
    <a href="https://www.google.com/intl/ja/policies/privacy/">https://www.google.com/intl/ja/policies/privacy/</a></p>

    <!-- 会社情報 -->
    <p>株式会社Onwords<br>
    所在地：東京都港区虎ノ門三丁目１７番１号<br>
    個人情報取扱責任者：代表取締役  成澤　豪<br>
    E-mail：info@onwords.co.jp</p>

  </div>
</div>
```

## 要素の説明

### 外側コンテナ (.privacypolicy-content)
- コンテンツ全体を包むラッパー
- 背景色などのスタイル適用用

### 内側コンテナ (.privacypolicy-content__inner)
- 余白管理用のコンテナ
- `max-width: 1000px`
- `margin: 0 auto`
- `padding: 0 16px`

### 段落 (p)
- 基本的なテキストコンテンツ
- `font-size: 16px`
- `line-height: 22.4px`（1.4倍）
- `margin-bottom: 10px`

### リンク (a)
- 下線付き（`text-decoration: underline`）
- ホバー時の色変更
- 外部リンクの場合は`target="_blank"` `rel="noopener noreferrer"`を追加

### 強調テキスト (strong)
- リンク内で使用される太字テキスト

## WordPress実装時の注意

1. **改行（`<br>`）**: STUDIOでは`<br>`が使われていますが、WordPressではそのまま使用してOK
2. **空段落**: 余白のための空`<p></p>`もそのまま再現
3. **リンク**:
   - 外部リンクには`target="_blank" rel="noopener noreferrer"`を追加
   - 下線は`text-decoration: underline`で実装
4. **全角スペース**: インデント用の全角スペースもそのまま再現（`　`）

## コンテンツ取得方法

WordPress実装時は、本文コンテンツを固定ページの本文エリアから取得するか、カスタムフィールドで管理します。

### 固定ページ本文から取得する場合
```php
<div class="privacypolicy-content">
  <div class="privacypolicy-content__inner">
    <?php the_content(); ?>
  </div>
</div>
```

### カスタムフィールドで管理する場合
```php
<div class="privacypolicy-content">
  <div class="privacypolicy-content__inner">
    <?php
    $privacy_content = get_post_meta(get_the_ID(), 'privacy_policy_content', true);
    echo wpautop($privacy_content);
    ?>
  </div>
</div>
```
