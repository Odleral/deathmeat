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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Добро пожаловать!</h1>
        <!--<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>-->
      </div>
    </main>
  </div>
@else
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4481610-59', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39705265 = new Ya.Metrika({ id:39705265, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript> <!-- /Yandex.Metrika counter -->
<div class="row">
  <div class="col-3"></div>
  <div class="col-6"> 
  <form class="form-signin" action="/auth" method="POST">
  <input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token()  ; ?>">
  <h1 class="h3 mb-3 font-weight-normal center">Авторизация</h1>
  <label for="inputEmail" class="sr-only">Электронная почта</label>
  <input type="mail" name="mail" id="Email" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" class="sr-only">Пароль</label>
  <input name="password" type="password" id="assword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Запомнить
    </label>
  </div>
  <input type="submit" name="login_submit" value="Войти" class="btn btn-primary">
</form></div>
<div class="col-3"></div>
</div>
    
@endif
@endsection
 