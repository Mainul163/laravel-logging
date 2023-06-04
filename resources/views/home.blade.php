<h1>this is home page</h1><br>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{url('result')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div><br><br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div><br><br>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<br><br>








<a href="{{url('/')}}">Back to page</a>