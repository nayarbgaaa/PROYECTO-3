<?php 

$user_session = session();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>PROYECTO FINAL</title>
  <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
  <script src="<?php echo base_url(); ?>/js/all.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
        
  <style>
        .titulo{
            font-family: 'Josefin Sans', sans-serif;
                color: rgb(142, 36, 170);
        }
        .textos{
            font-family: 'Coming Soon', cursive;
        }
        .subtitulo{
            font-family: 'Rubik Bubbles', cursive;
        }
        .fondo{
            background-color: rgb(204, 204, 255);
        }
    </style>
</head>

<body class="bg-primary">
  <?php print_r($user_session->nombre);?>
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content" class="fondo">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <br><h3 class="text-center font-weight-light my-4 titulo">Iniciar Sesión </h3>
                </div>
                <div class="card-body">
                  <form method="POST" action="<?php echo base_url(); ?>/usuarios/valida">
                    <div class="form-floating mb-3">
                      <input class="form-control textos" id="usuario" name="usuario" type="text" placeholder="Ingresa tu usuario" />
                      <label class="subtitulo" for="usuario">Usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control texto" id="password" name="password" type="password" placeholder="Password" />
                      <label class="subtitulo" for="password">Contraseña</label>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                      <button class="btn btn-primary textos" type="submit">Login</button>
                    </div>

                    <?php if (isset($validation)) { ?>
                      <div class="alert alert-danger">
                        <?php echo $validation->listErrors(); ?>
                      </div>
                    <?php } ?>


                    <?php if (isset($error)) { ?>
                      <div class="alert alert-danger">
                        <?php echo $error; ?>
                      </div>
                    <?php } ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; By - nayarbgaaa <?php echo date('Y'); ?></div>
            <div>
              <a href="http://facebook.com" target="_blank">Facebook</a>
              &middot;
              <a href="http://github.com/nayarbgaaa/" target="_blank">GitHub</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo base_url(); ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/js/scripts.js"></script>
</body>

</html>