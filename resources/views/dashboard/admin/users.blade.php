@extends('dashboard.layout')

@section('sidebar')
    @include('dashboard.admin.sidebar')
@endsection

@section('content')
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Users
                </header>
                <div class="panel-body">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>username</th>
                                <th>email</th>
                                <th>user group</th>
                                <th>is active</th>
                                <th colspan="2">Control</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->group_name}}</td>
                                <td>@if($user->is_active == 1) Active @else Not Active @endif</td>

                                <td><button type="button" class="btn btn-primary"><a href="{{url('admin/users/'.$user->id.'/edit')}}">Update</a></button></td>
                                <td><button type="button" class="btn btn-danger"><a href="{{url('admin/users/'.$user->id)}}">Delete</a></button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
@endsection