<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #1e0059;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            -webkit-perspective: 5em;
            perspective: 5em;
        }

        body::after {
            background-color: inherit;
            border-radius: 50%;
            box-shadow: 0 0 2em 2em #1e0059;
            content: "";
            height: 1em;
            left: 50%;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 1em;
        }

        .cylinder {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: tunnel;
            animation-name: tunnel;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            left: 50%;
            position: absolute;
            top: 50%;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: rotatex(90deg) rotatey(0) translatey(-25em);
            transform: rotatex(90deg) rotatey(0) translatey(-25em);
        }
        .cylinder:nth-child(1) {
            -webkit-animation-duration: 8s;
            animation-duration: 8s;
        }
        .cylinder:nth-child(2) {
            -webkit-animation-duration: 4s;
            animation-duration: 4s;
        }

        .side {
            background-image: url(http://www.jq22.com/tp/24ac8094-7dc0-40c4-9956-f69c5fb45896.jpg);
            background-size: 32em 10em;
            -webkit-filter: hue-rotate(-11.25deg);
            filter: hue-rotate(-11.25deg);
            height: 40em;
            position: absolute;
            -webkit-transform-origin: 0;
            transform-origin: 0;
            width: 2em;
        }
        .side:nth-child(1) {
            background-position: -2em;
            -webkit-transform: rotatey(22.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(22.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(2) {
            background-position: -4em;
            -webkit-transform: rotatey(45deg) translate3d(-50%, 0, 5em);
            transform: rotatey(45deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(3) {
            background-position: -6em;
            -webkit-transform: rotatey(67.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(67.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(4) {
            background-position: -8em;
            -webkit-transform: rotatey(90deg) translate3d(-50%, 0, 5em);
            transform: rotatey(90deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(5) {
            background-position: -10em;
            -webkit-transform: rotatey(112.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(112.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(6) {
            background-position: -12em;
            -webkit-transform: rotatey(135deg) translate3d(-50%, 0, 5em);
            transform: rotatey(135deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(7) {
            background-position: -14em;
            -webkit-transform: rotatey(157.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(157.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(8) {
            background-position: -16em;
            -webkit-transform: rotatey(180deg) translate3d(-50%, 0, 5em);
            transform: rotatey(180deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(9) {
            background-position: -18em;
            -webkit-transform: rotatey(202.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(202.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(10) {
            background-position: -20em;
            -webkit-transform: rotatey(225deg) translate3d(-50%, 0, 5em);
            transform: rotatey(225deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(11) {
            background-position: -22em;
            -webkit-transform: rotatey(247.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(247.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(12) {
            background-position: -24em;
            -webkit-transform: rotatey(270deg) translate3d(-50%, 0, 5em);
            transform: rotatey(270deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(13) {
            background-position: -26em;
            -webkit-transform: rotatey(292.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(292.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(14) {
            background-position: -28em;
            -webkit-transform: rotatey(315deg) translate3d(-50%, 0, 5em);
            transform: rotatey(315deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(15) {
            background-position: -30em;
            -webkit-transform: rotatey(337.5deg) translate3d(-50%, 0, 5em);
            transform: rotatey(337.5deg) translate3d(-50%, 0, 5em);
        }
        .side:nth-child(16) {
            background-position: -32em;
            -webkit-transform: rotatey(360deg) translate3d(-50%, 0, 5em);
            transform: rotatey(360deg) translate3d(-50%, 0, 5em);
        }
        .cylinder:nth-child(2) .side {
            opacity: 0.625;
        }

        @-webkit-keyframes tunnel {
            100% {
                -webkit-transform: rotatex(90deg) rotatey(360deg) translatey(-15em);
                transform: rotatex(90deg) rotatey(360deg) translatey(-15em);
            }
        }

        @keyframes tunnel {
            100% {
                -webkit-transform: rotatex(90deg) rotatey(360deg) translatey(-15em);
                transform: rotatex(90deg) rotatey(360deg) translatey(-15em);
            }
        }

    </style>
</head>
<body>
<div class="cylinder">
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
</div><div class="cylinder">
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
    <div class="side"></div>
</div>
</body>
</html>