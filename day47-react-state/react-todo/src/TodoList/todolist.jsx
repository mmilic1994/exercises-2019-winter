import React from 'react';
import './todolist.scss';

export default class TodoList extends React.Component {
  handleChange(event) {
    if(event.target.checked) {
      this.props.onItemChecked(event.target.getAttribute('id'));
    } else {
      this.props.onItemUnchecked(event.target.getAttribute('id'));
    }
  }
  
  render() {
    return (
      <div className="todo">
        <input 
          type="checkbox" 
          id="item1" 
          onChange={this.handleChange.bind(this)}
        />
        <label htmlFor="item1">Learn React</label>
        <br />
        <input 
          type="checkbox" 
          id="item2"
          onChange={this.handleChange.bind(this)}
        />
        <label htmlFor="item2">Learn Vue.js</label>
        <br />
        <input 
          type="checkbox" 
          id="item3"
          onChange={this.handleChange.bind(this)}
        />
        <label htmlFor="item3">Get a Job</label>
        <br />
        <input 
          type="checkbox" 
          id="item4"
          onChange={this.handleChange.bind(this)} 
        />
        <label htmlFor="item4">Get rich!</label>
      </div>
    );
  }
}
