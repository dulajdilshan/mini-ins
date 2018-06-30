<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Centre</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="centre_id"> ID</label>
                            <input type="text" class="form-control" id="centre_id" name="centre_idc" required="" maxlength="50">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label for="centre_name">Centre Name</label>
                            <input type="text" class="form-control" id="centre_name_name" name="centre_name_name" required="" maxlength="50">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="branch_id"> Branch ID</label>
                            <input type="text" class="form-control" id="branch_id" name="branch_id" required="" maxlength="50">
                        </div>
                        <div class="col-sm-2 form-group">
                            <label for="distance"> Distance</label>
                            <input type="text" class="form-control" id="distance" name="distance" required="" maxlength="50">
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