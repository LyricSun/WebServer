﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

<style>
@import url("https://fonts.googleapis.com/css?family=Concert+One");
html,
body {
  width: 100%;
  height: 100%;
  /*background: -webkit-radial-gradient(bottom ellipse, #1b2735 0%, #090a0f 100%);*/
  /*background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);*/



    background-color: #1b2735;
}

.text {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 80%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  text-align: center;
  font-size: 10vw;
  font-family: 'Concert One', cursive;
  /*-webkit-animation: text-animation 5s linear infinite alternate;*/
          /*animation: text-animation 5s linear infinite alternate;*/


    color: white;
    text-shadow:0 0 80px #ffaa66;
}

/*@-webkit-keyframes text-animation {*/
  /*from {*/
    /*color: white;*/
    /*text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #FFDD1B, 0 0 70px #FFDD1B, 0 0 80px #FFDD1B, 0 0 100px #FFDD1B, 0 0 150px #FFDD1B;*/
  /*}*/
  /*to {*/
    /*color: white;*/
    /*text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #ff0080, 0 0 30px #ff0080, 0 0 40px #ff0080, 0 0 55px #ff0080, 0 0 75px #ff0080;*/
    /*text-align: center;*/
  /*}*/
/*}*/

/*@keyframes text-animation {*/
  /*from {*/
    /*color: white;*/
    /*text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #FFDD1B, 0 0 20px #FFDD1B, 0 0 25px #FFDD1B, 0 0 30px #FFDD1B, 0 0 35px #FFDD1B, 0 0 40px #FFDD1B;*/
  /*}*/
  /*to {*/
    /*color: white;*/
    /*text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #ff0080, 0 0 20px #ff0080, 0 0 25px #ff0080, 0 0 30px #ff0080, 0 0 35px #ff0080;*/
    /*text-align: center;*/
  /*}*/
/*}*/
/*.bomb-rocket, .normal-rocket {*/
  /*position: absolute;*/
  /*bottom: 0;*/
  /*width: 30px;*/
  /*height: 30px;*/
  /*border-radius: 100%;*/
  /*-webkit-animation-timing-function: linear;*/
          /*animation-timing-function: linear;*/
  /*-webkit-animation-iteration-count: infinite;*/
          /*animation-iteration-count: infinite;*/
/*}*/

/*.bomb-rocket:nth-child(1) {*/
  /*left: 65vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-2;*/
          /*animation-name: bomb-rocket-animate-2;*/
  /*-webkit-animation-delay: 0.9s;*/
          /*animation-delay: 0.9s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: red;*/
/*}*/

/*.normal-rocket:nth-child(16) {*/
  /*left: 89vw;*/
  /*-webkit-animation-name: normal-rocket-animate-2;*/
          /*animation-name: normal-rocket-animate-2;*/
  /*-webkit-animation-delay: 1s;*/
          /*animation-delay: 1s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: deepskyblue;*/
/*}*/

/*.bomb-rocket:nth-child(2) {*/
  /*left: 37vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-3;*/
          /*animation-name: bomb-rocket-animate-3;*/
  /*-webkit-animation-delay: 0.5s;*/
          /*animation-delay: 0.5s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: turquoise;*/
/*}*/

/*.normal-rocket:nth-child(17) {*/
  /*left: 56vw;*/
  /*-webkit-animation-name: normal-rocket-animate-3;*/
          /*animation-name: normal-rocket-animate-3;*/
  /*-webkit-animation-delay: 0.6s;*/
          /*animation-delay: 0.6s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: yellow;*/
/*}*/

/*.bomb-rocket:nth-child(3) {*/
  /*left: 48vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-1;*/
          /*animation-name: bomb-rocket-animate-1;*/
  /*-webkit-animation-delay: 0.9s;*/
          /*animation-delay: 0.9s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: turquoise;*/
/*}*/

/*.normal-rocket:nth-child(18) {*/
  /*left: 85vw;*/
  /*-webkit-animation-name: normal-rocket-animate-1;*/
          /*animation-name: normal-rocket-animate-1;*/
  /*-webkit-animation-delay: 1.6s;*/
          /*animation-delay: 1.6s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: deepskyblue;*/
/*}*/

/*.bomb-rocket:nth-child(4) {*/
  /*left: 73vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-2;*/
          /*animation-name: bomb-rocket-animate-2;*/
  /*-webkit-animation-delay: 1.9s;*/
          /*animation-delay: 1.9s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: yellow;*/
/*}*/

/*.normal-rocket:nth-child(19) {*/
  /*left: 13vw;*/
  /*-webkit-animation-name: normal-rocket-animate-2;*/
          /*animation-name: normal-rocket-animate-2;*/
  /*-webkit-animation-delay: 0.9s;*/
          /*animation-delay: 0.9s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: springgreen;*/
/*}*/

/*.bomb-rocket:nth-child(5) {*/
  /*left: 81vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-3;*/
          /*animation-name: bomb-rocket-animate-3;*/
  /*-webkit-animation-delay: 0.5s;*/
          /*animation-delay: 0.5s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: yellow;*/
/*}*/

/*.normal-rocket:nth-child(20) {*/
  /*left: 66vw;*/
  /*-webkit-animation-name: normal-rocket-animate-3;*/
          /*animation-name: normal-rocket-animate-3;*/
  /*-webkit-animation-delay: 1.9s;*/
          /*animation-delay: 1.9s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: yellow;*/
/*}*/

/*.bomb-rocket:nth-child(6) {*/
  /*left: 60vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-1;*/
          /*animation-name: bomb-rocket-animate-1;*/
  /*-webkit-animation-delay: 0.9s;*/
          /*animation-delay: 0.9s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: turquoise;*/
/*}*/

/*.normal-rocket:nth-child(21) {*/
  /*left: 95vw;*/
  /*-webkit-animation-name: normal-rocket-animate-1;*/
          /*animation-name: normal-rocket-animate-1;*/
  /*-webkit-animation-delay: 1.4s;*/
          /*animation-delay: 1.4s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: hotpink;*/
/*}*/

/*.bomb-rocket:nth-child(7) {*/
  /*left: 99vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-2;*/
          /*animation-name: bomb-rocket-animate-2;*/
  /*-webkit-animation-delay: 0.7s;*/
          /*animation-delay: 0.7s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: springgreen;*/
/*}*/

/*.normal-rocket:nth-child(22) {*/
  /*left: 86vw;*/
  /*-webkit-animation-name: normal-rocket-animate-2;*/
          /*animation-name: normal-rocket-animate-2;*/
  /*-webkit-animation-delay: 1.5s;*/
          /*animation-delay: 1.5s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: hotpink;*/
/*}*/

/*.bomb-rocket:nth-child(8) {*/
  /*left: 90vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-3;*/
          /*animation-name: bomb-rocket-animate-3;*/
  /*-webkit-animation-delay: 1s;*/
          /*animation-delay: 1s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: deepskyblue;*/
/*}*/

/*.normal-rocket:nth-child(23) {*/
  /*left: 81vw;*/
  /*-webkit-animation-name: normal-rocket-animate-3;*/
          /*animation-name: normal-rocket-animate-3;*/
  /*-webkit-animation-delay: 0.9s;*/
          /*animation-delay: 0.9s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: hotpink;*/
/*}*/

/*.bomb-rocket:nth-child(9) {*/
  /*left: 95vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-1;*/
          /*animation-name: bomb-rocket-animate-1;*/
  /*-webkit-animation-delay: 2s;*/
          /*animation-delay: 2s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: springgreen;*/
/*}*/

/*.normal-rocket:nth-child(24) {*/
  /*left: 48vw;*/
  /*-webkit-animation-name: normal-rocket-animate-1;*/
          /*animation-name: normal-rocket-animate-1;*/
  /*-webkit-animation-delay: 0.6s;*/
          /*animation-delay: 0.6s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: red;*/
/*}*/

/*.bomb-rocket:nth-child(10) {*/
  /*left: 85vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-2;*/
          /*animation-name: bomb-rocket-animate-2;*/
  /*-webkit-animation-delay: 1s;*/
          /*animation-delay: 1s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: turquoise;*/
/*}*/

/*.normal-rocket:nth-child(25) {*/
  /*left: 4vw;*/
  /*-webkit-animation-name: normal-rocket-animate-2;*/
          /*animation-name: normal-rocket-animate-2;*/
  /*-webkit-animation-delay: 1.1s;*/
          /*animation-delay: 1.1s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: springgreen;*/
/*}*/

/*.bomb-rocket:nth-child(11) {*/
  /*left: 70vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-3;*/
          /*animation-name: bomb-rocket-animate-3;*/
  /*-webkit-animation-delay: 1.9s;*/
          /*animation-delay: 1.9s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: yellow;*/
/*}*/

/*.normal-rocket:nth-child(26) {*/
  /*left: 3vw;*/
  /*-webkit-animation-name: normal-rocket-animate-3;*/
          /*animation-name: normal-rocket-animate-3;*/
  /*-webkit-animation-delay: 0.8s;*/
          /*animation-delay: 0.8s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: springgreen;*/
/*}*/

/*.bomb-rocket:nth-child(12) {*/
  /*left: 20vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-1;*/
          /*animation-name: bomb-rocket-animate-1;*/
  /*-webkit-animation-delay: 2s;*/
          /*animation-delay: 2s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: turquoise;*/
/*}*/

/*.normal-rocket:nth-child(27) {*/
  /*left: 3vw;*/
  /*-webkit-animation-name: normal-rocket-animate-1;*/
          /*animation-name: normal-rocket-animate-1;*/
  /*-webkit-animation-delay: 0.5s;*/
          /*animation-delay: 0.5s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: red;*/
/*}*/

/*.bomb-rocket:nth-child(13) {*/
  /*left: 88vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-2;*/
          /*animation-name: bomb-rocket-animate-2;*/
  /*-webkit-animation-delay: 1.3s;*/
          /*animation-delay: 1.3s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: deepskyblue;*/
/*}*/

/*.normal-rocket:nth-child(28) {*/
  /*left: 1vw;*/
  /*-webkit-animation-name: normal-rocket-animate-2;*/
          /*animation-name: normal-rocket-animate-2;*/
  /*-webkit-animation-delay: 0.7s;*/
          /*animation-delay: 0.7s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: deepskyblue;*/
/*}*/

/*.bomb-rocket:nth-child(14) {*/
  /*left: 74vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-3;*/
          /*animation-name: bomb-rocket-animate-3;*/
  /*-webkit-animation-delay: 1s;*/
          /*animation-delay: 1s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: turquoise;*/
/*}*/

/*.normal-rocket:nth-child(29) {*/
  /*left: 46vw;*/
  /*-webkit-animation-name: normal-rocket-animate-3;*/
          /*animation-name: normal-rocket-animate-3;*/
  /*-webkit-animation-delay: 0.4s;*/
          /*animation-delay: 0.4s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: yellow;*/
/*}*/

/*.bomb-rocket:nth-child(15) {*/
  /*left: 59vw;*/
  /*-webkit-animation-name: bomb-rocket-animate-1;*/
          /*animation-name: bomb-rocket-animate-1;*/
  /*-webkit-animation-delay: 2s;*/
          /*animation-delay: 2s;*/
  /*-webkit-animation-duration: 4s;*/
          /*animation-duration: 4s;*/
  /*color: deepskyblue;*/
/*}*/

/*.normal-rocket:nth-child(30) {*/
  /*left: 57vw;*/
  /*-webkit-animation-name: normal-rocket-animate-1;*/
          /*animation-name: normal-rocket-animate-1;*/
  /*-webkit-animation-delay: 1.1s;*/
          /*animation-delay: 1.1s;*/
  /*-webkit-animation-duration: 5s;*/
          /*animation-duration: 5s;*/
  /*color: red;*/
/*}*/

