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