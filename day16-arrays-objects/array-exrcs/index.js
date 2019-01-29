const numbers = [18, 8, -24, 28, -17, 14, -10, 24, 12, -31, 19, 32, -14, -10, 13, 8, -15, -2, 17]

const sum = (values) => {
  result = 0;
  for(let val of values) {
    result += val;
  }

  return result;
}

const mean = (values) => {
  return sum(values) / values.length;
}

const sqDiffs = (values) => {
  let m = mean(values);

  result = 0;
  for(let val of values) {
    result += (val - m)**2;
  }

  return result;
}

const variance = (values) => {
  return sqDiffs(values) / values.length;
}