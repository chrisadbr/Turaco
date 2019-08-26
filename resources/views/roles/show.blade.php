@extends('index')

@section('title')
Show roles
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title" style = "font-size: 2em">Show Role</h1>
          <br>
          <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
          <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection