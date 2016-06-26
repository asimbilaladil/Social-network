<!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- FORM -->
                <div class="col-xs-12 col-lg-4 pull-right">
                    <div class="form-login">
                        <form>
                            <h2 class="text-uppercase">sign in</h2>
                            <div class="form-email">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="form-password">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="check">
                                <label for="check">
                                <i class="icon md-check-2"></i>
                                Remember me</label>
                                <a href="login.html#">Forget password?</a>
                            </div>
           
                            <div class="form-submit-1">
                                <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                                <?php echo "<a href='$login_url'><img class='mc-btn ' style='padding: 0px 0px;' src=".base_url()."assets/images/facebookButton.png"."></a>"; ?>
                                 <!-- <input src="<?php echo base_url("assets/images/facebookButton.png") ?>" type="image" value="Sign In" class="mc-btn " style="padding: 0px 0px;"> -->
                            </div>



                           
                        </form>
                    </div>
                </div>
                <!-- END / FORM -->
    
                <div class="image">
                    <img src="<?php echo base_url("assets/images/homeslider/img-thumb2.png") ?>" alt="">
                </div>
    
            </div>
        </div>
    </section>
    <!-- END / LOGIN -->
    