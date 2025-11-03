/**
 * Animations - Scroll animations using Intersection Observer
 *
 * スクロールアニメーション：Intersection Observerを使用して、
 * ビューポートに要素が入った時に.is-visibleクラスを追加
 */

document.addEventListener('DOMContentLoaded', () => {
  // Intersection Observerのオプション
  const observerOptions = {
    root: null, // ビューポートをルートとする
    rootMargin: '0px 0px -100px 0px', // 下から100px手前で発火
    threshold: 0.1 // 要素の10%が見えたら発火
  };

  // コールバック関数
  const observerCallback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // ビューポートに入ったら.is-visibleクラスを追加
        entry.target.classList.add('is-visible');

        // 一度アニメーションしたら監視を解除（再実行しない）
        observer.unobserve(entry.target);
      }
    });
  };

  // Observerを作成
  const observer = new IntersectionObserver(observerCallback, observerOptions);

  // ABOUTセクションを監視対象に追加
  const aboutSection = document.querySelector('.about');
  if (aboutSection) {
    observer.observe(aboutSection);
  }

  // 将来的に他のセクションも追加可能
  // const messageSection = document.querySelector('.message');
  // if (messageSection) {
  //   observer.observe(messageSection);
  // }
});
