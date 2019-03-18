document.addEventListener('DOMContentLoaded', () => {
  let controls = document.querySelector('.color-controls');
  
  let slider = new Slider(20, 'red');
  slider.mount(controls);

  let slider2 = new Slider(220, 'green');
  slider2.mount(controls);
  
  let slider3 = new Slider(120, 'blue');
  slider3.mount(controls);
});