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
        <div class="col-12">
          <div class="alert alert-primary" role="alert">
            Nessun parametro valido inserito
          </div>
        </div>
        <div class="col-12">
          <div class="card col-12 px-3 py-4">
              <form action="./index.php" method="GET" class="row">
                <div class="col-7">
                  <div class="mb-5 pb-5">
                    <label for="length" class="form-label mb-3 d-block">Lunghezza password:</label>
                    <label class="form-check-label" for="repeat_char">Consenti ripetizioni di uno o più
                      caratteri:</label>
                  </div>
                  <div class="mt-5 pt-5">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                  </div>
                </div>
                <div class="col-5 pe-5">
                  <div class="mb-3 pe-5">
                    <input type="number" class="form-control" id="length" name="length">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="repeat_char" id="repeat_char">
                    <label class="form-check-label" for="repeat_char">Si</label>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">No</label>
                  </div>
                  <div>
                    <input type="checkbox" class="form-check-input me-2" id="letter" name="letter">
                    <label class="form-check-label" for="letter">Lettere</label>
                  </div>
                  <div>
                    <input type="checkbox" class="form-check-input me-2" id="number" name="number">
                    <label class="form-check-label" for="number">Numeri</label>
                  </div>
                  <div>
                    <input type="checkbox" class="form-check-input me-2" id="symbol" name="symbol">
                    <label class="form-check-label" for="symbol">Simboli</label>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>