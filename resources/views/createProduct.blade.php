<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
</script>
<style>
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
</style>
</head>
<body>
	<div class="container">
	<h3>Добавить продукт</h3>
	<form action="/create/contact" method="POST">
		<input type = "hidden" name = "_token" id="token" value = "<?php echo csrf_token(); ?>">
		<div class="form-group">
				<hr>
				<div class="row">
					<div class="col">
						<div><label for="ProductClassification" class="dsp-inline">Тип продукта</label><div class="dep dsp-inline">*</div></div>
						<select class="form-control" id="ProductClassification" size="1" required>
							<option value="none" selected></option>
							<option value="Мясо и субпродукты">Мясо и субпродукты</option>
							<option value="Рыбные">Рыбные</option>
							<option value="Травы">Травы</option>
							<option value="Овощи">Овощи</option>
						</select>
					</div>
					<div class="col">
						<div id="chooseOfMeatClass" class="hide">
							<div><label for="classOfMeat" class="dsp-inline">Класс продукта</label><div class="dep dsp-inline">*</div></div>
							<select class="form-control" id="classOfMeat" size="1" required>
								<option value="говядина" selected>Говядина</option>
								<option value="баранина">Баранина</option>
								<option value="курятина">Курятина</option>
								<option value="маринованное мясо">Маринованное мясо</option>
							</select>
						</div>
						<div id="productClassInput" class="hide">
							<div><label for="classOfProduct" class="dsp-inline">Класс продукта</label><div class="dep dsp-inline">*</div></div><input type="text" id="classOfProduct" class="form-control">
						</div>
					</div>
			</div>
			<hr>
				<div id="chooseSubclass">
					<div id="cow" class="hide">
						<div class="row">
							<div class="col">
								<div><label for="cowMeatChoose" class="dsp-inline">Подкласс продукта</label><div class="dep dsp-inline">*</div></div>
								<select id="cowMeatChoose" class="form-control">
									<option value="Мол сони" selected>Мол сони</option>
									<option value="Бука сони">Бука сони</option>
									<option value="Мол гушти">Мол гушти</option>
									<option value="Мол гушти лахм">Мол гушти лахм</option>
									<option value="Мол передок">Мол передок</option>
									<option value="Бука передок">Бука передок</option>
									<option value="Мол буйин">Мол буйин</option>
									<option value="Мол корейка">Мол корейка</option>
									<option value="Мол думи">Мол думи</option>
									<option value="Мол лента">Мол лента</option>
									<option value="Шапок">Шапок</option>
									<option value="Тараш">Тараш</option>
									<option value="Быкын">Быкын</option>
									<option value="Голяшка">Голяшка</option>
								</select>
							</div>
							<div class="col">
							</div>
							<div class="col">
							</div>
						</div>
					</div>
					<div id="sheep" class="hide">
						<div class="row">
							<div class="col">
								<div><label for="sheepMeatChoose" class="dsp-inline">Подкласс продукта</label><div class="dep dsp-inline">*</div></div>
								<select id="sheepMeatChoose" class="form-control">
									<option value="Бутун куй" selected>Бутун куй</option>
									<option value="Куй кули">Куй кули</option>
									<option value="Куй буйни">Куй буйни</option>
									<option value="Куй сон">Куй сон</option>
									<option value="Куй корейка">Куй корейка</option>
									<option value="Куй передок">Куй передок</option>
									<option value="куй лента">Куй лента</option>
									<option value="Куй гушти">Куй гушти</option>
									<option value="Думба">Думба</option>
									<option value="Чарви">Чарви</option>
								</select>
							</div>
							<div class="col">
							</div>
							<div class="col">
							</div>
						</div>
					</div>
					<div id="hen" class="hide">
						<div class="row">
							<div class="col">
								<div><label for="henMeatChoose" class="dsp-inline">Подкласс продукта</label><div class="dep dsp-inline">*</div></div>
								<select id="henMeatChoose" class="form-control">
									<option value="Товук" selected>Товук</option>
									<option value="Товук гушти">Товук гушти</option>
									<option value="Товук филе">Товук филе</option>
									<option value="Товук голень">Товук голень</option>
									<option value="Товук канот">Товук канот</option>
								</select>
							</div>
							<div class="col">
							</div>
							<div class="col">
							</div>
						</div>
					</div>
					<div id="pickled" class="hide">
						<div class="row">
							<div class="col">
								<div><label for="pickledMeatChoose" class="dsp-inline">Подкласс продукта</label><div class="dep dsp-inline">*</div></div>
								<select id="pickledMeatChoose" class="form-control">
									<option value="Маринованное мясо" selected>Маринованное мясо</option>
									<option value="Маринованное куриное мясо">Маринованное куриное мясо</option>
									<option value="Маринованное куриное филе">Маринованное куриное филе</option>
									<option value="Маринованные куриные крылышки (завод)">Маринованные куриные крылышки (завод)</option>
									<option value="Маринованные куриные крылышки">Маринованные куриные крылышки</option>
									<option value="Маринованная куриная голень">Маринованная куриная голень</option>
									<option value="Маринованная баранье корейка">Маринованная баранье корейка</option>
									<option value="Маринованная Бон филе стейк">Маринованная Бон филе стейк</option>
									<option value="Маринованный Риббай стейк">Маринованный Риббай стейк</option>
									<option value="Маринованный Антрекод стейк">Маринованный Антрекод стейк</option>
									<option value="Маринованный Т-бон стейк">Маринованный Т-бон стейк</option>
									<option value="Маринованный говяжий топор">Маринованный говяжий топор</option>
								</select>
							</div>
							<div class="col">
							</div>
							<div class="col">
							</div>
						</div>
					</div>
				</div>
				<!--<div class="row"><div class="col-3"><label for="subclass" class="dsp-inline">Подкласс продукта</label><input type="text" id="subclass" class="form-control"></div><div class="col-9"></div></div><hr><div class="row"><div class="col"><label>Срок годности продукта</label></div></div><div class="row"><div class="col-1"><label for="shelfYear">Год</label><input type="number" id="shelfYear" value="0" class="form-control" min="0" max="999" step="1"></div><div class="col-1"><label for="shelfMonth">Месяц</label><input type="number" id="shelfMonth" value="0" class="form-control" min="0" max="12" step="1"></div><div class="col-1"><label for="shelfDay">Сутки</label><input type="number" id="shelfDay" value="0" class="form-control" min="0" max="31" step="1"></div><div class="col-1"><label for="shelfHour">Часы</label><input type="number" id="shelfHour" value="1" class="form-control" min="1" max="24" step="1"></div><div class="col-8"></div></div><br><div class="row"><div class="col"><div class="dep dsp-inline">*</div><label>поля с обязательным заполнением</label></div></div>-->
				<hr>
				<br>
		<div class="row">
			<div class="col-2">
				<div id="doneButton" name="Button" class="btn btn-primary btLr">Отправить</div>
			</div>
			<div class="col-10">
				<div class="alert alert-success" id="success">Продукт успешно довавлен</div>
		</div>
		</div>
	</form>
