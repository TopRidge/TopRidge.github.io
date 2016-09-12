<!DOCTYPE html>
<html lang="en">
<head>
<?php $page_title = "Contact";
require_once "include/head.php";
require_once "include/constant.php";
echo "<title>" . DISPLAY_TITLE . " | $page_title</title>";
?>
</head>

<body>

<!-- Navigation -->
<?php require_once "include/navigation.php"; ?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $page_title; ?>
                <small><?php echo DISPLAY_TITLE; ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li class="active"><?php echo $page_title; ?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!--Quote-->
    <div class="row col-lg-12">
        <blockquote>
            Challenges and need arises in our lives when it comes to making the best choice. However, we believe
            speaking to the right people gets the need half met. Quality and sound education is a priceless gift you
            should give your children.
            <br/><strong><em>We love to hear from you!!</em></strong>
        </blockquote>
    </div>
    <!--/.row-->
</div>

<!-- Map Column -->
<div class="container-fluid">
    <!-- Embedded Google Map -->
    <div class="col-md-12">
    </div>
    <div class="col-md-12">
        <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&daddr=Ridge+School,+Takoradi&aq=1&oq=333&sll=4.890397,-1.7545509&sspn=0.332359,0.617294&ie=UTF8&hq=&hnear=Ridge+School,+Takoradi,+10016&t=m&z=17&ll=4.890397,-1.7545509&output=embed">
        </iframe>
    </div>
</div>
<!-- /.row -->

<div class="container">
    <!-- Content Row -->
    <div class="row">
        <!--Get directions-->
        <div class="text-center">
            <label for="saddr">Enter Your Location for Directions</label>
            <form action="http://maps.google.com/maps" method="get" target="_blank">
                <div class="col-md-10">
                    <input type="text" name="saddr" class="form-control"/>
                </div>
                <div class="col-md-2">
                    <input type="hidden" name="daddr" value="Ridge School, Tarkoradi"/>
                </div>
                <input type="submit" value="Get directions" class="btn btn-success"/>
            </form>
        </div>
        <br/><br/>

        <!-- Contact Details Column -->
        <div class="col-md-5">
            <div class="panel-heading">
                <h4> CONTACT US DIRECTLY</h4>
            </div>
            <h3><?php echo DISPLAY_TITLE; ?></h3>
            or or email us on:
            <p><i class="fa fa-map-marker"></i>
                <abbr title="Location">L</abbr>: West Tanokrom, Takoradi, Western Region (Ghana) </p>

            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: +233 (0) 20 816 5209 &emsp; | <nobr>&emsp; +233 (0) 20 501 4924<nobr/></p>

            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:topridge.edu@yahoo.com">topridge.edu@yahoo.com</a>
                &emsp; | &emsp; <a href="mailto:topridge.edu@yahoo.com">topridge.edu@yahoo.com</a>
            </p>

            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: Monday - Friday: 6:30 AM to 4:30 PM</p>

            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="col-md-7">
            <div class="panel-heading">
                <h4>SEND US YOUR ENQUIRIES</h4>
            </div>
            <br/>

            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required
                               data-validation-required-message="Please enter your name.">

                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required
                               data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required
                               data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Enquiry/message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required
                                  data-validation-required-message="Please enter your message" maxlength="999"
                                  style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Enquiry/Message</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->
<?php require_once "include/footer.php"; ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

</body>

</html>
