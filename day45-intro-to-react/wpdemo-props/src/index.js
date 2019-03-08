import React from 'react';
import ReactDOM from 'react-dom';
import Message from './Message/message.jsx';
import './index.html';

class App extends React.Component {
  render() {
    return (
      <>
        <Message title="My Title" text="Hello world" />
        <Message title="Hello guys" text="React is here" />
        <Message title="Screw you!" text="Don't want to see your face" />
        <Message title="Secret message" text="oasdgwrgawg" />
      </>
    );
  }
}

ReactDOM.render(<App />, document.querySelector('#app'));
