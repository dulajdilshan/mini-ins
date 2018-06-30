@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            {{--<div class="col-md-2">--}}
                            {{--<a href="/Admin_dash">Dashboard</a>--}}
                            {{--</div>--}}
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/admin_loans'">Loans</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/admin_branches'">Branches</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/admin_centres'">Centres</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/admin_customers'">Customers</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" onclick="window.location.href='/admin_managers'" disabled>Managers</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/admin_cashiers'">Cashiers</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                            @include('admin.includes.managers')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.add_manager')
@endsection
