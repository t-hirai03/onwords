# Hero Section - CSS

## デスクトップ（デフォルト）

```css
.philosophy-hero-wrapper {
  display: flex;
  position: relative;
  width: 1425px;
  max-width: 100%;
  height: 320px;
  margin: 0 0 40px;
  padding: 0;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.philosophy-hero {
  display: flex;
  position: relative;
  width: 1280px;
  max-width: calc(100% - 64px);
  height: 320px;
  margin: 0 32px;
  padding: 116px 40px;
  border-radius: 20px;
  gap: 4px;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

/* 背景画像（::before疑似要素） */
.philosophy-hero::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("https://images.unsplash.com/photo-1543269865-cbf427effbad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MTh8fG9mZmljZSUyMG1lZXRpbmd8ZW58MHx8fHwxNzU5MTkwODY1fDA&ixlib=rb-4.1.0&q=80&w=1080");
  background-size: cover;
  background-position: 50% 50%;
  border-radius: 20px;
  z-index: -2;
  opacity: 1;
}

.philosophy-hero__label {
  display: flex;
  position: relative;
  width: 214.5px;
  max-width: 100%;
  height: 20px;
  margin: 0;
  padding: 0;
  color: rgb(255, 255, 255);
  font-size: 20px;
  font-weight: 500;
  line-height: 20px;
  text-align: center;
  letter-spacing: 0.6px;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.philosophy-hero__title {
  display: flex;
  position: relative;
  width: 160px;
  max-width: 100%;
  height: 64px;
  margin: 0;
  padding: 0;
  color: rgb(255, 255, 255);
  font-size: 40px;
  font-weight: 700;
  line-height: 64px;
  text-align: center;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
```

## タブレット（768px）

```css
@media (max-width: 768px) {
  .philosophy-hero-wrapper {
    height: 242.789px;
    margin: 0 0 46.9428px;
  }

  .philosophy-hero {
    max-width: calc(100% - 19.566px);
    height: 242.789px;
    margin: 0 9.78299px;
    padding: 85.4516px 26.1144px;
    border-radius: 6.11437px;
  }

  .philosophy-hero::before {
    border-radius: 6.11437px;
  }

  .philosophy-hero__label {
    font-size: 17.2229px;
    line-height: 17.2229px;
  }

  .philosophy-hero__title {
    font-size: 31.6686px;
    line-height: 50.6698px;
  }
}
```

## モバイル（500px以下）

```css
@media (max-width: 500px) {
  .philosophy-hero-wrapper {
    height: 208.797px;
    margin: 0 0 50px;
  }

  .philosophy-hero {
    max-width: 100%;
    height: 208.797px;
    margin: 0;
    padding: 72px 20px;
    border-radius: 0;
  }

  .philosophy-hero::before {
    border-radius: 0;
  }

  .philosophy-hero__label {
    font-size: 16px;
    line-height: 16px;
  }

  .philosophy-hero__title {
    font-size: 28px;
    line-height: 44.8px;
  }
}
```

## 主な特徴

1. **背景画像**: ::before疑似要素で実装、z-index: -2
2. **角丸**: デスクトップ・タブレットは角丸あり、モバイルは角丸なし
3. **余白**: モバイルでは左右の余白を削除（画面いっぱいに表示）
4. **フレックスレイアウト**: 縦方向中央配置、gap: 4px
5. **テキスト**: 白文字、中央揃え
