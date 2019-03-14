import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Link } from "react-router-dom";
import { Home, Blog, Portfolio } from './Pages/index.jsx';
import './index.scss';
import './index.html';

const App = () => (
  <BrowserRouter>
    <>
      <header>
        <Link to="/home">Home</Link>
        <Link to="/blog">Blog</Link>
        <Link to="/portfolio">Portfolio</Link>
      </header>

      <Route exact path="/" component={Home} />
      <Route exact path="/home" component={Home} />
      <Route path="/blog/:article" component={Blog} />
      <Route exact path="/portfolio" component={Portfolio} />
    </>
  </BrowserRouter>
);

ReactDOM.render(<App />, document.querySelector('#app'));
