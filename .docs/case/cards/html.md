# カードセクション HTML

https://www.onwords.co.jp/case/ より抽出

```html
<ul data-s-68e7ba57-0a49-4405-a54b-9635fa25dc38="" class="sd appear">
  <li data-s-3c1de8c1-9d93-4c57-9e3d-d0512a261cf8="" class="sd">
    <a href="/case/retail-poc-strategy" data-s-110f993d-3ea2-4831-b859-43a2b09973cd="" class="link sd appear">
      <div data-s-35bde53d-b785-49cb-86df-a21769a1acd5="" class="sd appear">
        <img data-s-3f97f393-3ae8-490f-b220-860093920661="" class="sd" alt="" src="https://storage.googleapis.com/studio-cms-assets/projects/1pqDrBZNWj/s-1200x630_v-fms_webp_1ccbe596-0f63-4314-ab58-5d3d3bd119f6_middle.webp">
        <img data-s-ff2e186a-1b78-4788-b790-1f56fd926b2a="" class="sd" alt="" src="" loading="lazy">
      </div>
      <div data-s-482e0ce9-acf6-4d6d-abf3-f9720a6bae94="" class="sd appear">
        <div data-s-e4dcde11-c1aa-4655-be08-4557bb39ab1e="" class="sd appear">
          <p data-s-32647b29-2c4b-4ac2-b1c5-e8d605aa7b45="" data-r-0_0_1_0_0_1_2_3_32647b29-2c4b-4ac2-b1c5-e8d605aa7b45="" class="text sd appear">特定エリアで事業展開するデベロッパー</p>
          <p data-s-380afe79-14fb-45be-91ba-49ecb09018a0="" data-r-1_0_1_0_0_1_2_3_380afe79-14fb-45be-91ba-49ecb09018a0="" class="text sd appear">インバウンド施策の「勝ちパターン」を可視化する商業施設のPoC戦略</p>
        </div>
        <div data-s-9c075db9-180e-46a4-99a2-5baf0aa9b64e="" class="sd appear">
          <ul data-s-6f6d5c9a-bf24-4215-a97f-2136da040944="" class="sd appear">
            <li data-s-24dd4728-b4a1-4508-9dba-d515d94d608b="" class="sd appear">
              <p data-s-2d7a39c3-ee89-40fd-92a7-b61bc6d9fe46="" data-r-0_0_0_1_1_0_0_1_2_3_2d7a39c3-ee89-40fd-92a7-b61bc6d9fe46="" class="text sd appear">訪日マーケティングパートナー事業</p>
            </li>
          </ul>
        </div>
      </div>
    </a>
  </li>
  <li data-s-3c1de8c1-9d93-4c57-9e3d-d0512a261cf8="" class="sd">
    <a href="/case/apparel-roas-success" data-s-110f993d-3ea2-4831-b859-43a2b09973cd="" class="link sd appear">
      <div data-s-35bde53d-b785-49cb-86df-a21769a1acd5="" class="sd appear">
        <img data-s-3f97f393-3ae8-490f-b220-860093920661="" class="sd" alt="" src="https://storage.googleapis.com/studio-cms-assets/projects/1pqDrBZNWj/s-1200x630_v-fms_webp_4ec2599c-73cc-48c5-b091-4737a9996fea_middle.webp">
        <img data-s-ff2e186a-1b78-4788-b790-1f56fd926b2a="" class="sd" alt="" src="" loading="lazy">
      </div>
      <div data-s-482e0ce9-acf6-4d6d-abf3-f9720a6bae94="" class="sd appear">
        <div data-s-e4dcde11-c1aa-4655-be08-4557bb39ab1e="" class="sd appear">
          <p data-s-32647b29-2c4b-4ac2-b1c5-e8d605aa7b45="" data-r-0_0_1_0_1_1_2_3_32647b29-2c4b-4ac2-b1c5-e8d605aa7b45="" class="text sd appear">全国展開するアパレルブランド</p>
          <p data-s-380afe79-14fb-45be-91ba-49ecb09018a0="" data-r-1_0_1_0_1_1_2_3_380afe79-14fb-45be-91ba-49ecb09018a0="" class="text sd appear">アパレルブランドがROAS600%を達成した、データに基づくインバウンド集客戦略</p>
        </div>
        <div data-s-9c075db9-180e-46a4-99a2-5baf0aa9b64e="" class="sd appear">
          <ul data-s-6f6d5c9a-bf24-4215-a97f-2136da040944="" class="sd appear">
            <li data-s-24dd4728-b4a1-4508-9dba-d515d94d608b="" class="sd appear">
              <p data-s-2d7a39c3-ee89-40fd-92a7-b61bc6d9fe46="" data-r-0_0_0_1_1_0_1_1_2_3_2d7a39c3-ee89-40fd-92a7-b61bc6d9fe46="" class="text sd appear">訪日マーケティングパートナー事業</p>
            </li>
          </ul>
        </div>
      </div>
    </a>
  </li>
</ul>
```

## 構造

- ul要素: カードリストのコンテナ
  - li要素: 各カード項目
    - a要素: カード全体のリンク
      - div要素: 画像コンテナ
        - img要素（1つ目）: サムネイル画像
        - img要素（2つ目）: 遅延読み込み用
      - div要素: テキストコンテナ
        - div要素: タイトルグループ
          - p要素: クライアント名
          - p要素: 記事タイトル
        - div要素: カテゴリー表示
          - ul要素: カテゴリータグリスト
            - li要素:
              - p要素: カテゴリー名
