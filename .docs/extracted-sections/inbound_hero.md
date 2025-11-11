# 訪日マーケティングページ - ヒーローセクション

抽出日: 2025-11-09
URL: https://www.onwords.co.jp/business/inboundmarketing
セクション: ヒーロー（訪日マーケティングパートナー事業）

## HTML構造

```html
<section data-s-3f54f08c-ade8-4e43-aa52-311c56a42f5d="" class="sd appear">
  <div data-s-cc0d151c-8396-4f84-be69-44107ad35487="" class="sd appear">
    <div data-s-79eb2235-6e29-4bd7-bd67-efe31912935f="" class="sd">
      <h2 data-s-9089ea23="" data-s-8ff1c59b-3de5-45fe-bc5a-44cf849a3f73="" data-r-0_0_0_0_3_8ff1c59b-3de5-45fe-bc5a-44cf849a3f73="" class="text sd appear">
        訪日マーケティングパートナー事業
      </h2>
      <p data-s-0fb34425="" data-s-f9fd4067-e0cd-451e-8bb2-f20c32d8865c="" data-r-1_0_0_0_3_f9fd4067-e0cd-451e-8bb2-f20c32d8865c="" class="text sd appear">
        データが動かす、確実な訪日集客へ<br>旅マエから旅アトまで一貫して成果を最大化
      </p>
    </div>
    <img data-s-17d742f2-5835-4e97-ab94-36e67e9907b5="" class="sd" alt="" src="https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-1152x648_v-fs_webp_0e1fc66c-d727-4f51-97eb-b378e3cb4581.webp">
  </div>
</section>
```

## ベーススタイル

```css
/* セクション全体 */
.sd[data-s-3f54f08c-ade8-4e43-aa52-311c56a42f5d] {
  place-content: center;
  align-items: center;
  background: rgba(255, 255, 255, 0);
  flex: 0 0 auto;
  flex-wrap: nowrap;
  gap: 50px;
  padding: 50px 0px 0px;
  width: 1280px;
  --gap-h-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 0px;
  --gap-v-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 50px;
  --gap-uuid: 3f54f08c-ade8-4e43-aa52-311c56a42f5d;
  max-width: 100%;
}

/* 内側コンテナ */
.sd[data-s-cc0d151c-8396-4f84-be69-44107ad35487] {
  place-content: center flex-start;
  align-items: center;
  background: transparent;
  flex: 0 0 auto;
  flex-flow: row;
  gap: 40px;
  height: auto;
  margin: 0px 40px;
  padding: 0px;
  width: 1280px;
  --gap-h-cc0d151c-8396-4f84-be69-44107ad35487: 40px;
  --gap-v-cc0d151c-8396-4f84-be69-44107ad35487: 0px;
  --gap-uuid: cc0d151c-8396-4f84-be69-44107ad35487;
  max-width: calc(100% - 80px);
}

/* テキストコンテナ */
.sd[data-s-79eb2235-6e29-4bd7-bd67-efe31912935f] {
  place-content: flex-start;
  align-items: flex-start;
  background: transparent;
  flex: 0 0 auto;
  gap: 32px;
  height: auto;
  padding: 0px;
  width: calc(50% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0.5));
  --gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f: 0px;
  --gap-v-79eb2235-6e29-4bd7-bd67-efe31912935f: 32px;
  --gap-uuid: 79eb2235-6e29-4bd7-bd67-efe31912935f;
  max-width: calc(50% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0.5));
}

/* アニメーション - テキストコンテナ */
.sd[data-s-79eb2235-6e29-4bd7-bd67-efe31912935f].appear {
  opacity: 0;
  transform: translate(0px, 8px);
  transition-delay: 500ms;
  transition-duration: 500ms;
  transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
  --gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f: 0px;
  --gap-v-79eb2235-6e29-4bd7-bd67-efe31912935f: 32px;
}

.sd[data-s-79eb2235-6e29-4bd7-bd67-efe31912935f].appear-active {
  transition-delay: 500ms;
  transition-duration: 500ms;
  transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
}

/* タイトル */
.sd[data-s-8ff1c59b-3de5-45fe-bc5a-44cf849a3f73] {
  color: rgb(34, 34, 34);
  flex: 0 0 auto;
  font-family: var(--s-font-3c90ade0);
  font-feature-settings: "palt";
  font-size: 32px;
  font-weight: 700;
  height: auto;
  line-height: 1.5;
  text-align: left;
  width: calc(100% - (var(--gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f) * 0));
  max-width: calc(100% - (var(--gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f) * 0));
  justify-content: flex-start;
}

/* 説明文 */
.sd[data-s-f9fd4067-e0cd-451e-8bb2-f20c32d8865c] {
  color: rgb(34, 34, 34);
  font-family: var(--s-font-3c90ade0);
  font-feature-settings: "palt";
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  height: auto;
  letter-spacing: normal;
  line-height: 1.75;
  margin: 0px;
  text-align: left;
  width: calc(100% - (var(--gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f) * 0));
  max-width: calc(100% - (var(--gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f) * 0));
  justify-content: flex-start;
}

/* 画像 */
.sd[data-s-17d742f2-5835-4e97-ab94-36e67e9907b5] {
  border-radius: 8px;
  flex: 0 0 auto;
  height: auto;
  width: calc(50% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0.5));
  max-width: calc(50% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0.5));
}

/* アニメーション - 画像 */
.sd[data-s-17d742f2-5835-4e97-ab94-36e67e9907b5].appear {
  opacity: 0;
  transform: translate(0px, 20px);
  transition-delay: 600ms;
  transition-duration: 600ms;
  transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
}

.sd[data-s-17d742f2-5835-4e97-ab94-36e67e9907b5].appear-active {
  transition-delay: 600ms;
  transition-duration: 600ms;
  transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
}
```

