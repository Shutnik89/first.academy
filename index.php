<?php


$connection = new PDO ('mysql:host=localhost; dbname=academy; charset=utf8','root','');
$profile = $connection->query('SELECT * FROM `profile`');
$education = $connection->query('SELECT * FROM `education` ORDER BY yearEnd desc ');
$language = $connection->query('SELECT * FROM `language`');
$interes = $connection->query('SELECT * FROM `intereset`');
$expirences = $connection->query('SELECT * FROM `expirence` ORDER BY yearEnd desc');
$projectes = $connection->query('SELECT * FROM `project`');
$skils = $connection->query('SELECT * FROM `skils`');
$profile = $profile->fetchAll();
#
//var_dump($profile);

?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src="assets/images/131.jpg" alt="" />
            <h1 class="name"><?=$profile[0]['name']?></h1>
            <h3 class="tagline"><?=$profile[0]['post']?></h3>
        </div><!--//profile-container-->

        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com"><?=$profile[0]['email']?></a></li>
                <li class="phone"><i class="fa fa-phone"></i><a href="tel:0123 456 789"><?=$profile[0]['phone']?></a></li>
                <li class="website"><i class="fa fa-globe"></i><a href="#" target="_blank"><?=$profile[0]['site']?></a></li>
                <li class="linkedin"><i class="fa fa-linkedin"></i><a href="#" target="_blank"><?=$profile[0]['site']?></a></li>
                <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank"><?=$profile[0]['site']?></a></li>
                <li class="twitter"><i class="fa fa-twitter"></i><a href="#" target="_blank"><?=$profile[0]['site']?></a></li>
            </ul>
        </div><!--//contact-container-->
        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <? foreach ($education as $step) : ?>
            <div class="item">
                <h4 class="degree"><?=$step['speciality'] ?></h4>
                <h5 class="meta"><?=$step['title'] ?></h5>
                <div class="time"><?=$step['yearStart'] ?> - <?=$step['yearEnd'] ?></div>
            </div><!--//item-->
            <? endforeach; ?>
        </div><!--//education-container-->

        <div class="languages-container container-block">
            <h2 class="container-block-title">Languages</h2>
            <ul class="list-unstyled interests-list">
                <? foreach ($language as $lang) : ?>
                <li><?=$lang['title']?> <span class="lang-desc"><?=$lang['level']?></span></li>
                 <?  endforeach; ?>
            </ul>
        </div><!--//interests-->

        <div class="interests-container container-block">
            <h2 class="container-block-title">Interests</h2>
            <ul class="list-unstyled interests-list">
               <? foreach ($interes as $inter) : ?>
                <li><?=$inter['title'] ?> </li>
                <? endforeach; ?>
            </ul>
        </div><!--//interests-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
            <div class="summary">
                Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            </div><!--//summary-->
        </section><!--//section-->

        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Опыт работы</h2>
            <? foreach ($expirences as $experience) : ?>
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title"><?=$experience['post'] ?></h3>
                        <div class="time"><?=$experience['yearStart']?> - <?=$experience['yearEnd'] ?: 'По настоящее время'?></div>
                    </div><!--//upper-row-->
                    <div class="company"><?=$experience['company']?>, <?=$experience['city']?> </div>
                </div><!--//meta-->
                <div class="details">
                    <p><?=$experience['about']?></p>
                    <p><?=$experience['about']?></p>
                </div><!--//details-->
            </div><!--//item-->
                <? endforeach; ?>

        </section><!--//section-->

        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Проекты</h2>
            <div class="intro">
                <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
            </div><!--//intro-->
            <? foreach ($projectes as $projecte) : ?>
                <div class="item">
                    <span class="project-title"><a href="//<?=$projecte['link']?>"><?=$projecte['title']?></a></span> - <span class="project-tagline"><?=$projecte['about']?></span>
                </div><!--//item-->
                <? endforeach; ?>
        </section><!--//section-->

        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
            <div class="skillset">
                <? foreach ($skils as $skil) : ?>
                <div class="item">
                    <h3 class="level-title"><?=$skil['title']?></h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="<?=$skil['level']?>">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->
                <? endforeach; ?>

            </div>
        </section><!--//skills-section-->
        <form action="#" method="post">
            <textarea name="comment" cols="30" rows="5" placeholder="Оставить отзыв"></textarea>
            <button style="">Отправить отзыв</button>
        </form>

        <? if ($_POST['comment']) {
            $comment = $_POST['comment'];
            $connection->query("INSERT INTO `comment` (`comment`) VALUES ('$comment')");
        }
            $commentOfUser = $connection->query('SELECT * FROM `comment`');

        foreach ($commentOfUser as $comments) {

        ?>
        <div class="comment_block" style="">
            <?='Отзыв №'.$comments['id']. ' ' .$comments['comment']?>
        </div>
        <? }?>
    </div><!--//main-body-->
</div>



<footer class="footer">
    <div class="text-center">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
    </div><!--//container-->
</footer><!--//footer-->

<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>

