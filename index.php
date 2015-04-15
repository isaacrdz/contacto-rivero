<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<title>Cotización</title>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '467331926751857',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>





  <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>


  
  <p><img class="img-center" data-interchange="[img/auto.png, (small)],img/auto.png, img/auto.png"></p>
  <noscript><img class="img-center" src="img/auto.png"></noscript>


<section>
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h3 class="color-yellow">Solicita cotización</h3>
     

<a href="https://apps.facebook.com/contactorivero/gracias.php">gracias</a>

<?php include "form.php" ?>


    </div>
  </div>
</section>
<div class="row">  
      <div
        class="fb-like"
        data-share="true"
        data-width="450"
        data-show-faces="true">
      </div>
</div>

<style>
  #flat
  {
    background-color: #289dcc;
  }
  
  .color-1
  {
    color: white;
  }
  footer
  {
    background-color: #1e2126;
  }
  .padding-1
  {
    padding: 1em;
  }

  #galeria
  {
    background:#1e2126; 
    margin: 1em 0;
  }

  .color-yellow
  { 
    color:#F0AD00;
    font-weight: bold;
  }
</style>
<!--  end flat section -->
   <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>