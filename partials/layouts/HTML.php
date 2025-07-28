<?php

// require('./functions.php');

class HTML {

	public function __construct(public string $title, public string $lang = 'en') {
		ob_start();
	}

	public function addPartials($partialPath) {
		$partialPath = $partialPath;

		return require_once($partialPath);
	}

	public function __destruct() {
		$output = ob_get_clean();

		ob_start();
?>

		<!DOCTYPE html>
		<html lang="<?= $this->lang; ?>" class="bg-gray-200">

			<head>
				<meta charset="UTF-8" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />

				<title><?php echo $this->title; ?></title>
				
				<?php if( MODE_DEV ) : ?>
					<link rel="icon" type="image/png" href="../../favicon/favicon-96x96.png" sizes="96x96" />
					<link rel="icon" type="image/svg+xml" href="../../favicon/favicon.svg" />
					<link rel="shortcut icon" href="../../favicon/favicon.ico" />
					<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png" />
					<link rel="manifest" href="../../favicon/site.webmanifest" />

					<link href="/src/styles/tailwind.css" rel="stylesheet" />
					<link href="/src/styles/global.scss" rel="stylesheet" />
				<?php else : ?>
					<link rel="stylesheet" href="../../dist/public/apple-touch-icon-DhgDR6KX.png" />
					<link rel="stylesheet" href="../../dist/public/favicon--ogiNFDA.svg" />
					<link rel="stylesheet" href="../../dist/public/favicon-96x96-CDb9EEmU.png" />
					<link rel="stylesheet" href="../../dist/public/favicon-DT-YbzIV.ico" />
					<link rel="stylesheet" href="../../dist/public/HTML-BwnZl7er.css" />
				<?php endif; ?>

			</head>
			
			<body class="font-inter">

				<?php echo $output; ?>

				<?php $this->addPartials('includes/gitbranch.php'); ?>
				<?php $this->addPartials('includes/footer.php'); ?>
			</body>

		</html>

<?php
		die(ob_get_clean());
	}
}
