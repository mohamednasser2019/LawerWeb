@extends('welcome')
@section('styles')
    <link rel="stylesheet" href="{{url('/plugins/jQuery-Tags-Input/jquery.tagsinput.css')}}">
    <link rel="stylesheet" href="{{url('/plugins/select2/select2.css')}}">
    <link rel="stylesheet" href="{{url('/plugins/bootstrap-select/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('/plugins/datepicker/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{url('/plugins/DataTables/media/css/DT_bootstrap.css')}}">
    <link href="{{url('/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css"/>

@endsection
@section('content')
    <div class="main-container inner">
        <!-- start: PAGE -->
        <div class="main-content">
            <div class="container">
                <!-- start: PAGE HEADER -->
                <!-- start: TOOLBAR -->
                <div class="toolbar row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="page-header">
                            <h1>New Case <small>البحث عن الدعاوى</small></h1>
                        </div>
                    </div>
                    <div class="toolbar-tools pull-right">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class="menu-search">
                                <a href="#">
                                    <i class="fa fa-search"></i> SEARCH
                                </a>
                                <!-- start: SEARCH POPOVER -->
                                <div class="popover bottom search-box transition-all">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <!-- start: SEARCH FORM -->
                                        <form class="" id="searchform" action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                       id="search">
                                                <span class="input-group-btn">
																<button class="btn btn-main-color btn-squared"
                                                                        type="button">
																	<i class="fa fa-search"></i>
																</button> </span>
                                            </div>
                                        </form>
                                        <!-- end: SEARCH FORM -->
                                    </div>
                                </div>
                                <!-- end: SEARCH POPOVER -->
                            </li>
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- end: TOOLBAR -->
                <!-- end: PAGE HEADER -->
                <!-- start: BREADCRUMB -->
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('home')}}">
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Search for case
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- end: BREADCRUMB -->
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel bg-white" id="searchContainer">
                            <table class="table table-striped table-bordered table-hover" id="cases">
                                <thead>
                                <tr>
                                    <th class="hidden-xs center"></th>
                                    <th class="hidden-xs center">المحكمة</th>
                                    <th class="hidden-xs center">رقم الدعوى</th>
                                    <th class="hidden-xs center">إسم الخصم</th>
                                    <th class="hidden-xs center">إسم الموكل</th>
                                    <th class="hidden-xs center">#</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                        <div class="tabbable">
                            <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
                                <li class="active" style="float: right">
                                    <a data-toggle="tab" href="#panel_overview"
                                       class="text-large"><p class="text-bold">نظرة عامة</p>
                                    </a>
                                </li>
                                <li style="float: right">
                                    <a data-toggle="tab" href="#panel_edit_account" class="text-large"><p
                                            class="text-bold">تعديل الدعوى</p>
                                    </a>
                                </li>
                                <li style="float: right">
                                    <a data-toggle="tab" href="#panel_sessions" class="text-large"><p class="text-bold">
                                            الجلسات</p>

                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="panel_overview" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-sm-7 col-md-8">

                                            <div class="row space20">
                                                <div class="col-sm-4">
                                                    <button class="btn btn-icon btn-block pulsate">
                                                        <i class="clip-bubble-2"></i>
                                                        الملحقات <span class="badge badge-info"
                                                                       id="attach_count"> </span>
                                                    </button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button class="btn btn-icon btn-block">
                                                        <i class="clip-calendar"></i>
                                                        الملاحظات <span class="badge badge-info"
                                                                        id="notes_count"></span>
                                                    </button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button class="btn btn-icon btn-block">
                                                        <i class="clip-list-3"></i>
                                                        الجلسات <span class="badge badge-info"
                                                                      id="sessions_count"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="panel panel-white space20">
                                                <div class="panel-heading">
                                                    <i class="clip-menu"></i>
                                                    Recent Activities
                                                    <div class="panel-tools">
                                                        <a class="btn btn-xs btn-link panel-close" href="#">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="panel-body panel-scroll height-300">
                                                    <ul class="activities">
                                                        <li>
                                                            <a class="activity" href="javascript:void(0)">
                                                                <span class="fa-stack fa-2x"> <i
                                                                        class="fa fa-square fa-stack-2x text-blue"></i> <i
                                                                        class="fa fa-code fa-stack-1x fa-inverse"></i> </span>
                                                                <span class="desc">You uploaded a new release.</span>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    2 hours ago
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="activity" href="javascript:void(0)">
                                                                <img alt="image" src="../resources/images/avatar-2.jpg">
                                                                <span
                                                                    class="desc">Nicole Bell sent you a message.</span>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    3 hours ago
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="activity" href="javascript:void(0)">
                                                                <span class="fa-stack fa-2x"> <i
                                                                        class="fa fa-square fa-stack-2x text-orange"></i> <i
                                                                        class="fa fa-database fa-stack-1x fa-inverse"></i> </span>
                                                                <span class="desc">DataBase Migration.</span>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    5 hours ago
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="activity" href="javascript:void(0)">
                                                                <span class="fa-stack fa-2x"> <i
                                                                        class="fa fa-square fa-stack-2x text-yellow"></i> <i
                                                                        class="fa fa-calendar-o fa-stack-1x fa-inverse"></i> </span>
                                                                <span class="desc">You added a new event to the calendar.</span>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    8 hours ago
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="activity" href="javascript:void(0)">
                                                                <span class="fa-stack fa-2x"> <i
                                                                        class="fa fa-square fa-stack-2x text-green"></i> <i
                                                                        class="fa fa-file-image-o fa-stack-1x fa-inverse"></i> </span>
                                                                <span
                                                                    class="desc">Kenneth Ross uploaded new images.</span>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    9 hours ago
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="activity" href="javascript:void(0)">
                                                                <span class="fa-stack fa-2x"> <i
                                                                        class="fa fa-square fa-stack-2x text-green"></i> <i
                                                                        class="fa fa-file-image-o fa-stack-1x fa-inverse"></i> </span>
                                                                <span
                                                                    class="desc">Peter Clark uploaded a new image.</span>
                                                                <div class="time">
                                                                    <i class="fa fa-clock-o"></i>
                                                                    12 hours ago
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="panel panel-white space20">
                                                <div class="panel-heading">
                                                    <i class="clip-checkmark-2"></i>
                                                    To Do
                                                    <div class="panel-tools">
                                                        <a class="btn btn-xs btn-link panel-close" href="#">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="panel-body panel-scroll height-300">
                                                    <ul class="todo">
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc">Staff Meeting</span>
                                                                <span class="label label-danger"> today</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> New frontend layout</span>
                                                                <span class="label label-danger"> today</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> Hire developers</span>
                                                                <span class="label label-warning"> tommorow</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc">Staff Meeting</span>
                                                                <span class="label label-warning"> tommorow</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> New frontend layout</span>
                                                                <span class="label label-success"> this week</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> Hire developers</span>
                                                                <span class="label label-success"> this week</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> New frontend layout</span>
                                                                <span class="label label-info"> this month</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> Hire developers</span>
                                                                <span class="label label-info"> this month</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc">Staff Meeting</span>
                                                                <span class="label label-danger"> today</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> New frontend layout</span>
                                                                <span class="label label-danger"> today</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="todo-actions" href="javascript:void(0)">
                                                                <i class="fa fa-square-o"></i> <span class="desc"> Hire developers</span>
                                                                <span class="label label-warning"> tommorow</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-5 col-md-4">

                                            <div class="user-right">

                                                <table class="table table-condensed table-hover">
                                                    <thead>
                                                    <tr>
                                                        <h4 style="text-align: right">معلومات عن القضية</h4>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="#panel_edit_account" class="show-tab"><i
                                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                                        <td>
                                                            <a id="invetation_num">

                                                            </a></td>
                                                        <td>رقم الدعوى</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#panel_edit_account" class="show-tab"><i
                                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                                        <td>
                                                            <a id="inventation_type">

                                                            </a></td>
                                                        <td>نوع الدعوى</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#panel_edit_account" class="show-tab"><i
                                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                                        <td>
                                                            <a id="circle_num">

                                                            </a></td>
                                                        <td>رقم الدائرة</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#panel_edit_account" class="show-tab"><i
                                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                                        <td>
                                                            <a id="court">

                                                            </a></td>
                                                        <td>المحكمة</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#panel_edit_account" class="show-tab"><i
                                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                                        <td>
                                                            <a id="first_session_date">
                                                            </a></td>
                                                        <td>تاريخ اول جلسة</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#panel_edit_account" class="show-tab"><i
                                                                    class="fa fa-pencil edit-user-info"></i></a></td>
                                                        <td>
                                                            <a id="to_whome">

                                                            </a></td>
                                                        <td>موجهه الى</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="panel_edit_account" class="tab-pane fade">
                                    <form action="#" role="form" id="form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Account Info</h3>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        رقم الدعوى
                                                    </label>
                                                    <input type="text" placeholder="Peter" class="form-control"
                                                           id="firstname" name="firstname">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Last Name
                                                    </label>
                                                    <input type="text" placeholder="Clark" class="form-control"
                                                           id="lastname" name="lastname">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Email Address
                                                    </label>
                                                    <input type="email" placeholder="peter@example.com"
                                                           class="form-control" id="email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Phone
                                                    </label>
                                                    <input type="email" placeholder="(641)-734-4763"
                                                           class="form-control" id="phone" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Password
                                                    </label>
                                                    <input type="password" placeholder="password" class="form-control"
                                                           name="password" id="password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Confirm Password
                                                    </label>
                                                    <input type="password" placeholder="password" class="form-control"
                                                           id="password_again" name="password_again">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Additional Info</h3>
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Twitter
                                                    </label>
                                                    <span class="input-icon">
																<input class="form-control" type="text"
                                                                       placeholder="Text Field">
																<i class="fa fa-twitter"></i> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Facebook
                                                    </label>
                                                    <span class="input-icon">
																<input class="form-control" type="text"
                                                                       placeholder="Text Field">
																<i class="fa fa-facebook"></i> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Google Plus
                                                    </label>
                                                    <span class="input-icon">
																<input class="form-control" type="text"
                                                                       placeholder="Text Field">
																<i class="fa fa-google-plus"></i> </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Github
                                                    </label>
                                                    <span class="input-icon">
																<input class="form-control" type="text"
                                                                       placeholder="Text Field">
																<i class="fa fa-github"></i> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Linkedin
                                                    </label>
                                                    <span class="input-icon">
																<input class="form-control" type="text"
                                                                       placeholder="Text Field">
																<i class="fa fa-linkedin"></i> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Skype
                                                    </label>
                                                    <span class="input-icon">
																<input class="form-control" type="text"
                                                                       placeholder="Text Field">
																<i class="fa fa-skype"></i> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    Required Fields
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>
                                                    By clicking UPDATE, you are agreeing to the Policy and Terms &amp;
                                                    Conditions.
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-green btn-block" type="submit">
                                                    Update <i class="fa fa-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="panel_sessions" class="tab-pane fade">
                                    <div class="panel panel">
                                        <div class="panel-heading"><a class="btn btn-primary" id="addSessionModal"><i
                                                    class="fa fa-plus"></i> إضافة جلسة </a></div>
                                        <div class="panel-body" id="session-div-table">

                                            <table
                                                class="table table-striped table-bordered table-hover table-full-width"
                                                id="sessions_table">
                                                <thead>
                                                <tr>
                                                    <th class="hidden-xs center"></th>
                                                    <th class="hidden-xs center">الحالة</th>
                                                    <th class="hidden-xs center">تاريخ الجلسة</th>
                                                    <th class="hidden-xs center">#</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="panel panel space20">
                                        <div class="panel-heading">
                                            <a class="btn btn-green" id="addClientModal"><i
                                                    class="fa fa-print"></i> طباعه الملاحظات</a>
                                            <h4 style="float:right;">الملاحظات</h4>
                                        </div>
                                        <div class="panel-body">

                                            <table class="table table-striped  table-hover" id="sample_2">
                                                <thead>
                                                <tr>
                                                    <th class="hidden-xs center"></th>
                                                    <th class="hidden-xs center">الحالة</th>
                                                    <th class="hidden-xs center">المستخدم</th>
                                                    <th class="hidden-xs center">الملاحطة</th>
                                                    <th class="hidden-xs center">#</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr class="text-dark">
                                                    <td class="hidden-xs center">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                            <a href="#" class="btn btn-light-blue tooltips"
                                                               data-placement="top"
                                                               data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                            <a href="#" class="btn btn-red tooltips"
                                                               data-placement="top"
                                                               data-original-title="Remove"><i
                                                                    class="fa fa-times fa fa-white"></i></a>

                                                        </div>
                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                            <div class="btn-group">
                                                                <a class="btn btn-green dropdown-toggle btn-sm"
                                                                   data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-cog"></i> <span
                                                                        class="caret"></span>
                                                                </a>
                                                                <ul role="menu"
                                                                    class="dropdown-menu dropdown-dark pull-right">
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-edit"></i> Edit
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a role="menuitem" tabindex="-1" href="#">
                                                                            <i class="fa fa-times"></i> Remove
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="hidden-xs center"><p class="btn btn-lg" data-moh-Id="27">
                                                            <span class="label label-success" id="status27"> نعم</span>
                                                        </p></td>
                                                    <td class="hidden-xs center">IT Help Desk</td>
                                                    <td class="hidden-xs center">IT Help Desk</td>
                                                    <td class="hidden-xs center">Master Company</td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end: PAGE -->
        {{--Start Modal--}}
        <div id="add_session_model" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
             class="modal bs-example-modal-basic fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                            ×
                        </button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="sessionForm">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" id="id">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group{{$errors->has('session_date')?' has-error':''}}">
                                        <div class="input-group">
                                            <input type="text" data-date-format="dd-mm-yyyy"
                                                   data-date-viewmode="years" class="form-control date-picker"
                                                   id="session_date" name="session_date"
                                                   placeholder="تاريخ الجلسة "
                                                   value="{{ old('session_date') }}">
                                            <span class="input-group-addon"> <i
                                                    class="fa fa-calendar"></i> </span>
                                        </div>
                                        <span class="text-danger" id="session_date_error"></span>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">
                            Close
                        </button>
                        <input type="submit" class="btn btn-primary" id="add_session" name="add_session" value="Add"/>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{--        End Modal--}}
        {{--confirm modal--}}
        <div id="confirmModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">تأكيد</h2>
                    </div>
                    <div class="modal-body">
                        <h4 align="center" style="margin:0;">هل تريد الحذف ؟</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">حذف</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">الفاء</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{--    <script src="{{url('/plugins/jquery.pulsate/jquery.pulsate.min.js) }}"></script>--}}
    {{--    <script src="{{url('/js/pages-user-profile.js) }}"></script>--}}
    <script src="{{url('/plugins/toastr/toastr.js') }}"></script>
    <script src="{{url('/plugins/select2/select2.min.js') }}"></script>
    <script src="{{url('/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{url('/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{url('/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{url('/plugins/DataTables/media/js/DT_bootstrap.js') }}"></script>
    <script src="{{url('/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
    <script src="{{url('/js/form-elements.js') }}"></script>
    <script src="{{url('/js/cases-details.js') }}"></script>
    {{--    <script src="{{url('/js/table-data.js') }}" type="text/javascript"></script>--}}
    <script src="{{url('/js/ui-modals.js') }}" type="text/javascript"></script>

@endsection
@section('scriptDocument')
    {{--    TableData.init();--}}
    FormElements.init();
    UIModals.init();
    PagesUserProfile.init();
@endsection

