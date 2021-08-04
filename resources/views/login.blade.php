@extends('master',['title'=>'Login'])

@section('content')

<div class="container custom-login">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 ">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection