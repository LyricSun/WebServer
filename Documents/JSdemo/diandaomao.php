<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @-webkit-keyframes shake {
            50% {
                top: 6px;
            }
        }
        @-moz-keyframes shake {
            50% {
                top: 6px;
            }
        }
        @-o-keyframes shake {
            50% {
                top: 6px;
            }
        }
        @keyframes shake {
            50% {
                top: 6px;
            }
        }
        @-webkit-keyframes tail {
            50% {
                -webkit-transform: rotate(38deg);
                -ms-transform: rotate(38deg);
                transform: rotate(38deg);
            }
        }
        @-moz-keyframes tail {
            50% {
                -webkit-transform: rotate(38deg);
                -ms-transform: rotate(38deg);
                transform: rotate(38deg);
            }
        }
        @-o-keyframes tail {
            50% {
                -webkit-transform: rotate(38deg);
                -ms-transform: rotate(38deg);
                transform: rotate(38deg);
            }
        }
        @keyframes tail {
            50% {
                -webkit-transform: rotate(38deg);
                -ms-transform: rotate(38deg);
                transform: rotate(38deg);
            }
        }
        @-webkit-keyframes track {
            to {
                margin-left: 20px;
            }
        }
        @-moz-keyframes track {
            to {
                margin-left: 20px;
            }
        }
        @-o-keyframes track {
            to {
                margin-left: 20px;
            }
        }
        @keyframes track {
            to {
                margin-left: 20px;
            }
        }
        @-webkit-keyframes eye {
            50% {
                top: 2px;
            }
        }
        @-moz-keyframes eye {
            50% {
                top: 2px;
            }
        }
        @-o-keyframes eye {
            50% {
                top: 2px;
            }
        }
        @keyframes eye {
            50% {
                top: 2px;
            }
        }
        @-webkit-keyframes mustache_l {
            50% {
                -webkit-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
        }
        @-moz-keyframes mustache_l {
            50% {
                -webkit-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
        }
        @-o-keyframes mustache_l {
            50% {
                -webkit-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
        }
        @keyframes mustache_l {
            50% {
                -webkit-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
        }
        @-webkit-keyframes mustache_r {
            0%, 100% {
                -webkit-transform: rotateY(180deg) rotateZ(0);
                -ms-transform: rotateY(180deg) rotateZ(0);
                transform: rotateY(180deg) rotateZ(0);
            }
            50% {
                -webkit-transform: rotateY(180deg) rotateZ(-10deg);
                -ms-transform: rotateY(180deg) rotateZ(-10deg);
                transform: rotateY(180deg) rotateZ(-10deg);
            }
        }
        @-moz-keyframes mustache_r {
            0%, 100% {
                -webkit-transform: rotateY(180deg) rotateZ(0);
                -ms-transform: rotateY(180deg) rotateZ(0);
                transform: rotateY(180deg) rotateZ(0);
            }
            50% {
                -webkit-transform: rotateY(180deg) rotateZ(-10deg);
                -ms-transform: rotateY(180deg) rotateZ(-10deg);
                transform: rotateY(180deg) rotateZ(-10deg);
            }
        }
        @-o-keyframes mustache_r {
            0%, 100% {
                -webkit-transform: rotateY(180deg) rotateZ(0);
                -ms-transform: rotateY(180deg) rotateZ(0);
                transform: rotateY(180deg) rotateZ(0);
            }
            50% {
                -webkit-transform: rotateY(180deg) rotateZ(-10deg);
                -ms-transform: rotateY(180deg) rotateZ(-10deg);
                transform: rotateY(180deg) rotateZ(-10deg);
            }
        }
        @keyframes mustache_r {
            0%, 100% {
                -webkit-transform: rotateY(180deg) rotateZ(0);
                -ms-transform: rotateY(180deg) rotateZ(0);
                transform: rotateY(180deg) rotateZ(0);
            }
            50% {
                -webkit-transform: rotateY(180deg) rotateZ(-10deg);
                -ms-transform: rotateY(180deg) rotateZ(-10deg);
                transform: rotateY(180deg) rotateZ(-10deg);
            }
        }
        @-webkit-keyframes ear_l {
            50% {
                -webkit-transform: rotate(-30deg);
                -ms-transform: rotate(-30deg);
                transform: rotate(-30deg);
            }
        }
        @-moz-keyframes ear_l {
            50% {
                -webkit-transform: rotate(-30deg);
                -ms-transform: rotate(-30deg);
                transform: rotate(-30deg);
            }
        }
        @-o-keyframes ear_l {
            50% {
                -webkit-transform: rotate(-30deg);
                -ms-transform: rotate(-30deg);
                transform: rotate(-30deg);
            }
        }
        @keyframes ear_l {
            50% {
                -webkit-transform: rotate(-30deg);
                -ms-transform: rotate(-30deg);
                transform: rotate(-30deg);
            }
        }
        @-webkit-keyframes ear_r {
            50% {
                -webkit-transform: rotate(30deg);
                -ms-transform: rotate(30deg);
                transform: rotate(30deg);
            }
        }
        @-moz-keyframes ear_r {
            50% {
                -webkit-transform: rotate(30deg);
                -ms-transform: rotate(30deg);
                transform: rotate(30deg);
            }
        }
        @-o-keyframes ear_r {
            50% {
                -webkit-transform: rotate(30deg);
                -ms-transform: rotate(30deg);
                transform: rotate(30deg);
            }
        }
        @keyframes ear_r {
            50% {
                -webkit-transform: rotate(30deg);
                -ms-transform: rotate(30deg);
                transform: rotate(30deg);
            }
        }
        @-webkit-keyframes paw_l {
            50% {
                left: 130px;
                top: 176px;
            }
            70% {
                top: 160px;
            }
        }
        @-moz-keyframes paw_l {
            50% {
                left: 130px;
                top: 176px;
            }
            70% {
                top: 160px;
            }
        }
        @-o-keyframes paw_l {
            50% {
                left: 130px;
                top: 176px;
            }
            70% {
                top: 160px;
            }
        }
        @keyframes paw_l {
            50% {
                left: 130px;
                top: 176px;
            }
            70% {
                top: 160px;
            }
        }
        @-webkit-keyframes paw_r {
            25% {
                top: 160px;
            }
            50% {
                left: 88px;
                top: 176px;
            }
        }
        @-moz-keyframes paw_r {
            25% {
                top: 160px;
            }
            50% {
                left: 88px;
                top: 176px;
            }
        }
        @-o-keyframes paw_r {
            25% {
                top: 160px;
            }
            50% {
                left: 88px;
                top: 176px;
            }
        }
        @keyframes paw_r {
            25% {
                top: 160px;
            }
            50% {
                left: 88px;
                top: 176px;
            }
        }
        body {
            margin: 0;
            overflow: hidden;
            background: #ff9a2e;
        }
        body .cat {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 188px;
            height: 260px;
            margin-left: -99px;
            margin-top: -130px;
            color: #000;
        }
        body .cat .paw {
            position: absolute;
            top: 176px;
            left: 88px;
            width: 20px;
            height: 80px;
            background: currentcolor;
            border-radius: 20px / 0 0 80px 40px;
            -webkit-transform: rotate(10deg);
            -ms-transform: rotate(10deg);
            transform: rotate(10deg);
            -webkit-animation: paw_l 0.45s infinite linear;
            -moz-animation: paw_l 0.45s infinite linear;
            -o-animation: paw_l 0.45s infinite linear;
            animation: paw_l 0.45s infinite linear;
        }
        body .cat .paw:after {
            position: absolute;
            content: '';
            bottom: -5px;
            left: -4px;
            width: 20px;
            height: 26px;
            background: currentcolor;
            border-radius: 50%;
            -webkit-transform: rotate(24deg);
            -ms-transform: rotate(24deg);
            transform: rotate(24deg);
        }
        body .cat .paw:nth-child(2) {
            left: 130px;
            -webkit-animation: paw_r 0.45s infinite linear;
            -moz-animation: paw_r 0.45s infinite linear;
            -o-animation: paw_r 0.45s infinite linear;
            animation: paw_r 0.45s infinite linear;
        }
        body .cat .shake {
            position: absolute;
            width: 100%;
            top: 0;
            -webkit-animation: shake 0.45s infinite linear;
            -moz-animation: shake 0.45s infinite linear;
            -o-animation: shake 0.45s infinite linear;
            animation: shake 0.45s infinite linear;
        }
        body .cat:before {
            position: absolute;
            content: '';
            top: 100%;
            left: 50%;
            width: 130px;
            height: 30px;
            margin-left: -50px;
            margin-top: -20px;
            background: #616161;
            opacity: .4;
            border-radius: 50%;
        }
        body .cat:after {
            position: absolute;
            content: '';
            top: 100%;
            left: 100%;
            width: 15px;
            height: 10px;
            margin-left: -30px;
            margin-top: -10px;
            background: #616161;
            opacity: .3;
            border-radius: 50%;
            box-shadow: 50px 0 #616161, 100px 0 #616161, 150px 0 #616161, 200px 0 #616161, 250px 0 #616161, 300px 0 #616161;
            -webkit-animation: track 0.225s infinite linear;
            -moz-animation: track 0.225s infinite linear;
            -o-animation: track 0.225s infinite linear;
            animation: track 0.225s infinite linear;
        }
        body .cat .tail {
            position: absolute;
            content: '';
            top: 0;
            right: -4px;
            width: 160px;
            height: 150px;
            border: 20px solid;
            border-color: currentcolor transparent  transparent currentcolor;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 120px / 106px 120px 0 120px;
            box-sizing: border-box;
            -webkit-animation: tail 0.45s infinite linear;
            -moz-animation: tail 0.45s infinite linear;
            -o-animation: tail 0.45s infinite linear;
            animation: tail 0.45s infinite linear;
        }
        body .cat .tail:after {
            position: absolute;
            content: '';
            width: 20px;
            height: 20px;
            background: currentcolor;
            border-radius: 50%;
            bottom: 0;
            box-shadow: 2px 4px   currentcolor,  2px 7px   currentcolor, 2px 10px  currentcolor, 1px 14px  currentcolor, -1px 18px  currentcolor, -5px 22px  currentcolor, -10px 25px currentcolor, -15px 28px currentcolor, -20px 30px currentcolor;
        }
        body .cat .main {
            position: absolute;
            top: 14px;
            right: 0;
            width: 144px;
            height: 216px;
            color: currentcolor;
        }
        body .cat .main .head {
            position: absolute;
            bottom: -10px;
            left: 20px;
            width: 104px;
            height: 180px;
            background: currentcolor;
            border-radius: 55px / 100px 100px 65px 65px;
            -webkit-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            transform: rotate(40deg);
        }
        body .cat .main .body {
            position: absolute;
            right: 0;
            width: 130px;
            height: 180px;
            background: currentcolor;
            border-radius: 65px / 70px 70px 100px 100px;
        }
        body .cat .main .body .leg {
            position: absolute;
            right: -10px;
            top: 20px;
            width: 50px;
            height: 116px;
            background: currentcolor;
            border-radius: 25px / 0 60px 50px 0;
        }
        body .cat .main .body .leg:before {
            position: absolute;
            content: '';
            bottom: -4px;
            right: 0;
            width: 20px;
            height: 40px;
            border: 3px solid transparent;
            border-radius: 50%;
            border-left-color: #616161;
            -webkit-transform: rotate(6deg);
            -ms-transform: rotate(6deg);
            transform: rotate(6deg);
        }
        body .cat .main .body .leg:after {
            position: absolute;
            content: '';
            left: 3px;
            bottom: 35px;
            width: 76px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-bottom-color: #616161;
            -webkit-transform: rotate(65deg);
            -ms-transform: rotate(65deg);
            transform: rotate(65deg);
        }
        body .cat .main .face {
            position: absolute;
            bottom: 0;
            width: 76px;
            height: 80px;
        }
        body .cat .main .face .nose {
            position: absolute;
            bottom: 8px;
            left: 50%;
            width: 18px;
            height: 9px;
            margin-left: -10px;
            background: #9c1b4d;
            border-radius: 20px / 10px 10px 20px 20px;
        }
        body .cat .main .face .mustache_cont {
            position: absolute;
            bottom: 5px;
            width: 20px;
            height: 10px;
            -webkit-animation: mustache_l 0.45s infinite linear;
            -moz-animation: mustache_l 0.45s infinite linear;
            -o-animation: mustache_l 0.45s infinite linear;
            animation: mustache_l 0.45s infinite linear;
        }
        body .cat .main .face .mustache_cont:nth-child(2) {
            right: 0;
            -webkit-animation: mustache_r 0.45s infinite linear;
            -moz-animation: mustache_r 0.45s infinite linear;
            -o-animation: mustache_r 0.45s infinite linear;
            animation: mustache_r 0.45s infinite linear;
        }
        body .cat .main .face .mustache {
            position: absolute;
            top: 0;
            width: 100%;
            border: 1px solid #616161;
            transform-origin: 100% 0;
            -webkit-transform: rotate(-10deg);
            -ms-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }
        body .cat .main .face .mustache:last-child {
            top: 6px;
            -webkit-transform: rotate(-20deg);
            -ms-transform: rotate(-20deg);
            transform: rotate(-20deg);
        }
        body .cat .main .face .eye {
            position: absolute;
            top: 28px;
            left: -8px;
            width: 30px;
            height: 30px;
            background: #fff;
            border: 3px solid #000;
            border-radius: 50%;
            box-sizing: border-box;
        }
        body .cat .main .face .eye:nth-child(5) {
            top: 26px;
            left: 36px;
        }
        body .cat .main .face .eye:after {
            position: absolute;
            content: '';
            width: 10px;
            height: 10px;
            right: 1px;
            top: 4px;
            background: #000;
            border-radius: 50%;
            -webkit-animation: eye 0.45s infinite linear;
            -moz-animation: eye 0.45s infinite linear;
            -o-animation: eye 0.45s infinite linear;
            animation: eye 0.45s infinite linear;
        }
        body .cat .main .face .brow_cont, body .cat .main .face .brow_cont {
            position: absolute;
            top: 14px;
            left: 10px;
            width: 10px;
            height: 10px;
        }
        body .cat .main .face .brow_cont:nth-child(7), body .cat .main .face .brow_cont:nth-child(7) {
            -webkit-transform: rotateY(180deg) rotateZ(0);
            -ms-transform: rotateY(180deg) rotateZ(0);
            transform: rotateY(180deg) rotateZ(0);
            left: 38px;
        }
        body .cat .main .face .brow {
            position: absolute;
            top: 20%;
            height: 60%;
            border: 1px solid #616161;
            transform-origin: 100% 0;
            -webkit-transform: rotate(10deg);
            -ms-transform: rotate(10deg);
            transform: rotate(10deg);
        }
        body .cat .main .face .brow:last-child {
            top: 0;
            height: 100%;
            left: 6px;
            -webkit-transform: rotate(3deg);
            -ms-transform: rotate(3deg);
            transform: rotate(3deg);
        }
        body .cat .main .face .ear_l {
            position: absolute;
            top: -17px;
            width: 20px;
            height: 30px;
            background: currentcolor;
            border-radius: 20px / 55px 55px 0 0;
            transform-origin: 50% 100%;
            overflow: hidden;
            -webkit-transform: rotate(-20deg);
            -ms-transform: rotate(-20deg);
            transform: rotate(-20deg);
            -webkit-animation: ear_l 0.45s infinite linear;
            -moz-animation: ear_l 0.45s infinite linear;
            -o-animation: ear_l 0.45s infinite linear;
            animation: ear_l 0.45s infinite linear;
        }
        body .cat .main .face .ear_l .inner {
            position: absolute;
            top: 5px;
            left: 50%;
            width: 6px;
            height: 14px;
            margin-left: -4px;
            background: #616161;
            border-radius: 7px / 20px 20px 0 0;
        }
        body .cat .main .face .ear_r {
            position: absolute;
            right: 0;
            margin-top: -22px;
            width: 36px;
            height: 30px;
            transform-origin: 50% 100%;
            overflow: hidden;
            -webkit-transform: rotate(20deg);
            -ms-transform: rotate(20deg);
            transform: rotate(20deg);
            -webkit-animation: ear_r 0.45s infinite linear;
            -moz-animation: ear_r 0.45s infinite linear;
            -o-animation: ear_r 0.45s infinite linear;
            animation: ear_r 0.45s infinite linear;
        }
        body .cat .main .face .ear_r .outer {
            position: absolute;
            width: 30px;
            height: 200%;
            border: 3px solid #616161;
            border-radius: 20px / 55px 55px 0 0;
        }
        body .cat .main .face .ear_r .inner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 12px;
            height: 26px;
            margin-left: -6px;
            background: #616161;
            border-radius: 50%;
        }

    </style>
</head>
<body>
<div class="cat">
    <div class="paw"></div>
    <div class="paw"></div>
    <div class="shake">
        <div class="tail"></div>
        <div class="main">
            <div class="head"></div>
            <div class="body">
                <div class="leg"></div>
            </div>
            <div class="face">
                <div class="mustache_cont">
                    <div class="mustache"></div>
                    <div class="mustache"></div>
                </div>
                <div class="mustache_cont">
                    <div class="mustache"></div>
                    <div class="mustache"></div>
                </div>
                <div class="nose"></div>
                <div class="eye"></div>
                <div class="eye"></div>
                <div class="brow_cont">
                    <div class="brow"></div>
                    <div class="brow"></div>
                </div>
                <div class="brow_cont">
                    <div class="brow"></div>
                    <div class="brow">     </div>
                </div>
                <div class="ear_l">
                    <div class="inner"></div>
                </div>
                <div class="ear_r">
                    <div class="outer"></div>
                    <div class="inner"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>