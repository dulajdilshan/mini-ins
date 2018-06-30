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
                                <button class="btn" onclick="window.location.href='/manager_approve_loan_list'">Approve Loans</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/manager_edit_loan_list'">Edit Loans</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn" onclick="window.location.href='/manager_view_customers'">Customers</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" onclick="window.location.href='/manager_view_guarantors'" disabled>Guarantors</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @include('manager.includes.guarantors_table')
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
@endsection
