@extends('layouts.master')
@section('title')
    Employee | List all Information
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Employees Information</h4>
                    <a href="{{route('employees.create')}}" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"> New</i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="data">
                            <thead class=" text-primary">
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Province</th>
                                <th>Date of Birth</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->province}}</td>
                                    <td>{{$employee->dob}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-1 offset-2">
                                                <a href="{{route('employees.edit',$employee->id)}}">
                                                    <button type="submit" class="btn btn-sm btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-sm-1"></div>
                                                <form action="{{route('employees.destroy',$employee->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('delete')}}
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{{--    <script type="text/javascript">--}}
{{--           $('#data').DataTable({--}}
{{--               processing: true,--}}
{{--               serverSide: true,--}}
{{--               ajax: {--}}
{{--                     url : "{{route('employee.index')}}",--}}
{{--               },--}}
{{--               columns: [--}}
{{--                   {data: 'id', name:'id'},--}}
{{--                   {data: 'name', name:'name'},--}}
{{--                   {data: 'gender', name:'gender'},--}}
{{--                   {data: 'phone', name:'phone'},--}}
{{--                   {data: 'address', name:'address'},--}}
{{--                   {data: 'dob', name:'dob'},--}}
{{--               ]--}}
{{--           });--}}
{{--    </script>--}}
@endsection