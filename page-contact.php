<?php
/**
 * Template Name: お問い合わせページ
 * Description: お問い合わせページ用のテンプレート
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php
  // パンくずリスト
  if (function_exists('onwords_breadcrumb')) {
    onwords_breadcrumb();
  }
  ?>

  <!-- MVセクション -->
  <div class="contact-hero-wrapper">
    <div class="contact-hero">
      <p class="contact-hero__label">Contact</p>
      <h1 class="contact-hero__title">お問い合わせ</h1>
      <div class="contact-hero__overlay"></div>
    </div>
  </div>

  <!-- フォームセクション -->
  <div class="contact-form-wrapper">
    <!-- 旧フォーム（コメントアウト）
    <iframe src="https://js-na2.hsforms.net/ui-forms-embed-components-app/frame.html?_hsPortalId=243499482&_hsFormId=94796413-217e-4034-9423-c633da571f21&_hsIsQa=false&_hsHublet=na2&_hsDisableScriptloader=true&_hsDisableRedirect=true"
            class="contact-form__iframe"
            title="お問い合わせフォーム"
            scrolling="no">
    </iframe>
    -->
    <script src="https://js-na2.hsforms.net/forms/embed/243499482.js" defer></script>
    <div class="hs-form-frame" data-region="na2" data-form-id="6914d44d-183e-44a4-b9eb-5d1a29c04969" data-portal-id="243499482"></div>
  </div>
</main>

<?php
get_footer();
