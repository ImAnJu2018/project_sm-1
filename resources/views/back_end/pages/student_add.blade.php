@extends('back_end.layouts.master_layout')

@section('title',"| Students Add")

@section('content')

    <!-- Content area -->
    <div class="content">

        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'admin.student.store','data-parsley-validation'=>'']) !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h5 class="panel-title">Add student form</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                            <li><a data-action="close"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Enter your name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Eugene Kopyov">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter student's roll:</label>
                                        <input type="text" name="id" class="form-control" placeholder="56">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter class name:</label>
                                        <input type="text" name="class" class="form-control" placeholder="5">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter section name:</label>
                                        <input type="text"  name="section" class="form-control" placeholder="neptune">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter class teacher name:</label>
                                        <input type="text" name="class_teacher"class="form-control" placeholder="john doe">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter your password:</label>
                                        <input type="password" name="password" class="form-control" placeholder="password">
                                    </div>


                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- /form centered -->
    </div>

@endsection