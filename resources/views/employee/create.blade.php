@extends('layouts.master')

@section('title')
    Employee |  Create new 
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Employees Registration</h4>
                    <a href="{{route('employees.index')}}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-alt-circle-left"> Back</i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        {!! Form::open(['route' => 'employees.store', 'method' => 'post']) !!}
                        @include('employee.form', ['submitButton' => 'Save'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop