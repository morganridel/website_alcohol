<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS must be linked before all other css -->
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />

        <title>How do you drink?</title>

	</head>

	<body>
		<!-- Bootstrap container to give margins -->
		<div class="container">

			<header>
				<h1>
					How do you drink?
				</h1>
			</header>

			<form method="post" action="result.php">
				<div class="form-group">
				<legend>Are you ?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="women" value="women">
						<label class="form-check-label" for="women">A woman</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="men" value="men">
						<label class="form-check-label" for="men">A man</label>
					</div>
				</div>
				<div class="form-group">
					<legend>In a typically week, how many times do you drink?</legend>
					<div class="row">
						<div class="form-group col-2">	
						<label for="pint"> A pint : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="pint" value="0" min="0" max="50" class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-2">
						<label for="wine"> A glass of wine : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="wine" value="0" min="0" max="50" class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-2">
						<label for="Galcolpop"> A glass of alcolpop : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="Galcolpop" value="0" min="0" max="50" class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-2">
						<label for="Balcolpop"> A bottle of alcolpop : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="Balcolpop" value="0" min="0" max="50" class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
					</div>
					<div class="row">
						
						<div class="form-group col-2">
						<label for="sparWine"> A glass of sparkling wine : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="sparWine" value="0" min="0" max="50" class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-2">
						<label for="spirit"> A pub measure of spirits : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="spirit" value="0" min="0" max="50" class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-2">
						<label for="shot"> A shot : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="shot" value="0" class="quantity" min="0" max="50" />
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
					</div>
				</div>
					

				<p>
					If you drink at least one time per week, how many days per week do you drink alcohol? (if you drink less than once a week just let 0) ? <br />
						
						<label for="times"><input type="number" name="times" value="0" class="quantity" min="0" max="7" /> times per week </label> <br />

				</p>
				
				<p>
					On the same occasion, what is the maximum of drink that you can take? <br />
					<label for="max"><input type="number" name="max" value="0" class="quantity" min="0" max="30"/> drinks </label> <br />
				</p>

				<p>
					Have you already been arrest because of your consomation of alcohol? <br />

					<input type="radio" name="arrest" value="yes" id="yes" required/> <label for="yes">yes</label><br />
					<input type="radio" name="arrest" value="no" id="no" /> <label for="no">no</label><br />

				</p>

				<p>
					Have you already had several blackouts? <br />
					<input type="radio" name="blackout" value="yes" id="yes" required /> <label for="yes">yes</label><br />
					<input type="radio" name="blackout" value="no" id="no" /> <label for="no">no</label><br />
				</p>

				<p>
					Has a friend, or any health professional ever been concerned about your drinking and advise you to decrease it? <br />

					<input type="radio" name="advise" value="yes" id="yes" required /> <label for="yes">yes</label><br />
					<input type="radio" name="advise" value="no" id="no" /> <label for="no">no</label><br />
				</p>

				<p>
					<input type="submit" value="Submit" id="submit">
				</p>
			</form>

		</div>


		<!-- Javascript zone -->

		<!-- Bootstrap js dependency -->
		<script src="lib/jquery-3.3.1.slim.min.js"></script>
		<script src="lib/bootstrap/js/popper.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>