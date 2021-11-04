@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="fas fa-scroll"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Bulletin</p>
                                2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <hr />
                <div class="stats">
                <div class="pull-right" style="position:relative; display:inline-block;"></div>
                <i class="ti-reload"></i> Updated now<div class="my-inline-block" id="campaign-name4"></div>
            </div>
        </div>
    </div>
</div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="far fa-newspaper"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Offres</p>
                            128
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <hr />
                <div class="stats">
                    <i class="ti-reload"></i> Updated now
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="fas fa-bell"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Notification</p>
                                23
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> Updated now
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="fas fa-comments"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Message</p>
                                45
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> Updated now
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="numbers pull-left">
                                $34,657
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="pull-right">
                                <span class="label label-success">
                                    +18%
                                </span>
                            </div>
                        </div>
                    </div>
                    <h6 class="big-title">total earnings <span class="text-muted">in last</span> ten <span class="text-muted">quarters</span></h6>
                    <div id="chartTotalEarnings"></div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="footer-title">Financial Statistics</div>
                    <div class="pull-right">
                        <button class="btn btn-info btn-fill btn-icon btn-sm">
                            <i class="ti-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>
@endsection
