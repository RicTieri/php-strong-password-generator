<?php
include_once __DIR__  ."/php_partials/function.php";
session_start();
?>

<?php 
  if (isset($_GET['length'])) {
    $_SESSION['length'] = $_GET['length'];
  } ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>psw-generator</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- style -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header>
    <div class="container-fluid text-center text-white py-5">
      <div class="row">
        <div class="col-12">
          <h1>Strong Password Generator</h1>
          <h2>Genera una password sicura</h2>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="container-fluid px-5">
      <div class="row">
        <?php if(generatePassword($_SESSION['length'])){ ?>
          <div class="col-12">
            <div class="alert alert-light" role="alert">
              <h3>La password generata è:
                <?php echo generatePassword($_SESSION['length'])?>
              </h3>
            </div>
          </div>
          <?php } else{ ?>
            <div class="col-12">
              <form action="./index.php">
                <div class="alert alert-primary" role="alert">
                  <p>
                    Nessun parametro valido inserito
                  </p>
                  <button type="submit" class="btn btn-light">Riprova</button>
                </div>
              </form>
            </div>
       <?php }?>
      </div>
    </div>
    </div>
  </main>
</body>

</html>