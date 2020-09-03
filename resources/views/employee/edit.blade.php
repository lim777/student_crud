@extends('layouts.master')

@section('title')
    Employee | Edit Info
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Employees Update Information</h4>
                    <a href="{{route('employees.index')}}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-alt-circle-left"> Back</i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        {!! Form::model($employees, ['route' => ['employees.update', $employees->id], 'method' => 'PATCH']) !!}
                        @include('employee.form', ['submitButton' => 'Update'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop