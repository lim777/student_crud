@extends('layout.master')
@section('title', 'Edit-form-student')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text-primary text-center">Form Edit Student</h3>
        <a href="{{route('students')}}" class="btn btn-primary btn-sm float-right">Back</a>
        <hr>

        <div class="box">
            {!! Form::model($student,['route' => ['students.update', $student->id]], ['method' => 'post'], ['class' => 'form-horizontal']) !!}
                {{csrf_field()}}
                {{method_field('put')}}
               @include('students.form')

                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                {!! Form::reset('Clear', ['class' => 'btn btn-default']) !!}

            
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection