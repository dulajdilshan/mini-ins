<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Cashier</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="nic"> NIC</label>
                            <input type="text" class="form-control" id="nic" name="nic" required="" maxlength="50">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label for="cashier_name"> Full Name</label>
                            <input type="text" class="form-control" id="cashierr_name" name="cashier_name" required="" maxlength="50">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="user_id"> User ID</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" required="" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="cashier_email"> E-Mail</label>
                            <input type="text" class="form-control" id="cashier_email" name="cashier_email" required="" maxlength="70">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="contact_no"> Phone no</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" required="" maxlength="50">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="customer_contact2"> Mobile no</label>
                            <input type="text" class="form-control" id="customer_contact2" name="customer_contact2" required="" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 form-group">
                            <label for="cashier_address"> Address</label>
                            <input type="text" class="form-control" id="cashier_address" name="cashier_address" required="" maxlength="70">
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