@extends('layout.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Teachers Information</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('teachers.create')}}" class="btn btn-primary btn-sm float-right">
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
                    <table class="table table-striped table-hover" id="my_table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>name</td>
                                <td>gender</td>
                                <td>phone</td>
                                <td>address</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </section>

@stop
@section('script')
    <script type="text/javascript">

            var table = $('#my_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{route('teachers.index')}}",
                },
                columns: [
                    {
                        data:'id',
                        name:'id'
                    },
                    {
                        data:'name',
                        name:'name'
                    },
                    {
                        data:'gender',
                        name:'gender'
                    },
                    {
                        data:'phone',
                        name:'Phone'
                    },
                    {
                        data:'address',
                        name:'address'
                    },
                    {
                        data:'action',
                        name:'action'
                    }
                ]
            });

    </script>
@stop