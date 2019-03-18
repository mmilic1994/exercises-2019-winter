import React from 'react';

export default class ContactForm extends React.Component {
  state = {
    subject: '',
    message: ''
  }
  
  handleSubjectChange = (event) => {
    this.setState({ subject: event.target.value });
  } 

  handleMessageChange = (event) => {
    this.setState({ message: event.target.value });
  }

  handleSubmit = (event) => {
    event.preventDefault();
    console.log(this.state);
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>Subject:</label>
        <br />
        <input 
          type="text" 
          value={this.state.subject}
          onChange={this.handleSubjectChange}
        />
        <br />
        <label>Message:</label>
        <br />
        <textarea 
          value={this.state.message}
          onChange={this.handleMessageChange}
        />
        <br />
        <button type="submit">Send</button>
      </form>
    );
  }
}