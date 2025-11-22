/**
 * Scroll Animation
 * IntersectionObserverを使用したスクロール連動アニメーション
 */

document.addEventListener('DOMContentLoaded', () => {
  // IntersectionObserverの設定
  // threshold: 0 - 要素が1pxでも画面に入った瞬間にアニメーション発火
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // 要素が画面に入ったら .is-visible クラスを追加
        entry.target.classList.add('is-visible');
      } else {
        // 要素が画面から出たら .is-visible クラスを削除（再アニメーション対応）
        entry.target.classList.remove('is-visible');
      }
    });
  }, {
    threshold: 0,      // 1pxでも画面に入ったら発火
    rootMargin: '0px'  // マージンなし
  });

  // すべての .fade-in-wrapper 要素を監視
  document.querySelectorAll('.fade-in-wrapper').forEach(el => observer.observe(el));
});
