# Board Member Section - HTML

```html
<section class="board-member">
  <div class="board-member__header">
    <p class="board-member__label">BOARD MEMBER</p>
    <h2 class="board-member__title">経営陣紹介</h2>
  </div>

  <div class="board-member__cards">
    <div class="board-member__card">
      <div class="board-member__card-image">
        <!-- 画像 -->
      </div>
      <div class="board-member__card-content">
        <div class="board-member__card-header">
          <p class="board-member__card-name">成澤豪</p>
          <p class="board-member__card-position">代表取締役社長</p>
        </div>
        <p class="board-member__card-bio">
          （株）リクルートスタッフィングに新卒入社し、営業や新規事業開発に従事。その後、オーストラリアのThe University of Western Australia MBA専攻修士課程卒業。日本に帰国後、チェンジHDへ入社し、新規事業開発や投資事業などに携わる。現在は、約260件の自治体公式観光サイトを制作・運用をしているトラベルジップやチェンジグループ全体の観光DX領域の責任者として、観光事業に携わる。
          ・（株）チェンジホールディングス 執行役員
          ・（株）トラベルジップ 取締役
          ・東光コンピュータ・サービス（株） 社外取締役
        </p>
      </div>
    </div>

    <!-- 他のカード（加藤史子、竹原淳、青木理恵）も同様 -->
  </div>
</section>
```

## 構造

- `board-member` - セクション全体
  - `board-member__header` - ヘッダー（ラベル + タイトル）
  - `board-member__cards` - カードのコンテナ
    - `board-member__card` - 個別のプロフィールカード
      - `board-member__card-image` - プロフィール画像
      - `board-member__card-content` - テキストコンテンツ
        - `board-member__card-header` - 名前と役職
        - `board-member__card-bio` - 経歴
