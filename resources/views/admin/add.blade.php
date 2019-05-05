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
            <li class="active">Add Scholarship</li>
        </ol>
    </section>
@endsection
@section('maincontent')
    <section class="content">
        <div class="row">

            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Scholarship Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('admin.add')}}" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control"  placeholder="Title of scholarship" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-10">
                                    <input type="text" name="desc" class="form-control"  placeholder="Brief description" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Institution(s)</label>

                                <div class="col-sm-10">
                                    <input type="text" name="instruction" class="form-control"  placeholder="Host Institution(s)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Fields of study</label>

                                <div class="col-sm-10">
                                    <input type="text" name="fstudy" class="form-control"  placeholder="Fields of study" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Number of Scholarships</label>

                                <div class="col-sm-10">
                                    <input type="text" name="numofstudy" class="form-control"  placeholder="Number of Scholarships" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Target group</label>

                                <div class="col-sm-10">
                                    <input type="text" name="targroup" class="form-control"  placeholder="Target group" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">value/inclusions</label>
                                <div class="col-sm-10">
                                    <div class="box-body pad">

                                            <textarea name="value" class="textarea" placeholder="Scholarship value/inclusions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>

                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Eligibility</label>
                                <div class="col-sm-10">
                                    <div class="box-body pad">

                                            <textarea name="eligibility" class="textarea" placeholder="Eligibility" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">instructions</label>
                                <div class="col-sm-10">
                                    <div class="box-body pad">

                                        <textarea name="instructions" class="textarea" placeholder="Application instructions" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">website</label>

                                <div class="col-sm-10">
                                    <input type="text" name="website" class="form-control"  placeholder="Official Scholarship Website" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
