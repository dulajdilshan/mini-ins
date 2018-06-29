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
                                <button class="btn" onclick="window.location.href='/cashier_obtain_loan'" >Apply Loan</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/cashier_view_customers'">Customers</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" onclick="window.location.href='/cashier_view_guarantors'" disabled>Guarantors</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-2">
                                <label>Search NIC</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" id="myInput" onkeyup="myFunction()"/>
                            </div>
                        </div>
                        <p></p><p></p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>NIC</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>No.of Loans taken</th>
                                <th>Last Loan settled?</th>
                            </tr>
                            </thead>
                            <tbody id="myTable">
                            <tr>
                                <td>951113247v</td>
                                <td>Smith</td>
                                <td>Doe</td>
                                <td>4<td>
                                <td>NO</td>
                            </tr>
                            <tr>
                                <td>951113247v</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>4<td>
                                <td>NO</td>
                            </tr>
                            <tr>
                                <td>951113247v</td>
                                <td>Kater</td>
                                <td>Doe</td>
                                <td>4<td>
                                <td>NO</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
