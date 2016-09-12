<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page_title = "About";
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

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-5">
            <img class="img-responsive" src="img/.jpg" alt="Crest of Top Ridge School">
        </div>
        <div class="col-md-7">
            <p>Top Ridge School is a privately founded government approved Educational Institution which is situated on
                a congenial ground with a serene atmosphere for learning. The school was founded by Mr. Lawrence
                Amartey Telfer and Mrs. Alia Telfer in 1969, with the main aim of providing a sound basic education
                for children of respectable and most homes.
            </p>

            <p>
                On completion of the Junior High School course at the Top Ridge School, students are assured of
                uninterrupted entry into high institutions both within and outside Ghana. Top Ridge School has
                produced lots of prominent men and women in th society, some holding higher government positions,
                CEO's, Bank managers, Engineers, Lawyers, Doctors, Lecturers etc. just to mention a few.
            </p>

            <p>
                You will be thrilled by the school's open embrace to foreign students and its range of academic work.
            </p>

            <blockquote>
                We have few admission slots for day care/creche, primary and JHS. Our average class size of 28
                students with 54 trained and graduate teachers.
            </blockquote>

        </div>
    </div>
    <!-- /.row -->

    <!--Aim, Mission, Vision-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="pager alert btn-primary">
                KNOW WHO WE ARE
            </h3>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4> OUR VALUES</h4>
                </div>
                <div class="panel-body star">
                    <p>
                        <strong> We make these our wards' lifestyle: </strong>
                    </p>
                    <ul>
                        <li> Honesty</li>
                    </ul>
                    <ul>
                        <li> Respect</li>
                    </ul>
                    <ul>
                        <li> Responsibility</li>
                    </ul>
                    <ul>
                        <li> Perseverance</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4> OUR MISSION</h4>
                </div>
                <div class="panel-body star">
                    <p><strong>We are here to: </strong></p>
                    <ul>
                        <li>
                            Provide an encouraging educational experience, promoting social, emotional,
                            physical and cognitive development. We are committed to families we serve.
                            We strive to give parents complete peace of mind while being seen as a shining example
                            of what quality education should be.
                        </li>
                    </ul>
                    <ul>
                        <li>
                            Offer an extensive, well-structured and approved educational program which aims at
                            developing your child holistically. We are here to aid our wards to build a bridge to
                            success
                            through unified efforts.
                        </li>
                    </ul>
                    <ul>
                        <li>
                            Imbue our wards with virtues of honesty, respect, responsibility, and perseverance
                            coupled with a solid foundation in the various fields of knowledge.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>OUR VISION</h4>
                </div>
                <div class="panel-body star">
                    <p><strong>We aspire to: </strong></p>
                    <ul>
                        <li>
                            Be an educational haven where children are safe, content, engaged and properly educated.
                        </li>
                    </ul>
                    <ul>
                        <li>
                            Make our wards view learning as a hobby, so that they can cherise their childhood moments
                            and experiences in school
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Administrative Team Members -->
    <div class="row text-center">
        <div class="col-lg-12">
            <h3 class="pager alert alert-info">MEET OUR HARDWORKING STAFF</h3>

            <p class="text-left">
                The teaching staffs consist of university and polytechnic graduates with varied training and experience.
                Our teachers are conversant with theories of development, learning, instruction, assessment and
                evaluation which form the bedrock of teaching and learning. Pupils are taken through basic sound
                academic work by teachers with good command of the English and French languages. Our teachers are
                very patient with the students and attend to their academic needs individually. Students who pass
                from this school have bright chances of success.
            </p>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Ms Gifty<br/>
                        <small>Teacher</small>
                    </h3>
                    <p>
                        Something small here
                    </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Mrs Alia<br/>
                        <small>Teacher</small>
                    </h3>
                    <p>
                        Give small description
                    </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Mr Teacher<br>
                        <small>JHS Dept</small>
                    </h3>
                    <p>
                        Small description here
                    </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Madam Teacher<br>
                        <small>Day care dept</small>
                    </h3>
                    <p>
                        Small description here
                    </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">

                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt
                        maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">

                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt
                        maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">

                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt
                        maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>-->
    </div>
    <!-- /.row -->


    <!-- Our Old Students -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Our Old Students</h2>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="img/avatar.jpeg" alt="Picture of ... Works at...">

            <div class="text-center">
                <b>
                    Kwesi Mintah<br/>
                    <em>Customer Care</em><br/>
                </b>
                MTN Ghana &horbar; Accra
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="img/avatar.jpeg" alt="Picture of ... Works at...">

            <div class="text-center">
                <b>
                    Eugene K. Asare<br/>
                    <em>Accountant</em><br/>
                </b>
                UT Bank &horbar; Tarkoradi Main
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="img/avatar.jpeg" alt="Picture of ... Works at...">

            <div class="text-center">
                <b>
                    Redeemer<br/>
                    <em>Teller</em><br/>
                </b>
                Ghana Post Office &horbar; Tarkwa
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="img/avatar.jpeg" alt="Picture of ... Works at...">

            <div class="text-center">
                <b>
                    Esther Oduro<br/>
                    <em>Teacher</em><br/>
                </b>
                Akim Oda Secondary School &horbar; Akim Oda
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="img/avatar.jpeg" alt="Picture of ... Works at...">
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="img/avatar.jpeg" alt="Picture of ... Works at...">
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

</body>

</html>
