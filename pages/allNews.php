
<title>All News</title>
<body>
<?php
include('../components/head.php');
include('../components/header.php');
?>

<img src="../images/shadow.png"  id="shadow" class="w-100">

<?php
include('../components/carousel.php');
?>
<!--BreadCrumb-->
<nav aria-label="breadcrumb" class="mt-4 bg-white" id="breadcrumb">
    <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item text-body"><a href="index.php" class="text-decoration-none text-dark">Начало</a></li>
        <li class="breadcrumb-item active text-body" aria-current="page">НОВИНИ
        </li>
    </ol>
</nav>
<!--End of BreadCrumb-->

<?php
include('../components/news.php');
include('../components/contactForm.php');
include('../components/footer.php');
?>
<img src="../images/shadow.png" class="w-100">
<div class="vip mb-5 mt-5">
    <p class="mb-0">
        ВИП иновейшънс &copy; 2021-2022 &#124; Design & Development by FORMA Design & Innovations
    </p>
</div>
</body>