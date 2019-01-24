let result = 0;
let op = null;

const binOp = (symbol) => {
  equals();
  
  const input = document.querySelector('.calc__input');
  op = symbol;
  input.value = '0';
  input.focus();
  input.setSelectionRange(0, 1);
}

const equals = () => {
  const input = document.querySelector('.calc__input');
  let number = parseInt(input.value);
  switch(op) {
    case '+':
      result += number;
      break;
    case '-':
      result -= number;
      break;
    case '*':
      result *= number;
      break;
    case '/':
      result /= number;
      break;
    default:
      result = number;
      break;
  }

  document.querySelector('.calc__result').textContent = result;
}

const clear = () => {
  document.querySelector('.calc__result').textContent = '0';
  document.querySelector('.calc__input').value = '0';
  result = 0;
  op = null;
}

document.addEventListener('DOMContentLoaded', () => {
  const digitButtons = document.querySelectorAll('.calc__btn--digit');
  for(let btn of digitButtons) {
    btn.addEventListener('click', (event) => {
      const input = document.querySelector('.calc__input');
      const digit = event.target.textContent;
      if(input.value === '0') {
        input.value = '';
      }

      input.value += digit;
    });
  }
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
  document.querySelector('#btn-clear').addEventListener('click', clear);
});



