<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</script>
<style>
	html {
  		position: relative;
 		min-height: 100%;
	}
	body {
 	 /* Margin bottom by footer height */
	  margin-bottom: 120px;
	}
	#footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 120px;
	  background-color: #ffffff;
	}

	.btLr{
		cursor: pointer;
	}
	.dep{
		color: red;
	}
	.dsp-inline{
		display: inline-block;
	}
	#success{
		display: none;
	}
	.hide{
		display: none;
	}

	.obj-inline{
		display: inline;
		margin-bottom: 2px;
	}
	.accross-margin{
		height: 5px;
	}
	.right-margin{
		margin-left: 20px;
	}

	.right-side{
		float:right;
	}
	.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	textarea {
    resize: none; /* Запрещаем изменять размер */
   }
   .center{
   	align:center;
   }
</style>
<title>DeathMeat - @yield('title')</title>
</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  	<img src="/logo_128.jpg" class="my-0 mr-md-auto font-weight-normal">
  <nav class="my-2 my-md-0 mr-md-3">
  	<a class="p-2 text-dark" href="/">Главная</a>
    @if(isset($_COOKIE['IS_KAMRON?']))
    <a class="p-2 text-dark" href="/tasks">Список задач</a>
    <a class="p-2 text-dark" href="/contacts">Список контактов</a>
    @endif
    <a class="p-2 text-dark" href="#">Документация</a>
  </nav>
  
  	@if(isset($_COOKIE['IS_KAMRON?']))
  	<a class="btn btn-outline-primary" href="/welcome/exit">Выйти</a>
	@else
	<a class="btn btn-outline-primary" href="/welcome">Войти</a>
	@endif
</div>
	<div class="container-fluid">
		@yield('navbar')
		@yield('content')
	</div>
<footer id="footer">
		<hr>
		<div class="row ">
			<div class="col-7">
			
			</div>
			<div class="col-1">
				<img class="right-side" src="/img/img_001.png" width="70" height="70">
			</div>
			<div class="col-4">
				<p class="blockquote-footer">Система учета товарных остатоков, уведомление покупателей и поставщиков DeathMeat™ 2019.</p>
			</div>
		</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        </body>
</body>
</html>