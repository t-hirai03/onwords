# Table of Contents (TOC) - HTML

```html
<div class="toc">
  <ul class="toc_list">
    <!-- h2レベル（大項目） -->
    <li class="toc_item toc_item--2">
      <a href="#index_omRjYlFx">1. 訪日外国人向け広告、ただの集客手段になっていませんか？ インバウンド戦略の現状と課題</a>
    </li>

    <!-- h3レベル（小項目） -->
    <li class="toc_item toc_item--3">
      <a href="#index_99xZ6H_V">その広告予算、本当に成果に繋がっていますか？</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_dxNYlltP">企業が抱える「戦略のジレンマ」とは？</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index__QM_ULZp">本記事で解決できる3つの悩み</a>
    </li>

    <!-- h2レベル（大項目） -->
    <li class="toc_item toc_item--2">
      <a href="#index_zF7_cCdQ">2. ROIを最大化するインバウンド広告の基本戦略：集中か、分散か？</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_cL24XRJ9">集中戦略：ターゲット国に特化した広告で成果を最大化する</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_B4ifM3HL">分散戦略：多様なニーズを広く捉え、新たな顧客層を開拓する</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_9eiLjHaI">データに基づいた意思決定フロー：最適な戦略の選び方</a>
    </li>

    <!-- h2レベル（大項目） -->
    <li class="toc_item toc_item--2">
      <a href="#index_uDGy42bo">3. オンライン広告費を無駄にしない！オフライン成果を可視化するROI計測の仕組み</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_YfyKG46Z">位置情報データとジオターゲティング広告で「来店計測」を実現する</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_f2Mzt6YX">QRコードやクーポンを活用したオフラインコンバージョン計測</a>
    </li>

    <!-- h2レベル（大項目） -->
    <li class="toc_item toc_item--2">
      <a href="#index_vl8XZ1S0">4. OTA依存からの脱却！自社サイトへのダイレクト誘導を増やす広告運用術</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_J_3QqBjK">LTVを最大化する「顧客育成型」広告の考え方</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_4HM0Ei52">自社サイト訪問者を逃さない！リターゲティング広告の具体策</a>
    </li>

    <!-- h2レベル（大項目） -->
    <li class="toc_item toc_item--2">
      <a href="#index_anyokpQi">５．【事例紹介】実店舗でROASを可視化する！クロスチャネル効果測定</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_vFuJPA4c">課題：クリック数だけでは見えなかった「真の広告効果」</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_VbI34wCK">解決策：ユニーククーポンでオフライン購買を紐づけるPoC</a>
    </li>

    <li class="toc_item toc_item--3">
      <a href="#index_8PDXzCi4">成果：施策ごとのROASと「勝ちパターン」を可視化</a>
    </li>
  </ul>
</div>
```

## 構造

- **目次コンテナ**: `div.toc`
  - **リスト**: `ul.toc_list`
    - **h2レベル項目**: `li.toc_item.toc_item--2` > `a`
    - **h3レベル項目**: `li.toc_item.toc_item--3` > `a`

## クラス説明

- `.toc` - 目次全体のコンテナ
- `.toc_list` - ul要素（リストスタイルなし）
- `.toc_item` - li要素（全項目共通）
- `.toc_item--2` - h2レベルの項目（大項目）
- `.toc_item--3` - h3レベルの項目（小項目、インデント深め）
