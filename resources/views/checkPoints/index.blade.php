@extends('layouts.app')
  @section('content')
    <section class="content">

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
                         {{ Form::open(array('url' => 'checkpoints/' . $checkpoint->id, 'class' => 'pull-right')) }}
                          {{ Form::hidden('_method', 'DELETE') }}
                          {{ Form::submit('Delete this Checkpoint', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }} 
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
