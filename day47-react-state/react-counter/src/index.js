import React from 'react';
import ReactDOM from 'react-dom';
import Counter from './Counter/counter.jsx';
import './index.html';

class App extends React.Component {
  render() {
    return (
      <Counter />
    );
  }
}

ReactDOM.render(<App />, document.querySelector('#app'));
