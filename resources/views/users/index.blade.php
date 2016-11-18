@extends('layouts.app')
  @section('content')
    <section class="content">

<div class="pull-right">
  <a class="btn btn-small btn-success " href="{{ URL::to('checkpoints/create') }}"><span class="glyphicon glyphicon-plus"></span> Create</a>
  </div>
  <br>

    @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

      <div class="row col-md-offset-2 col-md-8">
        <div class="">
          <div class="box">
            <div class="box-body  form-inline">
              <table  class="table bordered ">
                <thead>
                  <tr class= "info">
                    <th>Name</th>
                    <th>email</th>
                    <th>Created at</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                      @if ($user->active)
                      <td>
                        <a class="btn btn-small btn-danger" href="{{ URL::to('admin/users/' . $user->id . '/disable') }}">Disable</a>
                      </td>
                      @else
                      <td>
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/users/' . $user->id . '/enable') }}">Enable</a>
                      </td>
                      @endif
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
