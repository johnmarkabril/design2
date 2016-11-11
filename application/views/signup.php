<div class="col-md-12">
    <h2 class="text-center">
        Create your account
    </h2>
    <p class="text-center">
        This example show how to use Steps with jQuery Validation plugin.
    </p>

    <form id="form" action="#" class="wizard-big">
        <h1>Personal</h1>
        <fieldset>
            <h2>Personal Information</h2>
            <div class="row">
                <div class="col-md-12 text-left pad-top">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>* First Name</label>
                            <input type="text" class="form-control required" id="su_fname" name="firstName" placeholder="John"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>* Surname</label>
                            <input type="text" class="form-control required" id="su_lname" name="surName" placeholder="Doe"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>* Username</label>
                            <input type="text" class="form-control required" id="su_uname" name="userName" placeholder="Johndoe123"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>* Phone Number</label>
                            <input type="text" class="form-control required" maxlength="11" id="su_cpnum" placeholder="09*********"/>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <h1>Profile</h1>
        <fieldset>
            <h2>Profile Information</h2>
            <div class="row">
                <div class="col-md-12 text-left pad-top">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>* Email Address</label>
                            <input type="text" class="form-control full-width required email" id="su_email" name="email" placeholder="johndoe@example.com"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>* Password</label>
                            <input type="password" class="form-control full-width required" id="password" name="password" minlength="8" placeholder="********"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>* Confirm Password</label>
                            <input type="password" class="form-control full-width required" id="confirm" name="confirm" minlength="8" placeholder="********"/>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <h1>Verification</h1>
        <fieldset>
            <h2>Email Verification</h2>
            <div class="col-md-12 text-left pad-top">
                <div class="form-group">
                    <h3 class="text-center">* Email Verification Code:</h3>
                    <div class="col-sm-12">
                        <input type="text" class="form-control text-center text-bold required" id="su_emailcode" name="emailVerification" style="font-size: 20px;"/>
                    </div>
                    <h5><div class="text-center"><a href="#">Resend the verification code</a></div></h5>
                </div>
            </div>
        </fieldset>

        <h1>Complete</h1>
        <fieldset>
            <div class="col-md-12 text-center pad-top">
                <h2 class="text-bold"><div id="newRegname"></div></h2>
                <h2>Thank you for signing up!</h2>
                <h4>You can now log-in to our website. By clicking <a class="text-bold" class="weightninehund"  data-toggle="modal" data-target="#loginModal">this</a> or Account on upper right corner.</h4>
            </div>
        </fieldset>
    </form>
</div>