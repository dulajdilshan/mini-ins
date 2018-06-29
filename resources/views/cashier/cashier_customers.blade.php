@extends('layouts.app')

@section('content')

    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="/cashier_dash">Dashboard</a>
                            </div>
                            <div class="col-md-3">
                                <button class="btn" onclick="window.location.href='/cashier_obtain_loan'" >Obtain a Loan</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-info" onclick="window.location.href='/cashier_view_customers'" disabled>Customers</button>
                            </div>
                            <div class="col-md-3">
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
                        <div class="row">
                            <div class="col-sm-2">
                                <label>Search NIC</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" id="myInput" onkeyup="myFunction()"/>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add customer</button>
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

    <script type="text/javascript">
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    @include('cashier.includes.add_customer')
@endsection
