@extends('layouts.app')

@section('title', 'Добавить задачу')

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
              <div class="btn btn-success btn-block">Чеклист продуктов</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/task/add">
              <span data-feather="file"></span>
              <div class="btn btn-warning btn-block">Добавить задачу</div>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h3>Добавить задачу</h3>
    <form action="/task/message" method="POST">
	<input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
    	<div class="col">
				<div><label for="contact" class="dsp-inline">Контакт</label><div class="dep dsp-inline">*</div></div>
				<select id="contact" name="contact_id" class="form-control">
					@foreach($contacts as $contact)
						<option value="{{$contact->id}}">{{$contact->surname}} {{$contact->name}}</option>
					@endforeach
				</select>
    	</div>
    	<div class="col">
    		<div><label for="subject" class="dsp-inline"> </label><div class="dep dsp-inline"></div></div>
    		<select id="subject" class="form-control" name="subject">
    			<option value="поставщик">Поставщик</option>
    			<option value="покупатель">Покупатель</option>
    		</select>
    	</div>
    	<div class="col">
    		
    	</div>
    </div>
    <hr>
    <h5>Товары</h5>
    <table class="table table-striped">
    	<thead class="thead-dark">
    		<tr>
      			<th scope="col">#</th>
      			<th scope="col">Включить</th>
      			<th scope="col">Продукт</th>
      			<th scope="col">Вес/Ед.</th>
    		</tr>
    	</thead>
    	<tbody>
    		@for ($i = 1; $i <= 10; $i++)
         <tr>
      			<th scope="row">{{$i}}</th>
      	     <td>
      				<div class="form-check">
  						<input class="form-check-input" type="checkbox" name="defaultCheck{{$i}}" id="defaultCheck{{$i}}">
					</div>
      			</td>
      			<td>
      				<select id="name{{$i}}" name="name{{$i}}"  class="form-control">
      					@foreach($products as $product)
                  <option value="{{$product->name}}">{{$product->name}}</option>
      					@endforeach
      				</select>
      			</td>
      			<td>
      				<input type="text" name="number{{$i}}" class="form-control">
      			</td>
    		</tr>
    		@endfor
    	</tbody>
    </table>
    <hr>
    <div class="row">
    	<div class="col-4">
    		<input type="submit" name="done" value="Отправить" class="form-control btn btn-primary">
    	</div>
      <div class="col-8">
      </div>
    </div>
    </form>
  </main>
</div>
<script type="text/javascript">
  let pre, on;
	$("#tr1").css('display', 'inline-table');
  let cow = ["Мол сони","Бука сони","Мол гушти", "Мол гушти лахм", "Мол передок", "Бука передок", "Мол буйни", "Мол корейка", "Мол думи", "Мол лента", "Шапок", "Тараш", "Голяшка"];
  let sheep = ["Бутун куй", "Куй кули", "Куй сон", "Куй корейка", "Куй передок", "Куй лента", "Куй гушти", "Думба", "Чарви"];
  let hen = ["Товук", "Товук гушти", "Токук филе", "Товук голень", "Товук канот"];
  let mar = ["Маринованное мясо", "Маринованное куриное мясо", "Маринованное куриное филе", "Маринованные куриные крылашки(завод)", "Маринованные куриные крылашки", "Маринованная куриная голень", "Маринованная баранье корейка", "Маринованный Бон филе стейк", "Маринованный Риббай стейк", "Маринованный Антрекод стейк", "Маринованный Т-бон стейк", "Маринованный говяжий топор"];
</script>
@endsection