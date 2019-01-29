const simpsons = [
  new Person('Homer', 'Simpson'),
  new Person('Marge', 'Simpson'),  
  new Person('Bart', 'Simpson'),
  new Person('Lisa', 'Simpson'),
  new Person('Maggie', 'Simpson')
];

document.addEventListener('DOMContentLoaded', () => {
  let contacts = document.querySelector('.contacts');
  for(let person of simpsons) {
    contacts.appendChild(person.element());
  }
});