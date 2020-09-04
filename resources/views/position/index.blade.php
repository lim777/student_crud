@extends('layouts.master')

@section('title')
    Position | Information
@stop

@section('content')
    <!--suppress HtmlDeprecatedAttribute -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Position Information</h4>
                    <a href="{{route('positions.create')}}" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"> New</i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="data">
                            <thead class=" text-primary">
                                <th>Title</th>
                                <th>Description</th>
                                <th>Employee Name</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($positions as $position)
                                <tr>
                                    <td>{{$position->title}}</td>
                                    <td width="50%">{{$position->description}}</td>
                                    <td>{{$position->employees_id}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-1 offset-2">
                                                <a href="{{route('positions.edit',$position->id)}}">
                                                    <button type="submit" class="btn btn-sm btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <form action="{{route('positions.destroy',$position->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button type="submit" data-id="{{$position->id}}" value="{{$position->id}}" class="delete btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
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
@stop

@section('scripts')

@stop