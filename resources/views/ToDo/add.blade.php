
<!doctype html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ToDo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('ToDo/Home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('ToDo/MyList') }}">View my list</a>
        </li>
           
          
         <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  
<div class="container">
    <div class="row">
       
    <div class="col-12">
        <h3 class="p-3  text-center my-3">Add my list</h3>

</div>


    <div class="col-8 mx-auto">
       <form action="{{url('ToDo/save')}}" method="post" class="form border p-3">
      @csrf
      @if ($errors->any())
        <div class="alert alert-danger p-1">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       <div class="mb-3">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date"   value="{{old('date')}}" id="date">
        </div>
        <div class="mb-3">
            <label for="list">Title</label>
            <textarea class="form-control" name="title"   id="title" cols="1" rows="1">{{old('title')}}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="list">description</label>
            <textarea class="form-control" name="description"   id="description" cols="30" rows="7">{{old('description')}}</textarea>
        </div>
    
        <div class="mb-3">
            <input type="submit" class="form-control bg-success text-white" value="Save">
        </div>
       </form>
</div>





    </div>
 </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>











