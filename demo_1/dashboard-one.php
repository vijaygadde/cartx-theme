<?php
  // Page identification
  $actualPage = 'dashboard';

  // Language Identification
  $actualLanguage = 'pt-br';
?>

<!DOCTYPE html>
<html lang="<?php echo $actualLanguage ?>">
<head>

  <?php include("pages/includes/header.php"); ?>

  <?php include("pages/includes/styles.php"); ?>
	
</head>
<body>
	<div class="main-wrapper">

    <?php include("pages/includes/sidebar.php"); ?>

		<div class="page-wrapper">
					
			<?php include("pages/includes/navbar.php"); ?>

			<div class="page-content">

			</div>

			<?php include("pages/includes/footer.php"); ?>
		
		</div>
	</div>

  <?php include("pages/includes/scripts.php"); ?>
</body>
</html>    