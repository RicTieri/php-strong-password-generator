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
            <div class="row">
              <div class="col-7">
                <label for="length" class="form-label mb-3 d-block">Lunghezza password:</label>
                <label class="form-check-label" for="repeat_char">Consenti ripetizioni di uno o più caratteri:</label>
              </div>
              <div class="col-5">
                <form>
                  <div class="mb-3">
                    <input type="number" class="form-control" id="length" name="length">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="repeat_char" name="repeat_char">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>