<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	@include('includes.header')

<main>
		<div class="comments">
			@foreach ($users as $user)
			<div class="comments__item">
				<div class="name_time">
					<div class="name">{{$user->name}}</div>
					<div class="time_day">
						<div class="time">{{$user->created_at}}</div>
					</div>
				</div>
				<div class="comment">
					{{$user->text}}
				</div>
			</div>
			@endforeach
		<form action="{{ route('insert') }}" method="post" class="form_section">
			{{ csrf_field() }}
			<h2>Оставить комментарий</h2>
			<div class="form_section__item">
				<label for="form_section__item_input" class="form_section__item_desc">Ваше имя</label>
				<input name="form_section__item_input" id="form_section__item_input" class="form_section__item_input_name" type="text" name="name" placeholder="Герасим">
			</div>
			<div class="form_section__item">
				<label for="form_section__item_textarea" class="form_section__item_desc">Ваш комментарий</label>
				<textarea name="form_section__item_textarea" id="form_section__item_textarea" class="form_section__item_input_text"></textarea>
				<input class="form_section__item_button" type="submit" name="button" id="button" value="Отправить">
			</div>
		</form>
		@if($errors->any())
		<div class="alert-danger">
			<ul>
			@foreach($errors->all() as $error)
                <li class="alert_item">{{$error}}</li>
         	@endforeach
			</ul>
		</div>
		@elseif (session()->has('notif'))

		<div class="alert">
			<div class="alert">{{session()->get('notif')}}</div>
		</div>
		@endif
</main>


	@include('includes.footer')	
</body>
</html>