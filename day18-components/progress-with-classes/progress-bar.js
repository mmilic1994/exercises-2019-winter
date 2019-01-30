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
  
  update() {
    document.querySelector('#counter').textContent = this.value;
    document.querySelector('#maximum').textContent = this.max;
    
    const step = 100 / this.max;
    const width = `${this.value * step}%`
    document.querySelector('#knob').style.width = width;
  }
}