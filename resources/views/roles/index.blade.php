@extends('index')

@section('title')
Manage Roles
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Roles</h2>
        </div>
        <div class="pull-right">
        @can('create')
            <a class="btn btn-primary" href="{{ route('roles.create') }}" style="font-weight:bold"> Create New Role</a>
        @endcan
        </div>
    </div>
</div>
<br>
@if ($message = Session::get('success'))
    <div class="alert alert-info">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-light">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="190px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}"><i class="fas fa-eye"></i></a>
            @can('edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">
                <i class="far fa-edit"></i>
                </a>
            @endcan
            @can('delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                   {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                   <button class = "btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
@endforeach
</table>
{!! $roles->render() !!}
@endsection