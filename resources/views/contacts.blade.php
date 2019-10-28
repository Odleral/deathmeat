@extends('layouts.app')

@section('title', 'Список контактов')
@section('content')
	<h3>Список контактов</h3>
	<table class="table table-hover">
	<thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Организация</th>
      <th scope="col">Телефон</th>
    </tr>
  	</thead>
	@foreach($contacts as $contact)
  	<tbody>
    <tr>
      <th scope="row">{{$contact->id}}</th>
      <td>{{$contact->surname}}</td>
      <td>{{$contact->name}}</td>
      <td>{{$contact->organization_name}}</td>
      <td>{{$contact->phone}}</td>
    </tr>
  	</tbody>
	@endforeach
	</table>
@endsection
