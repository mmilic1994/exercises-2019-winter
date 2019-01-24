let number1 = 0;
let op = null;

const binOp = (symbol) => {
  const screen = document.querySelector('.calc__screen');
  number1 = parseInt(screen.value);
  op = symbol;
  screen.value = '0';
}

const equals = () => {
  const screen = document.querySelector('.calc__screen');
  let number2 = parseInt(screen.value);
  switch(op) {
    case '+':
      screen.value = number1 + number2;
      break;
    case '-':
      screen.value = number1 - number2;
      break;
    case '*':
      screen.value = number1 * number2;
      break;
    case '/':
      screen.value = number1 / number2;
      break;
  }
}

document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('#btn-plus').addEventListener('click', () => {
    binOp('+'); 
  });

  document.querySelector('#btn-minus').addEventListener('click', () => {
    binOp('-'); 
  });

  document.querySelector('#btn-times').addEventListener('click', () => {
    binOp('*'); 
  });

  document.querySelector('#btn-divide').addEventListener('click', () => {
    binOp('/'); 
  });

  document.querySelector('#btn-equals').addEventListener('click', equals);
});



