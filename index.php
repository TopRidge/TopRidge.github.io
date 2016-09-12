<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <?php $page_title = "Welcome";
    require_once "include/head.php";
    require_once "include/constant.php";
    echo "<title>" . DISPLAY_TITLE . " | $page_title</title>";
    ?>
</head>

<body>

<!-- Navigation -->
<?php require_once "include/navigation.php"; ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/index/1.jpg');"></div>
            <div class="carousel-caption">
                <p>A section of students inside the Burma Camp, Accra</p>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/index/2.jpg');"></div>
            <div class="carousel-caption">
                <p>Students assembled at the Burma Camp exhibition grounds, Accra</p>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/index/3.jpg');"></div>
            <div class="carousel-caption">
                <p>Top Ridge students exhibits excitement on their excursion to Burma Camp, Accra</p>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/index/4.jpg');"></div>
            <div class="carousel-caption">
                <p>School Dormitory &horbar; Alfia Hall</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">
    <!-- Everyone Acclaims Top Ridge Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="pager title">
                Welcome to Top Ridge School
            </h1>

            <div class="text-center fa-2x"><?php echo DISPLAY_MOTTO; ?></div>
        </div>
        <div class="col-lg-12">
            <h3 class="pager alert btn-primary">
                EVERYONE ACCLAIMS
                <nobr/>&lsquo;TOP RIDGE&rsquo;</nobr>
            </h3>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-graduation-cap"></i> Sound Basic Education</h4>
                </div>
                <div class="panel-body">
                    <p>
                        <strong><em>Education is our passion! Teaching is our profession!</em></strong>
                        <br/>We have a quest to make parents feel good about the choice of school for their wards.
                        An educational haven where children are safe, content, engaged and properly educated.

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-line-chart"></i> Higher Education</h4>
                </div>
                <div class="panel-body">
                    <p>
                        We believe that our wards future is now! Therefore, we constantly improve our teaching and
                        learning materials and methodologies. We aim at making learning a hobby, so that our wards can
                        cherise their childhood moments and experiences in school &horbar; <em>Edutainment!</em>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-home"></i> Charity Begins at Home</h4>
                </div>
                <div class="panel-body">
                    <p>
                        We are optimistic that for a child to be able to attain greater heights in life,
                        hard work is a necessity and also paramount. Hence, hence Top Ridge School!
                        <br/>We begin our wards with an attitude of hard work, and also smart work.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-heart"></i> Virtues of Volunteerism</h4>
                </div>
                <div class="panel-body">
                    <p>
                        Transparency is our hallmark. We are not saying it, we live it. Remaining accountable to
                        our donors and sponsors is one of our key pillars. Our yea is yea, nay is nay!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Learn about us Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <blockquote>
                    OUR GRADUATES ARE WORLD CLASS
                </blockquote>
                <p>
                    Honesty &emsp; &bull; &emsp;
                    Respect &emsp; &bull; &emsp;
                    Responsibility &emsp; &bull; &emsp;
                    Perseverance
                </p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-info btn-block" href="about.php">Learn more about us</a>
            </div>
        </div>
    </div>

    <!-- Classes Available Section -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="pager alert alert-info">ALL CLASSES ARE AVAILABLE</h3>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="text-center">
                <span class="icon slide-1x"><i class="fa fa-child"></i></span>

                <h2>
                    Crèche/Day care<br/>
                    <small>Admissions starts from age one(1) to four(4) years</small>
                </h2>
            </div>
            <div class="item-heading"><span>Department Objectives</span></div>
            <div class="star">
                <ul>
                    <li>To provide safe, secure and high quality child care.</li>
                </ul>
                <ul>
                    <li>To develop in each child self- esteem through self- awareness; healthy and wholesome
                        attitude towards his/her body; a positive self-image; independence through learning how
                        to care for him/herself.
                    </li>
                </ul>
                <ul>
                    <li>To help the child learn how to work directly with his/ her peers, adults and the real
                        world within which he/she lives.
                    </li>
                </ul>
                <ul>
                    <li>To develop in each child the ability to think and to use language, to express
                        him/herself creatively and use his/her gift of imagination and capacity to respond to
                        beauty.
                    </li>
                </ul>
                <ul>
                    <li>To enable each child to acquire an understanding of him/herself, develop his/her
                        feelings, the ability to recognize and deal with them.
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="text-center">
                <span class="icon slide-1x"><i class="fa fa-pencil"></i></span>

                <h2>Kindergarten<br/>
                    <small>Admissions start from age four (4)</small>
                </h2>
            </div>
            <div class="item-heading"><span>Department Objectives</span></div>
            <div class="star">
                    <ul>
                        <li>To expose students to fluent oral reading through teacher modeling in a variety of ways and
                            help them identify and write the uppercase and lower case letters of the alphabets and
                            identify the sounds they represent.
                        </li>
                    </ul>
                    <ul>
                        <li>To help students to begin to use their knowledge of sounds and letters to write words and
                            sentences independently.
                        </li>
                    </ul>
                    <ul>
                        <li>To open the door of learning for children and make them love the process so that they will
                            become self-motivated learners in the future.
                        </li>
                    </ul>
                    <ul>
                        <li>To help harness the curiosity of the child and sharpen it into rational logical and
                            sustainable process of thought and to help develop cognitive abilities to the fullest.
                        </li>
                    </ul>
                    <ul>
                        <li>To help the child to identify numbers, sort and organize objects based on different
                            attributes, recognize basic shapes and units of measurement, time and weight.
                        </li>
                    </ul>
                </div>
            <!-- /.row -->
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="text-center">
                <span class="icon slide-2x"><i class="fa fa-book"></i></span>

                <h2>Primary School<br/>
                    <small>(Classes 1 - 6)</small>
                </h2>
            </div>
            <p class="item-info">
                Children between the ages of 5 to 10 gain admission into the primary department.
                Pupils are taught to acquire knowledge in the requisite subjects for entry into Junior High School.
            </p>
            <div class="item-heading"><span>Department Curriculum</span></div>
            <div class="star">
                    <div class="col-md-5 col-sm-5">
                        <ul>
                            <li>English</li>
                        </ul>
                        <ul>
                            <li>French</li>
                        </ul>
                        <ul>
                            <li>Mathematics</li>
                        </ul>
                        <ul>
                            <li>Home Science</li>
                        </ul>
                        <ul>
                            <li>Creative Arts</li>
                        </ul>
                        <ul>
                            <li>Ghanaian Language</li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <ul>
                            <li>English Literature</li>
                        </ul>
                        <ul>
                            <li>Physical Education</li>
                        </ul>
                        <ul>
                            <li>Citizenship Education</li>
                        </ul>
                        <ul>
                            <li>Religious and Moral Education</li>
                        </ul>
                        <ul>
                            <li>Natural Science and Integrated Science</li>
                        </ul>
                        <ul>
                            <li>Information Communication Technology</li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="text-center">
                <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                <h2>Junior High School<br/>
                    <small>(JHS 1 - 3)</small>
                </h2>
            </div>
            <p class="item-info">
                This department offer a 3 year course program structured to meet international standards and also equip
                students with the requisite knowledge to facilitate entry into reputable Senior High Schools in
                Ghana and overseas.
            </p>
            <div class="item-heading"><span>Department Curriculum</span></div>
            <div class="star">
                <div class="col-md-5 col-sm-5">
                    <ul>
                        <li>French</li>
                    </ul>
                    <ul>
                        <li>Mathematics</li>
                    </ul>
                    <ul>
                        <li>Home Science</li>
                    </ul>
                    <ul>
                        <li>Social Studies</li>
                    </ul>
                    <ul>
                        <li>Ghanaian Language</li>
                    </ul>
                </div>
                <div class="col-md-7 col-sm-7">
                    <ul>
                        <li>English Literature</li>
                    </ul>
                    <ul>
                        <li>Integrated Science</li>
                    </ul>
                    <ul>
                        <li>Basic Design and Technology</li>
                    </ul>
                    <ul>
                        <li>Religious and Moral Education</li>
                    </ul>
                    <ul>
                        <li>Information Communication Technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Administrative Team Members -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="pager alert btn-primary">MEET OUR ADMINISTRATIVE STAFF</h3>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Mr Lawrence Amartey Telfer<br/>
                        <small>Founder</small>
                    </h3>
                    <p>
                        Something small about Mr Lawrence here
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
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Mrs Alia Telfer<br/>
                        <small>Co-founder</small>
                    </h3>
                    <p>
                        Give small description of Mrs Telfer here
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
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive img-circle" src="img/avatar.jpeg"
                     alt="Picture of ">

                <div class="caption">
                    <h3>Mr Headmaster<br>
                        <small>Headmaster/Headmistress</small>
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
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php require_once "include/footer.php"; ?>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
