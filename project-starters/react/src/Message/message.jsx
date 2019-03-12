import React from 'react';
import './message.css';
import image from './img/baby-goat.jpg' ;

export default class Message extends React.Component {
  render() {
    return (
      <div className="message">
        <h1>Hello Webpack</h1>
        <img src={image} />
      </div>
    );
  }
}
