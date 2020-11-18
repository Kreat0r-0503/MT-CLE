<style>
* {
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
}

html, body{
  background-color: #333;
  height: 100%;
  overflow: hidden;
  text-align: center;
}

.header{
width: 100%;
height: 110px;
display: block;
background-color: #FA8D3E;
}

.inner_header{
width: 1200px;
height: 100%;
display: block;
margin: 0 auto;
}

.logo_container{
  height: 100%;
  display: table;
  float: left;
}

.logo_container h1{
  color: white;
  height: 100%;
  display: table-cell;
  vertical-align: middle;
  font-family: 'Montserrat Alternates', sans-serif;
  font-size: 32px;
}

.navigation {
  margin-left: 200px;
  float: right;
  height: 100%;
}

.navigation a {
height: 100%;
display: table;
float: left;
padding: 0 20px;
}

.navigation a:last-child{
  padding-right: 0;

}

.navigation a li{
  display: table-cell;
  vertical-align: middle;
  height: 100%;
  color: white;
  font-family: 'Montserrat Alternates', sans-serif;
  font-size: 16px;
}

.navigation a li:hover {
  color:#000;
}

.svg-wrapper {
  height: 60px;
  margin: 0 auto;
  position: relative;
  top: 50%;
  transform: translateY(100%);
  width: 350px;
}

.shape {
  fill: transparent;
  stroke-dasharray: 100 500;
  stroke-dashoffset: -500;
  stroke-width: 8px;
  stroke-linecap: round;
  stroke: #19f6e8;
}

.text {
  color: #fff;
  font-family: 'Roboto Condensed';
  font-size: 22px;
  letter-spacing: 8px;
  line-height: 32px;
  position: relative;
  top: -48px;
}

@keyframes draw {
0% {
  stroke-dasharray: 140 540;
  stroke-dashoffset: -474;
  stroke-width: 8px;
}
100% {
  stroke-dasharray: 760;
  stroke-dashoffset: 0;
  stroke-width: 2px;
}
}

/*Add transition rotate 360 degrees*/
.svg-wrapper:hover .shape {
  -webkit-animation: 0.5s draw linear forwards;
  animation: 0.5s draw linear forwards;
}

#round-top{
  animation: jump 1s 1s linear infinite alternate;
}

#inner-right, #inner-left{
  animation: flower 1s linear infinite alternate;
  transform-origin: center;
}

@keyframes jump {
from{
  transform: translateY(0px);
}
to {
  transform: translateY(-20px);
}
}

