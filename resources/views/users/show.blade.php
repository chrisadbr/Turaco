@extends('index')

@section('title')
    View
@endsection

@section('content')
<div class="card w-75">
    <div class="card-body">
      <h1 class="card-title" style = "font-size: 2em">User Information</h1>
        <br>
        <div class="form-group">
        <strong>Name:</strong>
        {{ $user->name }}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
      <div class="form-group">
        <strong>Roles:</strong>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
            @endforeach
        @endif
    </div>
      <a class="btn btn-primary" href="{{ route('users.index') }}">
        <i class="fas fa-arrow-left"></i>
    </a>
    </div>
  </div>
@endsection