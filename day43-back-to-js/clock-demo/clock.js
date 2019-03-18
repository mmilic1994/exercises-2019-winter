class Clock {
  constructor(hours, minutes, period) {
    this.hours = hours;
    this.minutes = minutes;
    this.period = period;
  }

  render() {
    this.element = document.createElement('div');
    this.element.className = 'clock';
    this.element.innerHTML = `
      <div class="control">
        <button id="btn-hours-up" class="digit-btn">+</button>
        <div id="digits-hours" class="digits hours">${this.hours}</div>
        <button id="btn-hours-down" class="digit-btn">-</button>
      </div>
      <div class="separator">:</div>
      <div class="control">
        <button id="btn-minutes-up" class="digit-btn">+</button>
        <div id="digits-minutes" class="digits minutes">${this.minutes}</div>
        <button id="btn-minutes-down" class="digit-btn">-</button>
      </div>
      <div id="period" class="period">${this.period}</div>
    `;

    return this.element;
  }

  mount(parent) {
    parent.appendChild(this.render());
  }

  update() {
    let hoursDigits = this.element.querySelector('#digits-hours');
    let minutesDigits = this.element.querySelector('#digits-minutes');
    let periodElm = this.element.querySelector('#period');
  
    hoursDigits.textContent = this.hours;
    minutesDigits.textContent = this.minutes;
    periodElm.textContent = this.period;
  }
}