/*@-webkit-keyframes bomb-rocket-animate-1 {*/
  /*0% {*/
    /*-webkit-transform: rotate(-10deg) translateY(0) scale(0);*/
            /*transform: rotate(-10deg) translateY(0) scale(0);*/
    /*opacity: 1;*/
    /*box-shadow: none;*/
  /*}*/
  /*0.1% {*/
    /*-webkit-transform: rotate(-10deg) translateY(0) scale(0.1, 0.5);*/
            /*transform: rotate(-10deg) translateY(0) scale(0.1, 0.5);*/
    /*background: -webkit-linear-gradient(top, currentColor 0%, #000000 80%);*/
    /*background: linear-gradient(180deg, currentColor 0%, #000000 80%);*/
    /*box-shadow: none;*/
    /*opacity: 1;*/
  /*}*/
  /*50% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1, 0.5);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1, 0.5);*/
    /*background: -webkit-linear-gradient(top, currentColor 0%, #000000 80%);*/
    /*background: linear-gradient(180deg, currentColor 0%, #000000 80%);*/
    /*box-shadow: none;*/
    /*opacity: 1;*/
  /*}*/
  /*50.1% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor;*/
    /*opacity: 1;*/
  /*}*/
  /*75% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 500px 0px 5px #fff, 500px 0px 10px #fff, 500px 0px 20px currentColor, 500px 0px 30px currentColor, 500px 0px 40px currentColor, 500px 0px 55px currentColor, 500px 0px 75px currentColor, 344.68271px 60.77686px 5px #fff, 344.68271px 60.77686px 10px #fff, 344.68271px 60.77686px 20px currentColor, 344.68271px 60.77686px 30px currentColor, 344.68271px 60.77686px 40px currentColor, 344.68271px 60.77686px 55px currentColor, 344.68271px 60.77686px 75px currentColor, 187.93852px 68.40403px 5px #fff, 187.93852px 68.40403px 10px #fff, 187.93852px 68.40403px 20px currentColor, 187.93852px 68.40403px 30px currentColor, 187.93852px 68.40403px 40px currentColor, 187.93852px 68.40403px 55px currentColor, 187.93852px 68.40403px 75px currentColor, 433.0127px 250px 5px #fff, 433.0127px 250px 10px #fff, 433.0127px 250px 20px currentColor, 433.0127px 250px 30px currentColor, 433.0127px 250px 40px currentColor, 433.0127px 250px 55px currentColor, 433.0127px 250px 75px currentColor, 268.11556px 224.97566px 5px #fff, 268.11556px 224.97566px 10px #fff, 268.11556px 224.97566px 20px currentColor, 268.11556px 224.97566px 30px currentColor, 268.11556px 224.97566px 40px currentColor, 268.11556px 224.97566px 55px currentColor, 268.11556px 224.97566px 75px currentColor, 128.55752px 153.20889px 5px #fff, 128.55752px 153.20889px 10px #fff, 128.55752px 153.20889px 20px currentColor, 128.55752px 153.20889px 30px currentColor, 128.55752px 153.20889px 40px currentColor, 128.55752px 153.20889px 55px currentColor, 128.55752px 153.20889px 75px currentColor, 250px 433.0127px 5px #fff, 250px 433.0127px 10px #fff, 250px 433.0127px 20px currentColor, 250px 433.0127px 30px currentColor, 250px 433.0127px 40px currentColor, 250px 433.0127px 55px currentColor, 250px 433.0127px 75px currentColor, 119.70705px 328.89242px 5px #fff, 119.70705px 328.89242px 10px #fff, 119.70705px 328.89242px 20px currentColor, 119.70705px 328.89242px 30px currentColor, 119.70705px 328.89242px 40px currentColor, 119.70705px 328.89242px 55px currentColor, 119.70705px 328.89242px 75px currentColor, 34.72964px 196.96155px 5px #fff, 34.72964px 196.96155px 10px #fff, 34.72964px 196.96155px 20px currentColor, 34.72964px 196.96155px 30px currentColor, 34.72964px 196.96155px 40px currentColor, 34.72964px 196.96155px 55px currentColor, 34.72964px 196.96155px 75px currentColor, 0px 500px 5px #fff, 0px 500px 10px #fff, 0px 500px 20px currentColor, 0px 500px 30px currentColor, 0px 500px 40px currentColor, 0px 500px 55px currentColor, 0px 500px 75px currentColor, -60.77686px 344.68271px 5px #fff, -60.77686px 344.68271px 10px #fff, -60.77686px 344.68271px 20px currentColor, -60.77686px 344.68271px 30px currentColor, -60.77686px 344.68271px 40px currentColor, -60.77686px 344.68271px 55px currentColor, -60.77686px 344.68271px 75px currentColor, -68.40403px 187.93852px 5px #fff, -68.40403px 187.93852px 10px #fff, -68.40403px 187.93852px 20px currentColor, -68.40403px 187.93852px 30px currentColor, -68.40403px 187.93852px 40px currentColor, -68.40403px 187.93852px 55px currentColor, -68.40403px 187.93852px 75px currentColor, -250px 433.0127px 5px #fff, -250px 433.0127px 10px #fff, -250px 433.0127px 20px currentColor, -250px 433.0127px 30px currentColor, -250px 433.0127px 40px currentColor, -250px 433.0127px 55px currentColor, -250px 433.0127px 75px currentColor, -224.97566px 268.11556px 5px #fff, -224.97566px 268.11556px 10px #fff, -224.97566px 268.11556px 20px currentColor, -224.97566px 268.11556px 30px currentColor, -224.97566px 268.11556px 40px currentColor, -224.97566px 268.11556px 55px currentColor, -224.97566px 268.11556px 75px currentColor, -153.20889px 128.55752px 5px #fff, -153.20889px 128.55752px 10px #fff, -153.20889px 128.55752px 20px currentColor, -153.20889px 128.55752px 30px currentColor, -153.20889px 128.55752px 40px currentColor, -153.20889px 128.55752px 55px currentColor, -153.20889px 128.55752px 75px currentColor, -433.0127px 250px 5px #fff, -433.0127px 250px 10px #fff, -433.0127px 250px 20px currentColor, -433.0127px 250px 30px currentColor, -433.0127px 250px 40px currentColor, -433.0127px 250px 55px currentColor, -433.0127px 250px 75px currentColor, -328.89242px 119.70705px 5px #fff, -328.89242px 119.70705px 10px #fff, -328.89242px 119.70705px 20px currentColor, -328.89242px 119.70705px 30px currentColor, -328.89242px 119.70705px 40px currentColor, -328.89242px 119.70705px 55px currentColor, -328.89242px 119.70705px 75px currentColor, -196.96155px 34.72964px 5px #fff, -196.96155px 34.72964px 10px #fff, -196.96155px 34.72964px 20px currentColor, -196.96155px 34.72964px 30px currentColor, -196.96155px 34.72964px 40px currentColor, -196.96155px 34.72964px 55px currentColor, -196.96155px 34.72964px 75px currentColor, -500px 0px 5px #fff, -500px 0px 10px #fff, -500px 0px 20px currentColor, -500px 0px 30px currentColor, -500px 0px 40px currentColor, -500px 0px 55px currentColor, -500px 0px 75px currentColor, -344.68271px -60.77686px 5px #fff, -344.68271px -60.77686px 10px #fff, -344.68271px -60.77686px 20px currentColor, -344.68271px -60.77686px 30px currentColor, -344.68271px -60.77686px 40px currentColor, -344.68271px -60.77686px 55px currentColor, -344.68271px -60.77686px 75px currentColor, -187.93852px -68.40403px 5px #fff, -187.93852px -68.40403px 10px #fff, -187.93852px -68.40403px 20px currentColor, -187.93852px -68.40403px 30px currentColor, -187.93852px -68.40403px 40px currentColor, -187.93852px -68.40403px 55px currentColor, -187.93852px -68.40403px 75px currentColor, -433.0127px -250px 5px #fff, -433.0127px -250px 10px #fff, -433.0127px -250px 20px currentColor, -433.0127px -250px 30px currentColor, -433.0127px -250px 40px currentColor, -433.0127px -250px 55px currentColor, -433.0127px -250px 75px currentColor, -268.11555px -224.97566px 5px #fff, -268.11555px -224.97566px 10px #fff, -268.11555px -224.97566px 20px currentColor, -268.11555px -224.97566px 30px currentColor, -268.11555px -224.97566px 40px currentColor, -268.11555px -224.97566px 55px currentColor, -268.11555px -224.97566px 75px currentColor, -128.55752px -153.20889px 5px #fff, -128.55752px -153.20889px 10px #fff, -128.55752px -153.20889px 20px currentColor, -128.55752px -153.20889px 30px currentColor, -128.55752px -153.20889px 40px currentColor, -128.55752px -153.20889px 55px currentColor, -128.55752px -153.20889px 75px currentColor, -249.99998px -433.0127px 5px #fff, -249.99998px -433.0127px 10px #fff, -249.99998px -433.0127px 20px currentColor, -249.99998px -433.0127px 30px currentColor, -249.99998px -433.0127px 40px currentColor, -249.99998px -433.0127px 55px currentColor, -249.99998px -433.0127px 75px currentColor, -119.70701px -328.89241px 5px #fff, -119.70701px -328.89241px 10px #fff, -119.70701px -328.89241px 20px currentColor, -119.70701px -328.89241px 30px currentColor, -119.70701px -328.89241px 40px currentColor, -119.70701px -328.89241px 55px currentColor, -119.70701px -328.89241px 75px currentColor, -34.72959px -196.96154px 5px #fff, -34.72959px -196.96154px 10px #fff, -34.72959px -196.96154px 20px currentColor, -34.72959px -196.96154px 30px currentColor, -34.72959px -196.96154px 40px currentColor, -34.72959px -196.96154px 55px currentColor, -34.72959px -196.96154px 75px currentColor, 0.00028px -499.99994px 5px #fff, 0.00028px -499.99994px 10px #fff, 0.00028px -499.99994px 20px currentColor, 0.00028px -499.99994px 30px currentColor, 0.00028px -499.99994px 40px currentColor, 0.00028px -499.99994px 55px currentColor, 0.00028px -499.99994px 75px currentColor, 60.77729px -344.68262px 5px #fff, 60.77729px -344.68262px 10px #fff, 60.77729px -344.68262px 20px currentColor, 60.77729px -344.68262px 30px currentColor, 60.77729px -344.68262px 40px currentColor, 60.77729px -344.68262px 55px currentColor, 60.77729px -344.68262px 75px currentColor, 68.40456px -187.93841px 5px #fff, 68.40456px -187.93841px 10px #fff, 68.40456px -187.93841px 20px currentColor, 68.40456px -187.93841px 30px currentColor, 68.40456px -187.93841px 40px currentColor, 68.40456px -187.93841px 55px currentColor, 68.40456px -187.93841px 75px currentColor, 250.00279px -433.01207px 5px #fff, 250.00279px -433.01207px 10px #fff, 250.00279px -433.01207px 20px currentColor, 250.00279px -433.01207px 30px currentColor, 250.00279px -433.01207px 40px currentColor, 250.00279px -433.01207px 55px currentColor, 250.00279px -433.01207px 75px currentColor, 224.97966px -268.11461px 5px #fff, 224.97966px -268.11461px 10px #fff, 224.97966px -268.11461px 20px currentColor, 224.97966px -268.11461px 30px currentColor, 224.97966px -268.11461px 40px currentColor, 224.97966px -268.11461px 55px currentColor, 224.97966px -268.11461px 75px currentColor, 153.21347px -128.55641px 5px #fff, 153.21347px -128.55641px 10px #fff, 153.21347px -128.55641px 20px currentColor, 153.21347px -128.55641px 30px currentColor, 153.21347px -128.55641px 40px currentColor, 153.21347px -128.55641px 55px currentColor, 153.21347px -128.55641px 75px currentColor, 433.03515px -249.99435px 5px #fff, 433.03515px -249.99435px 10px #fff, 433.03515px -249.99435px 20px currentColor, 433.03515px -249.99435px 30px currentColor, 433.03515px -249.99435px 40px currentColor, 433.03515px -249.99435px 55px currentColor, 433.03515px -249.99435px 75px currentColor, 328.92262px -119.69922px 5px #fff, 328.92262px -119.69922px 10px #fff, 328.92262px -119.69922px 20px currentColor, 328.92262px -119.69922px 30px currentColor, 328.92262px -119.69922px 40px currentColor, 328.92262px -119.69922px 55px currentColor, 328.92262px -119.69922px 75px currentColor, 196.99409px -34.72095px 5px #fff, 196.99409px -34.72095px 10px #fff, 196.99409px -34.72095px 20px currentColor, 196.99409px -34.72095px 30px currentColor, 196.99409px -34.72095px 40px currentColor, 196.99409px -34.72095px 55px currentColor, 196.99409px -34.72095px 75px currentColor;*/
    /*opacity: 1;*/
  /*}*/
  /*100% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 500px 0px 5px #fff, 500px 0px 10px #fff, 500px 0px 20px currentColor, 500px 0px 30px currentColor, 500px 0px 40px currentColor, 500px 0px 55px currentColor, 500px 0px 75px currentColor, 344.68271px 60.77686px 5px #fff, 344.68271px 60.77686px 10px #fff, 344.68271px 60.77686px 20px currentColor, 344.68271px 60.77686px 30px currentColor, 344.68271px 60.77686px 40px currentColor, 344.68271px 60.77686px 55px currentColor, 344.68271px 60.77686px 75px currentColor, 187.93852px 68.40403px 5px #fff, 187.93852px 68.40403px 10px #fff, 187.93852px 68.40403px 20px currentColor, 187.93852px 68.40403px 30px currentColor, 187.93852px 68.40403px 40px currentColor, 187.93852px 68.40403px 55px currentColor, 187.93852px 68.40403px 75px currentColor, 433.0127px 250px 5px #fff, 433.0127px 250px 10px #fff, 433.0127px 250px 20px currentColor, 433.0127px 250px 30px currentColor, 433.0127px 250px 40px currentColor, 433.0127px 250px 55px currentColor, 433.0127px 250px 75px currentColor, 268.11556px 224.97566px 5px #fff, 268.11556px 224.97566px 10px #fff, 268.11556px 224.97566px 20px currentColor, 268.11556px 224.97566px 30px currentColor, 268.11556px 224.97566px 40px currentColor, 268.11556px 224.97566px 55px currentColor, 268.11556px 224.97566px 75px currentColor, 128.55752px 153.20889px 5px #fff, 128.55752px 153.20889px 10px #fff, 128.55752px 153.20889px 20px currentColor, 128.55752px 153.20889px 30px currentColor, 128.55752px 153.20889px 40px currentColor, 128.55752px 153.20889px 55px currentColor, 128.55752px 153.20889px 75px currentColor, 250px 433.0127px 5px #fff, 250px 433.0127px 10px #fff, 250px 433.0127px 20px currentColor, 250px 433.0127px 30px currentColor, 250px 433.0127px 40px currentColor, 250px 433.0127px 55px currentColor, 250px 433.0127px 75px currentColor, 119.70705px 328.89242px 5px #fff, 119.70705px 328.89242px 10px #fff, 119.70705px 328.89242px 20px currentColor, 119.70705px 328.89242px 30px currentColor, 119.70705px 328.89242px 40px currentColor, 119.70705px 328.89242px 55px currentColor, 119.70705px 328.89242px 75px currentColor, 34.72964px 196.96155px 5px #fff, 34.72964px 196.96155px 10px #fff, 34.72964px 196.96155px 20px currentColor, 34.72964px 196.96155px 30px currentColor, 34.72964px 196.96155px 40px currentColor, 34.72964px 196.96155px 55px currentColor, 34.72964px 196.96155px 75px currentColor, 0px 500px 5px #fff, 0px 500px 10px #fff, 0px 500px 20px currentColor, 0px 500px 30px currentColor, 0px 500px 40px currentColor, 0px 500px 55px currentColor, 0px 500px 75px currentColor, -60.77686px 344.68271px 5px #fff, -60.77686px 344.68271px 10px #fff, -60.77686px 344.68271px 20px currentColor, -60.77686px 344.68271px 30px currentColor, -60.77686px 344.68271px 40px currentColor, -60.77686px 344.68271px 55px currentColor, -60.77686px 344.68271px 75px currentColor, -68.40403px 187.93852px 5px #fff, -68.40403px 187.93852px 10px #fff, -68.40403px 187.93852px 20px currentColor, -68.40403px 187.93852px 30px currentColor, -68.40403px 187.93852px 40px currentColor, -68.40403px 187.93852px 55px currentColor, -68.40403px 187.93852px 75px currentColor, -250px 433.0127px 5px #fff, -250px 433.0127px 10px #fff, -250px 433.0127px 20px currentColor, -250px 433.0127px 30px currentColor, -250px 433.0127px 40px currentColor, -250px 433.0127px 55px currentColor, -250px 433.0127px 75px currentColor, -224.97566px 268.11556px 5px #fff, -224.97566px 268.11556px 10px #fff, -224.97566px 268.11556px 20px currentColor, -224.97566px 268.11556px 30px currentColor, -224.97566px 268.11556px 40px currentColor, -224.97566px 268.11556px 55px currentColor, -224.97566px 268.11556px 75px currentColor, -153.20889px 128.55752px 5px #fff, -153.20889px 128.55752px 10px #fff, -153.20889px 128.55752px 20px currentColor, -153.20889px 128.55752px 30px currentColor, -153.20889px 128.55752px 40px currentColor, -153.20889px 128.55752px 55px currentColor, -153.20889px 128.55752px 75px currentColor, -433.0127px 250px 5px #fff, -433.0127px 250px 10px #fff, -433.0127px 250px 20px currentColor, -433.0127px 250px 30px currentColor, -433.0127px 250px 40px currentColor, -433.0127px 250px 55px currentColor, -433.0127px 250px 75px currentColor, -328.89242px 119.70705px 5px #fff, -328.89242px 119.70705px 10px #fff, -328.89242px 119.70705px 20px currentColor, -328.89242px 119.70705px 30px currentColor, -328.89242px 119.70705px 40px currentColor, -328.89242px 119.70705px 55px currentColor, -328.89242px 119.70705px 75px currentColor, -196.96155px 34.72964px 5px #fff, -196.96155px 34.72964px 10px #fff, -196.96155px 34.72964px 20px currentColor, -196.96155px 34.72964px 30px currentColor, -196.96155px 34.72964px 40px currentColor, -196.96155px 34.72964px 55px currentColor, -196.96155px 34.72964px 75px currentColor, -500px 0px 5px #fff, -500px 0px 10px #fff, -500px 0px 20px currentColor, -500px 0px 30px currentColor, -500px 0px 40px currentColor, -500px 0px 55px currentColor, -500px 0px 75px currentColor, -344.68271px -60.77686px 5px #fff, -344.68271px -60.77686px 10px #fff, -344.68271px -60.77686px 20px currentColor, -344.68271px -60.77686px 30px currentColor, -344.68271px -60.77686px 40px currentColor, -344.68271px -60.77686px 55px currentColor, -344.68271px -60.77686px 75px currentColor, -187.93852px -68.40403px 5px #fff, -187.93852px -68.40403px 10px #fff, -187.93852px -68.40403px 20px currentColor, -187.93852px -68.40403px 30px currentColor, -187.93852px -68.40403px 40px currentColor, -187.93852px -68.40403px 55px currentColor, -187.93852px -68.40403px 75px currentColor, -433.0127px -250px 5px #fff, -433.0127px -250px 10px #fff, -433.0127px -250px 20px currentColor, -433.0127px -250px 30px currentColor, -433.0127px -250px 40px currentColor, -433.0127px -250px 55px currentColor, -433.0127px -250px 75px currentColor, -268.11555px -224.97566px 5px #fff, -268.11555px -224.97566px 10px #fff, -268.11555px -224.97566px 20px currentColor, -268.11555px -224.97566px 30px currentColor, -268.11555px -224.97566px 40px currentColor, -268.11555px -224.97566px 55px currentColor, -268.11555px -224.97566px 75px currentColor, -128.55752px -153.20889px 5px #fff, -128.55752px -153.20889px 10px #fff, -128.55752px -153.20889px 20px currentColor, -128.55752px -153.20889px 30px currentColor, -128.55752px -153.20889px 40px currentColor, -128.55752px -153.20889px 55px currentColor, -128.55752px -153.20889px 75px currentColor, -249.99998px -433.0127px 5px #fff, -249.99998px -433.0127px 10px #fff, -249.99998px -433.0127px 20px currentColor, -249.99998px -433.0127px 30px currentColor, -249.99998px -433.0127px 40px currentColor, -249.99998px -433.0127px 55px currentColor, -249.99998px -433.0127px 75px currentColor, -119.70701px -328.89241px 5px #fff, -119.70701px -328.89241px 10px #fff, -119.70701px -328.89241px 20px currentColor, -119.70701px -328.89241px 30px currentColor, -119.70701px -328.89241px 40px currentColor, -119.70701px -328.89241px 55px currentColor, -119.70701px -328.89241px 75px currentColor, -34.72959px -196.96154px 5px #fff, -34.72959px -196.96154px 10px #fff, -34.72959px -196.96154px 20px currentColor, -34.72959px -196.96154px 30px currentColor, -34.72959px -196.96154px 40px currentColor, -34.72959px -196.96154px 55px currentColor, -34.72959px -196.96154px 75px currentColor, 0.00028px -499.99994px 5px #fff, 0.00028px -499.99994px 10px #fff, 0.00028px -499.99994px 20px currentColor, 0.00028px -499.99994px 30px currentColor, 0.00028px -499.99994px 40px currentColor, 0.00028px -499.99994px 55px currentColor, 0.00028px -499.99994px 75px currentColor, 60.77729px -344.68262px 5px #fff, 60.77729px -344.68262px 10px #fff, 60.77729px -344.68262px 20px currentColor, 60.77729px -344.68262px 30px currentColor, 60.77729px -344.68262px 40px currentColor, 60.77729px -344.68262px 55px currentColor, 60.77729px -344.68262px 75px currentColor, 68.40456px -187.93841px 5px #fff, 68.40456px -187.93841px 10px #fff, 68.40456px -187.93841px 20px currentColor, 68.40456px -187.93841px 30px currentColor, 68.40456px -187.93841px 40px currentColor, 68.40456px -187.93841px 55px currentColor, 68.40456px -187.93841px 75px currentColor, 250.00279px -433.01207px 5px #fff, 250.00279px -433.01207px 10px #fff, 250.00279px -433.01207px 20px currentColor, 250.00279px -433.01207px 30px currentColor, 250.00279px -433.01207px 40px currentColor, 250.00279px -433.01207px 55px currentColor, 250.00279px -433.01207px 75px currentColor, 224.97966px -268.11461px 5px #fff, 224.97966px -268.11461px 10px #fff, 224.97966px -268.11461px 20px currentColor, 224.97966px -268.11461px 30px currentColor, 224.97966px -268.11461px 40px currentColor, 224.97966px -268.11461px 55px currentColor, 224.97966px -268.11461px 75px currentColor, 153.21347px -128.55641px 5px #fff, 153.21347px -128.55641px 10px #fff, 153.21347px -128.55641px 20px currentColor, 153.21347px -128.55641px 30px currentColor, 153.21347px -128.55641px 40px currentColor, 153.21347px -128.55641px 55px currentColor, 153.21347px -128.55641px 75px currentColor, 433.03515px -249.99435px 5px #fff, 433.03515px -249.99435px 10px #fff, 433.03515px -249.99435px 20px currentColor, 433.03515px -249.99435px 30px currentColor, 433.03515px -249.99435px 40px currentColor, 433.03515px -249.99435px 55px currentColor, 433.03515px -249.99435px 75px currentColor, 328.92262px -119.69922px 5px #fff, 328.92262px -119.69922px 10px #fff, 328.92262px -119.69922px 20px currentColor, 328.92262px -119.69922px 30px currentColor, 328.92262px -119.69922px 40px currentColor, 328.92262px -119.69922px 55px currentColor, 328.92262px -119.69922px 75px currentColor, 196.99409px -34.72095px 5px #fff, 196.99409px -34.72095px 10px #fff, 196.99409px -34.72095px 20px currentColor, 196.99409px -34.72095px 30px currentColor, 196.99409px -34.72095px 40px currentColor, 196.99409px -34.72095px 55px currentColor, 196.99409px -34.72095px 75px currentColor;*/
    /*opacity: 0;*/
  /*}*/
