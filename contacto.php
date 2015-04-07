<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boletin</title>
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
			<h3 class="color-yellow">Solicita información</h3>
			<form>
  <div class="row">
    <div class="large-12 columns">
      <label>Nombre
        <input type="text" placeholder="Nombre" required />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="medium-4 large-4 columns">
      <label>Correo
        <input type="email" placeholder="@" required/>
      </label>
    </div>
    <div class="medium-4 large-4 columns">
      <label>Teléfono
        <input type="email" placeholder="10 dígitos"required />

      </label>
    </div>

    <div class="medium-4 large-4 columns">
      <label>Auto
        <select>
          <option class="disabled" value="Opción">-Escoge una opción-</option>        
          <option value="Aveo">Aveo</option>
          <option value="Matiz">Matiz</option>
          <option value="Cruze">Cruze</option>
          
        </select>
      </label>
    </div>
    
  </div>
  
  
  <div class="row">
    <div class="large-12 columns">
      <label>Mensaje
        <textarea placeholder="Mensaje"></textarea>
      </label>
 <button class=" right" type="submit">Enviar</button>
</div>
  </div>
</form>
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
<!-- 	end flat section -->
	 <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>