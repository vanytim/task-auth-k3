@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Registration Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @isset ($users)
                        @foreach ($users as $user)
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>  
                        @endforeach    
                    @endisset   
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection