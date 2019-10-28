@extends('layouts.app')

@section('title', 'Чек-лист')

@section('content')
@if(isset($_COOKIE['IS_KAMRON?']))
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar  shadow p-3 mb-5 bg-white rounded ">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="/contact/add">
              <span data-feather="file"></span>
              <div class="btn btn-success btn-block">Добавить контакт</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">
              <span data-feather="file"></span>
              <div class="btn btn-warning btn-block">Чеклист продуктов</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/task/add">
              <span data-feather="file"></span>
              <div class="btn btn-success btn-block">Добавить задачу</div>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     	<div class="row">
     		<div class="col-8">
     			<h5>Чеклист</h5>
     		</div>
     		<div id="obj-inline" class="col-4">
     			<ul class="obj-inline right-side">
     				<li class="obj-inline"><a href="/product/add" class="btn btn-outline-success btn-sm">+Добавить</a></li>
     				<li class="obj-inline"><a class="btn btn-outline-danger btn-sm">Удалить</a></li>
     			</ul>
     		</div>
     	</div>
     	<div class="accross-margin"></div>
		<table class="table table-hover">
		<thead>
    	<tr>
      		<th scope="col">#ID</th>
      		<th scope="col">Группа</th>
      		<th scope="col">Подграппа</th>
      		<th scope="col">Название</th>
      		<th scope="col">Ед.измерения</th>
      		<th scope="col">Цена</th>
    	</tr>
  		</thead>
		
  		<tbody>
        @foreach($typeofproduct as $types)
    		<tr>
      			<th scope="row">{{$types->id}}</th>
      			<td>{{$types->group}}</td>
      			<td>{{$types->subgroup}}</td>
      			<td>{{$types->name}}</td>
      			<td>{{$types->value}}</td>
            <td>{{$types->price}}</td>
    		</tr>
        @endforeach
  		</tbody>
	</table>
    </main>
  </div>
  @else
  <h4 class="cent">Авторизация</h4>
	<div class="row cent">
	    <div class="col-md-offset-4 col-md-4">
	        <form class="cent" action="/" method="post">
	            <input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token()	; ?>">
	            <p><input class="form-control" name="mail" type="text" placeholder="Логин" /></p>
	            <p><input class="form-control" name="password" type="password" placeholder="Пароль	" /></p><br />
	            <p><input class="btn btn-primary" name="login_submit" type="submit" value="Войти" 	/></p><br />
	        </form>
	    </div>
	</div>
@endif
@endsection

