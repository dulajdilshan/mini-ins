<div class="row">
    <div class="col-md-12">
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
                <th>Date</th>
                <th>Loan No</th>
                <th>Customer NIC</th>
                <th>Loan Amount</th>
                <th>Net Amount</th>
                <th>No. of weeks</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <tr>
                <td>2013.05.02</td>
                <td><a href="/manager_edit_loan/{{2344}}">2344</a></td>
                <td>951113247v</td>
                <td>Rs.40000<td>
                <td>Rs.45000</td>
                <td>12</td>
            </tr>
            <tr>
                <td>2013.05.02</td>
                <td>2344</td>
                <td>931113247v</td>
                <td>Rs.40000<td>
                <td>Rs.45000</td>
                <td>12</td>
            </tr>
            <tr>
                <td>2013.05.02</td>
                <td>2344</td>
                <td>961113247v</td>
                <td>Rs.40000<td>
                <td>Rs.45000</td>
                <td>12</td>
            </tr>
            </tbody>
        </table>
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
            td = tr[i].getElementsByTagName("td")[2];
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