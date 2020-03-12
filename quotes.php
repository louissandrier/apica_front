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
		<div class="container-login100" id="quotesContainer"></div>
	</div>

	<div class="addCitationBtn shadow" data-toggle="modal" data-target="#addCitationModal">
		Ajouter une citation
	</div>
	<div class="addPersonnageBtn shadow" data-toggle="modal" data-target="#addPersonnageModal">
		Ajouter un personnage
	</div>
	<div class="addFilmBtn shadow" data-toggle="modal" data-target="#addFilmModal">
		Ajouter un film
	</div>
	<div class="citationFilmBtn shadow" data-toggle="modal" data-target="#citationFilmModal">
		Citations par film
	</div>
	<div class="citationPersonnageBtn shadow" data-toggle="modal" data-target="#citationPersonnageModal">
		Citations par personnage
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
	        <form id="submitCitation">
				<input class="input100 citation" type="text" name="citation" placeholder="Entrez votre citation">
				<select class="input100 citation" type="text" name="film" id="selectFilm">
					<option selected disabled>Entrez votre film</option>
				</select>
				<select class="input100 citation" type="text" name="personnage" id="selectPersonnage">
					<option selected disabled>Entrez votre personnage</option>
				</select>
				<div class="row">
					<button type="button" class="login100-cancel-btn" data-dismiss="modal">Annuler</button>
	        		<button type="submit" class="login100-addCitation-btn">Ajouter</button>
				</div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="addPersonnageModal" tabindex="-1" role="dialog" aria-labelledby="addPersonnageModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addPersonnageModalLabel">Ajouter un personnage</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="submitPersonnage">
				<input class="input100 citation" type="text" name="nom" placeholder="Entrez votre personnage">
				<div class="row">
					<button type="button" class="login100-cancel-btn" data-dismiss="modal">Annuler</button>
	        		<button type="submit" class="login100-addCitation-btn">Ajouter</button>
				</div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="addFilmModal" tabindex="-1" role="dialog" aria-labelledby="addFilmModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addFilmModalLabel">Ajouter un film</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="submitFilm">
				<input class="input100 citation" type="text" name="titre" placeholder="Entrez votre film">
				<div class="row">
					<button type="button" class="login100-cancel-btn" data-dismiss="modal">Annuler</button>
	        		<button type="submit" class="login100-addCitation-btn">Ajouter</button>
				</div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="citationFilmModal" tabindex="-1" role="dialog" aria-labelledby="citationFilmModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="citationFilmModalLabel">Citations par film</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="searchFilm">
				<select class="input100 citation" type="text" name="film" id="selectFilmCitation">
					<option selected disabled>Entrez votre film</option>
				</select>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="citationPersonnageModal" tabindex="-1" role="dialog" aria-labelledby="citationPersonnageModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="citationPersonnageModalLabel">Citations par personnage</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="searchPersonnage">
				<select class="input100 citation" type="text" name="personnage" id="selectPersonnageCitation">
					<option selected disabled>Entrez votre personnage</option>
				</select>
	        </form>
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

		var urlCitation = 'https://localhost:8000/all_citation';
		var urlFilm = 'https://localhost:8000/all_film';
		var urlPersonnage = 'https://localhost:8000/all_personnage';

		$.ajax({
			type: "GET",
			url: urlCitation,
			success: function(data) {
				$.each(data.reverse(), function(index, citation){
					$('#quotesContainer').append(
						'<div class="wrap-login100">'+
							'<blockquote class="blockquote">'+
							  '<p class="mb-0">'+ citation.citation +'</p>'+
							  '<footer class="blockquote-footer">'+ citation.personnage.nom +' dans <cite title="Source Title">'+ citation.film.titre +'</cite></footer>'+
							'</blockquote>'+
						'</div>'
					)
				})
				
			}
		})

		$.ajax({
			type: "GET",
			url: urlFilm,
			success: function(data) {
				$.each(data, function(index, film){
					$('#selectFilm').append(
						'<option value="'+ film.id +'">'+ film.titre +'</option>'
					);
					$('#selectFilmCitation').append(
						'<option value="'+ film.id +'">'+ film.titre +'</option>'
					)
				})
				
			}
		})

		$.ajax({
			type: "GET",
			url: urlPersonnage,
			success: function(data) {
				$.each(data, function(index, personnage){
					$('#selectPersonnage').append(
						'<option value="'+ personnage.id +'">'+ personnage.nom +'</option>'
					);
					$('#selectPersonnageCitation').append(
						'<option value="'+ personnage.id +'">'+ personnage.nom +'</option>'
					)
				})
				
			}
		})

		$('#submitCitation').submit(function (e) {
	        e.preventDefault(); // avoid to execute the actual submit of the form.

	        var form = $(this);
	        var url = 'https://127.0.0.1:8000/add_citation';

	        $.ajax({
	           type: "POST",
	           url: url,
	           data: form.serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	               $('#addCitationModal').modal('hide');
	               location.reload();
	           }
	         });
	    })

	    $('#submitPersonnage').submit(function (e) {
	        e.preventDefault(); // avoid to execute the actual submit of the form.

	        var form = $(this);
	        var url = 'https://127.0.0.1:8000/personnage';

	        $.ajax({
	           type: "POST",
	           url: url,
	           data: form.serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	               $('#addPersonnageModal').modal('hide');
	               location.reload();
	           }
	         });
	    })

	    $('#submitFilm').submit(function (e) {
	        e.preventDefault(); // avoid to execute the actual submit of the form.

	        var form = $(this);
	        var url = 'https://127.0.0.1:8000/film';

	        $.ajax({
	           type: "POST",
	           url: url,
	           data: form.serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	               $('#addFilmModal').modal('hide');
	               location.reload();
	           }
	         });
	    })

	    $('#selectFilmCitation').change(function(e) {
	    	e.preventDefault();

	    	var form = $(this);
	    	var url = 'https://127.0.0.1:8000/citation_by_film';

	    	$.ajax({
	    		type: 'POST',
	    		url: url,
	    		data: form.serialize(),
	    		success: function(data)
	    		{
	    			$('#quotesContainer').empty();
	    			$.each(data.reverse(), function(index, citation){
						$('#quotesContainer').append(
							'<div class="wrap-login100">'+
								'<blockquote class="blockquote">'+
								  '<p class="mb-0">'+ citation.citation +'</p>'+
								  '<footer class="blockquote-footer">'+ citation.personnage.nom +' dans <cite title="Source Title">'+ citation.film.titre +'</cite></footer>'+
								'</blockquote>'+
							'</div>'
						)
						$('#citationFilmModal').modal('hide');
					})
	    		}
	    	})
	    })

	    $('#selectPersonnageCitation').change(function(e) {
	    	e.preventDefault();

	    	var form = $(this);
	    	var url = 'https://127.0.0.1:8000/citation_by_personnage';

	    	$.ajax({
	    		type: 'POST',
	    		url: url,
	    		data: form.serialize(),
	    		success: function(data)
	    		{
	    			$('#quotesContainer').empty();
	    			$.each(data.reverse(), function(index, citation){
						$('#quotesContainer').append(
							'<div class="wrap-login100">'+
								'<blockquote class="blockquote">'+
								  '<p class="mb-0">'+ citation.citation +'</p>'+
								  '<footer class="blockquote-footer">'+ citation.personnage.nom +' dans <cite title="Source Title">'+ citation.film.titre +'</cite></footer>'+
								'</blockquote>'+
							'</div>'
						)
						$('#citationPersonnageModal').modal('hide');
					})
	    		}
	    	})
	    })
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>