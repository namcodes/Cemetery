<div class="card card-primary card-outline">
                        <div class="card-header">
                            <h1 class="card-title">Verification Code</h1>
                        </div>

                        <div class="card-body">
                            <form action="wp-actions/verification.php" method="post">
                                <?php
                                if($status != 'verified'){
                                    echo('
                                    <div class="form-group">
                                        <div class="input-group col-md-6 mx-auto">
                                            <input type="text" class="form-control text-center" name="verification_code">
                                            <div class="input-group-append">
                                                <button type="submit" name="send-code" class="btn btn-primary">Re-send</button>
                                            </div>
                                        </div>
                                    </div>
                                    ');
                                }else{
                                    echo('
                                    <div class="row">
                                    <div class="form-group col-md-6">
                                    <label>New password</label>
                                     <input type="text" class="form-control text-center" name="new_password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Password</label>
                                        <input type="text" class="form-control text-center" name="confirm_password">
                                    </div>
                                    </div>
                                   
                                    ');
                                }
                                ?>
                               

                                <div class="form-group text-center">
                                    <button name="verification" type="submit" class="btn btn-primary col-md-4">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>