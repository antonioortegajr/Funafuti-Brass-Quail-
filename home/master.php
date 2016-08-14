<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
</head>
  <h2>
  IDX Broker WorkShop
  </h2>
  <body>
  <!-- Wide card with share menu button -->
<style>
body{
    background-color: #FAFAFA;
    padding-left:5%;
}
.demo-card-wide.mdl-card {
  width: 90%;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 220px;
  background: url('https://pbs.twimg.com/profile_images/746841190520107010/5v2hVgGS_400x400.jpg') center / cover;
  background-size: 200px 200px;
  background-repeat: no-repeat;

}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
h2{
    color:black !important;
}
hr{
    width:90%
}
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Antonio</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Hi, I thanks for attending my workshop. We are going to code up some details pages,
  make some API calls, and more. All this in this nifty little console.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-clipboard-demo="" data-clipboard-target="#one">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>

<div><hr></div>

<!-- Square card -->
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="mdl-grid">

  <div class="mdl-cell mdl-cell--4-col">
<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Code Console</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Load up prepared code for javascripting on a details page,
  making an API call, or get back to this this defaut
  code. Just click a button below to copy to your clipboard. Then hover over File in the
  editor menu and click Remote Import... then Run.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
</div>
</div>


<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">JavaScript</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Load up prepared code for javascripting on a details page,
  making an API call, or get back to this this defaut
  code. Just click a button below to copy to your clipboard. Then hover over File in the
  editor menu and click Remote Import... then Run.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
</div>

</div></div>


<div class="mdl-grid">

  <div class="mdl-cell mdl-cell--4-col">
<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">API</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Load up prepared code for javascripting on a details page,
  making an API call, or get back to this this defaut
  code. Just click a button below to copy to your clipboard. Then hover over File in the
  editor menu and click Remote Import... then Run.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
</div>
</div>


<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">JavaScript</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Load up prepared code for javascripting on a details page,
  making an API call, or get back to this this defaut
  code. Just click a button below to copy to your clipboard. Then hover over File in the
  editor menu and click Remote Import... then Run.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
</div>

</div></div>




<div class="input-group">
<input id="one" type="text" value="https://gist.github.com/antonioortegajr/852fd9d4cb43d18e69ae">
<span class="input-group-button">
<button class="btn" type="button" data-clipboard-demo="" data-clipboard-target="#one">
Click to copy API call code Gist</button>
</span>
</div>
<div class="input-group">
<input id="two" type="text" value="https://gist.github.com/antonioortegajr/af0d4390f5417c60c5ab9cd414d466de">
<span class="input-group-button">
<button class="btn" type="button" data-clipboard-demo="" data-clipboard-target="#two">
Click to copy details page code Gist</button>
</span>
</div>
<p>
Today we are going to be working with Javascript and later PHP.
If you don't javascript you will. If you have never written a line of PHP we will do that too.
</p>
 <p>
  <div id="thing">
 <button onCLick="go()">Create dynamic content</button>
 Boring content...
 </div>
 </p>

<!-- Copy to clipboard script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>

  <script>
var clipboard = new Clipboard('.btn');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});
</script>
<script>
function go(){

    var rewrite = document.getElementById('thing');

    rewrite.innerHTML='<button onCLick="go()">Change dynamic content</button><br><h1>Teamwork MAKES the dream WORK</h1><img src="https://media.giphy.com/media/BRbuCoKpu3rmo/giphy-downsized-large.gif">';
}
</script>
<!-- adding style here so there is fewer exteranl resources to call -->
 <style>
 input#one {
    width: 50%;
    position: absolute;
    top: -500px;
}
 input#two {
    width: 50%;
    position: absolute;
    top: -500px;
}
 </style>
 <?php
/*
* ======================================================================
*
*  ▓▓▓▌▒▓▓▓▓▓▓▓▓▓▓▓▓▓▓╤     φ▒▒▒▒
*  ▓▓▓▌▒▒▒▌```````▀▒▓▓▌▒▄ φ▒╣╣Å
*  ▓▓▓▌▒▒▒▌        ▒▒▒▌╣╣╣╣╣▒
*  ▓▓▓▌▒▒▒▌       ,▒▒▓▌╣▒╙▒╣╣▒
*  ▓▓▓▌▒▒▒▓▓▓▓▓▓▓▓▒▓▓▓▒┘   ╙▒╣╣▒╕
*
*  db   d8b   db  .d88b.  d8888b. db   dD .d8888. db   db  .d88b.  d8888b.
* 88   I8I   88 .8P  Y8. 88  `8D 88 ,8P' 88'  YP 88   88 .8P  Y8. 88  `8D
* 88   I8I   88 88    88 88oobY' 88,8P   `8bo.   88ooo88 88    88 88oodD'
* Y8   I8I   88 88    88 88`8b   88`8b     `Y8b. 88~~~88 88    88 88~~~
* `8b d8'8b d8' `8b  d8' 88 `88. 88 `88. db   8D 88   88 `8b  d8' 88
* `8b8' `8d8'   `Y88P'  88   YD YP   YD `8888Y' YP   YP  `Y88P'  88
*
*
*  About this editor:
*   You can edit existing code or add your own code here
*   and run in the window to the right
*
*  You can run PHP, Javascript, CSS and your code will show on the right
*  just like in any browser.
*
*  If you leave this page or need to start over simply open this page again
*  and this code will load.
*
*  Workshop code can be loaded from gists on GitHub.
*
*  Below are the resources needed for this IDX Broker Dev Partner workshop.
*
* ======================================================================
  */

  ?>
  </body>
  </html>
