@extends('admin.master')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    $(function(){
        $("#adduser").parsley();
    });
</script>
<style>
    .parsley-errors-list li{
        list-style:none;
        color:red;
    }
 </style>
<div class="content-wrapper">
<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h1 class=" bg jumbotron text-center text-white">Add User</h1>
                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                    @endif
                    <form id="adduser" method="post" action="{{url('users')}}">
                        @csrf()
                        <div class="form-group">
                            <label for="firstname">First Name <i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" value="{{old('firstname')}}" placeholder="Enter firstname">
                            @if($errors->has('firstname'))
                            <label class="alert alert-danger">{{$errors->first('firstname')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name <i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" value="{{old('lastname')}}" placeholder="Enter lastname">
                            @if($errors->has('lastname'))
                            <label class="alert alert-danger">{{$errors->first('lastname')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email address<i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                            <input type="text" class="form-control" id="email" name="email" data-parsley-type="email" data-parsley-trigger="keyup" value="{{old('email')}}" placeholder="Enter email">
                            @if($errors->has('email'))
                            <label class="alert alert-danger">{{$errors->first('email')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password<i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                            <input type="password" class="form-control" id="password" name="password" data-parsley-length="[6,13]" data-parsley-trigger="keyup" value="{{old('password')}}" placeholder="Enter Password">
                            @if($errors->has('password'))
                            <label class="alert alert-danger">{{$errors->first('password')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password<i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword" data-parsley-equalto="#password" data-parsley-trigger="keyup" value="{{old('cpassword')}}" placeholder=" Enter Confirm Password">
                            @if($errors->has('cpassword'))
                            <label class="alert alert-danger">{{$errors->first('cpassword')}}</label>
                            @endif
                        </div>
                        <div>
                            <label for="status">Status</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="active" name="status" class="custom-control-input" value="1">
                            <label class="custom-control-label" for="active">Active</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="inactive" name="status" class="custom-control-input" value="0">
                            <label class="custom-control-label" for="inactive">Inactive</label>
                        </div>
                        @if($errors->has('status'))
                        <label class="alert alert-danger">{{$errors->first('status')}}</label>
                        @endif
                        <div>
                            <label for="role">Role <i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>

                            <select class="form-control" name="role">
                                <option value="" disables selected>Select type</option>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach
                            </select>

                           
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-success">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection