<div class="row">
    <div class="col-md-9 col-md-offset-1">
        {{--<h2>Loan Obtaining Form</h2>--}}
        <form role="form" method="post" id="reused_form">

            {{--General Details--}}
            <p> General Information</p>
            <div class="row">
                <div class="col-sm-4 form-group">
                    <label for="executive_code"> Executive Code:</label>
                    <input type="text" class="form-control" id="executive_code" name="executive_code" maxlength="50">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="name"> Name:</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="50">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="branch"> Branch:</label>
                    <input type="text" class="form-control" id="branch" name="branch" maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="date"> Date:</label>
                    <input type="text" class="form-control" id="date" name="date" maxlength="50">
                </div>
                <div class="col-sm-9 form-group">
                    <label for="into_name"> Introduced Person:</label>
                    <input type="tel" class="form-control" id="into_name" name="intro_name" required="" maxlength="50">
                </div>
            </div>

            {{--Customer Details--}}
            <p></p>
            <p>Customer Details</p>
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


            {{--Loan Details--}}
            <p></p>
            <p>Loan Details</p>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="group_no"> Group No</label>
                    <input type="text" class="form-control" id="group_no" name="group_no" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="member_no">Member No</label>
                    <input type="text" class="form-control" id="member_no" name="member_no" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="centre_code">Centre Code</label>
                    <input type="text" class="form-control" id="centre_code" name="centre_code" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="centre_name">Centre Name</label>
                    <input type="text" class="form-control" id="centre_name" name="customer_contact1" required="" maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="loan_index">Loan index</label>
                    <input type="text" class="form-control" id="loan_index" name="loan_index" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="loan_number">Loan Number</label>
                    <input type="text" class="form-control" id="loan_number" name="loan_number" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label></label>
                    <button class="btn btn-primary btn-rose">Generate Loan NO</button>
                </div>
            </div>

            {{--Loan Amount--}}
            <p></p>
            <p>Loan Amount Details</p>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="loan_amount">Amount</label>
                    <input type="number" class="form-control" id="loan_amount" name="loan_amount" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="no_weeks">No. of Weeks</label>
                    <input type="number" class="form-control" id="no_weeks" name="no_weeks" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="rate">Rate</label>
                    <input type="number" class="form-control" id="rate" name="rate" required="" maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="net_amount">Net Amount</label>
                    <input type="number" class="form-control" id="net_amount" name="net_amount" required="" maxlength="50">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="weekly_installment">Weekly payment</label>
                    <input type="number" class="form-control" id="weekly_installment" name="weekly_installment" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for=""></label>
                    <button class="btn btn-danger">Re-Calculate</button>
                </div>
            </div>


            {{--Guarantor Details--}}
            <p></p>
            <p>Guarantor Details</p>
            <div class="row">
                <div class="col-sm-2 form-group">
                    <label for="guarantor_nic"> NIC</label>
                    <input type="text" class="form-control" id="guarantor_nic" name="guarantor_nic" required="" maxlength="50">
                </div>
                <div class="col-sm-5 form-group">
                    <label for="guarantor_name"> Name</label>
                    <input type="text" class="form-control" id="guarantor_name" name="guarantor_name" required="" maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="guarantor_gender"> Gender</label>
                    <select class="form-control" name="guarantor_gender" id="guarantor_gender">
                        <option class="form-control" value="male">Male</option>
                        <option class="form-control" value="Female">Female</option>
                    </select>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="guarantor_married"> Married / Single</label>
                    <select class="form-control" name="guarantor_married" id="guarantor_married">
                        <option class="form-control" value="married">Married</option>
                        <option class="form-control" value="single">Single</option>
                    </select>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="guarantor_contact1"> Phone no</label>
                    <input type="text" class="form-control" id="guarantor_contact1" name="guarantor_contact1" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="guarantor_contact2"> Mobile no</label>
                    <input type="text" class="form-control" id="guarantor_contact2" name="guarantor_contact2" required="" maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="guarantor_address1"> Address 1</label>
                    <input type="text" class="form-control" id="guarantor_address1" name="guarantor_address1" required="" maxlength="70">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="guarantor_address1"> Address 2</label>
                    <input type="text" class="form-control" id="guarantor_address2" name="guarantor_address2" required="" maxlength="70">
                </div>
            </div>
            <p>Remarks</p>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name"></label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btn_loan">Apply Loan</button>
                </div>
                <div class="col-sm-6 form-group">
                    <button type="reset" class="btn btn-lg btn-behance btn-block" id="btnContactUs">Reset</button>
                </div>
            </div>
        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
        <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
    </div>
</div>