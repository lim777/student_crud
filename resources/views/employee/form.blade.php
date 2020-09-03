<span class="text-info"><i class="fas fa-info"></i> Personal</span><br>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('name', 'Gender :', ['class' => 'control-label']) !!}
            <fieldset>
                <table style="width: 100%; margin-top: 9px;">
                    <tr style="border-bottom: 1px solid #ccc">
                        <td>
                            <label>
                                {!! Form::radio('gender', 'male', null,  ['id' => 'gender']) !!}
                                Male
                            </label>
                        </td>
                        <td>
                            <label>
                                {!! Form::radio('gender', 'female', null,  ['id' => 'gender']) !!}
                                Female
                            </label>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('dob', 'Data of Birth', ['class' => 'control-label']) !!}
            {!! Form::date('dob', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="panel-heading" style="margin-top: 20px;">
    <span class="text-info"> <i class="fas fa-address-book"> Address</i></span>
    <div class="panel-body" style="padding-bottom: 10px; margin-top: 0;">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('village', 'Village:', ['class' => 'control-label']) !!}
                    {!! Form::text('village', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('commune', 'Commune:', ['class' => 'control-label']) !!}
                    {!! Form::text('commune', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('district', 'District:', ['class' => 'control-label']) !!}
                    {!! Form::text('district', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('province', 'Province:', ['class' => 'control-label']) !!}
                    {!! Form::text('province', null, ['class' => 'form-control']) !!}
                </div>
            </div>
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