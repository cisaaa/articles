{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex. Tips']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>
{!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}