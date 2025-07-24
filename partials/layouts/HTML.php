<?php

// require('./functions.php');

class HTML {
	public function __construct(public string $title, public string $lang = 'en') {
		ob_start();
	}

	public function testFunc() {
		echo "Test Func is working.";
	}

	public function __destruct() {
		$output = ob_get_clean();

		ob_start();
?>

		<!DOCTYPE html>
		<html lang="<?= $this->lang; ?>" class="h-full bg-gray-100">

			<head>
				<meta charset="UTF-8" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />

				<title><?= $this->title; ?></title>

				<link rel="icon" type="image/png" href="../../favicon/favicon-96x96.png" sizes="96x96" />
				<link rel="icon" type="image/svg+xml" href="../../favicon/favicon.svg" />
				<link rel="shortcut icon" href="../../favicon/favicon.ico" />
				<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png" />
				<link rel="manifest" href="../../favicon/site.webmanifest" />
				
				<link href="/src/styles/tailwind.css" rel="stylesheet" />
				<link href="/src/styles/global.scss" rel="stylesheet" />
			</head>
			
			<body class="h-full bg-neutral-50">
				<?= $output; ?>
			</body>

		</html>

<?php
		die(ob_get_clean());
	}
}
