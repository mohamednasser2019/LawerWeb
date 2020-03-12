@extends('welcome')
@section('content')
    <div class="main-container inner">
        <!-- start: PAGE -->
        <div class="main-content">
            <!-- start: PANEL CONFIGURATION MODAL FORM -->
            <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title">Panel Configuration</h4>
                        </div>
                        <div class="modal-body">
                            Here will be a configuration form
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- end: SPANEL CONFIGURATION MODAL FORM -->
            <div class="container">
                <!-- start: PAGE HEADER -->
                <!-- start: TOOLBAR -->
                <div class="toolbar row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="page-header">
                            <h1>Dashboard <small>overview &amp; stats </small></h1>
                        </div>
                    </div>
                </div>
                <!-- end: TOOLBAR -->
                <!-- end: PAGE HEADER -->
                <!-- start: BREADCRUMB -->
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- end: BREADCRUMB -->
                <!-- start: PAGE CONTENT -->
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="panel panel-default panel-white core-box">
                            <div class="panel-body no-padding">
                                <div class="partition-green padding-20 text-center core-icon">
                                    <i class="fa fa-bar-chart-o fa-2x icon-big"></i>
                                </div>
                                <div class="padding-20 core-content">
                                    <h3 class="title block no-margin">SEO</h3>
                                    <span
                                        class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                                </div>
                            </div>
                            <div class="panel-footer clearfix no-padding">
                                <div class=""></div>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-green"
                                   data-toggle="tooltip" data-placement="top" title="More Options"><i
                                        class="fa fa-cog"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-blue"
                                   data-toggle="tooltip" data-placement="top" title="Add Content"><i
                                        class="fa fa-plus"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-red"
                                   data-toggle="tooltip" data-placement="top" title="View More"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="panel panel-default panel-white core-box">
                            <div class="panel-body no-padding">
                                <div class="partition-blue padding-20 text-center core-icon">
                                    <i class="fa fa-code fa-2x icon-big"></i>
                                </div>
                                <div class="padding-20 core-content">
                                    <h3 class="title block no-margin">Programming</h3>
                                    <span
                                        class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                                </div>
                            </div>
                            <div class="panel-footer clearfix no-padding">
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-green"
                                   data-toggle="tooltip" data-placement="top" title="More Options"><i
                                        class="fa fa-cog"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-blue"
                                   data-toggle="tooltip" data-placement="top" title="Add Content"><i
                                        class="fa fa-plus"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-red"
                                   data-toggle="tooltip" data-placement="top" title="View More"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="panel panel-default panel-white core-box">
                            <div class="panel-body no-padding">
                                <div class="partition-red padding-20 text-center core-icon">
                                    <i class="fa fa-desktop fa-2x icon-big"></i>
                                </div>
                                <div class="padding-20 core-content">
                                    <h3 class="title block no-margin">Web design</h3>
                                    <span
                                        class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                                </div>
                            </div>
                            <div class="panel-footer clearfix no-padding">
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-green"
                                   data-toggle="tooltip" data-placement="top" title="More Options"><i
                                        class="fa fa-cog"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-blue"
                                   data-toggle="tooltip" data-placement="top" title="Add Content"><i
                                        class="fa fa-plus"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-red"
                                   data-toggle="tooltip" data-placement="top" title="View More"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="panel panel-default panel-white core-box">

                            <div class="panel-body no-padding">
                                <div class="partition-azure padding-20 text-center core-icon">
                                    <i class="fa fa-shopping-cart fa-2x icon-big"></i>
                                </div>
                                <div class="padding-20 core-content">
                                    <h3 class="title block no-margin">Orders</h3>
                                    <span
                                        class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                                </div>
                            </div>
                            <div class="panel-footer clearfix no-padding">
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-green"
                                   data-toggle="tooltip" data-placement="top" title="More Options"><i
                                        class="fa fa-cog"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-blue"
                                   data-toggle="tooltip" data-placement="top" title="Add Content"><i
                                        class="fa fa-plus"></i></a>
                                <a href="#"
                                   class="col-xs-4 padding-10 text-center text-white tooltips partition-red"
                                   data-toggle="tooltip" data-placement="top" title="View More"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-5">
                        <div class="panel panel-red panel-calendar">
                            <div class="panel-heading border-light">
                                <h4 class="panel-title">Appointments</h4>
                            </div>
                            <div class="panel-body">
                                <div class="height-300">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="actual-date">
                                                <span class="actual-day"></span>
                                                <span class="actual-month"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="clock-wrapper">
                                                        <div class="clock">
                                                            <div class="circle">
                                                                <div class="face">
                                                                    <div id="hour"></div>
                                                                    <div id="minute"></div>
                                                                    <div id="second"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="weather text-light">
                                                        <i class="wi-day-sunny"></i>
                                                        25°
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div
                                                    class="appointments border-top border-bottom border-light space15">
                                                    <a class="btn btn-sm owl-prev text-light">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                    <div class="e-slider owl-carousel owl-theme"
                                                         data-plugin-options='{"transitionStyle": "goDown", "pagination": false}'>
                                                        <div class="item">
                                                            <div
                                                                class="inline-block padding-10 border-right border-light">
                                                                    <span class="bold-text text-small"><i
                                                                            class="fa fa-clock-o"></i> 17:00</span>
                                                                <span
                                                                    class="text-light text-extra-small">1 hour</span>
                                                            </div>
                                                            <div class="inline-block padding-10">
                                                                <span class="bold-text text-small">NETWORKING</span>
                                                                <span class="text-light text-small">Out to design conference</span>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div
                                                                class="inline-block padding-10 border-right border-light">
                                                                    <span class="bold-text text-small"><i
                                                                            class="fa fa-clock-o"></i> 18:30</span>
                                                                <span
                                                                    class="text-light text-extra-small">30 mins</span>
                                                            </div>
                                                            <div class="inline-block padding-10">
                                                                    <span
                                                                        class="bold-text text-small">BOOTSTRAP SEMINAR</span>
                                                                <span
                                                                    class="text-light text-small">Problem Solving</span>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div
                                                                class="inline-block padding-10 border-right border-light">
                                                                    <span class="bold-text text-small"><i
                                                                            class="fa fa-clock-o"></i> 20:00</span>
                                                                <span
                                                                    class="text-light text-extra-small">2 hour</span>
                                                            </div>
                                                            <div class="inline-block padding-10">
                                                                    <span
                                                                        class="bold-text text-small">Lunch with Nicole</span>
                                                                <span
                                                                    class="text-light text-small">Next on Tuesday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-sm owl-next text-light"><i
                                                            class="fa fa-chevron-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>

        </div>
        <!-- end: PAGE -->
    </div>
@endsection
