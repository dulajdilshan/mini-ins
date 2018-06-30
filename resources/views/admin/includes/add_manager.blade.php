<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Customer</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="customer_nic"> NIC</label>
                            <input type="text" class="form-control" id="customer_nic" name="customer_nic" required="" maxlength="50">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label for="customer_name"> Name</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" required="" maxlength="50">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="customer_bday"> Birthday</label>
                            <input type="text" class="form-control" id="customer_bday" name="customer_bday" required="" maxlength="50">
                        </div>
                        <div class="col-sm-2 form-group">
                            <label for="customer_age"> Age</label>
                            <input type="text" class="form-control" id="customer_age" name="customer_age" required="" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <label for="customer_gender"> Gender</label>
                            <select class="form-control" name="customer_gender" id="customer_gender">
                                <option class="form-control" value="male">Male</option>
                                <option class="form-control" value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="customer_married"> Married / Single</label>
                            <select class="form-control" name="customer_married" id="customer_married">
                                <option class="form-control" value="married">Married</option>
                                <option class="form-control" value="single">Single</option>
                            </select>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="customer_contact1"> Phone no</label>
                            <input type="text" class="form-control" id="customer_contact1" name="customer_contact1" required="" maxlength="50">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label for="customer_contact2"> Mobile no</label>
                            <input type="text" class="form-control" id="customer_contact2" name="customer_contact2" required="" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="customer_address1"> Address 1</label>
                            <input type="text" class="form-control" id="customer_address1" name="customer_address1" required="" maxlength="70">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="customer_address1"> Address 2</label>
                            <input type="text" class="form-control" id="customer_address2" name="customer_address2" required="" maxlength="70">
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