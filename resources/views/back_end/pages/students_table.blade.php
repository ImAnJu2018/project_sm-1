@extends('back_end.layouts.master_layout')

@section('title',"| Students Table")

@section('content')

            <!-- Content area -->
            <div class="content">


                <!-- Scrollable datatable -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Students Table</h5>

                        <a class="btn btn-primary" href="{{route('admin.student.create')}}">
                            Add Student
                        </a>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        This example shows the DataTables table body <code>scrolling</code> in the <code>vertical</code> direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination has been disabled here. Note that this is not mandatory, it will work just fine with pagination enabled as well!.
                    </div>

                    <table class="table datatable-scroll-y" width="100%">
                        <thead>
                        <tr>
                            <th>Student name</th>
                            <th>Class Roll</th>
                            <th>class</th>
                            <th>section</th>
                            <th>Class teacher name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $key=>$student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td><a href="#">{{$student->cl_roll}}</a></td>
                            <td>{{$student->class}}</td>
                            <td>{{$student->section}}</td>
                            <td>{{$student->class_teach}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /scrollable datatable -->


            </div>
            <!-- /content area -->


@endsection