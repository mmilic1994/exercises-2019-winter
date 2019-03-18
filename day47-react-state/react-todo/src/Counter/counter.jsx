import React from 'react';
import './counter.scss';

export default class Question extends React.Component {
  render() {
    return (
      <div className="counter">{this.props.value}</div>
    );
  }
}
