
<div class="row">
    <div class="col-md-4 offset-2">
        <div class="form-group">
            {!! Form::label('title', 'Title :', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('employee', 'Employees:', ['class' => 'control-label']) !!}
            {!! Form::select('employees_id', $employees,null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md6 offset-4">
        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeHolder' =>'Your Description Here!']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2 offset-4">
        <div class="form-group">
            {!! Form::reset('Reset', ['class' => 'form-control btn btn-warning']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::submit($submitButton, ['class' => 'form-control btn btn-success']) !!}
        </div>
    </div>
    <div class="col-md-12">
        @include('errors.list')
    </div>
</div>