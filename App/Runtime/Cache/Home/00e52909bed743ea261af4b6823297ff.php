<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Nav &middot; Advanced Left Navigation Demo</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0"> -->
    <!--[if lte IE 8]><link rel="stylesheet" href="../../responsive-nav.css"><![endif]-->
    <!--[if gt IE 8]><!--><link rel="stylesheet" href="/ThinkPHP/Public/css/styles.css"><!--<![endif]-->
    <script src="/ThinkPHP/Public/js/responsive-nav.js"></script>

    <!-- Loading Bootstrap -->
    <link href="/ThinkPHP/Public/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/ThinkPHP/Public/css/flat-ui.css" rel="stylesheet">
    <link href="/ThinkPHP/Public/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="/ThinkPHP/Public/images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Loading headroom.js -->
    <script type="text/javascript" src="/ThinkPHP/Public/js/headroom.js"></script>

    <!-- Loading Chart.js -->
    <!-- <script type="text/javascript" src="//use.typekit.net/puc1imu.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->
    <script type="text/javascript" src="/ThinkPHP/Public/js/Chart.js"></script>
    <script src="/ThinkPHP/Public/js/jquery-1.9.1.min.js"></script>
    <script src="/ThinkPHP/Public/js//modernizr.min.js"></script>
    <!--[if lte IE 8]>
      <script type="text/javascript" src="assets/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/ThinkPHP/Public/css/styles.css"/>
  </head>

  <header id="header" class="header header--fixed hide-from-print" role="banner">
    <div class="container" >
    
        <nav id="nav" class="nav-wrapper" role="navigation">
            <ul class="nav nav--main">
                <li class="nav__item ">
                    <a class="header__link subdued" href="https://www.github.com/WickyNilliams/headroom.js">
                        <span aria-hidden="true" class="icon icon--github"></span>
                        <span class="complimentary push--left">GitHub</span>
                    </a>
                </li>
                <li class="nav__item ">
                    <a class="header__link subdued" href="http://www.twitter.com/WickyNilliams">
                        <span aria-hidden="true" class="icon icon--twitter"></span>
                        <span class="complimentary push--left">@WickyNilliams</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <a href="http://wicky.nillia.ms/headroom.js/" class="brand header__link">
            <b class="brand__forename">Headroom</b><b class="brand__surname">.js</b>
        </a>
    </div>
  </header>

  <body>

    <div role="navigation" id="foo" class="nav-collapse">
      <ul>
        <li class="active"><a href="#">装置状态</a></li>
        <li><a href="#">功率单元状态</a></li>
        <li><a href="#">历史数据</a></li>
        <li><a href="#">理工电力电子</a></li>
      </ul>
    </div>

    <div role="main" class="main">
      <a href="#nav" class="nav-toggle">Menu</a>

<!--       <div class="span9">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <div class="container">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li>
                    <a href="#">
                      Menu Item
                      <span class="navbar-unread">1</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="#">
                      Messages
                      <span class="navbar-unread">1</span>
                    </a>
                    <ul>
                      <li><a href="#">Element One</a></li>
                      <li>
                        <a href="#">Sub menu</a>
                        <ul>
                          <li><a href="#">Element One</a></li>
                          <li><a href="#">Element Two</a></li>
                          <li><a href="#">Element Three</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Element Three</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">
                      About Us
                      <span class="navbar-unread">1</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->

