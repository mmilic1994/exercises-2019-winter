import React from 'react';
import './counter.css';

export default class Counter extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      value: 0,
      msg: '',
    };
  }

  handlePlus() {
    this.setState(prevState => {
      let msg = '';
      if(prevState.value > 5) {
        msg = 'yey';
      }
      
      return {
        value: prevState.value+1,
        msg: msg,
      };
    });
  }

  handleReset() {
    this.setState({
      value: 0,
    });
  }

  render() {
    let btnClass = 'btn';

    if(this.state.value > 5) {
      btnClass = 'btn-red';
    }

    return (
      <>
        {
          this.state.msg != '' ? (
            <div className="msg">
              {this.state.msg}
            </div>
          ) : (
            null
          )
        }     
        <div className="counter">
          {this.state.value}
        </div>
        <button 
          onClick={this.handlePlus.bind(this)}
        >
          plus
        </button>
        <button
          className={btnClass}
          onClick={this.handleReset.bind(this)}
        >
          reset
        </button>
      </>
    );
  }
}
