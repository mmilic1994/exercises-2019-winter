const menuItems = [
  {
    link: '/home',
    label: 'home'
  },
  {
    label: 'portfolio',
    link: '/portfolio'
  },
  {
    label: 'blog',
    link: '/blog'
  },
  {
    label: 'contact',
    link: '/contact'
  }
];

const itemToElement = (item) => {
  let itemElm = document.createElement('a');
  itemElm.className = 'menu__item';
  itemElm.textContent = item.label;
  itemElm.href = item.link;
  itemElm.addEventListener('click', (e) => {
    console.log(e.target.textContent);
  });
  return itemElm;
}

document.addEventListener('DOMContentLoaded', () => {
  let menuElm = document.querySelector('.menu');
  for(let item of menuItems) {
    // menuElm.innerHTML += '<div class="menu__item">' + item + '</div>';
    // menuElm.innerHTML += `<div class="menu__item">${item}</div>`;
    menuElm.appendChild(itemToElement(item));
  }
});