@keyframes flower{
  from{
     transform: scale(1);
  }
  to {
    transform: scale(0.9);
  }
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1>Fl<sup>oo</sup>m</h1>
                <ul class="navigation">
                    <a><li>Shop</li></a>
                    <a><li>Occasion</li></a>
                    <a><li>Same Day Delivery</li></a>
                    <a><li>Get Free Delivery</li></a>
                    <a><li>Merch</li></a>
                    <a><li>Sell on Floom</li></a>
                </ul>
            </div>
        </div>
    </div>     

    <div class="svg-wrapper">
        <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
           <rect class="shape" height="60" width="320" />
        </svg>
        <div class="text">SHOP NOW</div>
      </div>
    <svg width="1900" height="800" viewBox="0 0 1104 561" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="undraw_zoom_in_1txs 1" clip-path="url(#clip0)">
        <path id="square" d="M1104 0H0V560H1104V0Z" fill="url(#paint0_linear)"/>
        <g id="flower-bottom-right">
        <path id="Vector" d="M1023.15 484.744H1021.15V559.155H1023.15V484.744Z" fill="#3F3D56"/>
        <path id="Vector_2" d="M1022.15 495.267C1027.96 495.267 1032.67 490.555 1032.67 484.744C1032.67 478.932 1027.96 474.221 1022.15 474.221C1016.34 474.221 1011.62 478.932 1011.62 484.744C1011.62 490.555 1016.34 495.267 1022.15 495.267Z" fill="#3F3D56"/>
        <path id="Vector_3" d="M1022.15 530.605C1022.15 530.605 1020.64 498.273 989.828 502.031L1022.15 530.605Z" fill="#3F3D56"/>
        </g>
        <g id="flower-bottom">
        <path id="Vector_4" d="M59.4086 523.87C65.4818 546.32 86.2838 560.224 86.2838 560.224C86.2838 560.224 97.2392 537.729 91.166 515.279C85.0928 492.829 64.2909 478.925 64.2909 478.925C64.2909 478.925 53.3355 501.42 59.4086 523.87Z" fill="white"/>
        <path id="Vector_5" d="M68.3327 519.045C84.9976 535.268 87.0331 560.206 87.0331 560.206C87.0331 560.206 62.0495 558.842 45.3846 542.619C28.7198 526.397 26.6843 501.459 26.6843 501.459C26.6843 501.459 51.6679 502.823 68.3327 519.045Z" fill="#3F3D56"/>
        </g>
        <g id="flower">
        <path id="inner-right" d="M607.694 228.177C595.017 275.038 551.597 304.06 551.597 304.06C551.597 304.06 528.73 257.106 541.406 210.245C554.083 163.385 597.503 134.363 597.503 134.363C597.503 134.363 620.371 181.317 607.694 228.177Z" fill="white"/>
        <path id="inner-left" d="M492.372 228.177C505.049 275.038 548.469 304.06 548.469 304.06C548.469 304.06 571.336 257.106 558.66 210.245C545.983 163.385 502.563 134.363 502.563 134.363C502.563 134.363 479.696 181.317 492.372 228.177Z" fill="white"/>
        <path id="left-petal" d="M511 218.107C545.784 251.968 550.033 304.022 550.033 304.022C550.033 304.022 497.884 301.174 463.1 267.312C428.315 233.451 424.066 181.398 424.066 181.398C424.066 181.398 476.215 184.245 511 218.107Z" fill="#3F3D56"/>
        <path id="right-petal" d="M589.067 218.107C554.282 251.968 550.033 304.022 550.033 304.022C550.033 304.022 602.182 301.174 636.966 267.312C671.751 233.451 676 181.398 676 181.398C676 181.398 623.851 184.245 589.067 218.107Z" fill="#3F3D56"/>
        </g>
        <g id="round-side">
        <path id="Vector_10" opacity="0.1" d="M1104 114V400C1066.07 400 1029.7 384.934 1002.88 358.116C976.066 331.299 961 294.926 961 257C961 219.074 976.066 182.701 1002.88 155.884C1029.7 129.066 1066.07 114 1104 114Z" fill="black"/>
        <path id="Vector_11" opacity="0.1" d="M972 262C1032.75 262 1082 212.751 1082 152C1082 91.2487 1032.75 42 972 42C911.249 42 862 91.2487 862 152C862 212.751 911.249 262 972 262Z" fill="black"/>
        <path id="Vector_12" opacity="0.1" d="M875 144C905.928 144 931 118.928 931 88C931 57.0721 905.928 32 875 32C844.072 32 819 57.0721 819 88C819 118.928 844.072 144 875 144Z" fill="black"/>
        <path id="Vector_13" d="M875.31 117.072C869.552 117.072 863.922 115.365 859.134 112.165C854.346 108.966 850.614 104.419 848.41 99.0986C846.207 93.7783 845.63 87.924 846.754 82.2761C847.877 76.6281 850.65 71.4402 854.722 67.3682C858.794 63.2963 863.982 60.5232 869.63 59.3998C875.278 58.2764 881.132 58.853 886.452 61.0567C891.773 63.2604 896.32 66.9923 899.519 71.7804C902.718 76.5685 904.426 82.1977 904.426 87.9563C904.417 95.6757 901.347 103.076 895.889 108.535C890.43 113.993 883.03 117.064 875.31 117.072Z" fill="#3F3D56"/>
        </g>
        <g id="round-top">
        <path id="Vector_14" d="M550.31 127.035C555.876 127.035 560.389 122.523 560.389 116.956C560.389 111.39 555.876 106.878 550.31 106.878C544.744 106.878 540.232 111.39 540.232 116.956C540.232 122.523 544.744 127.035 550.31 127.035Z" fill="#F0F0F0"/>
        <path id="Vector_15" d="M550.31 146.072C544.552 146.072 538.922 144.365 534.134 141.165C529.346 137.966 525.614 133.419 523.41 128.099C521.207 122.778 520.63 116.924 521.754 111.276C522.877 105.628 525.65 100.44 529.722 96.3682C533.794 92.2963 538.982 89.5233 544.63 88.3998C550.278 87.2764 556.132 87.8529 561.452 90.0567C566.773 92.2604 571.32 95.9923 574.519 100.78C577.718 105.568 579.426 111.198 579.426 116.956C579.417 124.676 576.347 132.076 570.889 137.535C565.43 142.993 558.03 146.064 550.31 146.072ZM550.31 90.0801C544.995 90.0801 539.798 91.6563 535.378 94.6095C530.959 97.5628 527.514 101.76 525.48 106.671C523.445 111.582 522.913 116.986 523.95 122.2C524.987 127.413 527.547 132.202 531.306 135.961C535.064 139.719 539.853 142.279 545.067 143.316C550.28 144.353 555.684 143.821 560.595 141.787C565.506 139.753 569.704 136.308 572.657 131.888C575.61 127.468 577.186 122.272 577.186 116.956C577.178 109.831 574.344 102.999 569.306 97.961C564.267 92.9224 557.436 90.0882 550.31 90.0801Z" fill="#2F2E41"/>
        </g>
        </g>
        <defs>
        <linearGradient id="paint0_linear" x1="1293" y1="-29.9999" x2="-140" y2="618.5" gradientUnits="userSpaceOnUse">
        <stop offset="0.317708" stop-color="#9DDBEF" stop-opacity="0.7"/>
        <stop offset="0.604167" stop-color="#FA8D3E"/>
        </linearGradient>
        <clipPath id="clip0">
        <rect width="1366" height="736" fill="white"/>
        </clipPath>
        </defs>
        </svg>
        
</body>
</html>
