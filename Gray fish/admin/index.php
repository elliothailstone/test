<?php echo'<title>Admin Login</title>';echo' <link rel="stylesheet" type="text/css" href="./style.css"> <style>body{padding-top:40px;padding-bottom:40px;background-color:#022e8a;overflow-x:hidden}h1{text-align:center;color:#fff}#background-wrap{bottom:0;left:0;position:fixed;right:0;top:0;z-index:-1}@-webkit-keyframes animateBubble{0%{margin-top:1000px}100%{margin-top:-100%}}@-moz-keyframes animateBubble{0%{margin-top:1000px}100%{margin-top:-100%}}@keyframes animateBubble{0%{margin-top:1000px}100%{margin-top:-100%}}@-webkit-keyframes sideWays{0%{margin-left:0}100%{margin-left:50px}}@-moz-keyframes sideWays{0%{margin-left:0}100%{margin-left:50px}}@keyframes sideWays{0%{margin-left:0}100%{margin-left:50px}}.x1{-webkit-animation:animateBubble 25s linear infinite,sideWays 2s ease-in-out infinite alternate;-moz-animation:animateBubble 25s linear infinite,sideWays 2s ease-in-out infinite alternate;animation:animateBubble 4s linear infinite,sideWays 2s ease-in-out infinite alternate;left:-5%;top:5%;-webkit-transform:scale(0.6);-moz-transform:scale(0.6);transform:scale(0.6)}.x2{-webkit-animation:animateBubble 20s linear infinite,sideWays 4s ease-in-out infinite alternate;-moz-animation:animateBubble 20s linear infinite,sideWays 4s ease-in-out infinite alternate;animation:animateBubble 8s linear infinite,sideWays 4s ease-in-out infinite alternate;left:5%;top:80%;-webkit-transform:scale(0.4);-moz-transform:scale(0.4);transform:scale(0.4)}.x3{-webkit-animation:animateBubble 28s linear infinite,sideWays 2s ease-in-out infinite alternate;-moz-animation:animateBubble 28s linear infinite,sideWays 2s ease-in-out infinite alternate;animation:animateBubble 5s linear infinite,sideWays 2s ease-in-out infinite alternate;left:10%;top:40%;-webkit-transform:scale(0.7);-moz-transform:scale(0.7);transform:scale(0.7)}.x4{-webkit-animation:animateBubble 22s linear infinite,sideWays 3s ease-in-out infinite alternate;-moz-animation:animateBubble 22s linear infinite,sideWays 3s ease-in-out infinite alternate;animation:animateBubble 6s linear infinite,sideWays 3s ease-in-out infinite alternate;left:20%;top:0;-webkit-transform:scale(0.3);-moz-transform:scale(0.3);transform:scale(0.3)}.x5{-webkit-animation:animateBubble 29s linear infinite,sideWays 4s ease-in-out infinite alternate;-moz-animation:animateBubble 29s linear infinite,sideWays 4s ease-in-out infinite alternate;animation:animateBubble 7s linear infinite,sideWays 4s ease-in-out infinite alternate;left:30%;top:50%;-webkit-transform:scale(0.5);-moz-transform:scale(0.5);transform:scale(0.5)}.x6{-webkit-animation:animateBubble 21s linear infinite,sideWays 2s ease-in-out infinite alternate;-moz-animation:animateBubble 21s linear infinite,sideWays 2s ease-in-out infinite alternate;animation:animateBubble 8s linear infinite,sideWays 2s ease-in-out infinite alternate;left:50%;top:0;-webkit-transform:scale(0.8);-moz-transform:scale(0.8);transform:scale(0.8)}.x7{-webkit-animation:animateBubble 20s linear infinite,sideWays 2s ease-in-out infinite alternate;-moz-animation:animateBubble 20s linear infinite,sideWays 2s ease-in-out infinite alternate;animation:animateBubble 9s linear infinite,sideWays 2s ease-in-out infinite alternate;left:65%;top:70%;-webkit-transform:scale(0.4);-moz-transform:scale(0.4);transform:scale(0.4)}.x8{-webkit-animation:animateBubble 22s linear infinite,sideWays 3s ease-in-out infinite alternate;-moz-animation:animateBubble 22s linear infinite,sideWays 3s ease-in-out infinite alternate;animation:animateBubble 10s linear infinite,sideWays 3s ease-in-out infinite alternate;left:80%;top:10%;-webkit-transform:scale(0.3);-moz-transform:scale(0.3);transform:scale(0.3)}.x9{-webkit-animation:animateBubble 29s linear infinite,sideWays 4s ease-in-out infinite alternate;-moz-animation:animateBubble 29s linear infinite,sideWays 4s ease-in-out infinite alternate;animation:animateBubble 11s linear infinite,sideWays 4s ease-in-out infinite alternate;left:90%;top:50%;-webkit-transform:scale(0.6);-moz-transform:scale(0.6);transform:scale(0.6)}.x10{-webkit-animation:animateBubble 26s linear infinite,sideWays 2s ease-in-out infinite alternate;-moz-animation:animateBubble 26s linear infinite,sideWays 2s ease-in-out infinite alternate;animation:animateBubble 12s linear infinite,sideWays 2s ease-in-out infinite alternate;left:80%;top:80%;-webkit-transform:scale(0.3);-moz-transform:scale(0.3);transform:scale(0.3)}.bubble{-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;-webkit-box-shadow:0 20px 30px rgba(0,0,0,0.2),inset 0 10px 30px 5px rgba(255,255,255,1);-moz-box-shadow:0 20px 30px rgba(0,0,0,0.2),inset 0 10px 30px 5px rgba(255,255,255,1);box-shadow:0 20px 30px rgba(0,0,0,0.2),inset 0 10px 30px 5px rgba(255,255,255,1);height:200px;position:absolute;width:200px}.bubble:after{background:-moz-radial-gradient(center,ellipse cover,rgba(255,255,255,0.5) 0,rgba(255,255,255,0) 70%);background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(255,255,255,0.5)),color-stop(70%,rgba(255,255,255,0)));background:-webkit-radial-gradient(center,ellipse cover,rgba(255,255,255,0.5) 0,rgba(255,255,255,0) 70%);background:-o-radial-gradient(center,ellipse cover,rgba(255,255,255,0.5) 0,rgba(255,255,255,0) 70%);background:-ms-radial-gradient(center,ellipse cover,rgba(255,255,255,0.5) 0,rgba(255,255,255,0) 70%);background:radial-gradient(ellipse at center,rgba(255,255,255,0.5) 0,rgba(255,255,255,0) 70%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#80ffffff,endColorstr=#00ffffff,GradientType=1);-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;-webkit-box-shadow:inset 0 20px 30px rgba(255,255,255,0.3);-moz-box-shadow:inset 0 20px 30px rgba(255,255,255,0.3);box-shadow:inset 0 20px 30px rgba(255,255,255,0.3);content:"";height:180px;left:10px;position:absolute;width:180px}</style><body><div id=background-wrap><div class="bubble x1"></div><div class="bubble x2"></div><div class="bubble x3"></div><div class="bubble x4"></div><div class="bubble x5"></div><div class="bubble x6"></div><div class="bubble x7"></div><div class="bubble x8"></div><div class="bubble x9"></div><div class="bubble x10"></div></div><center><h1>Gray Fish Admin Panel</h1><br><img src="data:image/png;base64,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" style=width:200px></center><br><div class=container><form class=form-signin role=form action=dashboard.php method=post><h4><center><font style=color:white><b>Note:</b> Admin Panel accept only correct<br> username and password.</font></center></h4><center><input size=30px type=text class=form-control name=username placeholder=username required autofocus></center><center><input size=30px type=password class=form-control name=password placeholder=password required autofocus></center><br><center><button style="color:#000;background-color:#D9D9D9;border:7px solid #000;width:120px;height:50px" type=submit name=login><b>Login</b></button><br><a href=https://github.com/graysuit/grayfish#-gray-fish-admin-panel-default-user--pass target=_blank><font color=red>What is username & password?</font></a></center></form></div></body>';?>