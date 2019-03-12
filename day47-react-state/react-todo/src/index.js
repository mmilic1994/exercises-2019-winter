import React from 'react';
import ReactDOM from 'react-dom';
import TodoList from './TodoList/todolist.jsx';
import Counter from './Counter/counter.jsx';
import './index.html';

class App extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      item: 'somethig',
      counter: 0,
    };
  }
  
  handleItemChecked(item) {
    this.setState(prevState => {
      return { 
        item: item,
        counter: prevState.counter + 1, 
      };
    });
  }

  handleItemUnchecked(item) {
    this.setState(prevState => {
      return { 
        item: item,
        counter: prevState.counter - 1, 
      };
    });
  }

  render() {
    return (
      <>
        <header>{this.state.item}</header>
        <TodoList 
          onItemChecked={this.handleItemChecked.bind(this)}
          onItemUnchecked={this.handleItemUnchecked.bind(this)}
        />
        <Counter value={this.state.counter}/>
      </>
    );
  }
}

ReactDOM.render(<App />, document.querySelector('#app'));
