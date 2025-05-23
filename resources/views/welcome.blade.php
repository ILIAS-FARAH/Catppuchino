<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cat login</title>
  <link rel="stylesheet" href="./style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #e6dcdb;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .loading-cat {
      position: relative;
      display: inline-block;
      width: 480px;
      height: 360px;
      animation: 2.74s linear infinite loading-cat;
    }

    .loading-cat .head, .loading-cat .foot, .loading-cat .body {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      margin: auto;
      border-radius: 50%;
      width: 240px;
      height: 240px;
    }

    .loading-cat .body {
      background-image: radial-gradient(transparent 0%,
        transparent 35%, #383c4b 35%,
        #383c4b 39%, #eda65d 39%,
        #eda65d 46%, #f2c089 46%,
        #f2c089 60%, #eda65d 60%,
        #eda65d 67%, #383c4b 67%,
        #383c4b 100%);
    }

    .loading-cat .head:before, .loading-cat .foot:before {
      background-image: radial-gradient(transparent 0%,
      transparent 35%, #383c4b 35%, #383c4b 39%,
      #eda65d 39%, #eda65d 67%, #383c4b 67%,
      #383c4b 100%);
    }

    .loading-cat .head:before {
      content: "";
      width: 100%;
      height: 100%;
      position: absolute;
      border-radius: 50%;
      clip-path: polygon(100% 20%, 50% 50%, 70% -10%);
      -webkit-clip-path: polygon(100% 20%, 50% 50%, 70% -10%);
    }

    .loading-cat .head:after {
      content: "";
      width: 66px;
      height: 40px;
      position: absolute;
      top: 13px;
      right: 63px;
      background-image:
      linear-gradient(#e6dcdb 65%, transparent 65%),
      radial-gradient(#e6dcdb 51%, #383c4b 55%,
        #383c4b 68%, transparent 70%);
      transform: rotate(-66deg);
    }

    .loading-cat .head .face {
      width: 80px;
      height: 60px;
      left: 145px;
      top: 29px;
      position: absolute;
      transform: rotate(-47deg);
      background: radial-gradient(circle, #f2c089 0%,
        #f2c089 23%, transparent 23%) -3px 17px no-repeat,
        radial-gradient(circle, #383c4b 0%, #383c4b 6%,
        transparent 6%) 12px -12px no-repeat,
        radial-gradient(circle, #383c4b 0%, #383c4b 6%, transparent 6%)
        -12px -12px no-repeat, radial-gradient(#eda65d 0%, #eda65d 15%,
        transparent 15%) 0 -11px no-repeat,
        radial-gradient(circle, transparent 5%,
        #383c4b 5%, #383c4b 10%, transparent 10%)
        -3px -5px no-repeat,
        radial-gradient(circle, transparent 5%,
        #383c4b 5%, #383c4b 10%, transparent 10%)
        3px -5px no-repeat,
        radial-gradient(circle, #eda65d 45%, transparent 45%)
        0 -3px, linear-gradient(transparent 35%, #383c4b 35%,
        #383c4b 41%, transparent 41%, transparent 44%,
        #383c4b 44%, #383c4b 50%, transparent 50%,
        transparent 53%, #383c4b 53%, #383c4b 59%,
        transparent 59%);
    }

    .loading-cat .foot:before, .loading-cat .foot:after {
      content: "";
      width: 100%;
      height: 100%;
      position: absolute;
    }

    .loading-cat .foot:before {
      border-radius: 50%;
      clip-path: polygon(50% 50%, 0% 50%, 0% 25%);
      -webkit-clip-path: polygon(50% 50%, 0% 50%, 0% 25%);
    }

    .loading-cat .foot .tummy-end {
      width: 24px;
      height: 24px;
      position: absolute;
      border-radius: 50%;
      background-color: #f2c089;
      left: 19px;
      top: 105px;
    }

    .loading-cat .foot .bottom {
      width: 48px;
      height: 15px;
      position: absolute;
      top: 78px;
      left: 12px;
      border: 0 solid #383c4b;
      border-top-width: 6.5px;
      border-radius: 50%;
      transform: rotate(21deg);
      background: #eda65d;
    }

    .loading-cat .hands, .loading-cat .legs, .loading-cat .foot:after {
      width: 10px;
      height: 25px;
      position: absolute;
      border: 6.5px solid #383c4b;
      background-color: #eda65d;
    }

    .loading-cat .hands {
      border-top: 0;
      border-radius: 0 0 13px 13px;
    }

    .loading-cat .hands.left {
      top: 144px;
      right: 161px;
      transform: rotate(-20deg);
    }

    .loading-cat .hands.right {
      top: 123px;
      right: 128px;
      transform: rotate(-25deg);
    }

    .loading-cat .legs {
      border-bottom: 0;
      border-radius: 13px 13px 0 0;
    }

    .loading-cat .legs.left {
      top: 65px;
      left: 49px;
      transform: rotate(25deg);
    }

    .loading-cat .legs.right {
      top: 53px;
      left: 12px;
      transform: rotate(22deg);
    }

    .loading-cat .foot:after {
      width: 8px;
      height: 40px;
      top: 42px;
      left: 36px;
      z-index: -1;
      transform: rotate(25deg);
      background-color: #c6823b;
      border-bottom: 0;
      border-radius: 12px 12px 0 0;
    }

    @keyframes body {
      0% {
        clip-path: polygon(50% 50%, 0% 50%, 0% 100%, 100% 100%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 0% 50%, 0% 100%, 100% 100%, 100% 20%);
      }
      10% {
        clip-path: polygon(50% 50%, 30% 120%, 50% 100%, 100% 100%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 30% 120%, 50% 100%, 100% 100%, 100% 20%);
      }
      20% {
        clip-path: polygon(50% 50%, 100% 90%, 120% 90%, 100% 100%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 100% 90%, 120% 90%, 100% 100%, 100% 20%);
      }
      40% {
        clip-path: polygon(50% 50%, 100% 45%, 120% 45%, 120% 50%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 100% 45%, 120% 45%, 120% 50%, 100% 20%);
      }
      50% {
        clip-path: polygon(50% 50%, 100% 45%, 120% 45%, 120% 50%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 100% 45%, 120% 45%, 120% 50%, 100% 20%);
      }
      65% {
        clip-path: polygon(50% 50%, 100% 65%, 120% 65%, 120% 50%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 100% 65%, 120% 65%, 120% 50%, 100% 20%);
      }
      80% {
        clip-path: polygon(50% 50%, 75% 130%, 120% 65%, 120% 50%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 75% 130%, 120% 65%, 120% 50%, 100% 20%);
      }
      90% {
        clip-path: polygon(50% 50%, -20% 110%, 50% 120%, 100% 100%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, -20% 110%, 50% 120%, 100% 100%, 100% 20%);
      }
      100% {
        clip-path: polygon(50% 50%, 0% 50%, 0% 100%, 100% 100%, 100% 20%);
        -webkit-clip-path: polygon(50% 50%, 0% 50%, 0% 100%, 100% 100%, 100% 20%);
      }
    }

    @keyframes loading-cat {
      0% {
        transform: rotate(0deg);
      }
      10% {
        transform: rotate(-80deg);
      }
      20% {
        transform: rotate(-180deg);
      }
      40% {
        transform: rotate(-245deg);
      }
      50% {
        transform: rotate(-250deg);
      }
      68% {
        transform: rotate(-300deg);
      }
      90% {
        transform: rotate(-560deg);
      }
      100% {
        transform: rotate(-720deg);
      }
    }

    @keyframes foot {
      0% {
        transform: rotate(-10deg);
      }
      10% {
        transform: rotate(-100deg);
      }
      20% {
        transform: rotate(-145deg);
      }
      35% {
        transform: rotate(-190deg);
      }
      50% {
        transform: rotate(-195deg);
      }
      70% {
        transform: rotate(-165deg);
      }
      100% {
        transform: rotate(-10deg);
      }
    }

    .loading-cat .body {
      animation: 2.74s linear infinite body;
    }

    .loading-cat .foot {
      animation: 2.74s linear infinite foot;
    }

    /* Loading Text Animation */
    .loading-text {
      position: absolute;
      bottom: 20px; /* Position at the bottom of the loading container */
      left: 50%;
      transform: translateX(-50%);
      font-size: 1.5rem;
      color: #383c4b;
    }

    .loading-text::after {
      content: '...';
      display: inline-block;
      width: 1em;
      animation: dots 1.5s infinite steps(3, end);
    }

    @keyframes dots {
      0%, 20% {
        content: '.';
      }
      40% {
        content: '..';
      }
      60%, 100% {
        content: '...';
      }
    }
  </style>
  <script>
    // Wait for 4 seconds (4000 milliseconds) and then redirect to the home page
    setTimeout(function() {
      window.location.href = "{{ route('main') }}"; // Replace 'home' with your actual route name
    }, 4000);
  </script>
</head>
<body>
  <div class="loading-cat">
    <div class="body"></div>
    <div class="head">
      <div class="face"></div>
    </div>
    <div class="foot">
      <div class="tummy-end"></div>
      <div class="bottom"></div>
      <div class="legs left"></div>
      <div class="legs right"></div>
    </div>
    <div class="hands left"></div>
    <div class="hands right"></div>
  </div>
  <div class="loading-text">Loading</div>
</body>
</html>
