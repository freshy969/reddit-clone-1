@extends('layout')

@section('content')
	<div class="user-form">
		<h1 class="user-header">Login</h1>

		<form method="POST" action="/users/login">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
			
			<input class="wide-field" type="text" name="name" placeholder="Username" value="{{ session('name') }}" required autofocus>
			<input class="wide-field" type="password" name="password" placeholder="Password" required>

			<button type="submit" class="user-submit">Login</button>
		</form>

		<br/>
		<p id="login-error">{{ session('error') }}</p>
		
		<br/>
		<p>Don't have an account? <a href="/users/new">Create one here.</a></p>
	</div>
@stop