<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

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
			background-color: #222222;
		}

		nav {
			position: fixed;
			background-color: #dddddd;
			top: 0;
			left: 0;
			width: 100%;
			height: 15vh;
			box-shadow: 0 0 4px 2px rgba(150, 150, 150, 0.85);
			color: #333333;
			padding: 1rem 5rem;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		nav h2 {
			width: max-content;
			font-weight: bold;
		}

		nav .menu {
			width: 50%;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		nav ul {
			list-style-type: none;
			font-weight: 300;
		}

		nav a {
			display: flex;
			align-items: center;
			text-decoration: none;
			font-size: 1.3rem;
			color: #333333;
			border-bottom: 3px solid transparent;
		}

		nav a:hover {
			border-bottom: 3px solid #333333;
		}

		main {
			padding-top: 15vh;
			height: 100vh;
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			color: #dddddd;
		}

		main h1 {
			display: block;
			margin-bottom: 2rem;
		}

		main h4 {
			margin-top: 2rem;
			font-weight: 300;
		}

		main span {
			font-weight: 500;
			text-decoration: underline;
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
				<a href="javascript">Javascript</a>
			</li>
			<li>
				<a href="php">PHP</a>
			</li>
		</ul>
	</nav>

	<main>
		<h1>PHP</h1>
		<h2>It's like a contemporary abstract exhibit,</h2>
		<h2>an incomprehensible mess that only makes sense to the "artists".</h2>
		<h4>(You don't know what you're doing... baby, it must be art!)</h4>
		<h4><span>U2,</span> "Hold me, thrill me, kiss me, kill me"</h4>
	</main>
</body>

</html>
