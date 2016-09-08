import React, { Component, PropTypes } from 'react';

// Task component - represents a single todo item
export default class Task extends Component {
  render() {

  //get the slide number from the database
  var num = this.props.task.text;

// couldn't get switch to work so I am using a ton of ifs and I hates it.
  if (num == "1") {
    Message = (
      <span>
        <img src="/assets/1.jpg"></img>

      </span>
    )
  }
  if (num == "2") {
    Message = (
      <span>
        <img src="/assets/2.jpg"></img>
      </span>
    )
  }
    return (

      <div id="state">{ Message }</div>

        );


  }
}

Task.propTypes = {
  // This component gets the task to display through a React prop.
  // We can use propTypes to indicate it is required
  task: PropTypes.object.isRequired,
};
