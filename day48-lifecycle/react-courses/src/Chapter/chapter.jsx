import React from 'react';
import './chapter.scss';

export default class Chapter extends React.Component {
  state = {
    done: false,
  };

  handleDone = () => {
    this.setState(prev => {
      return { done: !prev.done };
    });
  }

  render() {
    const doneClass = this.state.done ? ' chapter__day--done' : '';
    
    return (
      <div className="chapter">
        <div 
          className={`chapter__day${doneClass}`}
          onClick={this.handleDone}>
          <div className="day__name">{this.props.day}</div>
          <div className="day__date">{this.props.date}</div>
        </div>
        <div className="chapter__lead">
          <div className="chapter__title">
            {this.props.title}
          </div>
          <div className="chapter__summary">
            {this.props.summary}
          </div>
        </div>
      </div>
    );
  }
}
