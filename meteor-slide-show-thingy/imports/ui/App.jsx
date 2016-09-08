import React, { Component, PropTypes } from 'react';
import ReactDOM from 'react-dom';
import { createContainer } from 'meteor/react-meteor-data';

import { Tasks } from '../api/tasks.js';

import Task from './Task.jsx';


// App component - represents the whole app
class App extends Component {

  handleSubmit(event) {
    event.preventDefault();

    // Find the text field via the React ref
    const text = ReactDOM.findDOMNode(this.refs.textInput).value.trim();

    Tasks.insert({
      text,
      createdAt: new Date(), // current time
    });

    // Clear form
    ReactDOM.findDOMNode(this.refs.textInput).value = '';
  }

//create array of tasks to be displayed from Task.jsx
  renderTasks() {
    return this.props.tasks.map((task) => (
      <Task key={task._id} task={task} />
    ));
  }

// set state
  constructor(){
  super();
  this.state = {txt: "<h1>sometext</h1>"};
  }

//update state
update(e){
var s = document.getElementById("state").innerHTML;
if (s == "1"){
this.setState({txt: "One"});
}
else{
this.setState({txt: "Not one"});
}
  //this.setState({txt: e.target.value})
}


  render() {
    return (
      <div className="container">
        <header>
          <h1>#idxdev</h1>

        <div id="thing" onChange={this.update}>
          {this.renderTasks()}</div>


        <div id="stuff"></div>


        {/*<form className="new-task" onSubmit={this.handleSubmit.bind(this)} >
          <input
            type="text"
            ref="textInput"
            placeholder="Type to add new data"
          />
        </form>*/}


      </header>
      </div>
    );
  }
}

App.propTypes = {
  tasks: PropTypes.array.isRequired,
};

export default createContainer(() => {
  return {
    tasks: Tasks.find({}).fetch(),
  };
}, App);
