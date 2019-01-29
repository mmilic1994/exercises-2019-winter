class Person {
  constructor(firstName, lastName) {
    this.firstName = firstName;
    this.lastName = lastName;
  }

  wholeName() {
    return this.firstName + ' ' + this.lastName;
  }

  element() {
    let name = this.firstName.toLowerCase();
    let element = document.createElement('div');
    element.className = 'contact';
    element.innerHTML = (
      `<div class="contact__photo">
          <div class="photo">
            <img class="photo__img" src="img/${name}.jpg" alt="Marge" />
          </div>
        </div>
        <div class="contact__info">
          <p><strong>Name:</strong> ${this.wholeName()}</p>
          <p><strong>E-mail:</strong> ${name}.simpson@gmail.com</p>
        </div>
      </div>`
    );
  
    return element;
  }
}