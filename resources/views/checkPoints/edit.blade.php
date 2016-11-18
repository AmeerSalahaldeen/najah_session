@extends('layouts.app')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-md-offset-2 col-md-8">
<? echo Form::open(['url' => 'checkpoints/'.$checkPoint->id,'method'=> 'PUT']); ?>
  
  <div class="form-group">
    {{ Form::label('Name', null, ['class' => 'control-label']) }}
    {{ Form::text('name', $checkPoint->name, ['class' => 'form-control', 'placeholder'=> 'Name']) }}
  </div>
  <br>
  <div class="form-group">
    {{ Form::label('Location', null, ['class' => 'control-label']) }}
    {{ Form::text('location', $checkPoint->location, ['class' => 'form-control', 'placeholder' => 'Location']) }}
    </div>
<? echo Form::submit('Save', ['class' => 'btn btn-success']);?>
<? echo Form::close(); ?>
</div>
@endsection
