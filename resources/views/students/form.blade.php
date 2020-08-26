<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Student Name']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Gender', ['class' => 'control-label']) !!}
    {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'],null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Phone', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ['class' => 'form-control','placeholder' => '0965176482']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Address', ['class' => 'control-label']) !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>