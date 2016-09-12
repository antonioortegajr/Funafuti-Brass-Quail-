import React, { Component, PropTypes } from 'react';

// Task component - represents a single todo item
export default class Task extends Component {


  cakeClick() {
    document.getElementById('waffle').innerHTML='<img src="assets/pancakes.jpg">';
  }
  frenchClick() {
    document.getElementById('waffle').innerHTML='<img src="assets/frenchtoast.jpg">';

  }

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
  if (num == "3") {
    Message = (
      <span>
        <img src="/assets/3.jpg"></img>
      </span>
    )
  }
  if (num == "4") {
    Message = (
      <span>
        <img src="/assets/4.jpg"></img>
      </span>
    )
  }
  if (num == "5") {
    Message = (
      <span>
        <img src="/assets/5.jpg"></img>
      </span>
    )
  }
  if (num == "6") {
    Message = (
      <span>
        <img src="/assets/6.jpg"></img>
      </span>
    )
  }
  if (num == "7") {
    Message = (
    <span>
      <div id="waffle">
      <img src="/assets/7.jpg"></img>
      </div>
      <div onClick={this.cakeClick}>
        Not everyone likes waffles. Some viewers may prefer pancakes.
      </div>
      <div onClick={this.frenchClick}>
        Or French Toast.
      </div>

    </span>
    )
  }
  if (num == "8") {
    Message = (
    <span>
    </span>
    )
  }
  if (num == "9") {
    Message = (
      <span>
        <img src="/assets/8.jpg"></img>
      </span>
    )
  }

  //poll
  if (num == "100") {
    Message = (
      <span>
      <h1>How many people have ever made an API call?</h1>

      </span>
    )
  }

    return (

      <div id="state">{ Message }
      </div>
        );


  }
}

Task.propTypes = {
  // This component gets the task to display through a React prop.
  // We can use propTypes to indicate it is required
  task: PropTypes.object.isRequired,
};
