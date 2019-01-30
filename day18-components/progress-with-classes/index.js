const progress = new ProgressBar(12, 40);

document.addEventListener('DOMContentLoaded', () => {
  const plusBtn = document.querySelector('#plus');
  plusBtn.addEventListener('click', () => {
    progress.increment();
  });
  
  const minusBtn = document.querySelector('#minus');
  minusBtn.addEventListener('click', () => {
    progress.decrement();
  });
  
  progress.update();
});