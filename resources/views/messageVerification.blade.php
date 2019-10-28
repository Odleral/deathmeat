@extends('layouts.app')

@section('title', 'Добавить задачу')

@section('content')
	<div class="container">
		<h4>Добавить задачу</h4>
		</br>
	<form action="/task/seed" method="POST" class="form">
		<input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token(); ?>">
		<input type="hidden" name="contactId" id="contactId" value="{{$POST['contact_id']}}">
		 <dl class="row">
		 	<dt class="col-sm-3">
		 		Сообщение на номер {{$contactPhone}}
		 	</dt>
		 	<dd class="col-sm-9">
		 		<textarea autofocus class="form-control" id="message" name="message" rows="6">{{$message}}</textarea>
		 	</dd>
		 </dl>
		 <dl class="row">
		 	<dt class="col-sm-3">
		 	</dt>
		 	<dd class="col-sm-9">
		 		<input type="submit" name="done" value="Создать" class="btn btn-primary">
		 	</dd>
		 </dl>
	</form>
	</div>
@endsection