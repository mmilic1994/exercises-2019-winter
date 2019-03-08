import Message from './message.js';

document.addEventListener('DOMContentLoaded', () => {
  const message = new Message();
  message.mount(document.querySelector('#app'));
});