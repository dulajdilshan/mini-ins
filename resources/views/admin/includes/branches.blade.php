<div class="row">
    <div class="col-sm-2">
        <label>Search Branch Name</label>
    </div>
    <div class="col-sm-5">
        <input type="text" id="myInput" onkeyup="myFunction()"/>
    </div>
    <div class="col-sm-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Branch</button>
    </div>
</div>
<p></p><p></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Branch Name</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody id="myTable">
    <tr>
        <td>1</td>
        <td>Moratuwa</td>
        <td>23/safasdgfsgsfgsfgsdfgdhdhdhd</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Kaluthara</td>
        <td>23/safasdgfsgsfgsfgsdfgdhdhdhd</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Piliyandala</td>
        <td>23/safasdgfsgsfgsfgsdfgdhdhdhd</td>
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
            td = tr[i].getElementsByTagName("td")[1];
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