@extends('layouts.main')

@section('title', 'Landing')

@section('content')

<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div>
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password" class="col-md-4 control-label">Password</label>

        <input id="password" type="password" class="form-control" name="password" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </div>
</form>

@endsection