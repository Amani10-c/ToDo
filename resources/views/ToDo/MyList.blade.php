

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
        <a href="{{ url('ToDo/create') }}" class="btn btn-primary my-3">Add new list</a>
         <h1 class="p-3 border text-center my-3">My List</h1>
       </div> 
       
        <table class="table table-bordered">
        
            <thead>
                <tr>
                     
                    <th>date</th>
                    <th>title</th>
                    <th>description</th>
                    <th>Edit</th>
                    <th>delet</th>


                </tr>
            </thead>
            <tbody>
                 @foreach($List1 as $List1)

                <tr>
                
                    <td>{{$List1->date}}</td>
                    <td>{{$List1->title}}</td>
                    <td>{{$List1->description}}</td>
                    
                    <td>
                        <a href="{{url('ToDo/'.$List1->id.'/edit')}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{url ('ToDo/' . $List1->id)}}" method ="post">
                        @csrf
                            @method('delete')
                            
                            <input type="submit" value="Delet"class="btn btn-danger">
                        </form>
                    </td>



                </tr>
                @endforeach
            </tbody>
        </table>
       
       </div> 
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

























