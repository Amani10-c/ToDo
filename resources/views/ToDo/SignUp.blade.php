@extends('layout.app')

@section('content')


<div class="col-12">
        <h3 class="p-3  text-center my-3">Signup</h3>

</div>

<div class="col-5 mx-auto" >

   <form action="{{url('ToDo/store')}}"  method="POST"class="form">
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
     <div class="row mb-3">
       <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" value="{{old('email')}}" name="email" id="inputEmail3">
      </div>
     </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-8">
      <input type="password" class="form-control" value="{{old('password')}}"  name="password"id="inputPassword3">
    </div>
</div>
 

<button type="submit" class="btn btn-primary" value="Save">sign up</button>

 </form>


 @endsection