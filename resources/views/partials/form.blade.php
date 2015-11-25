<div class="form-group @if($errors->first('name')) has-error @endif">
    {!! Form::label('name', 'Title') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
<div class="form-group @if($errors->first('author')) has-error @endif">
    {!! Form::label('author', 'Author') !!}
    {!! Form::text('author', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('author') }}</small>
</div>
<div class="form-group @if($errors->first('description')) has-error @endif ">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>
<div class="form-group">
    {!! Form::submit("$submitFormTitle", ['class' => 'btn btn-info pull-right']) !!}
</div>