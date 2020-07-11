<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscription au congrès</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div class="card card-eventform">
		<img src="img/congres.jpg" class="card-img-top">
		<div class="card-header">
			<div class="m-3 font-weight-bold title-card">Inscription au congrès</div>
			<div class="description">
				<div>Dates de l’événement : Du 19 au 22 juillet 2020</div>
				<div>Adresse de l’événement : <a href="https://www.google.com/maps/place/Annecy+Espace+Congr%C3%A8s/@45.9097461,6.1254205,14z/data=!4m8!1m2!2m1!1scongr%C3%A8s+annecy!3m4!1s0x0:0x886b52a9bbb0d2b!8m2!3d45.9100553!4d6.1386645" target="_blank">28 Avenue de France, 74000 Annecy</a></div>
				<div>Contactez-nous au (33) 00 00 00 00 00 ou à l'adresse <a href="mailto:infos@congresannecy.com" class="card-link">infos@congresannecy.com</a></div>
			</div>
		</div>
		<form method="POST" id="form-validation">
			<div class="card-body">
				<div class="alert alert-success form-valid" role="alert"></div>
				<div class="row">
					<div class="form-group col-lg lastname-form">
						<label for="last-name">NOM <span class="requiredAsterisk">*</span></label>
						<input id="last-name" type="text" class="form-control text-uppercase alphaonly" name="last-name" placeholder="NOM">
						<div class="alert alert-danger alert-form error-lastname" role="alert">
							<span class="empty-lastname">Veuillez remplir ce champ</span>
						</div>
					</div>
					<div class="form-group col-lg firstname-form">
						<label for="first-name">Prenom <span class="requiredAsterisk">*</span></label>
						<input id="first-name" type="text" class="form-control capitalize alphaonly" name="first-name" placeholder="Prenom">
						<div class="alert alert-danger alert-form error-firstname" role="alert">
							<span class="empty-firstname">Veuillez remplir ce champ</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="email">Adresse mail <span class="requiredAsterisk">*</span></label>
					<input id="email" type="text" class="form-control" name="email" placeholder="example@example.com">
					<div class="alert alert-danger alert-form error-email" role="alert">
						<span class="empty-email">Veuillez remplir ce champ</span>
						<span class="invalid-email">Entrez un email valide</span>
					</div>
				</div>
				<div class="form-group">
					<label for="phone">Numéro de téléphone <span class="requiredAsterisk">*</span></label>
					<input id="phone" type="tel" pattern="0[1-68]([-. ]?[0-9]{2}){4}" class="form-control" name="phone" placeholder="Téléphone (Ex: 06 XX XX XX XX)">
					<div class="alert alert-danger alert-form error-phone" role="alert">
						<span class="empty-phone">Veuillez remplir ce champ</span>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-success btn-submit">Envoyer</button>
			</div>
		</form>
	</div>
</body>
<script type="text/javascript" src="js/js.js"></script>
</html>