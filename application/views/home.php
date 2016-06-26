   <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">

   


            <div class="info-author">
                <div class="image">
                    <img src="<?php echo 'https://graph.facebook.com/'. $user_profile['id'] .'/picture?type=large' ?>" alt="">
                </div>    
                <div class="name-author">
                    <h2 class="big"> <?php echo $user_profile['name']; ?> </h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>  <?php if(array_key_exists('location', $user_profile)) { echo $user_profile['location']['name']; }  ?> </h3>
                </div>
                <div class="address-author">
                    <i class="fa fa-sign-out"></i>
                   <h3> <a class="text-color" href="<?php echo site_url('login/logout') ?>"> Logout </a></h3>
                </div>

            </div>
            <div class="info-follow">
                <div class="trophies">
                    <span style="color: greenyellow">$ <?php echo $sales; ?></span>
                    <p style="color: greenyellow" class="buyer">Sales Amount</p>
                </div>
                <div class="trophies" >
                    <span style="color: red">$ <?php echo $buyers; ?></span>
                    <p style="color: red">Buyers Amount</p>
                </div>
                <div class="trophies" >
                    <span style="color: cornflowerblue">$ <?php echo $marketing; ?></span>
                    <p style="color: cornflowerblue">Marketing Amount</p>
                </div>
                <div class="trophies">
                    <span>$ <?php echo $total; ?></span>
                    <p>Total</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->  
    <section id="after-slider" class="after-slider section">
        <div class="awe-color bg-color-1"></div>
        <div class="after-slider-bg-2"></div>
        <div class="container">
            <form action="<?php echo site_url('Home/') ?>" method="POST">
                <div class="after-slider-content tb">
                    <div class="inner tb-cell">
                        <h4>What did you do today?</h4>
                        <div class="course-keyword">
                            <input type="number" name="amount" placeholder="Amount">
                        </div>
                      
                       <div class="mc-select-wrap">
                            <div class="mc-select">
                                <select class="select" name="category" id="all-categories" style="z-index: 10; opacity: 0;">
                                    <option value="Sales" selected="">Sales</option>
                                    <option value="Buyers">Buyers</option>
                                      <option value="Marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tb-cell text-right">
                        <div class="form-actions">
                            <input type="submit" value="Post" class="mc-btn btn-style-1" style=" width: 70%; margin-bottom: 10px;">                    </div>
        
                    </div>

                </div>
            </form>

    
        </div>
    </section>

    <section class="blog">

        <div class="container">
            <div class="row">

                <!-- BLOG LIST -->
                <div class="col-md-12">
                    <div class="blog-single-content">
                    <?php foreach ($post as  $item) { ?>  
                        <!-- POST -->
                        <div class="post post-single">
                     


                            <!-- ABOUT AUTHOR -->
                            <div class="about-author">
                                <div class="image-thumb fl">
                                </div>
                                <div class="author-info">
                                    <h6 class="author-title"><i  class="fa fa-calendar"> <?php echo  $item->date; ?></i> </h6>
                                    <span class="author-name"><?php echo  $item->category . " $ " .$item->amount; ?></span>
                                                         
                                </div>
                            </div>
                            <!-- END / ABOUT AUTHOR -->

                        </div>
                        <!-- END / POST -->
                    <?php } ?>                      


                        
                    </div>
                </div>
                <!-- END / BLOG LIST -->



            </div>
        </div>

    </section>

