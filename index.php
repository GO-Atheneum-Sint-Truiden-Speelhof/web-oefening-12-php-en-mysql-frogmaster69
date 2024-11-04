<!doctype html>
<html lang=nl>

<?php include('includes/head.php') ?>

<script>
	function akkoord() {
		location.href='begin.php'
		
	}
	function nietakkoord(){
		location.href='https://google.be'
	}
</script>

<body>
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">CCO fotowedstrijd</h1>
		</div>
		<div class="row">
			<div class="col tegel knoppen">
				<p>deze website gebruikt cookies.wil je cookies accepteren</p>
				<p>
					<button onclick="akkoord()" class="btn-outline-dark btn-lg">akkoord</button>
					<button onclick="nietakkoord()" class="btn-outline-dark btn-lg">niet akkoord</button>

				</p>
			</div>
		</div>
	</div>
</div>