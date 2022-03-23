    <div class="modal" id="modalUpdateAccount">

        <div class="modal-wrapper">
            
            <form action="#" id="formUpdateAccount">

                <input type="text" name="u_getStaffID" id="u_getStaffID" class="d-none" value="" readonly>

                <div class="modal-header">
                    <h4 class="poppins">Update staff account</h4>
                    <i class="fas fa-times" id="toggleAccountUpdateClose"></i>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-lg-4 mb-3">
                            <label for="u_givenname" class="form-label">Given name</label>
                            <input type="text" name="u_givenname" id="u_givenname" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group col-lg-4 mb-3">
                            <label for="u_middlename" class="form-label">Middle name</label>
                            <input type="text" name="u_middlename" id="u_middlename" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group col-lg-4 mb-3">
                            <label for="u_lastname" class="form-label">Last name</label>
                            <input type="text" name="u_lastname" id="u_lastname" class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-5 mb-3">
                            <label for="u_username" class="form-label">Username</label>
                            <input type="text" name="u_username" id="u_username" class="form-control" readonly autocomplete="off">
                        </div>

                        <div class="form-group col-lg-7 mb-3">
                            <label for="u_email" class="form-label">Email Address</label>
                            <input type="text" name="u_email" id="u_email" class="form-control" autocomplete="off">
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-lg-4 mb-3">
                            <label for="u_stafftype" class="form-label">Staff Type</label>
                            <select name="u_stafftype" id="u_stafftype" class="form-select">
                                <option value="0">-- Select staff type --</option>
                                <option value="1">RIC</option>
                                <option value="2">Frontline</option>
                                <option value="3">Dean</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4 mb-3">
                            <label for="u_status" class="form-label">Account Status</label>
                            <select name="u_status" id="u_status" class="form-select">
                                <option value="0" selected>Inactive (Default)</option>
                                <option value="1">Active</option>
                                <option value="2">Disabled</option>
                            </select>
                        </div>
                    </div>
                    
                    <hr>
                    <b>Note:</b>
                    <p>You staff requests to change password, admin may insert new password. Otherwise, leave the input below blank.</p>

                    <div class="row">
                        <div class="form-group col-lg-5 mb-sm-3 mb-lg-2">
                            <label for="u_password" class="form-label">Password</label>
                            <input type="password" id="u_password" name="u_password" class="form-control" autocomplete="off" autocomplete="off">
                        </div>

                        <div class="form-group col-lg-5 mb-sm-3 mb-lg-2">
                            <label for="u_confirmpass" class="form-label">Confirm Password</label>
                            <input type="password" id="u_confirmpass" name="u_confirmpass" class="form-control" autocomplete="off" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="u_showPassword">
                        <label class="form-check-label" for="u_showPassword">
                            Show passwords
                        </label>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-deafult border" id="toggleUpdateAccountUpdateClose2">Discard</button>
                    <button type="submit" class="btn btn-success">Update account</button>
                </div>
            
            </form>
        </div>

    </div>