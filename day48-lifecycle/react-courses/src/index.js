import React from 'react';
import ReactDOM from 'react-dom';
import Chapter from './Chapter/chapter.jsx';
import './index.scss';
import './index.html';

const App = () => (
  <div className="container">
    <h1>Courses</h1>
    <Chapter 
      day="Mo" 
      date="3.9." 
      title="Lorem ipsum dolor sit amet"
      summary="Eligendi enim accusantium velit reiciendis laborum aliquam earum voluptates necessitatibus reprehenderit fugiat."
    />  
    <Chapter 
      day="Tu" 
      date="4.9." 
      title="Consectetur adipisicing elit"
      summary="Architecto nam quasi explicabo eveniet dolores dignissimos fuga ex, et corporis ipsum assumenda ducimus tempora, quis eligendi voluptatum, cumque neque."
    />
    <Chapter 
      day="We" 
      date="5.9." 
      title="Eligendi enim accusantium"
      summary="Dolor temporibus veritatis pariatur quod repellendus vitae earum minus incidunt unde sunt. Veritatis reiciendis incidunt tempora delectus minus explicabo magni.
      "
    />
  </div>
);


ReactDOM.render(<App />, document.querySelector('#app'));
