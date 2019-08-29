@extends('index')

@section('title')
    Manage Users
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Users</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.create') }}" style = "font-weight: bold"> Create New User</a>
        </div>
    </div>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-light">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="190px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-success" href="{{ route('users.show',$user->id) }}"><i class="fas fa-eye"></i></a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="far fa-edit"></i></a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
              <button class = "btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
{!! $data->render() !!}
@endsection