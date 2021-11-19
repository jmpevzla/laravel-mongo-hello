
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <br />
    <a href="{{action('AnimalController@create')}}" class="btn btn-primary">Create</a>
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Species</th>
        <th>Color</th>
        <th>Leg</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($animals as $animal)
      <tr>
        <td>{{$animal->id}}</td>
        <td>{{$animal->species}}</td>
        <td>{{$animal->color}}</td>
        <td>{{$animal->leg}}</td>
        <td><a href="{{action('AnimalController@edit', $animal->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('AnimalController@destroy', $animal->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
