# Values Section - CSS

## デスクトップ（デフォルト）

```css
.philosophy-values {
  display: flex;
  width: 1425px;
  max-width: 100%;
  margin: 0;
  padding: 0;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-values__inner {
  display: flex;
  width: 1280px;
  max-width: 100%;
  margin: 0;
  padding: 90px 40px;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-values__header {
  display: flex;
  width: 1200px;
  max-width: 100%;
  margin: 0 0 20px;
  padding: 0;
  gap: 2px;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-values__label {
  display: flex;
  width: 1200px;
  max-width: 100%;
  margin: 0;
  padding: 0;
  color: rgb(230, 1, 18);
  font-size: 16px;
  font-weight: 600;
  line-height: 28px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-values__title {
  display: flex;
  width: 1200px;
  max-width: 100%;
  margin: 0;
  padding: 0;
  color: rgb(34, 34, 34);
  font-size: 36px;
  font-weight: 700;
  line-height: 57.6px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-values__content {
  display: flex;
  width: 1200px;
  max-width: 100%;
  margin: 0;
  padding: 10px 0 0;
  gap: 10px;
  flex-direction: column;
  align-items: center;
  justify-content: normal;
}

.philosophy-values__list {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 10px;
  gap: 30px;
  flex-direction: column;
  align-items: center;
  justify-content: normal;
  list-style: none;
}

.philosophy-values__item {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 0;
  gap: 0;
  flex-direction: column;
  align-items: center;
  justify-content: normal;
}

.philosophy-values__value-ja {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(90deg, rgb(231, 74, 74), rgb(231, 74, 74));
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;
  font-weight: 700;
  line-height: 44.8px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-values__value-en {
  display: flex;
  max-width: 100%;
  margin: 0 0 10px;
  padding: 0;
  background-image: linear-gradient(90deg, rgb(0, 0, 0) 100%, rgb(231, 74, 74) 100%);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 24px;
  font-weight: 700;
  line-height: 33.6px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-values__desc-ja {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 0;
  color: rgb(51, 51, 51);
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-values__desc-en {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 0;
  color: rgb(51, 51, 51);
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
```

## タブレット（768px）

```css
@media (max-width: 768px) {
  .philosophy-values__label {
    font-size: 15.067px;
    line-height: 26.3672px;
  }

  .philosophy-values__title {
    font-size: 32.2678px;
    line-height: 51.6285px;
  }

  .philosophy-values__value-ja {
    font-size: 32px;
    line-height: 44.8px;
  }

  .philosophy-values__value-en {
    font-size: 24px;
    line-height: 33.6px;
  }

  .philosophy-values__desc-ja {
    font-size: 20px;
    line-height: 28px;
  }

  .philosophy-values__desc-en {
    font-size: 20px;
    line-height: 28px;
  }
}
```

## モバイル（500px以下）

```css
@media (max-width: 500px) {
  .philosophy-values__label {
    font-size: 15px;
    line-height: 26.25px;
  }

  .philosophy-values__title {
    font-size: 32px;
    line-height: 51.2px;
  }

  .philosophy-values__value-ja {
    font-size: 20.9627px;
    line-height: 29.3477px;
  }

  .philosophy-values__value-en {
    font-size: 20.3209px;
    line-height: 28.4492px;
  }

  .philosophy-values__desc-ja {
    font-size: 16.3209px;
    line-height: 22.8492px;
  }

  .philosophy-values__desc-en {
    font-size: 16.3209px;
    line-height: 22.8492px;
  }
}
```

## 主な特徴

1. **グラデーションテキスト**:
   - 日本語バリュー: 赤色のグラデーション
   - 英語バリュー: 黒色のグラデーション
2. **リストレイアウト**: ulリストで4つのバリュー項目を縦並び（gap: 30px）
3. **中央配置**: すべての要素が中央揃え
4. **レスポンシブ**: フォントサイズがブレークポイントごとに調整される
