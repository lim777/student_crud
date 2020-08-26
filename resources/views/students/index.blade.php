@extends('layout.master')
@section('title', 'student')
@section('content')
        <!-- Content Header (Page header) -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Students Information</li>
                            </ol>
                        </div>
                    </div>
                </section>
        <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('students.create')}}" class="btn btn-primary btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>Add New</a>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (\Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>{{ \Session::get('success') }}</strong>
                                </div>
                            @endif
                            <div class="table table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>gender</th>
                                        <th>phone</th>
                                        <th>address</th>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    @foreach($students as $student)
                                        <tbody>
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->gender}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>{{$student->address}}</td>
                                            <td>
                                                <a href="{{route('students.edit', $student->id)}}" class="nav-link">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                                <form action="{{route('students.destroy',$student->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('delete')}}
                                                    <input type="hidden" name="hidden_id">
                                                    <button type="submit">
                                                        <span class="fas fa-trash"></span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- /.row -->
@endsection