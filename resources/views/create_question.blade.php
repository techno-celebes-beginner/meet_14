@extends('layout.master')

@section('content')
	<form action="/pertanyaan" method="post">
		@csrf
		<input type="hidden" name="creator" value="1">
		<input type="text" name="question_title">
		<textarea name="question_content"></textarea>
		<input type="submit" value="Submit">
	</form>
@endsection