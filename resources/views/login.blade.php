@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" placeholder="Taper votre Email Address">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Taper votre password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection