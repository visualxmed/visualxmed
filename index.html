<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>VisualxMed - Where visuals empower health literacy!</title>

   <!-- Load CSS -->
    <link rel="stylesheet" href="lib/css/globalstyle.css">
    <link href="lib/style.css" rel="stylesheet">
    <link href="lib/bootstrap4/css/bootstrap.css" rel="stylesheet">

   <!-- <link rel="stylesheet" href="lib/tachyons/css/tachyons.css"> -->
    <link rel="stylesheet" href="lib/css/indexstyle.css">
    <link rel="stylesheet" href="lib/css/search.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
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

<div class="navbar-wrapper">    
    <nav class="navbar navbar-toggleable-md">
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">pls</button>
            <a class="navbar-brand" href="index.php">
                <img src="lib/images/logo.png" width="75" height="39" alt="">
                <h1 class="inline-block slogan">Where visuals empower health literacy</h1>
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link navbutton index" href="index.php">Home<span class="sr-only"></span></a>
              </li>
            <li class="nav-item">  
                <a class ="nav-link navbutton" href="about.html">About Us</a>
             </li>
                  <li class="nav-item">                        
                    <a class="nav-link navbutton" href="mission.html">Mission</a>
                  </li> 
                  <li class="nav-item">                        
                    <a class="nav-link navbutton" href="#">Opportunities</a>
                      </li>
                     <li class="nav-item">                        
                     <a class="nav-link navbutton" href="contact.html">Contact Us</a>
                  </li>
            </ul>
        </div>
    
    </nav>
</div> 
</header>
<main>
   <section class="container-fluid infographic-holder">
      <div id="infograph-result">
         <?php include('getresult.php'); ?>
      </div>
      <div class="loader"></div>
    </section>
</main>
    <div class="overlay overlay-contentscale hover-effect">
      <button type="button" class="overlay-close">Close</button>
      <div class="icon"></div>
      <h1 class="title"> Click On Magnifying Glass To Discover </h1>
      <input id="search" class="search-input" 
         placeholder="Type here to search...">
      <h4 id="results-text"> Showing results for: <b id="search-string"></b> </h4>
      <ul id="results"> </ul>
   </div>
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
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="lib/bootstrap4/js/bootstrap.js"></script>
<script src="lib/js/resize.js"></script>
</body>
</html>
