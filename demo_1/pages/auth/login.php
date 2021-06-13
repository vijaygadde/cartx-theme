<?php

  // Text variables
  $messages = [
    'login_text_welcome' => 'Olá novamente! Entre em sua conta.',
    'login_label_password' => 'Senha',
    'login_placeholder_password' => 'Senha',
    'login_text_remember' => 'Lembrar de mim',
    'login_button_login' => 'Entrar',
    'login_link_signup' => 'Não tem uma conta? Crie aqui.',
  ];

  // Page identification
  $actualPage = 'login';

  // Language Identification
  $actualLanguage = 'pt-br';

?>

<!DOCTYPE html>
<html lang="<?php echo $actualLanguage ?>">
<head>

  <?php include("../includes/header.php"); ?>

  <?php include("../includes/styles.php"); ?>

</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">cart<span>X</span></a>
                    <h5 class="text-muted font-weight-normal mb-4"><?php echo $messages['login_text_welcome']; ?></h5>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo $messages['login_label_password']; ?></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="<?php echo $messages['login_placeholder_password']; ?>">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          <?php echo $messages['login_text_remember']; ?>
                        </label>
                      </div>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0"><?php echo $messages['login_button_login']; ?></button>
                      </div>
                      <a href="register.html" class="d-block mt-3 text-muted"><?php echo $messages['login_link_signup']; ?></a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include("../includes/scripts.php"); ?>
</body>
</html>