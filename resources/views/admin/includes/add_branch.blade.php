<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Branch</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="branch_id"> ID</label>
                            <input type="text" class="form-control" id="branch_id" name="branch_id" required="" maxlength="50">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label for="branch_name"> Branch Name</label>
                            <input type="text" class="form-control" id="branch_name" name="branch_name" required="" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="branch_address"> Address</label>
                            <input type="text" class="form-control" id="branch_address" name="branch_address" required="" maxlength="70">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ADD</button>
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>