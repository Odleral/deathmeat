@extends('layouts.app')

@section('title', 'Чеклист')

@section('content')
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
     			<h5>Добавить продукт</h5>
     		</div>
     		<div id="obj-inline" class="col-4">
     			<ul class="obj-inline  right-side">
     				<li class="obj-inline"><a class="btn btn-outline-success btn-sm">+Добавить</a></li>
     				<li class="obj-inline"><a class="btn btn-outline-danger  btn-sm">Удалить</a></li>
     			</ul>
     		</div>
     	</div>
     	<div class="accross-margin"></div>
          <form method="POST" action="/product/add/process">
            <input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token(); ?>">
            <div class="form-group">
              <label for="group">Группа продукта</label>
              <div class="row">
              <select id="group" name="_group" class="form-control col-4 right-margin" aria-describedby="groupHelp">
                <option value="Говядина">Говядина</option>
                <option value="Баранина">Баранина</option>
                <option value="Курица">Курица</option>
                <option value="Страусина">Страусина</option>
                <option value="Иное_мясо">Иное мясо</option>
                <option value="Иной_продукт">Иной продукт</option>
              </select>
            </div>
              <small id="groupHelp" class="form-text text-muted  right-margin">Продукты не мясного типа заносить в группу 'Иной продукт'.</small>
            </div>
             <div class="form-group">
                <label for="subgroup">Подгруппа</label>
                <div class="row">
                <textarea name="_subgroup" class="form-control col-6  right-margin" id="subgroup" rows="1"></textarea>
              </div>
            </div>
            <div class="form-group">
                <label for="name">Название</label>
                <div class="row">
                <textarea name="_name" class="form-control col-6  right-margin" id="name" rows="1"></textarea>
              </div>
            </div>
             <div class="form-group">
                <label for="value">Ед. измерения</label>
                <div class="row">
                <select name="_value" id="value" class="form-control col-4 right-margin">
                  <option value="мг">миллиграмм</option>
                  <option value="кг">килограмм</option>
                  <option value="цн">центнер</option>
                  <option value="тн">тонна</option>
                  <option value="шт">штучно</option>
                  <option value="мл">миллилитр</option>
                  <option value="лт">литр</option>
                  <option value="кв2">м2</option>
                  <option value="кв3">м3</option>
                </select>
              </div>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <div class="row">
                <textarea name="_price" class="form-control col-4  right-margin" id="price" rows="1"></textarea>
              </div>
            </div>
              
              <button id="_submit" name="submit" value="done" class="btn btn-outline-primary">Отправть</button>
          </form>
    </main>
  </div>

<script type="text/javascript">
</script>
@endsection