## レスポンシブスタイル

```css
/* タブレット（840px以下） */
@media screen and (max-width: 840px) {
  .sd[data-s-3f54f08c-ade8-4e43-aa52-311c56a42f5d] {
    padding: 20px 0px 0px;
    --gap-h-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 0px;
    --gap-v-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 50px;
  }

  .sd[data-s-cc0d151c-8396-4f84-be69-44107ad35487] {
    flex-flow: column;
    gap: 50px;
    --gap-h-cc0d151c-8396-4f84-be69-44107ad35487: 0px;
    --gap-v-cc0d151c-8396-4f84-be69-44107ad35487: 50px;
  }

  .sd[data-s-79eb2235-6e29-4bd7-bd67-efe31912935f] {
    place-content: center flex-start;
    align-items: center;
    flex: 0 0 auto;
    width: calc(100% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0));
    --gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f: 0px;
    --gap-v-79eb2235-6e29-4bd7-bd67-efe31912935f: 32px;
    max-width: calc(100% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0));
  }

  .sd[data-s-8ff1c59b-3de5-45fe-bc5a-44cf849a3f73] {
    text-align: center;
    justify-content: center;
  }

  .sd[data-s-f9fd4067-e0cd-451e-8bb2-f20c32d8865c] {
    text-align: center;
    justify-content: center;
  }

  .sd[data-s-17d742f2-5835-4e97-ab94-36e67e9907b5] {
    flex: 0 0 auto;
    width: calc(100% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0));
    max-width: calc(100% - (var(--gap-h-cc0d151c-8396-4f84-be69-44107ad35487) * 0));
  }
}

/* 大画面タブレット（1140px以下） */
@media screen and (max-width: 1140px) {
  .sd[data-s-cc0d151c-8396-4f84-be69-44107ad35487] {
    gap: 32px;
    margin: 0px 32px;
    --gap-h-cc0d151c-8396-4f84-be69-44107ad35487: 32px;
    --gap-v-cc0d151c-8396-4f84-be69-44107ad35487: 0px;
    max-width: calc(100% - 64px);
  }
}

/* スマートフォン（540px以下） */
@media screen and (max-width: 540px) {
  .sd[data-s-3f54f08c-ade8-4e43-aa52-311c56a42f5d] {
    padding: 30px 0px 100px;
    --gap-h-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 0px;
    --gap-v-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 50px;
  }

  .sd[data-s-cc0d151c-8396-4f84-be69-44107ad35487] {
    gap: 40px;
    margin: 0px 20px;
    --gap-h-cc0d151c-8396-4f84-be69-44107ad35487: 40px;
    --gap-v-cc0d151c-8396-4f84-be69-44107ad35487: 0px;
    max-width: calc(100% - 40px);
  }

  .sd[data-s-79eb2235-6e29-4bd7-bd67-efe31912935f] {
    gap: 24px;
    --gap-h-79eb2235-6e29-4bd7-bd67-efe31912935f: 0px;
    --gap-v-79eb2235-6e29-4bd7-bd67-efe31912935f: 24px;
  }

  .sd[data-s-8ff1c59b-3de5-45fe-bc5a-44cf849a3f73] {
    font-size: 24px;
  }

  .sd[data-s-f9fd4067-e0cd-451e-8bb2-f20c32d8865c] {
    font-size: 14px;
  }

  .sd[data-s-17d742f2-5835-4e97-ab94-36e67e9907b5] {
    border-radius: 6px;
  }
}

/* 極小画面（320px以下） */
@media screen and (max-width: 320px) {
  .sd[data-s-3f54f08c-ade8-4e43-aa52-311c56a42f5d] {
    padding: 0px;
    --gap-h-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 0px;
    --gap-v-3f54f08c-ade8-4e43-aa52-311c56a42f5d: 50px;
  }
}
```

## WordPress実装メモ

### BEMクラス名（案）

- `.inbound-hero` - セクション全体
- `.inbound-hero__container` - 内側コンテナ
- `.inbound-hero__content` - テキストコンテナ
- `.inbound-hero__title` - タイトル
- `.inbound-hero__description` - 説明文
- `.inbound-hero__image` - 画像

### レイアウト構造

- **デスクトップ**: 左右2カラム（テキスト50% + 画像50%、gap: 40px）
- **タブレット**: 縦並び（column）、gap: 50px、左右余白32px
- **スマートフォン**: 縦並び、gap: 40px、左右余白20px

### 重要なポイント

1. **CSS変数**: `--gap-h-*`, `--gap-v-*` で余白を動的管理
2. **calc()を多用**: `width: calc(50% - (var(--gap-h-*) * 0.5))`
3. **アニメーション**: `.appear` クラスでフェードイン（opacity + transform）
4. **font-feature-settings**: "palt" でプロポーショナルメトリクス
5. **画像**: border-radius デスクトップ8px → スマホ6px

### 画像

- URL: `https://storage.googleapis.com/studio-design-asset-files/projects/1pqDrBZNWj/s-1152x648_v-fs_webp_0e1fc66c-d727-4f51-97eb-b378e3cb4581.webp`
- ローカル保存先: `assets/images/business/inbound_hero.webp`
- サイズ: 1152x648px
- フォーマット: WebP
