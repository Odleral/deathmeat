@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
	<div class="container">
		<h4>Список задач</h4>
		</br>
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
      				<th scope="col">#ID</th>
      				<th scope="col">Ф.И.О</th>
      				<th scope="col">Номер</th>
      				<th scope="col">Время создания</th>
      				<th scope="col">Время отправления</th>
      				<th scope="col">Статус</th>
    			</tr>
			</thead>
			<tbody>
				@foreach($tasks as $task)
					<tr>
						<th>{{$task->id}}</th>
						<td><?php
							foreach ($contacts as $contact) {
								if($contact->id==$task->contact_id)
									echo $contact->surname." ".$contact->name."</br> ".$contact->fname;
							}
						?></td>
						<td><?php
							foreach ($contacts as $contact) {
								if($contact->id==$task->contact_id)
									echo $contact->phone;
							}
						?></td>
						<td>
							{{$task->task_create}}
						</td>
						<td>
							{{$task->task_deliver}}
						</td>
						<td>
							<?php
								if($task->is_delivered)
									$status = "done.png";
								else
									$status = "wait.png";
							?>
							<img alt="status" src="/public/{{$status}}">
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection