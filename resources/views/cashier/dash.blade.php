@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="/cashier_dash">Dashboard</a>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/cashier_payment'">Payment</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/cashier_obtain_loan'">Apply Loan</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/cashier_view_customers'">Customers</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/cashier_view_guarantors'">Guarantors</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
