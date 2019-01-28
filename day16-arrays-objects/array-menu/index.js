document.addEventListener('DOMContentLoaded', () => {
  let items = document.querySelectorAll('.menu__item');
  for(let item of items) {
    item.addEventListener('click', (e) => {
      console.log(e.target.textContent);
    });
  }
});