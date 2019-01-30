document.addEventListener('DOMContentLoaded', () => {
  const progress1 = new ProgressBar(12, 40);
  progress1.mount(document.body);
  const progress2 = new ProgressBar(50, 100);
  progress2.mount(document.body);
});