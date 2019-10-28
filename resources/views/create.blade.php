@extends('layouts.app')

@section('title', 'Главная')

@section('content')
@if(isset($_COOKIE['IS_KAMRON?']))
<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar  shadow p-3 mb-5 bg-white rounded ">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="/contact/add">
              <span data-feather="file"></span>
              <div class="btn btn-warning btn-block">Добавить контакт</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">
              <span data-feather="file"></span>
              <div class="btn btn-success btn-block">Чеклист продуктов</div>
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
	<h3>Создание контакта</h3>
	<form action="/contact/create" method="POST">
		<input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token(); ?>">
		<div class="form-group">
			<div class="row">
			<div class="col">
				<div><label for="surnameText" class="dsp-inline">Фамилия</label><div class="dep dsp-inline">*</div></div>
				<input type="text" name="surname" class="form-control" id="surnameText" placeholder="">
			</div>
			<div class="col">
				<div><label for="nameText" class="dsp-inline">Имя</label><div class="dep dsp-inline">*</div></div>
				<input type="text" name="name" class="form-control" id="nameText" placeholder="">
			</div>
			<div class="col">
				<label for="fnameText" >Отчество</label>
				<input type="text" name="fname" class="form-control" id="fnameText" placeholder="">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div><label for="organizationText" class="dsp-inline">Организация</label><div class="dep dsp-inline">*</div></div>
				<input type="text" name="organization" class="form-control" id="organizationText" placeholder="">
			</div>
			<div class="col">
				<div><label for="phoneText" class="dsp-inline">Телефон</label><div class="dep dsp-inline">*</div></div>
				<input type="text" name="phone" class="form-control" id="phoneText" placeholder="">
			</div>
			<div class="col">
				<label for="emailText" >Электронная почта</label>
				<input type="text" name="email" class="form-control" id="emailText" placeholder="">
			</div>
			</div>
			<br>
		<div class="row">
			<div class="col">
				<div class="dep dsp-inline">*</div><label>поля с обязательным заполнением</label></div>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				
				<input type="submit" class="btn btn-primary btLr" name="Button" id="button" value="Отправить">
			</div>
			<div class="col-10">
				<div class="alert alert-success"  id="success">Контакт успешно создан</div>
		</div>
		</div>
	</form>
</div>
</main>
  </div>
  @else
  <h4 class="cent">Авторизация</h4>
  <div class="row cent">
      <div class="col-md-offset-4 col-md-4">
          <form class="cent" action="/auth" method="post">
              <input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token()  ; ?>">
              <p><input class="form-control" name="mail" type="text" placeholder="Логин" /></p>
              <p><input class="form-control" name="password" type="password" placeholder="Пароль  " /></p><br />
              <p><input class="btn btn-primary" name="login_submit" type="submit" value="Войти"   /></p><br />
          </form>
      </div>
  </div>
@endif
<script>
	/*//alert();
	const varMsg = 'Не заполнены обязательные поля';
	let varVal=true;
	$.ajaxSetup({
  		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
	});
	document.getElementById('doneButton').onclick = function(){
		$(document).ready(function()
		{
    		let array = new Map([
    			['surname',document.getElementById('surnameText').value],
    			['name',document.getElementById('nameText').value],
    			['organization',document.getElementById('organizationText').value],
    			['phone',document.getElementById('phoneText').value]
    		]);

    		let secondaryArr = new Map([
    			['fname', document.getElementById('fnameText').value],
    			['email', document.getElementById('emailText').value]
    			]);

    		for (let key of array.keys()) {
  				if(array.get(key)==''){
  					alert(varMsg);
  					break;
  				}
  				else{
  					console.log('Готово');
  				}
			}

    		$.ajax({ 
      		url: "/contact/create", 
    		//dataType: "json", // Для использования JSON формата получаемых данных
       		method: "POST", // Что бы воспользоваться POST методом, меняем данную строку на POST   
    		data: {'_token':document.getElementById('token').value,"surname": array.get('surname'),"name": array.get('name'), "organization":array.get('organization'), "phone":array.get('phone'), "fname": secondaryArr.get('fname'), "email":secondaryArr.get('email')},
       		success: function(data) {	
       			$("#success").css("display","inline");
       			document.getElementById('surnameText').value='';
       			document.getElementById('nameText').value='';
       			document.getElementById('phoneText').value='';
       			document.getElementById('organizationText').value='';
       			document.getElementById('emailText').value='';
       			document.getElementById('fnameText').value='';
 			 // Возвращаемые данные выводим в консоль
       } 
 });
});
	};*/
</script>
@endsection