/*}*/

/*@keyframes bomb-rocket-animate-1 {*/
  /*0% {*/
    /*-webkit-transform: rotate(-10deg) translateY(0) scale(0);*/
            /*transform: rotate(-10deg) translateY(0) scale(0);*/
    /*opacity: 1;*/
    /*box-shadow: none;*/
  /*}*/
  /*0.1% {*/
    /*-webkit-transform: rotate(-10deg) translateY(0) scale(0.1, 0.5);*/
            /*transform: rotate(-10deg) translateY(0) scale(0.1, 0.5);*/
    /*background: -webkit-linear-gradient(top, currentColor 0%, #000000 80%);*/
    /*background: linear-gradient(180deg, currentColor 0%, #000000 80%);*/
    /*box-shadow: none;*/
    /*opacity: 1;*/
  /*}*/
  /*50% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1, 0.5);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1, 0.5);*/
    /*background: -webkit-linear-gradient(top, currentColor 0%, #000000 80%);*/
    /*background: linear-gradient(180deg, currentColor 0%, #000000 80%);*/
    /*box-shadow: none;*/
    /*opacity: 1;*/
  /*}*/
  /*50.1% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor;*/
    /*opacity: 1;*/
  /*}*/
  /*75% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 500px 0px 5px #fff, 500px 0px 10px #fff, 500px 0px 20px currentColor, 500px 0px 30px currentColor, 500px 0px 40px currentColor, 500px 0px 55px currentColor, 500px 0px 75px currentColor, 344.68271px 60.77686px 5px #fff, 344.68271px 60.77686px 10px #fff, 344.68271px 60.77686px 20px currentColor, 344.68271px 60.77686px 30px currentColor, 344.68271px 60.77686px 40px currentColor, 344.68271px 60.77686px 55px currentColor, 344.68271px 60.77686px 75px currentColor, 187.93852px 68.40403px 5px #fff, 187.93852px 68.40403px 10px #fff, 187.93852px 68.40403px 20px currentColor, 187.93852px 68.40403px 30px currentColor, 187.93852px 68.40403px 40px currentColor, 187.93852px 68.40403px 55px currentColor, 187.93852px 68.40403px 75px currentColor, 433.0127px 250px 5px #fff, 433.0127px 250px 10px #fff, 433.0127px 250px 20px currentColor, 433.0127px 250px 30px currentColor, 433.0127px 250px 40px currentColor, 433.0127px 250px 55px currentColor, 433.0127px 250px 75px currentColor, 268.11556px 224.97566px 5px #fff, 268.11556px 224.97566px 10px #fff, 268.11556px 224.97566px 20px currentColor, 268.11556px 224.97566px 30px currentColor, 268.11556px 224.97566px 40px currentColor, 268.11556px 224.97566px 55px currentColor, 268.11556px 224.97566px 75px currentColor, 128.55752px 153.20889px 5px #fff, 128.55752px 153.20889px 10px #fff, 128.55752px 153.20889px 20px currentColor, 128.55752px 153.20889px 30px currentColor, 128.55752px 153.20889px 40px currentColor, 128.55752px 153.20889px 55px currentColor, 128.55752px 153.20889px 75px currentColor, 250px 433.0127px 5px #fff, 250px 433.0127px 10px #fff, 250px 433.0127px 20px currentColor, 250px 433.0127px 30px currentColor, 250px 433.0127px 40px currentColor, 250px 433.0127px 55px currentColor, 250px 433.0127px 75px currentColor, 119.70705px 328.89242px 5px #fff, 119.70705px 328.89242px 10px #fff, 119.70705px 328.89242px 20px currentColor, 119.70705px 328.89242px 30px currentColor, 119.70705px 328.89242px 40px currentColor, 119.70705px 328.89242px 55px currentColor, 119.70705px 328.89242px 75px currentColor, 34.72964px 196.96155px 5px #fff, 34.72964px 196.96155px 10px #fff, 34.72964px 196.96155px 20px currentColor, 34.72964px 196.96155px 30px currentColor, 34.72964px 196.96155px 40px currentColor, 34.72964px 196.96155px 55px currentColor, 34.72964px 196.96155px 75px currentColor, 0px 500px 5px #fff, 0px 500px 10px #fff, 0px 500px 20px currentColor, 0px 500px 30px currentColor, 0px 500px 40px currentColor, 0px 500px 55px currentColor, 0px 500px 75px currentColor, -60.77686px 344.68271px 5px #fff, -60.77686px 344.68271px 10px #fff, -60.77686px 344.68271px 20px currentColor, -60.77686px 344.68271px 30px currentColor, -60.77686px 344.68271px 40px currentColor, -60.77686px 344.68271px 55px currentColor, -60.77686px 344.68271px 75px currentColor, -68.40403px 187.93852px 5px #fff, -68.40403px 187.93852px 10px #fff, -68.40403px 187.93852px 20px currentColor, -68.40403px 187.93852px 30px currentColor, -68.40403px 187.93852px 40px currentColor, -68.40403px 187.93852px 55px currentColor, -68.40403px 187.93852px 75px currentColor, -250px 433.0127px 5px #fff, -250px 433.0127px 10px #fff, -250px 433.0127px 20px currentColor, -250px 433.0127px 30px currentColor, -250px 433.0127px 40px currentColor, -250px 433.0127px 55px currentColor, -250px 433.0127px 75px currentColor, -224.97566px 268.11556px 5px #fff, -224.97566px 268.11556px 10px #fff, -224.97566px 268.11556px 20px currentColor, -224.97566px 268.11556px 30px currentColor, -224.97566px 268.11556px 40px currentColor, -224.97566px 268.11556px 55px currentColor, -224.97566px 268.11556px 75px currentColor, -153.20889px 128.55752px 5px #fff, -153.20889px 128.55752px 10px #fff, -153.20889px 128.55752px 20px currentColor, -153.20889px 128.55752px 30px currentColor, -153.20889px 128.55752px 40px currentColor, -153.20889px 128.55752px 55px currentColor, -153.20889px 128.55752px 75px currentColor, -433.0127px 250px 5px #fff, -433.0127px 250px 10px #fff, -433.0127px 250px 20px currentColor, -433.0127px 250px 30px currentColor, -433.0127px 250px 40px currentColor, -433.0127px 250px 55px currentColor, -433.0127px 250px 75px currentColor, -328.89242px 119.70705px 5px #fff, -328.89242px 119.70705px 10px #fff, -328.89242px 119.70705px 20px currentColor, -328.89242px 119.70705px 30px currentColor, -328.89242px 119.70705px 40px currentColor, -328.89242px 119.70705px 55px currentColor, -328.89242px 119.70705px 75px currentColor, -196.96155px 34.72964px 5px #fff, -196.96155px 34.72964px 10px #fff, -196.96155px 34.72964px 20px currentColor, -196.96155px 34.72964px 30px currentColor, -196.96155px 34.72964px 40px currentColor, -196.96155px 34.72964px 55px currentColor, -196.96155px 34.72964px 75px currentColor, -500px 0px 5px #fff, -500px 0px 10px #fff, -500px 0px 20px currentColor, -500px 0px 30px currentColor, -500px 0px 40px currentColor, -500px 0px 55px currentColor, -500px 0px 75px currentColor, -344.68271px -60.77686px 5px #fff, -344.68271px -60.77686px 10px #fff, -344.68271px -60.77686px 20px currentColor, -344.68271px -60.77686px 30px currentColor, -344.68271px -60.77686px 40px currentColor, -344.68271px -60.77686px 55px currentColor, -344.68271px -60.77686px 75px currentColor, -187.93852px -68.40403px 5px #fff, -187.93852px -68.40403px 10px #fff, -187.93852px -68.40403px 20px currentColor, -187.93852px -68.40403px 30px currentColor, -187.93852px -68.40403px 40px currentColor, -187.93852px -68.40403px 55px currentColor, -187.93852px -68.40403px 75px currentColor, -433.0127px -250px 5px #fff, -433.0127px -250px 10px #fff, -433.0127px -250px 20px currentColor, -433.0127px -250px 30px currentColor, -433.0127px -250px 40px currentColor, -433.0127px -250px 55px currentColor, -433.0127px -250px 75px currentColor, -268.11555px -224.97566px 5px #fff, -268.11555px -224.97566px 10px #fff, -268.11555px -224.97566px 20px currentColor, -268.11555px -224.97566px 30px currentColor, -268.11555px -224.97566px 40px currentColor, -268.11555px -224.97566px 55px currentColor, -268.11555px -224.97566px 75px currentColor, -128.55752px -153.20889px 5px #fff, -128.55752px -153.20889px 10px #fff, -128.55752px -153.20889px 20px currentColor, -128.55752px -153.20889px 30px currentColor, -128.55752px -153.20889px 40px currentColor, -128.55752px -153.20889px 55px currentColor, -128.55752px -153.20889px 75px currentColor, -249.99998px -433.0127px 5px #fff, -249.99998px -433.0127px 10px #fff, -249.99998px -433.0127px 20px currentColor, -249.99998px -433.0127px 30px currentColor, -249.99998px -433.0127px 40px currentColor, -249.99998px -433.0127px 55px currentColor, -249.99998px -433.0127px 75px currentColor, -119.70701px -328.89241px 5px #fff, -119.70701px -328.89241px 10px #fff, -119.70701px -328.89241px 20px currentColor, -119.70701px -328.89241px 30px currentColor, -119.70701px -328.89241px 40px currentColor, -119.70701px -328.89241px 55px currentColor, -119.70701px -328.89241px 75px currentColor, -34.72959px -196.96154px 5px #fff, -34.72959px -196.96154px 10px #fff, -34.72959px -196.96154px 20px currentColor, -34.72959px -196.96154px 30px currentColor, -34.72959px -196.96154px 40px currentColor, -34.72959px -196.96154px 55px currentColor, -34.72959px -196.96154px 75px currentColor, 0.00028px -499.99994px 5px #fff, 0.00028px -499.99994px 10px #fff, 0.00028px -499.99994px 20px currentColor, 0.00028px -499.99994px 30px currentColor, 0.00028px -499.99994px 40px currentColor, 0.00028px -499.99994px 55px currentColor, 0.00028px -499.99994px 75px currentColor, 60.77729px -344.68262px 5px #fff, 60.77729px -344.68262px 10px #fff, 60.77729px -344.68262px 20px currentColor, 60.77729px -344.68262px 30px currentColor, 60.77729px -344.68262px 40px currentColor, 60.77729px -344.68262px 55px currentColor, 60.77729px -344.68262px 75px currentColor, 68.40456px -187.93841px 5px #fff, 68.40456px -187.93841px 10px #fff, 68.40456px -187.93841px 20px currentColor, 68.40456px -187.93841px 30px currentColor, 68.40456px -187.93841px 40px currentColor, 68.40456px -187.93841px 55px currentColor, 68.40456px -187.93841px 75px currentColor, 250.00279px -433.01207px 5px #fff, 250.00279px -433.01207px 10px #fff, 250.00279px -433.01207px 20px currentColor, 250.00279px -433.01207px 30px currentColor, 250.00279px -433.01207px 40px currentColor, 250.00279px -433.01207px 55px currentColor, 250.00279px -433.01207px 75px currentColor, 224.97966px -268.11461px 5px #fff, 224.97966px -268.11461px 10px #fff, 224.97966px -268.11461px 20px currentColor, 224.97966px -268.11461px 30px currentColor, 224.97966px -268.11461px 40px currentColor, 224.97966px -268.11461px 55px currentColor, 224.97966px -268.11461px 75px currentColor, 153.21347px -128.55641px 5px #fff, 153.21347px -128.55641px 10px #fff, 153.21347px -128.55641px 20px currentColor, 153.21347px -128.55641px 30px currentColor, 153.21347px -128.55641px 40px currentColor, 153.21347px -128.55641px 55px currentColor, 153.21347px -128.55641px 75px currentColor, 433.03515px -249.99435px 5px #fff, 433.03515px -249.99435px 10px #fff, 433.03515px -249.99435px 20px currentColor, 433.03515px -249.99435px 30px currentColor, 433.03515px -249.99435px 40px currentColor, 433.03515px -249.99435px 55px currentColor, 433.03515px -249.99435px 75px currentColor, 328.92262px -119.69922px 5px #fff, 328.92262px -119.69922px 10px #fff, 328.92262px -119.69922px 20px currentColor, 328.92262px -119.69922px 30px currentColor, 328.92262px -119.69922px 40px currentColor, 328.92262px -119.69922px 55px currentColor, 328.92262px -119.69922px 75px currentColor, 196.99409px -34.72095px 5px #fff, 196.99409px -34.72095px 10px #fff, 196.99409px -34.72095px 20px currentColor, 196.99409px -34.72095px 30px currentColor, 196.99409px -34.72095px 40px currentColor, 196.99409px -34.72095px 55px currentColor, 196.99409px -34.72095px 75px currentColor;*/
    /*opacity: 1;*/
  /*}*/
  /*100% {*/
    /*-webkit-transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
            /*transform: rotate(-10deg) translateY(-50vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 500px 0px 5px #fff, 500px 0px 10px #fff, 500px 0px 20px currentColor, 500px 0px 30px currentColor, 500px 0px 40px currentColor, 500px 0px 55px currentColor, 500px 0px 75px currentColor, 344.68271px 60.77686px 5px #fff, 344.68271px 60.77686px 10px #fff, 344.68271px 60.77686px 20px currentColor, 344.68271px 60.77686px 30px currentColor, 344.68271px 60.77686px 40px currentColor, 344.68271px 60.77686px 55px currentColor, 344.68271px 60.77686px 75px currentColor, 187.93852px 68.40403px 5px #fff, 187.93852px 68.40403px 10px #fff, 187.93852px 68.40403px 20px currentColor, 187.93852px 68.40403px 30px currentColor, 187.93852px 68.40403px 40px currentColor, 187.93852px 68.40403px 55px currentColor, 187.93852px 68.40403px 75px currentColor, 433.0127px 250px 5px #fff, 433.0127px 250px 10px #fff, 433.0127px 250px 20px currentColor, 433.0127px 250px 30px currentColor, 433.0127px 250px 40px currentColor, 433.0127px 250px 55px currentColor, 433.0127px 250px 75px currentColor, 268.11556px 224.97566px 5px #fff, 268.11556px 224.97566px 10px #fff, 268.11556px 224.97566px 20px currentColor, 268.11556px 224.97566px 30px currentColor, 268.11556px 224.97566px 40px currentColor, 268.11556px 224.97566px 55px currentColor, 268.11556px 224.97566px 75px currentColor, 128.55752px 153.20889px 5px #fff, 128.55752px 153.20889px 10px #fff, 128.55752px 153.20889px 20px currentColor, 128.55752px 153.20889px 30px currentColor, 128.55752px 153.20889px 40px currentColor, 128.55752px 153.20889px 55px currentColor, 128.55752px 153.20889px 75px currentColor, 250px 433.0127px 5px #fff, 250px 433.0127px 10px #fff, 250px 433.0127px 20px currentColor, 250px 433.0127px 30px currentColor, 250px 433.0127px 40px currentColor, 250px 433.0127px 55px currentColor, 250px 433.0127px 75px currentColor, 119.70705px 328.89242px 5px #fff, 119.70705px 328.89242px 10px #fff, 119.70705px 328.89242px 20px currentColor, 119.70705px 328.89242px 30px currentColor, 119.70705px 328.89242px 40px currentColor, 119.70705px 328.89242px 55px currentColor, 119.70705px 328.89242px 75px currentColor, 34.72964px 196.96155px 5px #fff, 34.72964px 196.96155px 10px #fff, 34.72964px 196.96155px 20px currentColor, 34.72964px 196.96155px 30px currentColor, 34.72964px 196.96155px 40px currentColor, 34.72964px 196.96155px 55px currentColor, 34.72964px 196.96155px 75px currentColor, 0px 500px 5px #fff, 0px 500px 10px #fff, 0px 500px 20px currentColor, 0px 500px 30px currentColor, 0px 500px 40px currentColor, 0px 500px 55px currentColor, 0px 500px 75px currentColor, -60.77686px 344.68271px 5px #fff, -60.77686px 344.68271px 10px #fff, -60.77686px 344.68271px 20px currentColor, -60.77686px 344.68271px 30px currentColor, -60.77686px 344.68271px 40px currentColor, -60.77686px 344.68271px 55px currentColor, -60.77686px 344.68271px 75px currentColor, -68.40403px 187.93852px 5px #fff, -68.40403px 187.93852px 10px #fff, -68.40403px 187.93852px 20px currentColor, -68.40403px 187.93852px 30px currentColor, -68.40403px 187.93852px 40px currentColor, -68.40403px 187.93852px 55px currentColor, -68.40403px 187.93852px 75px currentColor, -250px 433.0127px 5px #fff, -250px 433.0127px 10px #fff, -250px 433.0127px 20px currentColor, -250px 433.0127px 30px currentColor, -250px 433.0127px 40px currentColor, -250px 433.0127px 55px currentColor, -250px 433.0127px 75px currentColor, -224.97566px 268.11556px 5px #fff, -224.97566px 268.11556px 10px #fff, -224.97566px 268.11556px 20px currentColor, -224.97566px 268.11556px 30px currentColor, -224.97566px 268.11556px 40px currentColor, -224.97566px 268.11556px 55px currentColor, -224.97566px 268.11556px 75px currentColor, -153.20889px 128.55752px 5px #fff, -153.20889px 128.55752px 10px #fff, -153.20889px 128.55752px 20px currentColor, -153.20889px 128.55752px 30px currentColor, -153.20889px 128.55752px 40px currentColor, -153.20889px 128.55752px 55px currentColor, -153.20889px 128.55752px 75px currentColor, -433.0127px 250px 5px #fff, -433.0127px 250px 10px #fff, -433.0127px 250px 20px currentColor, -433.0127px 250px 30px currentColor, -433.0127px 250px 40px currentColor, -433.0127px 250px 55px currentColor, -433.0127px 250px 75px currentColor, -328.89242px 119.70705px 5px #fff, -328.89242px 119.70705px 10px #fff, -328.89242px 119.70705px 20px currentColor, -328.89242px 119.70705px 30px currentColor, -328.89242px 119.70705px 40px currentColor, -328.89242px 119.70705px 55px currentColor, -328.89242px 119.70705px 75px currentColor, -196.96155px 34.72964px 5px #fff, -196.96155px 34.72964px 10px #fff, -196.96155px 34.72964px 20px currentColor, -196.96155px 34.72964px 30px currentColor, -196.96155px 34.72964px 40px currentColor, -196.96155px 34.72964px 55px currentColor, -196.96155px 34.72964px 75px currentColor, -500px 0px 5px #fff, -500px 0px 10px #fff, -500px 0px 20px currentColor, -500px 0px 30px currentColor, -500px 0px 40px currentColor, -500px 0px 55px currentColor, -500px 0px 75px currentColor, -344.68271px -60.77686px 5px #fff, -344.68271px -60.77686px 10px #fff, -344.68271px -60.77686px 20px currentColor, -344.68271px -60.77686px 30px currentColor, -344.68271px -60.77686px 40px currentColor, -344.68271px -60.77686px 55px currentColor, -344.68271px -60.77686px 75px currentColor, -187.93852px -68.40403px 5px #fff, -187.93852px -68.40403px 10px #fff, -187.93852px -68.40403px 20px currentColor, -187.93852px -68.40403px 30px currentColor, -187.93852px -68.40403px 40px currentColor, -187.93852px -68.40403px 55px currentColor, -187.93852px -68.40403px 75px currentColor, -433.0127px -250px 5px #fff, -433.0127px -250px 10px #fff, -433.0127px -250px 20px currentColor, -433.0127px -250px 30px currentColor, -433.0127px -250px 40px currentColor, -433.0127px -250px 55px currentColor, -433.0127px -250px 75px currentColor, -268.11555px -224.97566px 5px #fff, -268.11555px -224.97566px 10px #fff, -268.11555px -224.97566px 20px currentColor, -268.11555px -224.97566px 30px currentColor, -268.11555px -224.97566px 40px currentColor, -268.11555px -224.97566px 55px currentColor, -268.11555px -224.97566px 75px currentColor, -128.55752px -153.20889px 5px #fff, -128.55752px -153.20889px 10px #fff, -128.55752px -153.20889px 20px currentColor, -128.55752px -153.20889px 30px currentColor, -128.55752px -153.20889px 40px currentColor, -128.55752px -153.20889px 55px currentColor, -128.55752px -153.20889px 75px currentColor, -249.99998px -433.0127px 5px #fff, -249.99998px -433.0127px 10px #fff, -249.99998px -433.0127px 20px currentColor, -249.99998px -433.0127px 30px currentColor, -249.99998px -433.0127px 40px currentColor, -249.99998px -433.0127px 55px currentColor, -249.99998px -433.0127px 75px currentColor, -119.70701px -328.89241px 5px #fff, -119.70701px -328.89241px 10px #fff, -119.70701px -328.89241px 20px currentColor, -119.70701px -328.89241px 30px currentColor, -119.70701px -328.89241px 40px currentColor, -119.70701px -328.89241px 55px currentColor, -119.70701px -328.89241px 75px currentColor, -34.72959px -196.96154px 5px #fff, -34.72959px -196.96154px 10px #fff, -34.72959px -196.96154px 20px currentColor, -34.72959px -196.96154px 30px currentColor, -34.72959px -196.96154px 40px currentColor, -34.72959px -196.96154px 55px currentColor, -34.72959px -196.96154px 75px currentColor, 0.00028px -499.99994px 5px #fff, 0.00028px -499.99994px 10px #fff, 0.00028px -499.99994px 20px currentColor, 0.00028px -499.99994px 30px currentColor, 0.00028px -499.99994px 40px currentColor, 0.00028px -499.99994px 55px currentColor, 0.00028px -499.99994px 75px currentColor, 60.77729px -344.68262px 5px #fff, 60.77729px -344.68262px 10px #fff, 60.77729px -344.68262px 20px currentColor, 60.77729px -344.68262px 30px currentColor, 60.77729px -344.68262px 40px currentColor, 60.77729px -344.68262px 55px currentColor, 60.77729px -344.68262px 75px currentColor, 68.40456px -187.93841px 5px #fff, 68.40456px -187.93841px 10px #fff, 68.40456px -187.93841px 20px currentColor, 68.40456px -187.93841px 30px currentColor, 68.40456px -187.93841px 40px currentColor, 68.40456px -187.93841px 55px currentColor, 68.40456px -187.93841px 75px currentColor, 250.00279px -433.01207px 5px #fff, 250.00279px -433.01207px 10px #fff, 250.00279px -433.01207px 20px currentColor, 250.00279px -433.01207px 30px currentColor, 250.00279px -433.01207px 40px currentColor, 250.00279px -433.01207px 55px currentColor, 250.00279px -433.01207px 75px currentColor, 224.97966px -268.11461px 5px #fff, 224.97966px -268.11461px 10px #fff, 224.97966px -268.11461px 20px currentColor, 224.97966px -268.11461px 30px currentColor, 224.97966px -268.11461px 40px currentColor, 224.97966px -268.11461px 55px currentColor, 224.97966px -268.11461px 75px currentColor, 153.21347px -128.55641px 5px #fff, 153.21347px -128.55641px 10px #fff, 153.21347px -128.55641px 20px currentColor, 153.21347px -128.55641px 30px currentColor, 153.21347px -128.55641px 40px currentColor, 153.21347px -128.55641px 55px currentColor, 153.21347px -128.55641px 75px currentColor, 433.03515px -249.99435px 5px #fff, 433.03515px -249.99435px 10px #fff, 433.03515px -249.99435px 20px currentColor, 433.03515px -249.99435px 30px currentColor, 433.03515px -249.99435px 40px currentColor, 433.03515px -249.99435px 55px currentColor, 433.03515px -249.99435px 75px currentColor, 328.92262px -119.69922px 5px #fff, 328.92262px -119.69922px 10px #fff, 328.92262px -119.69922px 20px currentColor, 328.92262px -119.69922px 30px currentColor, 328.92262px -119.69922px 40px currentColor, 328.92262px -119.69922px 55px currentColor, 328.92262px -119.69922px 75px currentColor, 196.99409px -34.72095px 5px #fff, 196.99409px -34.72095px 10px #fff, 196.99409px -34.72095px 20px currentColor, 196.99409px -34.72095px 30px currentColor, 196.99409px -34.72095px 40px currentColor, 196.99409px -34.72095px 55px currentColor, 196.99409px -34.72095px 75px currentColor;*/
    /*opacity: 0;*/
  /*}*/
