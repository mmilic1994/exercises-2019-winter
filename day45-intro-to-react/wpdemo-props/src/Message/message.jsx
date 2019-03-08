import React from 'react';
import './message.css';

export default class Message extends React.Component {
  handleClick() {
    alert(this.props.text);
  }
  
  render() {
    return (
      <div className="message">
        <div className="title">{this.props.title}</div>
        <div className="text">{this.props.text}</div>
        <button 
          onClick={this.handleClick.bind(this)}
        >
          like
        </button>
      </div>  
    );
  }
}
