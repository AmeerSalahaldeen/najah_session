@extends('layouts.app')

@section('content')
<div class="col-md-offset-2 col-md-8">
<? echo Form::open(['url' => 'checkpoints','method'=> 'POST']); ?>
  
  <div class="form-group">
    {{ Form::label('Name', null, ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Name']) }}
  </div>
  <br>
  <div class="form-group">
    {{ Form::label('Location', null, ['class' => 'control-label']) }}
    {{ Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location']) }}
    </div>
<? echo Form::submit('Save', ['class' => 'btn btn-success']);?>
<? echo Form::close(); ?>
</div>
@endsection