</div>
<script>
	let secondData = false;
	$(function(){
	$('#ProductClassification').trigger('change'); //This event will fire the change event. 
    $('#ProductClassification').change(function(){

      let data = $(this).val();

      	switch(data){
      		case 'Мясо и субпродукты':
      			$("#productClassInput").css("display", "none");
      			$("#chooseOfMeatClass").css("display", "inline");
      			$('#cow').css("display","inline");
      			secondData=true;
      			break;
      		case 'Рыбные':
      			$("#chooseOfMeatClass").css("display", "none");
      			$("#productClassInput").css("display", "inline");
      			$('#cow').css("display","none");
      			$('#sheep').css("display","none");
      			$('#hen').css("display","none");
      			$('#pickled').css("display","none");
      			secondData=false;
      			break;
      		case 'Травы':
      			$("#chooseOfMeatClass").css("display", "none");
      			$("#productClassInput").css("display", "inline");
      			$('#cow').css("display","none");
      			$('#sheep').css("display","none");
      			$('#hen').css("display","none");
      			$('#pickled').css("display","none");
      			secondData=false;
      			break;
      		case 'Овощи':
      			$("#chooseOfMeatClass").css("display", "none");
      			$("#productClassInput").css("display", "inline");
      			$('#cow').css("display","none");
      			$('#sheep').css("display","none");
      			$('#hen').css("display","none");
      			$('#pickled').css("display","none");
      			secondData=false;
      			break;
      		default:
    			alert( "Нет таких значений" );
      	}           
    });
});
	
	$(function(){
		$('#classOfMeat').trigger('change');
		$('#classOfMeat').change(function(){
			
			let data2 = $(this).val();
			
			switch(data2){
				case 'говядина':
					$('#cow').css("display", "inline");
					$('#sheep').css("display", "none");
					$('#hen').css("display", "none");
					$('#pickled').css("display", "none");
					break;
				case 'баранина':
					$('#cow').css("display", "none");
					$('#sheep').css("display", "inline");
					$('#hen').css("display", "none");
					$('#pickled').css("display", "none");
					break;
				case 'курятина':
					$('#cow').css("display", "none");
					$('#sheep').css("display", "none");
					$('#hen').css("display", "inline");
					$('#pickled').css("display", "none");
					break;
				case 'маринованное мясо':
					$('#cow').css("display", "none");
					$('#sheep').css("display", "none");
					$('#hen').css("display", "none");
					$('#pickled').css("display", "inline");
					break;
				default:
					alert('Нет таких значений');
			}
		});
	});
	const varMsg = 'Заполните обязательные поля';
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
      		url: "/create/contact", 
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
	};
</script>
</body>
</html>