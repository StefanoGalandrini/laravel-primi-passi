<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel - Primi Passi</title>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300;500&display=swap');

		*,
		*::before,
		*::after {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		:root {
			font-family: 'Mitr', sans-serif;
			background-color: #2b2040;
		}

		nav {
			position: fixed;
			background-color: #dddddd;
			top: 0;
			left: 0;
			width: 15vw;
			height: 100vh;
			box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.85);
			color: #333333;
			padding: 1rem;
		}

		nav h2 {
			text-align: center;
			font-weight: bold;
			margin-bottom: 5rem;
		}

		nav ul {
			list-style-type: none;
			font-weight: 300;
			margin-left: 1rem;
		}

		nav li {
			height: 5rem;
		}

		nav a {
			text-decoration: none;
			font-size: 1.3rem;
			color: #333333;
		}
	</style>
</head>

<body>
	<nav>
		<h2>
			LARAVEL MENU
		</h2>

		<ul class="menu">
			<li>
				<a href="/">Home</a>
			</li>
			<li>
				<a href="css">CSS</a>
			</li>
			<li>
				<a href="/">Javacript</a>
			</li>
			<li>
				<a href="/">PHP</a>
			</li>
		</ul>
	</nav>
</body>

</html>
