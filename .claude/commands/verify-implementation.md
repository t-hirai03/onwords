# 実装後の検証手順

実装完了後、必ずローカル環境で動作確認を行い、STUDIOサイトと完全に一致していることを確認します。

## 検証手順

### 1. ローカル環境にアクセス

```
mcp__playwright__browser_navigate
URL: http://localhost:10018/[実装したページ]
```

### 2. 動作確認

- JavaScript機能（クリック、ホバー、アニメーション）をテスト
- コンソールエラーを確認（`mcp__chrome-devtools__list_console_messages`）
- すべてのリンクが正しく動作するか確認

### 3. 全ブレークポイントで見た目を確認

**デスクトップ:**
- 1920px
- 1140px

**タブレット:**
- 768px
- 540px

**モバイル:**
- 375px
- 320px

```javascript
// ブラウザをリサイズ
mcp__playwright__browser_resize
width: 375
height: 812
```

### 4. 細かい差異の確認項目

#### 文字の配置
- `text-align`, `align-items`, `justify-content`
- デスクトップとモバイルで配置が変わる場合がある

#### フォントサイズ・ウェイト・行高さ
```javascript
// 計算済みスタイルで1px単位で確認
() => {
  const element = document.querySelector('セレクタ');
  const styles = window.getComputedStyle(element);
  return {
    fontSize: styles.fontSize,
    fontWeight: styles.fontWeight,
    lineHeight: styles.lineHeight
  };
}
```

#### 余白（padding/margin）
- 上下左右すべての余白を確認
- ブレークポイントごとに余白が変わる

#### 要素の表示/非表示
- デスクトップとモバイルで表示される要素が変わる
- 例: デスクトップナビ（デスクトップのみ）、ハンバーガーメニュー（モバイルのみ）

#### ホバー・初期表示アニメーション

**ボタン・リンクのホバーアニメーション:**
```javascript
// ホバー前の状態を確認
() => {
  const element = document.querySelector('.button');
  const styles = window.getComputedStyle(element);
  return {
    background: styles.background,
    opacity: styles.opacity,
    transition: styles.transition
  };
}

// mcp__playwright__browser_hover でホバー

// ホバー後の状態を確認（トランジションのタイミングと遅延時間を正確に合わせる）
```

**コンテンツの初期表示アニメーション:**
- スクロールして要素がビューポートに入った時のアニメーション
- `transitionDuration`, `transitionTimingFunction`, `transitionDelay` を正確に合わせる
- **アニメーション速度が「速すぎる」「遅すぎる」場合は本番サイトと比較して調整**

### 5. 本番サイトとの並行比較

```javascript
// 本番サイトのスクリーンショット
// ローカル環境のスクリーンショット
// 両方を chrome-devtools-mcp/ に保存して目視で比較
```

## 禁止事項

❌ **絶対にやってはいけないこと：**
- 実装後、ローカル環境を確認せずに作業完了とする
- 「動くからOK」で見た目の確認を省略する
- デスクトップだけ確認してモバイルを確認しない
- 「だいたい同じ」で妥協する

✅ **必ずやること：**
- すべてのブレークポイントで確認
- STUDIOサイトとローカル環境を並べて目視で比較
- 文字サイズ、配置、余白が1px単位で一致しているか確認
- ホバー状態、アニメーションタイミングを確認
- 問題があれば即座に修正してから次のタスクに進む
