document.addEventListener('DOMContentLoaded', () => {
  let aside = document.querySelector('#aside');
  aside.addEventListener('mouseenter', () => {
    aside.classList.remove('closed');
  });

  aside.addEventListener('mouseleave', () => {
    aside.classList.add('closed');
  });
});