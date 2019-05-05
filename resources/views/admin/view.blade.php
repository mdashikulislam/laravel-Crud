@extends('admin.home')
@section('breadcumb')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Scholarship</li>
        </ol>
    </section>
@endsection
@section('maincontent')
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <?php
                        if (Session::get('msg')){
                            echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>'.Session::get('msg').' </div>';
                            Session::put('msg',null);
                        }
                    ?>
{{--                    <div class="alert alert-success alert-dismissible">--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--                        <h4><i class="icon fa fa-check"></i> Alert!</h4>--}}
{{--                        Success alert preview. This alert is dismissable.--}}
{{--                    </div>--}}
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Title</th>
                                <th>Description(s)</th>
                                <th>Fields of study</th>
                                <th>Target group</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                         @foreach($data as $result)
                            <tr>
                                <td>Trident</td>
                                <td>{{$result->title}}</td>
                                <td>{{$result->desc}}</td>
                                <td> {{$result->fstudy}}</td>
                                <td>{{$result->target}}</td>
                                <td>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="{{asset('madmin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('madmin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('madmin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
