<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="LOGIN MODAL">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 style="color: #FF6BAE;"><center><strong>MY ACCOUNT</strong></center></h3>
                <hr/>
                <?php 
                    if(!$this->session->userdata('log_sess')){
                        echo form_open('Login');
                ?>
                            <h6></h6>
                            <div class="form-group text-center">
                                <label class="control-label">Email Address</label>
                                <input type="text" class="form-control" name="login_email" id="login-email" placeholder="example@example.com">
                            </div>
                            <div class="form-group text-center">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" name="login_password" id="login-password" placeholder="•••••••••••••••">
                            </div>
                            <div><a class="text-center cursor-pointer color-forgot" data-toggle="modal" data-dismiss="modal" data-target="#forgotModal"><h5 class="center">Forget your password?</h5></a></div>
                            <input type="submit" value="Login" class="btn btn-default no-border" style="background-color:#9DE0D0;color:white;width: 100%;"/>
                            <div><a href="<?php echo base_url(); ?>signup" class="text-center cursor-pointer color-forgot" id="forget-password"><h5 class="center">Create an account</h5></a></div>
                        </form>
                    <?php
                    } else {
                        $this->load->view('logged.php');
                    } ?>
                    
            </div>
        </div>
    </div>
</div>                

<?php $this->load->view('forgotpassword');?>