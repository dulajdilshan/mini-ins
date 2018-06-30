{{--<input list="browsers" name="browser">--}}
{{--<datalist id="browsers">--}}
    {{--<option value="Internet Explorer">--}}
    {{--<option value="Firefox">--}}
    {{--<option value="Chrome">--}}
    {{--<option value="Opera">--}}
    {{--<option value="Safari">--}}
{{--</datalist>--}}




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
            </div>

            {{--Customer Details--}}
            <p></p>
            <p>Customer / Loan Details</p>
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
                    <label></label>
                    <button class="btn btn-primary btn-rose">Generate Loan info</button>
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
                    <label for="due_week">Week No</label>
                    <input type="number" class="form-control" id="due_week" name="due_week" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="weekly_installment">Due payment</label>
                    <input type="number" class="form-control" id="weekly_installment" name="weekly_installment" required="" maxlength="50">
                </div>
            </div>

            {{--Loan Amount--}}
            <p></p>
            <p>Payment Details</p>
            <div class="row">
                <div class="col-sm-3 form-group">
                    <label for="pay_amount">Amount</label>
                    <input type="number" class="form-control" id="pay_amount" name="pay_amount" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="week_no">Pay. Week No</label>
                    <input type="number" class="form-control" id="week_no" name="week_no" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="balance">Balance Due</label>
                    <input type="number" class="form-control" id="balance" name="balance" required="" maxlength="50">
                </div>
                <div class="col-sm-3 form-group">
                    <label></label>
                    <button class="btn btn-primary">CAL</button>
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
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btn_loan">Pay</button>
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