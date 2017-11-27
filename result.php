<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <!-- Font awesome css -->
    <link rel="stylesheet" href="utils/font-awesome/css/font-awesome.min.css" />

    <!-- Design CSS -->
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/common.css">

    <script src="js/lib/jquery.js"></script>
    <script src="js/lib/jquery.reflection.js"></script>
    <script src="js/lib/jquery.cloud9carousel.js"></script>
    <script>
      function changeDataset() {
      window.history.back()
      } 
    </script>

  </head>
      
  <body>
    <div class="container-fluid">

      <div id="header" class="row">
        <div class="col-lg-2">
          <button type="submit"  class="btn btn-primary float-left" onclick="changeDataset()">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Change dataset
          </button>
        </div>

        <div class="col-lg-8">
          <h1>Interface vocale pour la reconnaissance du locuteur</h1> 
        </div>

        <div class="col-lg-2">
          <a href="http://www-lium.univ-lemans.fr/fr/content/bienvenue"><img id ="logo" class="float-right" src="res/logo/lium.png" alt="LIUM"/></a>
        </div>
      </div>

      <div id="content" class="row mx-1">    
        <div id="fileZone" class="col-lg-4">
          <div class="col-lg-12">
            <ul>
              <li><a class="active" href="#file">File</a></li>
              <li><a href="#ADS">Audio data stream</a></li>
            </ul>
          </div>
        </div>

        <div id="carouselZone"class="col-lg-8">
          <div class="wrap">
            <div id="showcase" class="noselect">
              <img class="cloud9-item" src="images/browsers/firefox.png" alt="Firefox">
              <img class="cloud9-item" src="images/browsers/wyzo.png" alt="Wyzo">
              <img class="cloud9-item" src="images/browsers/opera.png" alt="Opera">
              <img class="cloud9-item" src="images/browsers/chrome.png" alt="Chrome">
              <img class="cloud9-item" src="images/browsers/iexplore.png" alt="Internet Explorer">
              <img class="cloud9-item" src="images/browsers/safari.png" alt="Safari">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
    $(function() {
      var showcase = $("#showcase"), title = $('#item-title')

      showcase.Cloud9Carousel( {
        yOrigin: 42,
        yRadius: 48,
        mirror: {
          gap: 12,
          height: 0.2
        },
        buttonLeft: $("#nav > .left"),
        buttonRight: $("#nav > .right"),
        autoPlay: 1,
        bringToFront: true,
        onRendered: rendered,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      function rendered( carousel ) {
        title.text( carousel.nearestItem().element.alt )

        // Fade in based on proximity of the item
        var c = Math.cos((carousel.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }

      //
      // Simulate physical button click effect
      //
      $('#nav > button').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('#nav > .left').click()
            break

          /* right arrow */
          case 39:
            $('#nav > .right').click()
        }
      } )
    })
  </script>
  </body>
</html>