# フォームセクション - HTML構造

抽出日: 2025-11-16
URL: https://www.onwords.co.jp/contact

## 本番サイトの実装方法

本番サイトではHubSpotの埋め込みフォームを使用しています。

```html
<iframe src="https://js-na2.hsforms.net/ui-forms-embed-components-app/frame.html?_hsPortalId=243499482&_hsFormId=94796413-217e-4034-9423-c633da571f21..."
        style="width: 768px; height: 1121px; border: 0;">
</iframe>
```

## フォームの項目（HubSpotフォーム）

1. **問い合わせカテゴリー** （必須）
   - ドロップダウン選択

2. **姓** （必須）
   - テキストフィールド

3. **名** （必須）
   - テキストフィールド

4. **Eメール** （必須）
   - メールアドレス入力フィールド

5. **電話番号** （必須）
   - 国コード選択 + 電話番号入力

6. **会社名** （必須）
   - テキストフィールド

7. **部署名** （必須）
   - テキストフィールド

8. **お問い合わせ内容**
   - テキストエリア（複数行）

9. **プライバシーポリシー同意** （必須）
   - チェックボックス
   - リンク: プライバシーポリシーへのリンク

10. **送信ボタン**
    - 赤いグラデーションボタン

## WordPress実装用のHTML（プラグイン使用）

### Contact Form 7 を使用する場合

```html
<div class="contact-form-wrapper">
  <?php echo do_shortcode('[contact-form-7 id="xxx" title="お問い合わせフォーム"]'); ?>
</div>
```

### MW WP Form を使用する場合

```html
<div class="contact-form-wrapper">
  <?php echo do_shortcode('[mwform_formkey key="contact"]'); ?>
</div>
```

## 実装メモ

- **フォームプラグイン**: Contact Form 7 または MW WP Form を推奨
- **スタイル**: カスタムCSSでHubSpotフォームと同じ見た目を再現
- **バリデーション**: プラグインの標準機能を使用
- **送信処理**: プラグインの標準機能を使用
- **確認メール**: プラグインの設定で自動送信
