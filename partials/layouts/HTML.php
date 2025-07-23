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
