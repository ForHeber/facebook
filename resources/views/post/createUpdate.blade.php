@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif

				@if (Session::has('message'))
				    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						 </button>
							{{ Session::get('message') }}</div>
				@endif

				<div class="panel-body">
					{!! Form::open(['route' => 'post.store']) !!}

							<div class="form-group">
								{!! Form::text('title', null, ["class" => "form-control"]) !!}
							</div>

							<div class="form-group">
								{!! Form::textarea('body', null,
										['class'=>'form-control', 'placeholder'=>'Body'])
								!!}
							</div>

							<div class="form-group">
								{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
							</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
