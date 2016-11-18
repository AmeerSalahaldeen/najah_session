@extends('layouts.app')
  @section('content')
    <section class="content">

<div class="pull-right">
  <a class="btn btn-small btn-success " href="{{ URL::to('checkpoints/create') }}"><span class="glyphicon glyphicon-plus"></span> Create</a>
  </div>
  <br>
  <hr>
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
                    <th>Location</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($checkPoints as $checkpoint)
                    <tr>
                      <td><a href = "/checkpoints/{{$checkpoint->id}}">{{$checkpoint->name}}</a></td> 
                      <td>{{$checkpoint->location}}</td>
                      <td>
                          {{ Form::open(array('url' => 'checkpoints/' . $checkpoint->id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                          {{ Form::close() }} 
                      </td>
                      <td>  
                      <a class="btn btn-small btn-info" href="{{ URL::to('checkpoints/' . $checkpoint->id . '/edit') }}">Edit</a>

                      </td>
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
