<?php get_header(); ?>
<style>

/*  page by Shubhra */

html,
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

@keyframes bob {
  0% {
    top: 0;
  }
  50% {
    top: 0.2em;
  }
}
body {
  background: #edf2f5;
  vertical-align: middle;
  text-align: center;
  transform: translate3d(0, 0, 0);
}
body:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -0.25em;
}

.scene {
  display: inline-block;
  vertical-align: middle;
}

.text {
  color: white;
  font-family: 'Quicksand', sans-serif;
	font-size: 28px;
	color: #797979;
}

.sheep {
  display: inline-block;
  position: relative;
  font-size: 1em;
}
.sheep * {
  transition: transform 0.3s;
}
.sheep .top {
  position: relative;
  top: 0;
  animation: bob 1s infinite;
}
.sheep:hover .head {
  transform: rotate(0deg);
}
.sheep:hover .head .eye {
  width: 1.25em;
  height: 1.25em;
}
.sheep:hover .head .eye:before {
  right: 30%;
}
.sheep:hover .top {
  animation-play-state: paused;
}
.sheep .head {
  display: inline-block;
  width: 5em;
  height: 5em;
  border-radius: 100%;
  background: #211e21;
  vertical-align: middle;
  position: relative;
  top: 1em;
  transform: rotate(30deg);
}
.sheep .head:before {
  content: '';
  display: inline-block;
  width: 80%;
  height: 50%;
  background: #211e21;
  position: absolute;
  bottom: 0;
  right: -10%;
  border-radius: 50% 40%;
}
.sheep .head:hover .ear.one, .sheep .head:hover .ear.two {
  transform: rotate(0deg);
}
.sheep .head .eye {
  display: inline-block;
  width: 1em;
  height: 1em;
  border-radius: 100%;
  background: white;
  position: absolute;
  overflow: hidden;
}
.sheep .head .eye:before {
  content: '';
  display: inline-block;
  background: black;
  width: 50%;
  height: 50%;
  border-radius: 100%;
  position: absolute;
  right: 10%;
  bottom: 10%;
  transition: all 0.3s;
}
.sheep .head .eye.one {
  right: -2%;
  top: 1.7em;
}
.sheep .head .eye.two {
  right: 2.5em;
  top: 1.7em;
}
.sheep .head .ear {
  background: #211e21;
  width: 50%;
  height: 30%;
  border-radius: 100%;
  position: absolute;
}
.sheep .head .ear.one {
  left: -10%;
  top: 5%;
  transform: rotate(-30deg);
}
.sheep .head .ear.two {
  top: 2%;
  right: -5%;
  transform: rotate(20deg);
}
.sheep .body {
  display: inline-block;
  width: 7em;
  height: 7em;
  border-radius: 100%;
  background: white;
  position: relative;
  vertical-align: middle;
  margin-right: -3em;
}
.sheep .legs {
  display: inline-block;
  position: absolute;
  top: 80%;
  left: 10%;
  z-index: -1;
}
.sheep .legs .leg {
  display: inline-block;
  background: #141214;
  width: 0.5em;
  height: 2.5em;
  margin: 0.2em;
}
.sheep:before {
  content: '';
  display: inline-block;
  position: absolute;
  top: 112%;
  width: 100%;
  height: 10%;
  border-radius: 100%;
  background: rgba(0, 0, 0, 0.4);
}

.scene .menu-logo {
	margin: auto;
	background: none;
	position: absolute;
	text-align: center;
	left: calc(50% - 100px);
	top: 30px;
}

</style>
<div class="scene">
	<div class="menu-logo">
	</div>
    <div class="text">404</div>
  <div class="text">Page Not Found!</div>
  <br><br>
  <div class="sheep">
    <span class="top">
      <div class="body"></div>
      <div class="head">
        <div class="eye one"></div>
        <div class="eye two"></div>
        <div class="ear one"></div>
        <div class="ear two"></div>
      </div>
    </span>
      <div class="legs">
        <div class="leg"></div>
        <div class="leg"></div>
        <div class="leg"></div>
        <div class="leg"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
