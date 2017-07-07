<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>VisualxMed - Where visuals empower health literacy!</title>

   <!-- Load CSS -->
    <link href="lib/basscss/basscss.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   <!-- <link rel="stylesheet" href="lib/tachyons/css/tachyons.css"> -->
    <link rel="stylesheet" href="lib/css/indexstyle.css">
    <link rel="stylesheet" href="lib/css/globalstyle.css">
    <link rel="stylesheet" href="lib/css/search.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <!-- icon -->
   <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
   <link rel="manifest" href="icons/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
   <!-- Load JS -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="lib/jquery/jquery-2.1.4.js"></script>
   <script src="lib/js/modernizr.custom.js"></script>
   <script src="lib/js/search.js"></script>
   <script src="lib/js/classie.js"></script>
   <script>
   $(document).ready(function(){
      function getresult(url) {
         $.ajax({
            url: url,
            type: "GET",
            data:  {rowcount:$("#rowcount").val()},
            beforeSend: function(){
            $('#loader').show();
            },
            complete: function(){
            $('#loader').hide();
            },
            success: function(data){
            $("#infograph-result").append(data);
            },
            error: function(){}          
         });
      }
      $(window).scroll(function(){
         if ($(window).scrollTop() == $(document).height() - $(window).height()){
            if($(".pagenum:last").val() < $(".total-page").val()) {
               var pagenum = parseInt($(".pagenum:last").val()) + 1;
               getresult('getresult.php?page='+pagenum);
            }
         }
      }); 
   });
   </script>
</head>

<body>
    <div class="container-fluid">
    <nav class="navbar navbar-light fixed-top">
        <div class="d-flex p-2">
            <a class="navbar-brand" href="index.php">
                <img src="lib/images/logo.png" width="75" height="39" alt="">
            </a>
            <nav 
            <div class="d-flex flex-row justify-content-end">
                        <a href="index.php"><div class="p-2 btn btn-primary" role="button">Home</div></a>
                        <a href="about.html"><div class="p-2 btn btn-secondary" role="button">About Us</div></a>
                        <a href="mission.html"><div class="p-2 btn btn-secondary" role="button">Mission</div></a>
                        <a href="#"><div class="p-2 btn btn-secondary" role="button">Opportunities</div></a>
                        <a href="contact.html"><div class="p-2 btn btn-secondary" role="button">Contact Us</div></a>
            </div>
        </div>
    </nav>
    </div>
<!--
<header class="hide-on-search">
   <div class="container-fluid">
      <div class="clearfix">
         <div class="row">-->
            <!--<div class="header mb2">
               <button id="trigger-overlay" type="button" class="regtext navbutton search col-xs-1 col-sm-1 col-md-1 col-lg-1 align-middle">
                  <img src="lib/glyphicons_free/glyphicons/png/glyphicons-28-search.png" />
                  Search</button>
               <h1 class="slogan align-bottom center col-xs-1 col-sm-1 col-md-1 col-lg-1 inline-block mxn1">where visuals empower health literacy</h1>
            </div>-->
            <!--<nav class="navbar navbar-fixed-top navbar-inverse" style="background-color: #F3F3F3">
                     <div class="container-fluid">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #55ADFF">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                            <a class="navbar-brand" href="#">
                            <img src="lib/images/logo.png" width="75" height="39" alt="">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php" class="btn navbutton active">Home</a></li>
                            <li><a href="about.html" class="btn navbutton">About</a></li>
                            <li><a href="mission.html" class="btn navbutton">Mission</a></li>
                            <li><a href="#" class="btn navbutton">Opportunities</a></li>
                            <li><a href="contact.html" class="btn navbutton">Contact Us</a></li>
                        </ul>
                        </div>
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>-->
                        <!--</div>
                    </div>
            </nav>-->
         <!--</div>
      </div>
   </div>-->
<!--</header>-->
<main>
   <section class="container-fluid infographic-holder">
      <div id="infograph-result">
         <?php include('getresult.php'); ?>
      </div>
      <div class="loader"></div>
      <!--<div id="loader-icon"><img src="lib/images/LoaderIcon.gif" /><div>-->
    </section>
</main>
<!--<footer>
   <div class="container px2 py2">
      <div class="clearfix">
         <ul class="list-reset h3 center">
            <li class="inline-block"><a href="index.php" class="btn active">Home</a></li>
            <li class="inline-block"><a href="about.html" class="btn">About Us</a></li>
            <li class="inline-block"><a href="mission.html" class="btn">Mission</a></li>
            <li class="inline-block"><a href="#" class="btn">Opportunities</a></li>
            <li class="inline-block"><a href="contact.html" class="btn">Contact Us</a></li>
         </ul>
      </div>
   </div>
</footer>-->
    <!--<div class="overlay overlay-contentscale hover-effect">
      <button type="button" class="overlay-close">Close</button>
      <div class="icon"></div>
      <h1 class="title"> Click On Magnifying Glass To Discover </h1>
      <input id="search" class="search-input" 
         placeholder="Type here to search...">
      <h4 id="results-text"> Showing results for: <b id="search-string"></b> </h4>
      <ul id="results"> </ul>
   </div>-->
<script>
   var bodyElem = document.getElementsByTagName("body")[0];
   function hashChanged(storedHash) {
      var hash = storedHash.substring(1);
      if (hash.length > 0 && hash != "page") {
         var infonum = hash.substring(6);
         var infographsarray = document.getElementsByClassName('numinfo');
         var numinfographs = infographsarray[infographsarray.length-1].value;
         if (!isNaN(numinfographs) && numinfographs > infonum && infonum >= 0) {
            if (classie.has(bodyElem, 'modal-open')) {}
            else {
               classie.add(bodyElem, 'modal-open');
               $(".header").hide();
            }
         } 
         else {
            classie.remove(bodyElem, 'modal-open');
            $(".header").show();
         }
      } 
      else {
         classie.remove(bodyElem, 'modal-open');
         $(".header").show();
      }
   }
   if ("onhashchange" in window) { 
       window.onhashchange = function () {
           hashChanged(window.location.hash);
       }
   }
   else { 
       var storedHash = window.location.hash;
       window.setInterval(function () {
           if (window.location.hash != storedHash) {
               storedHash = window.location.hash;
               hashChanged(storedHash);
           }
       }, 100);
   }
   hashChanged(window.location.hash);
</script>
<script src="lib/js/searchoverlay.js"></script>
</body>
</html>
<script src="lib/js/resize.js"></script>