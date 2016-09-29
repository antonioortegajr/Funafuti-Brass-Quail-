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
        <img src="/assets/9.jpg"></img>
      </span>
    )
  }

  if (num == "10") {
  Message = (
    <span>
      <img src="/assets/10.jpg"></img>
    </span>
  )
  }
  if (num == "11") {
  Message = (
    <span>
      <img src="/assets/11.jpg"></img>
    </span>
  )
  }
  if (num == "12") {
  Message = (
    <span>
      <img src="/assets/12.jpg"></img>
    </span>
  )
  }
  if (num == "13") {
  Message = (
    <span>
      <img src="/assets/13.jpg"></img>
    </span>
  )
  }
  if (num == "14") {
  Message = (
    <span>
      <img src="/assets/14.jpg"></img>
    </span>
  )
  }
  if (num == "15") {
  Message = (
    <span>
      <img src="/assets/15.jpg"></img>
    </span>
  )
  }
  if (num == "16") {
  Message = (
    <span>
      <img src="/assets/16.jpg"></img>
    </span>
  )
  }
  if (num == "17") {
  Message = (
    <span>
      <img src="/assets/17.jpg"></img>
    </span>
  )
  }
  if (num == "18") {
  Message = (
    <span>
      <img src="/assets/18.jpg"></img>
    </span>
  )
  }
  if (num == "19") {
  Message = (
    <span>
      <img src="/assets/19.jpg"></img>
    </span>
  )
  }
  if (num == "20") {
  Message = (
    <span>
      <img src="/assets/20.jpg"></img>
    </span>
  )
  }
  if (num == "21") {
  Message = (
    <span>
      <img src="/assets/21.jpg"></img>
    </span>
  )
  }
  if (num == "22") {
  Message = (
    <span>
      <img src="/assets/22.jpg"></img>
    </span>
  )
  }
  if (num == "23") {
  Message = (
    <span>
      <img src="/assets/23.jpg"></img>
    </span>
  )
  }
  if (num == "24") {
  Message = (
    <span>
      <img src="/assets/24.jpg"></img>
    </span>
  )
  }
  if (num == "25") {
  Message = (
    <span>
      <img src="/assets/25.jpg"></img>
    </span>
  )
  }

  if (num == "26") {
  Message = (
    <span>
      <img src="/assets/26.jpg"></img>
    </span>
  )
  }
  if (num == "27") {
  Message = (
    <span>
      <img src="/assets/27.jpg"></img>
    </span>
  )
  }
  if (num == "28") {
  Message = (
    <span>
      <img src="/assets/28.jpg"></img>
    </span>
  )
  }
  if (num == "29") {
  Message = (
    <span>
      <img src="/assets/29.jpg"></img>
    </span>
  )
  }
  if (num == "30") {
  Message = (
    <span>
      <img src="/assets/30.jpg"></img>
    </span>
  )
  }
  if (num == "31") {
  Message = (
    <span>
      <img src="/assets/31.jpg"></img>
    </span>
  )
  }
  if (num == "32") {
  Message = (
    <span>
      <img src="/assets/32.jpg"></img>
    </span>
  )
  }
  if (num == "33") {
  Message = (
    <span>
      <img src="/assets/33.jpg"></img>
    </span>
  )
  }
  if (num == "34") {
  Message = (
    <span>
      <img src="/assets/34.jpg"></img>
    </span>
  )
  }
  if (num == "35") {
  Message = (
    <span>
      <img src="/assets/35.jpg"></img>
    </span>
  )
  }
  if (num == "36") {
  Message = (
    <span>
      <img src="/assets/36.jpg"></img>
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
