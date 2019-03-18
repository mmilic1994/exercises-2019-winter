export default class Message {
  render() {
    this.element = document.createElement('h1');
    this.element.textContent = 'Hello Webpack';
    return this.element;
  }

  mount(parent) {
    parent.appendChild(this.render());
  }
}
