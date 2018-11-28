<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">

                @if (count($errors) > 0)
                    <div class="alert alert-danger top-space note">
                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if(session('success'))
                    <div class="alert alert-success text-center top-space">
                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <b>{{ session('success') }}</b>
                    </div>
                @endif


                <form action="{{ route('post.save.user') }}" method="POST" autocomplete="off">
                    
                    @csrf
                    <div class="form-group">
                        <label>Enter Firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname">
                    </div>
                    <div class="form-group">
                        <label>Enter Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">
                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>