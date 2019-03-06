document.addEventListener('DOMContentLoaded', () => {
  let clock = new Clock(11, 25, 'pm');
  let app = document.querySelector('#app');
  clock.mount(app);

  // let btnHoursUp = document.querySelector('#btn-hours-up');
  // btnHoursUp.addEventListener('click', () => {
  //   if(clock.period === 'am') {
  //     if(clock.hours < 12) {
  //       clock.hours++;  
  //     } else {
  //       clock.hours = 1;
  //       clock.period = 'pm';
  //     }
  //   } else {
  //     if(clock.hours < 11) {
  //       clock.hours++;  
  //     } else {
  //       clock.hours = 0;
  //       clock.period = 'am';
  //     }
  //   }
    
  //   clockUpdate(clock);   
  // });

  // let btnHoursDown = document.querySelector('#btn-hours-down');
  // btnHoursDown.addEventListener('click', () => {
  //   if(clock.hours > 1) {
  //     clock.hours--;  
  //   } else {
  //     clock.hours = 12;
  //   }
    
  //   clockUpdate(clock);   
  // });
});