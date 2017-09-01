<h1>Test</h1>
<form method='post' action='form/post'>
	username:<input type='text' name='username' >
	age:<input type='text' name='age'>
	email:<input type=text' name='email'>
	<input type='submit' value='get a post required'>
</form>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif