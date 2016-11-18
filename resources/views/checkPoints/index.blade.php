@extends('layouts.app')
  @section('content')
    <section class="content">
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
                <a   data-id="{{$checkpoint->id}}"  data-toggle="modal" data-target="#deleteCheckPoint" class=" confirm-delete btn btn-danger"  style =" border-radius: 100%">
                  <i class="fa fa-remove"></i>
                </a>

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



<div class="modal fade" id="deleteCheckPoint" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
{!! Form::open(['method' => 'DELETE', 'url' => "/checkpoints/", 'class' => 'form-horizontal' ,'id' => 'deleteForm']) !!}
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">
              Delete CheckPoint</h4>
          </div>
            <div class="modal-body">
          <p>Are  you sure you want to Delete this CheckPoint ?</p>
           </div>
          
          <div class="modal-footer">
      {!! Form::reset("Cancel", ['class' => 'btn btn-primary']) !!}
      {!! Form::submit("Delete", ['class' => 'btn btn-danger']) !!}
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
