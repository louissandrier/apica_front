<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Quotes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<blockquote class="blockquote">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
			</div>
			<div class="wrap-login100">
				<blockquote class="blockquote">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>				
			</div>
			<div class="wrap-login100">
				<blockquote class="blockquote">
				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>				
			</div>
		</div>
	</div>

	<div class="addCitationBtn" data-toggle="modal" data-target="#addCitationModal">
		Ajouter une citation
	</div>
	
	


	<div class="modal fade bd-example-modal-lg" id="addCitationModal" tabindex="-1" role="dialog" aria-labelledby="addCitationModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addCitationModalLabel">Ajouter une citation</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
				<input class="input100 citation" type="text" name="citationTitle" placeholder="Entrez votre citation">
				<select class="input100 citation" type="text" name="citationFilm">
					<option selected disabled>Entrez votre film</option>
					<option value="0">OSS 117</option>
					<option value="1">Asterix et Obélix - Mission Cléopatre</option>
					<option value="2">Die Hard 4</option>
				</select>
				<select class="input100 citation" type="text" name="citationFilm">
					<option selected disabled>Entrez votre personnage</option>
					<option value="0">Hubert Bonnisseur de la Bath</option>
					<option value="1">Numérobis</option>
					<option value="2">Hank Shreder</option>
				</select>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="login100-cancel-btn" data-dismiss="modal">Annuler</button>
	        <button type="button" class="login100-addCitation-btn">Ajouter</button>
	      </div>
	    </div>
	  </div>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>