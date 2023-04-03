<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- JS de Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card text-center mt-5 center center " style="width: 50rem;">
            <div class="card-header">
              Nuevo producto
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate action="{{ route('crear') }}" method="post">
                    @csrf
                    <div class="col-md-4">
                      <label for="name" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="name" name="name"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="stock" class="form-label">Estock</label>
                      <input type="number" class="form-control" id="stock" name="stock" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="status" class="form-label">State</label>
                      <select class="form-select" id="status" name="status" required>
                        <option selected disabled value="">Eligue...</option>
                        <option value="TRUE">ACTIVO</option>
                        <option value="FALSE">INACTIVO</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                  </form>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
    </div>


</body>
</html>