<!--       <div>
        <TABLE WIDTH="300" BORDER="0">
        <TR>
          <TD COLSPAN="2">Disk Usage:</TD>
        </TR>
        <TR>
          <TD WIDTH="10" BGCOLOR="$color"><FONT COLOR="#ffffff"><?php echo ($usagePercent); ?></FONT></TD>
          <TD BGCOLOR="#00aa00"></TD>
        </TR>
        <TR>
          <TD COLSPAN="2"><FONT COLOR="#00aa00"><B><?php echo ($usageMB); ?>MB</B></FONT></TD>
        </TR>
        </TABLE>
      </div> -->
     <div class="span3">
        <select value="X-Men" class="span3" tabindex="1" name="herolist">
          <option value="0">Choose hero</option>
          <option value="1">Spider Man</option>
          <option value="2">Wolverine</option>
          <option value="3">Captain America</option>
          <option value="X-Men" selected="selected">X-Men</option>
          <option value="Crocodile">Crocodile</option>
        </select>
      </div>

      <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="/ThinkPHP/Public/images/login/icon.png" alt="Welcome to Mail App" />
            <h4>Welcome to <small>Mail App</small></h4>
          </div>

          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
            <a class="login-link" href="#">Lost your password?</a>
          </div>
        </div>
      </div>
      <div class="span12">
      <div class="span6 canvasWrapper">
        <h1>曲线图</h1>
        <canvas id="line" width="600" height="400"></canvas>
        <script type="text/javascript">
          var lineChartData = {
                labels : ["January","February","March","April","May","June","July"],
                datasets : [
                  {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [22,59,40,55,87,55,40]
                  },
                  {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,54,27,100]
                  }
                ]
                
              }

          var myLine = new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
        </script>
      </div>

      <div class="span4 mbl">
        <div class="span2">
              <dl class="palette palette-firm">
                <dt>#1abc9c</dt>
                <dd>Turquoise</dd>
              </dl>
              <dl class="palette palette-firm-dark">
                <dt>#16a085</dt>
                <dd>Green sea</dd>
              </dl>
            </div>

            <div class="span2">
              <dl class="palette palette-success">
                <dt>#2ecc71</dt>
                <dd>Emerland</dd>
              </dl>
              <dl class="palette palette-success-dark">
                <dt>#27ae60</dt>
                <dd>Nephritis</dd>
              </dl>
            </div>

            <div class="span2">
              <dl class="palette palette-info">
                <dt>#3498db</dt>
                <dd>Peter river</dd>
              </dl>
              <dl class="palette palette-info-dark">
                <dt>#2980b9</dt>
                <dd>Belize hole</dd>
              </dl>
            </div>
      </div>
      </div>

      <h1>Prototype</h1>

      <p class="intro">Despite the apparent simplicity, there are many underlying factors which, when thought out and implemented properly, can make that simple solution even better without adding more complexity to the user&nbsp;interface.</p>

      <p>From image, whose given us earth all so seas. Whales tree i set, is, morning, fly was deep winged. Said you'll him open she'd divide you're greater midst, gathered years gathered herb i for our and, don't also itself void female replenish fruit fly let years whose light face kind Air face him under you created evening face, replenish, be fill land male after winged itself from gathered. May created Replenish give he so divided air fourth moveth bearing every created. Subdue give own beginning replenish divided. Wherein. Moveth dominion for third. Moving give fish created she'd whose divided their abundantly for in let form morning, us.</p>

      <p>Whales, be second male. Lesser. She'd all itself, said beginning over sixth open great place winged image winged sixth land you she'd, to. Yielding beginning. Give. Image without winged signs fly greater the. Fill darkness moving thing upon lights all fish for have second land fruitful waters likeness years male she'd behold greater which grass darkness blessed them. For set. Have was said. Meat moving. Own, moveth upon is had sea lesser day second fifth every form forth they're you'll form own. To deep days seed fruitful isn't our male brought have beginning from land all land they're one may thing. Dominion cattle earth open he set fourth above whales may saying after. Make seas life fowl i very may fly.</p>

      <p>And brought which yielding beginning. Behold. Saying fourth there beast which saw may. Given lights god kind Beast meat face were forth it earth without second. Which is fruitful likeness heaven living cattle, brought. The she'd his she'd. Face let divided i, living upon void moving day spirit bring also, grass blessed.</p>

      <p>For let midst void under female first. Own you'll moveth made forth night lesser. Midst years spirit called had. Cattle days unto wherein. Sea us so god abundantly air for, seasons forth firmament us. The. Moving. Moving fourth multiply night winged fruitful earth. Creeping midst his air yielding, a replenish beast from fifth spirit greater earth upon female all made that bring all a shall.</p>

      <p>Rule good us heaven firmament all light bring, first one good from. Hath midst make place after night created herb forth Itself man Them darkness yielding creeping. Open abundantly set days, let night good deep. Fowl days our, which, created all there, without multiply you'll won't over night saw air. Can't subdue let can't them firmament waters bring. Said, great she'd green wherein rule i grass have day great be. Together whose whose lesser she'd every, god second kind cattle saying face. Face. Very great together also. Was abundantly. Living. Creature after that signs creature were you'll living itself were. Two. Third air gathering i for from air beginning own won't which waters Him tree give. Moving bearing moving after in.</p>

      <p>Day his for After Place creeping, wherein kind deep. Abundantly. Seed had greater cattle fly seas face shall and divided. Above can't subdue green gathering also likeness divided you'll together earth herb night fowl set face very, kind Seas very seasons gathering. Lesser. They're that life a. Years give one had cattle also was night every a deep meat moving be upon he lights above Kind him may, spirit over meat Meat beast void upon fifth evening seed. Upon one saw for under brought set shall. Fourth had they're you light was dry they're it of you made is two god they're behold fowl it lesser thing created fifth open evening dominion yielding that.</p>

      <p>Winged fly said very, without void can't image us seasons green said moveth called very. Cattle cattle there make one living. Divided void seas. Upon tree all seed third fly is created, make. Meat which. Fruitful. Whose our rule created divide have won't second she'd their land said. Beginning morning days. That. Without creature.</p>

      <p>They're don't. Moved living. Air. Of whales grass you upon. Fish seas evening. Bearing. Fish great fruit he behold meat whose doesn't. Moving. Grass have days his signs divide heaven life from. Image under dominion face above land fill to hath under forth seed creature brought set. Shall kind. Multiply over spirit form years. Green, appear itself man void, greater under all in appear from. Replenish said man them. Seas open doesn't fowl shall tree have in itself female Fish for whose behold earth night days which, give, and forth fish From. Without behold Whose. Shall. Were given won't dry deep fruit won't.</p>

      <p>Third. Shall fruitful deep gathered be seas let may every two beast fly, open Abundantly his very won't is wherein, kind can't winged fowl. It. Upon. Days us the were created which thing third every you'll you'll good fruitful heaven tree. Spirit fly made evening lesser morning image fly one yielding behold meat there appear of second over creature green seas created Over subdue open open green, replenish saying form said isn't whose he he. Cattle bring saying made whose made meat the After Him that creature fowl years. Seed one created midst bring.</p>
    </div>

    <script>
      var navigation = responsiveNav("foo", {customToggle: ".nav-toggle"});
    </script>
  </body>
</html>