# Purpose Section - CSS

## デスクトップ（デフォルト）

```css
.philosophy-purpose {
  display: flex;
  width: 1425px;
  max-width: 100%;
  margin: 0;
  padding: 0;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-purpose__inner {
  display: flex;
  width: 1280px;
  max-width: 100%;
  margin: 0;
  padding: 0 40px 90px;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.philosophy-purpose__header {
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

.philosophy-purpose__label {
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

.philosophy-purpose__title {
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

.philosophy-purpose__content {
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

.philosophy-purpose__text-en {
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

.philosophy-purpose__text-ja {
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
```

## タブレット（768px）

```css
@media (max-width: 768px) {
  .philosophy-purpose__label {
    font-size: 15.1753px;
    line-height: 26.5568px;
  }

  .philosophy-purpose__title {
    font-size: 32.7013px;
    line-height: 52.3221px;
  }

  .philosophy-purpose__text-en {
    font-size: 32px;
    line-height: 44.8px;
  }

  .philosophy-purpose__text-ja {
    font-size: 24px;
    line-height: 33.6px;
  }
}
```

## モバイル（500px以下）

```css
@media (max-width: 500px) {
  .philosophy-purpose__label {
    font-size: 15px;
    line-height: 26.25px;
  }

  .philosophy-purpose__title {
    font-size: 32px;
    line-height: 51.2px;
  }

  .philosophy-purpose__text-en {
    font-size: 24.5995px;
    line-height: 34.4393px;
  }

  .philosophy-purpose__text-ja {
    font-size: 18.4496px;
    line-height: 25.8295px;
  }
}
```

## 主な特徴

1. **グラデーションテキスト**: 英語テキストは赤色のグラデーション（background-clip: text）
2. **中央配置**: すべての要素が中央揃え
3. **レスポンシブ**: フォントサイズがブレークポイントごとに調整される
4. **余白**: padding-bottom: 90pxで次のセクションとの間隔を確保
