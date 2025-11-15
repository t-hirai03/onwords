# Mission Section - CSS

## デスクトップ（デフォルト）

```css
.philosophy-mission {
  display: flex;
  width: 1425px;
  max-width: 100%;
  margin: 0;
  padding: 0;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-mission__inner {
  display: flex;
  width: 1280px;
  max-width: 100%;
  margin: 0;
  padding: 90px 40px;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-mission__header {
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

.philosophy-mission__label {
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

.philosophy-mission__title {
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

.philosophy-mission__main-text {
  display: flex;
  width: 1200px;
  max-width: 100%;
  margin: 0;
  padding: 20px 0 0;
  gap: 10px;
  flex-direction: column;
  align-items: center;
  justify-content: normal;
}

.philosophy-mission__text-ja-main {
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

.philosophy-mission__text-en-main {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 0;
  color: rgb(51, 51, 51);
  font-size: 24px;
  font-weight: 400;
  line-height: 33.6px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-mission__description {
  display: flex;
  width: 1200px;
  max-width: 100%;
  margin: 0;
  padding: 30px 0 0;
  gap: 10px;
  flex-direction: column;
  align-items: center;
  justify-content: normal;
}

.philosophy-mission__text-ja-desc {
  display: flex;
  max-width: 100%;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(90deg, rgb(0, 0, 0) 100%, rgb(231, 74, 74) 100%);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 18px;
  font-weight: 500;
  line-height: 25.2px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-mission__text-en-desc {
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
  .philosophy-mission__label {
    font-size: 15.1006px;
    line-height: 26.4261px;
  }

  .philosophy-mission__title {
    font-size: 32.4025px;
    line-height: 51.8441px;
  }

  .philosophy-mission__text-ja-main {
    font-size: 32px;
    line-height: 44.8px;
  }

  .philosophy-mission__text-en-main {
    font-size: 24px;
    line-height: 33.6px;
  }

  .philosophy-mission__text-ja-desc {
    font-size: 18px;
    line-height: 25.2px;
  }

  .philosophy-mission__text-en-desc {
    font-size: 20px;
    line-height: 28px;
  }
}
```

## モバイル（500px以下）

```css
@media (max-width: 500px) {
  .philosophy-mission__label {
    font-size: 15px;
    line-height: 26.25px;
  }

  .philosophy-mission__title {
    font-size: 32px;
    line-height: 51.2px;
  }

  .philosophy-mission__text-ja-main {
    font-size: 24.3229px;
    line-height: 34.0521px;
  }

  .philosophy-mission__text-en-main {
    font-size: 18.2422px;
    line-height: 25.5391px;
  }

  .philosophy-mission__text-ja-desc {
    font-size: 16.0807px;
    line-height: 22.513px;
  }

  .philosophy-mission__text-en-desc {
    font-size: 16.1615px;
    line-height: 22.6261px;
  }
}
```

## 主な特徴

1. **グラデーションテキスト**:
   - 日本語メインテキスト: 赤色のグラデーション
   - 日本語説明文: 黒色のグラデーション
2. **上下パディング**: padding: 90px 40px（上下に余白を確保）
3. **中央配置**: すべての要素が中央揃え
4. **レスポンシブ**: フォントサイズがブレークポイントごとに調整される
