class ProgressBar {
  constructor(value, max) {
    this.value = value;
    this.max = max;
  }

  increment() {
    if(this.value < this.max) {
      this.value++;
      this.update();
    }
  }

  decrement() {
    if(this.value > 0) {
      this.value--;
      this.update();
    }
  }
  
  render() {
    this.element = document.createElement('div');
    this.element.className = 'progress-bar';
    this.element.innerHTML = (
      `<div class="label">
        <span class="counter"></span>/<span class="maximum"></span>
      </div>
      <div class="progress">
        <div class="btn-minus"></div>
        <div class="bar">
          <div class="knob"></div>
        </div>
        <div class="btn-plus"></div>
      </div>`
    );

    const plusBtn = this.element.querySelector('.btn-plus');
    plusBtn.addEventListener('click', () => {
      this.increment();
    });

    const minusBtn = this.element.querySelector('.btn-minus');
    minusBtn.addEventListener('click', () => {
      this.decrement();
    });

    return this.element;
  }

  mount(parent) {
    parent.appendChild(this.render());
    this.update();
  }

  update() {
    this.element.querySelector('.counter').textContent = this.value;
    this.element.querySelector('.maximum').textContent = this.max;
    
    const step = 100 / this.max;
    const width = `${this.value * step}%`
    this.element.querySelector('.knob').style.width = width;
  }
}