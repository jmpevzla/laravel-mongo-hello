
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <h2>Laravel MongoDB CRUD Tutorial With Example</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{ route('animal.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Species">Name:</label>
            <input type="text" class="form-control" name="species">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Color">Color:</label>
            <input type="text" class="form-control" name="color">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Leg">Leg:</label>
            <input type="text" class="form-control" name="leg">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
