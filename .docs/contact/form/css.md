# フォームセクション - CSSスタイル

抽出日: 2025-11-16
URL: https://www.onwords.co.jp/contact

## 注意

本番サイトではHubSpotの埋め込みフォームを使用しているため、iframe内のスタイルは直接取得できません。
以下のスタイルは、スクリーンショットから視覚的に確認した情報を基にした参考実装です。

## フォームラッパー

```css
.contact-form-wrapper {
  max-width: 768px;
  margin: 0 auto 80px;
  padding: 0 16px;
}
```

## 説明文

```css
.contact-form__description {
  font-family: "Noto Sans JP", sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 1.6;
  color: #333333;
  margin-bottom: 40px;
  text-align: left;
}
```

## フォーム全体

```css
.contact-form {
  width: 100%;
}
```

## フォームフィールド

```css
.contact-form__field {
  margin-bottom: 24px;
}

.contact-form__label {
  display: block;
  font-family: "Noto Sans JP", sans-serif;
  font-size: 14px;
  font-weight: 500;
  color: #333333;
  margin-bottom: 8px;
}

.contact-form__label--required::after {
  content: "*";
  color: #e74c3c;
  margin-left: 4px;
}

.contact-form__input,
.contact-form__select,
.contact-form__textarea {
  width: 100%;
  padding: 12px 16px;
  font-family: "Noto Sans JP", sans-serif;
  font-size: 16px;
  border: 1px solid #cccccc;
  border-radius: 4px;
  background-color: #ffffff;
  transition: border-color 0.3s;
}

.contact-form__input:focus,
.contact-form__select:focus,
.contact-form__textarea:focus {
  outline: none;
  border-color: #e74c3c;
}

.contact-form__textarea {
  min-height: 120px;
  resize: vertical;
}
```

## 2カラムフィールド（姓・名）

```css
.contact-form__row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

@media (max-width: 767px) {
  .contact-form__row {
    grid-template-columns: 1fr;
  }
}
```

## プライバシーポリシー同意

```css
.contact-form__privacy {
  margin-bottom: 32px;
}

.contact-form__privacy-text {
  font-size: 14px;
  color: #666666;
  margin-bottom: 8px;
}

.contact-form__checkbox {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 8px;
}

.contact-form__checkbox input[type="checkbox"] {
  width: 20px;
  height: 20px;
  cursor: pointer;
}

.contact-form__privacy-link {
  font-size: 14px;
  color: #e74c3c;
  text-decoration: underline;
}

.contact-form__privacy-link:hover {
  text-decoration: none;
}
```

## 送信ボタン

```css
.contact-form__submit {
  display: flex;
  justify-content: center;
  margin-top: 32px;
}

.contact-form__submit-button {
  padding: 16px 48px;
  font-family: "Noto Sans JP", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: #ffffff;
  background: linear-gradient(90deg, #e74c3c 0%, #c0392b 100%);
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: opacity 0.3s;
}

.contact-form__submit-button:hover {
  opacity: 0.9;
}

.contact-form__submit-button:disabled {
  opacity: 0.5;
  cursor: not-allowed;
}
```

## レスポンシブ対応

```css
@media (max-width: 767px) {
  .contact-form-wrapper {
    margin-bottom: 60px;
  }

  .contact-form__description {
    font-size: 14px;
    margin-bottom: 32px;
  }

  .contact-form__submit-button {
    width: 100%;
    padding: 14px 32px;
  }
}
```

## 実装メモ

### Contact Form 7 用のカスタムCSS

Contact Form 7のデフォルトクラスに対してスタイルを適用する場合:

```css
/* Contact Form 7 用 */
.wpcf7-form-control-wrap {
  display: block;
}

.wpcf7-text,
.wpcf7-email,
.wpcf7-tel,
.wpcf7-select,
.wpcf7-textarea {
  width: 100%;
  padding: 12px 16px;
  font-family: "Noto Sans JP", sans-serif;
  font-size: 16px;
  border: 1px solid #cccccc;
  border-radius: 4px;
}

.wpcf7-submit {
  padding: 16px 48px;
  font-family: "Noto Sans JP", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: #ffffff;
  background: linear-gradient(90deg, #e74c3c 0%, #c0392b 100%);
  border: none;
  border-radius: 8px;
  cursor: pointer;
}
```

### 重要なポイント

1. **最大幅**: 768px（フォーム全体）
2. **ボタン**: 赤いグラデーション（#e74c3c → #c0392b）
3. **フォーカス**: 赤いボーダー（#e74c3c）
4. **必須マーク**: 赤いアスタリスク
5. **レスポンシブ**: スマホでは2カラムを1カラムに変更
