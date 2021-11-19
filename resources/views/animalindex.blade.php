
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div>
     @endif
    <div class="mt-2 mb-2">
        <a href="{{action('AnimalController@create')}}" class="btn btn-primary">Create</a>
    </div>

    <table class="table table-striped">
    <thead class="table-dark">
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
