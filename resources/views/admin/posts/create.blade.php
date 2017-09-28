@extends('layouts.app')


@section ('content')

<div class="panel panel-default">
	
	<div class="panel-heading">
		
		Create new news 

	</div>

	<div class="panel-body">
		<form action="{{route('post.store')}}" method="post">

		{{ csrf_field()}}

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">

			</div>

			<div class="form-group">
				
				<label for="content"> Content </label>

				<textarea class="form-control" rows="5" cols="5"></textarea>

			</div>

			<div class="form-group">

				<div class="text-center">
					
					<button class="btn btn-success">Store News</button>


				</div>

			</div>
			



		</form>
		

	</div>


</div>


@endsection