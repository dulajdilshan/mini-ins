@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="/manager_dash">Dashboard</a>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/manager_obtain_loan'">Apply Loan</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" onclick="window.location.href='/manager_approve_loan_list'" disabled>Approve Loans</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/manager_edit_loan_list'">Edit Loans</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/manager_view_customers'">Customers</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/manager_view_guarantors'">Guarantors</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <button class="btn btn-warning"onclick="window.location.href='/manager_approve_loan_list'">Go Back</button>
                        @include('loan.approve_loan')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
