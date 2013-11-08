<?php
//do something here...
/**
 * this file contains Navigation Bar, separately, to be plugged in whereever required.
 */
?>
<!-- navigation -->
<div class="nav">
    <!--<a href="#" class="nav-btn" data-flexmenu="flexmenu1"><span style="color:#6FA632">ABOUT</span><span class="arr"></span></a>-->
    <ul id="navigationMenu" class="sm sm-clean">
        <li class="nav-menu_item_neo">
            <a href="#"><span>about</span></a>
            <ul>
                <li ><a href="<?php echo $base_url; ?>?f=what_we_do">What we do?</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=how_we_do">How we do?</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=who_we_are">Who we are?</a></li>
            </ul>
        </li>

        <li class="nav-menu_item_neo">
            <a href="#">e-Lab</a>
            <ul >
                <li ><a href="<?php echo $base_url; ?>?f=research_development">Research & Development</a>
                    <ul >
                        <li ><a href="<?php echo $base_url; ?>?f=innovation">Innovation</a>
                            <ul >
                                <li ><a href="<?php echo $base_url; ?>?f=about_ideas">Team-Passionate about ideas</a></li>
                                <li ><a href="<?php echo $base_url; ?>?f=helping_to_buid_business">Helping to buid business</a></li>
                            </ul>
                        </li>
                        <li ><a href="<?php echo $base_url; ?>?f=solution_for_you">Solution for you</a></li>
                    </ul>
                </li>
                <li ><a href="<?php echo $base_url; ?>?f=e_recovery">e-Recovery</a>
					<ul >
						<li ><a href="<?php echo $base_url; ?>?f=recover_your_disk_data">Recover your Hard Disk data</a></li>
						<li ><a href="<?php echo $base_url; ?>?f=recover_your_laptop">Recover your laptop OS</a></li>
					</ul>
                </li>
            </ul>
        </li>

        <li class="nav-menu_item_neo">
            <a href="#">e-Technologies</a>
            <ul >
                <li ><a href="<?php echo $base_url; ?>?f=business_intelligence">Business Intelligence</a>
                    <ul >
                        <li ><a href="<?php echo $base_url; ?>?f=ibm_cognos">IBM Cognos</a>
                            <ul >
                                <li ><a href="<?php echo $base_url; ?>?f=dashboarding">Dashboarding</a></li>
                                <li ><a href="<?php echo $base_url; ?>?f=mobility">Mobility</a></li>
                            </ul>
                        </li>
                        <li ><a href="<?php echo $base_url; ?>?f=roambi">ROAMBI</a></li>
                        <li ><a href="<?php echo $base_url; ?>?f=qlik_view">Qlik View</a></li>
                        <li ><a href="<?php echo $base_url; ?>?f=tm1">TM1</a></li>
                    </ul>
                </li>
                <li ><a href="<?php echo $base_url; ?>?f=cloud_computing">Cloud Computing</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=infrastructure_services">Infrastructure Services</a>
                    <ul >
                        <li ><a href="<?php echo $base_url; ?>?f=platform_designing">Platform Designing</a></li>
                        <li ><a href="<?php echo $base_url; ?>?f=virtualization">Virtualization</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-menu_item_neo">
            <a href="#">e-Laboratory</a>
            <ul >
                <li ><a href="<?php echo $base_url; ?>?f=order_now">Order Now!-CBT</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=online_training">Online Training</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=career_counselling">Career Counselling</a></li>
            </ul>
        </li>
        <li class="nav-menu_item_neo">
            <a href="#">e-Consulting</a>
            <ul>
                <li ><a href="<?php echo $base_url; ?>?f=business_consulting">Business Consulting</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=it_consulting">IT Consulting</a>
                    <ul >
                        <li ><a href="<?php echo $base_url; ?>?f=manage_support_services">Manage Support Services</a></li>
                        <li ><a href="<?php echo $base_url; ?>?f=staff_augmentation">Staff augmentation</a></li>
                    </ul>
                </li>
                <li ><a href="<?php echo $base_url; ?>?f=product_consulting">Product Consulting</a></li>
            </ul>
        </li>
        <li class="nav-menu_item_neo">
            <a href="#">i-Connect</a>
            <ul >
                <li ><a href="<?php echo $base_url; ?>?f=worldwide">Worldwide</a></li>
                <li ><a href="<?php echo $base_url; ?>?f=references">References</a></li>
            </ul>
        </li>
    </ul>

</div>
<!-- end of navigation -->