/*}*/
/*@-webkit-keyframes bomb-rocket-animate-2 {*/
  /*0% {*/
    /*-webkit-transform: rotate(0deg) translateY(0) scale(0);*/
            /*transform: rotate(0deg) translateY(0) scale(0);*/
    /*opacity: 1;*/
    /*box-shadow: none;*/
  /*}*/
  /*0.1% {*/
    /*-webkit-transform: rotate(0deg) translateY(0) scale(0.1, 0.5);*/
            /*transform: rotate(0deg) translateY(0) scale(0.1, 0.5);*/
    /*background: -webkit-linear-gradient(top, currentColor 0%, #000000 80%);*/
    /*background: linear-gradient(180deg, currentColor 0%, #000000 80%);*/
    /*box-shadow: none;*/
    /*opacity: 1;*/
  /*}*/
  /*50% {*/
    /*-webkit-transform: rotate(0deg) translateY(-60vh) scale(0.1, 0.5);*/
            /*transform: rotate(0deg) translateY(-60vh) scale(0.1, 0.5);*/
    /*background: -webkit-linear-gradient(top, currentColor 0%, #000000 80%);*/
    /*background: linear-gradient(180deg, currentColor 0%, #000000 80%);*/
    /*box-shadow: none;*/
    /*opacity: 1;*/
  /*}*/
  /*50.1% {*/
    /*-webkit-transform: rotate(0deg) translateY(-60vh) scale(0.1);*/
            /*transform: rotate(0deg) translateY(-60vh) scale(0.1);*/
    /*background: transparent;*/
    /*box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor, 0 0 75px currentColor, 0 0 5px #fff, 0 0 10px #fff, 0 0 20px currentColor, 0 0 30px currentColor, 0 0 40px currentColor, 0 0 55px currentColor;*/
/*}*/
</style>
</head>
<body>

<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="bomb-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->
<!--<div class="normal-rocket"></div>-->

<div class="text">Happy New Year</div>

</body>
</html>
