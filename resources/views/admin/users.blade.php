@extends('adminlte::page')
@section('title', 'User')
@section('content')
<table class="table">
    <head>
        <tr>
            <th>id </th>
            <th>name </th>
            <th>email </th>
            <th>role </th>
            <th>phone</th>
            <th>Action</th>
        </tr>
    </head>
    <body>
        @foreach ($users as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->phone }}</td>
                <td> <x-delete-button action="{{ route('Admin_Home_page' , ['id'=>$user->id]) }}"></x-delete-button> </td>

            </tr>
        @endforeach
    </body>
</table>



@endsection

