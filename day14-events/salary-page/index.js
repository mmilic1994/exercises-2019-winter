const compute = () => {
  let wageElm = document.querySelector('#wage');
  let hoursElm = document.querySelector('#hours');
  let daysElm = document.querySelector('#days');

  let wage = parseInt(wageElm.value);
  let hours = parseInt(hoursElm.value);
  let days = parseInt(daysElm.value);

  let salary = wage * hours * days;
  document.querySelector('#result').textContent += salary;
}