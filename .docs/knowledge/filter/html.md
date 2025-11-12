# Filter Section - HTML

```html
<ul class="sd appear">
  <li class="sd appear">
    <a href="#columns" class="text link sd appear">記事一覧</a>
    <a href="#columns" class="icon sd appear">
      <span class="material-icons">expand_more</span>
    </a>
  </li>
  <li class="sd appear">
    <a href="#webinar" class="text link sd appear">ウェビナー情報</a>
    <a href="#webinar" class="icon sd appear">
      <span class="material-icons">expand_more</span>
    </a>
  </li>
  <li class="sd appear">
    <a href="#document" class="text link sd appear">お役立ち資料</a>
    <a href="#document" class="icon sd appear">
      <span class="material-icons">expand_more</span>
    </a>
  </li>
</ul>
```

## 構造

- 外側: `ul` - Flexコンテナ（横方向・中央揃え）
- 各項目: `li` - フィルターボタン
  - `a.text.link` - テキストリンク
  - `a.icon` - Material Iconsの下向き矢印 (`expand_more`)
