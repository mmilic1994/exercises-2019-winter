import React from 'react';
import ReactDOM from 'react-dom';
import Chapter from './Chapter/chapter.jsx';
import './index.scss';
import './index.html';

class App extends React.Component {

  state = {
    chapters: [],
  }

  componentDidMount() {
    fetch('http://bootcamp.podlomar.org/api/courses')
      .then(response => response.json())
      .then(json => this.setState({chapters: json}));
  }

  render() {
    return (
      <div className="container">
        <h1>Courses</h1>
        { this.state.chapters.map(chapter => <Chapter {...chapter} />) }
      </div>
    );
  }
}


ReactDOM.render(<App />, document.querySelector('#app'));
