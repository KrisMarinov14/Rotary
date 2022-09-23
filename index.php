<!-- Old Header with includes

include('components/head.php');
include('components/header.php');
include('components/carousel-index.php');
include('components/cards.php');
include('components/text-image.php');


<img src="images/shadow-up.png" id="shadow1" class="w-100">


include('components/2news.php');


<img src="images/shadow.png" id="shadow1" class="w-100">


include('components/video.php');
include('components/contactForm.php');
include('components/footer.php');

<div class="vip mb-0">
    <p class="mb-0">
        ВИП иновейшънс &copy; 2021-2022 &#124; Design & Development by FORMA Design & Innovations
    </p>
</div>
---- End of old Header-->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="styles/styles.css" type="text/css" media=screen>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/css/themes/splide-skyblue.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>   
</head>

<body>
    <div class="container-fluid" id="header1">
        <div id="header">
            <div class="row">
                <div class="col-3 d-none d-lg-block" id="logo">
                    <a href="index.php"><img src="images/logo1.svg" class="img-fluid"></a>
                </div>
                <div class="col-9 justify-content-end d-none d-xl-block">
                    <div class="row justify-content-end">
                        <div class="col-7">
                            <div id="topright">
                                <a onclick="SearchBar()"><img class="search" src="images/search.svg" width="25px"></a>
                                <a href=""><img class="you" src="images/youtube.png" width="25"></a>
                                <a href=""><img class="face" src="images/facebook.png" width="25"></a>
                                <a href=""><img class="insta" src="images/instagram.png" width="25"></a>
                                <a href=""><img class="in" src="images/linked.png" width="25"></a>
                                <a href="mailto:info@vipinnovations.bg"><img class="mail" src="images/footer-mail.png" width="25"></a>
                                <img class="line" src="images/line.png">
                                <a href="" class="en">EN</a>
                            </div>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-none d-lg-flex">
                            <a href="index.php" class=" mr-3"><img src="images/logo2.svg" class="img-fluid"></a>
                            <a href="index.php"><img src="images/logo3.svg" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div id="menulinks">
                                <a href="pages/forUs.php">ЗА НАС</a>
                                <a href="pages/rotary.php">РОТАРИ КЛУБ</a>
                                <a href="pages/rotary.php">РОТЕРАКТ КЛУБ</a>
                                <a href="pages/rotary.php">ИНТЕРАКТ КЛУБ</a>
                                <a href="pages/allNews.php">НОВИНИ</a>
                                <a href="">СЪБИТИЯ</a>
                                <a href="">АРХИВ</a>
                                <a href="pages/contacts.php">КОНТАКТИ</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex d-lg-none">
                    <div class="col-4 m-auto">
                        <a href="index.php"><img src="images/logo1.svg" id="logo-resp" class="img-fluid"></a>
                    </div>
                    <div class="col-8 m-auto">
                        <div id="resp-images">
                            <div id="resp-img1">
                                <a href="tel:0884102869"><img src="images/resp-tel.png"></a>
                            </div>
                            <div id="resp-img2">
                                <a onclick="SearchBar()"><img src="images/resp-search.png"></a>
                            </div>
                            <div id="resp-img3">
                                <a href="javascript:void(0);" onclick="HambMenu(),ImageChange()"><img src="images/ham-menu.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 pr-0">
                    <div class="col-12 pr-0">
                        <div id="myLinks">
                            <ul class="list-unstyled">
                                <li class="forUs"><a href="pages/forUs.php">ЗА НАС</a></li>
                                <li>
                                    <a href="pages/rotary.php">РОТАРИ КЛУБ</a>
                                </li>
                                <li>
                                    <a href="pages/rotary.php">РОТЕРАКТ КЛУБ</a>
                                </li>
                                <li>
                                    <a href="pages/rotary.php">ИНТЕРАКТ КЛУБ</a>
                                </li>
                                <li>
                                    <a href="pages/allNews.php">НОВИНИ</a>
                                </li>
                                <li>
                                    <a href="">СЪБИТИЯ</a>
                                </li>
                                <li>
                                    <a href="">АРХИВ</a>
                                </li>
                                <li>
                                    <a href="pages/contacts.php">КОНТАКТИ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #searchBar {
            display: none;
            padding-top: 5px;
            padding-bottom: 40px;
            padding-left: 110px;
            padding-right: 110px;
            flex-direction: column;
        }

        #search1 {
            border-radius: 0px 20px 20px 0px;
            background-image: url("images/resp-search.png");
            background-repeat: no-repeat;
            background-position: 99%;
        }
    </style>

    <div id="searchBar">
        <img src="images/shadow.png" class="w-100">
        <input class="form-control mr-sm-2" type="search" placeholder="Търсене" aria-label="Search" id="search1">

    </div>
    <script>
        function SearchBar() {
            var x = document.getElementById("searchBar");
            if (x.style.display === "flex") {
                x.style.display = "none";
            } else {
                x.style.display = "flex";
            }
        }
    </script>


    <script>
        function HambMenu() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        function ImageChange() {
            const img = document.getElementById('resp-img3');
            let toggle = true;
            img.addEventListener('click', function() {
                toggle = !toggle;
                if (toggle) {
                    img.src = '..\\images\\ham-menu.png';
                } else {
                    img.src = '..\\images\\ham-menu-onclick.png';
                }

            })
        }
    </script>
    <!--Carousel-->
    <div class="row d-none d-lg-block z-index-1">
        <div class="col-12 pr-0">
            <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators" id="baner-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/baner-image1.jpg" class="d-block
                                w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block
                                text-right" id="carousel-caption">
                            <h5 class="carousel-title">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href="https://m.me/RotaryClubRuse">
                                <button type="button p-0" class="carosel-icon  btn-carousel-bottom  btn-custom" style="margin-top: 80px;">
                                <img src="images/messenger1.png" class="messenger-img">
                                </button>
                            </a>
                            <div class="btn-info-position">
                                <a class="button-info" href="#">виж повече</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/baner-image2.jpg" class="d-block
                                w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block
                                text-right" id="carousel-caption">
                            <h5 class="carousel-title">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href="https://m.me/RotaryClubRuse">
                                <button type="button p-0" class="carosel-icon  btn-carousel-bottom  btn-custom" style="margin-top: 80px;">
                                <img src="images/messenger1.png" class="messenger-img">
                                </button>
                            </a>
                            <div class="btn-info-position">
                                <a class="button-info" href="#">виж повече</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/baner-image3.jpg" class="d-block
                                w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block
                                text-right" id="carousel-caption">
                            <h5 class="carousel-title">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href="https://m.me/RotaryClubRuse">
                                <button type="button p-0" class="carosel-icon  btn-carousel-bottom  btn-custom" style="margin-top: 80px;">
                                <img src="images/messenger1.png" class="messenger-img">
                                </button>
                            </a>
                            <div class="btn-info-position">
                                <a class="button-info" href="#">виж повече</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/baner-image4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block
                                text-right" id="carousel-caption">
                            <h5 class="carousel-title">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href="https://m.me/RotaryClubRuse">
                                <button type="button p-0" class="carosel-icon  btn-carousel-bottom  btn-custom" style="margin-top: 80px;">
                                <img src="images/messenger1.png" class="messenger-img">
                                </button>
                            </a>
                            <div class="btn-info-position">
                                <a class="button-info" href="#">виж повече</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!--End of Carousel-->
    <div class='container-fluid' id="grid-cards">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col mb-4">
                <div class="card" id="rotary-card">
                    <img src="images/card-image1.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ротари клуб „Русе“ е основан Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor blandit dui, vitae semper lorem euismod quis. Pellentesque dictum velit at erat egestas vulputate. Vestibulum sed ante vitae sapien aliquet rhoncus pharetra quis nibh. Cras ante erat, tristique ut ligula eget, blandit congue magna. Etiam semper, odio id </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" id="rotary-card">
                    <img src="images/card-image2.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ротари клуб „Русе“ е основан Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor blandit dui, vitae semper lorem euismod quis. Pellentesque dictum velit at erat egestas vulputate. Vestibulum sed ante vitae sapien aliquet rhoncus pharetra quis nibh. Cras ante erat, tristique ut ligula eget, blandit congue magna. Etiam semper, odio id </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" id="rotary-card">
                    <img src="images/card-image3.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ротари клуб „Русе“ е основан Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor blandit dui, vitae semper lorem euismod quis. Pellentesque dictum velit at erat egestas vulputate. Vestibulum sed ante vitae sapien aliquet rhoncus pharetra quis nibh. Cras ante erat, tristique ut ligula eget, blandit congue magna. Etiam semper, odio id </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!--Text with Images-->
<div class="container-fluid pl-0 pr-0">
        <div id="text-image1">
            <h1>РОТАРИ КЛУБ</h1>
            <div class="row" id="text-image1-2">
                <div class="col-12 col-md-5">
                    <img src="images/PaulHarris.jpg" class="img-fluid">
                </div>
                <div class="col-12 col-md-7">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas tristique sodales. Phasellus tincidunt neque feugiat, iaculis lorem non, consequat orci. Phasellus sit amet pulvinar nulla. Aliquam porttitor tortor non consequat
                        lacinia. Aliquam ut mi accumsan, vehicula nisi cursus, dictum ligula. Donec quis pharetra augue. Sed auctor nulla nulla, non vestibulum nunc auctor nec. Etiam libero neque, malesuada maximus justo sit amet, sollicitudin ornare
                        erat. Cras eget dolor nec sapien malesuada ultricies id vitae eros. Maecenas scelerisque nulla a risus egestas mattis. Nam egestas metus eget condimentum congue.
                        <br><br> Sed eget semper neque, at mattis enim. Fusce id iaculis dui. Nulla facilisi. Nunc rutrum tristique metus, ac maximus arcu sagittis sit amet. Sed eu porttitor lorem. Donec eget auctor sapien. Phasellus accumsan sodales
                        turpis. Nullam efficitur sagittis lectus, ac efficitur enim gravida a.<br><br>
                        <span>Ut lobortis nulla at suscipit blandit. Ut
                                faucibus nisi massa, in
                                dignissim
                                ipsum imperdiet sed. Integer vitae neque
                                felis.
                                Curabitur molestie
                                congue
                                sem et aliquam. Nulla fringilla libero nec
                                nulla
                                tempor, sit amet
                                molestie
                                erat condimentum. Ut vehicula vulputate
                                eros,
                                eget semper leo dictum ac.
                                Suspendisse eget euismod turpis. Fusce a
                                nulla
                                metus. Fusce in aliquet
                                neque, sed luctus ipsum. Fusce consequat
                                euismod
                                velit a faucibus. Donec
                                luctus eros non mollis porta. Mauris varius
                                dolor at mi blandit blandit.
                                Curabitur vulputate egestas accumsan.
                                Praesent
                                posuere, est sit amet
                                dictum
                                sagittis, dui diam tempus ante, lacinia
                                tincidunt neque turpis
                                consectetur
                                enim. Aliquam vel dui quis augue ultricies
                                ornare quis ut turpis.<br><br>
                                Integer sed ipsum a urna iaculis
                                sollicitudin et
                                scelerisque quam. Proin
                                sed
                                mollis quam. Curabitur malesuada porta leo,
                                sit
                                amet euismod lacus
                                fermentum
                                sit amet. Sed convallis sed elit et congue.
                                Aliquam a tempus quam, nec
                                tristique ante. Curabitur eu efficitur ex.
                                Praesent tellus arcu,
                                ultrices
                                quis turpis in, rutrum porttitor nisl.
                                Pellentesque rutrum, felis a
                                ultricies rutrum, nisi sem auctor est, eu
                                congue
                                ex dolor ac lorem.
                                Mauris
                                lacinia est in velit auctor suscipit.
                                Aliquam
                                ullamcorper massa risus,
                                et
                                feugiat nisl tempor at. Vestibulum dignissim
                                velit scelerisque libero
                                malesuada, vitae tincidunt neque aliquet.
                                Praesent eu mattis augue.
                                Quisque
                                sed lectus arcu. Nulla eget feugiat massa.<br><br>
                                Quisque lacinia urna ipsum, in viverra neque
                                egestas nec. Sed
                                pellentesque
                                dolor vitae urna ultrices venenatis. Sed
                                mauris
                                <br><br></span> </p>
                    <a id="see" href="pages/rotary.php">
                        <div id="seeMore">
                            <h2>ВИЖ ПОВЕЧЕ
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <img src="images/shadow-up.png" class="w-100">
    <div class="container-fluid pl-0 pr-0">
            <div id="text-image2">
            <h1 class="d-block d-md-none"> РОТАРАКТ КЛУБ</h1>
                <div class="row" id="text-image2-2">
                <div class="col-12 col-md-7 order-sm-1"> 
                        <img src="images/Statue.jpg" class="img-fluid h-100" id="rotaract-img">
                    </div>
                    <div class="col-12 col-md-5 order-sm-0">
                    <h1 class="d-none d-md-block"> РОТАРАКТ КЛУБ</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas tristique sodales. Phasellus tincidunt neque feugiat, iaculis lorem non, consequat orci. Phasellus sit amet pulvinar nulla. Aliquam porttitor tortor non consequat
                            lacinia. Aliquam ut mi accumsan, vehicula nisi cursus, dictum ligula. Donec quis pharetra augue. Sed auctor nulla nulla, non vestibulum nunc auctor nec. Etiam libero neque, malesuada maximus justo sit amet, sollicitudin ornare
                            erat. Cras eget dolor nec sapien malesuada ultricies id vitae eros. Maecenas scelerisque nulla a risus egestas mattis. Nam egestas metus eget condimentum congue.
                            <br><br> Sed eget semper neque, at mattis enim. Fusce id iaculis dui. Nulla facilisi. Nunc rutrum tristique metus, ac maximus arcu sagittis sit amet. Sed eu porttitor lorem. Donec eget auctor sapien. Phasellus accumsan sodales
                            turpis. Nullam efficitur sagittis lectus, ac efficitur enim gravida a.<br><br> Ut lobortis nulla at suscipit blandit. Ut faucibus nisi massa, in dignissim ipsum imperdiet sed. Integer vitae neque felis. Curabitur molestie congue
                            sem et aliquam. Nulla fringilla libero nec nulla tempor, sit amet molestie erat condimentum. Ut vehicula vulputate eros, eget semper leo dictum ac. Suspendisse eget euismod turpis. Fusce a nulla metus. Fusce in aliquet neque, sed
                            luctus ipsum. Fusce consequat euismod
                            <br><br>
                        </p>
                        <a id="see1" href="pages/rotary.php">
                            <div id="seeMore1" class="order-sm-3">
                                <h2>ВИЖ ПОВЕЧЕ
                                    <h2>
                            </div>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
        <img src="images/shadow.png" class="w-100">

    <div class="container-fluid pl-0 pr-0">
        <div id="text-image3">
            <h1>ИНТЕРАКТ КЛУБ</h1>
            <div class="row" id="text-image3-2">
                <div class="col-12 col-md-5">
                    <img src="images/chlen.jpg" height="670" class="img-fluid">
                </div>
                <div class="col-12 col-md-7 ">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas tristique sodales. Phasellus tincidunt neque feugiat, iaculis lorem non, consequat orci. Phasellus sit amet pulvinar nulla. Aliquam porttitor tortor non consequat
                        lacinia. Aliquam ut mi accumsan, vehicula nisi cursus, dictum ligula. Donec quis pharetra augue. Sed auctor nulla nulla, non vestibulum nunc auctor nec. Etiam libero neque, malesuada maximus justo sit amet, sollicitudin ornare
                        erat. Cras eget dolor nec sapien malesuada ultricies id vitae eros. Maecenas scelerisque nulla a risus egestas mattis. Nam egestas metus eget condimentum congue.<br><br> Sed eget semper neque, at mattis enim. Fusce id iaculis dui.
                        Nulla facilisi. Nunc rutrum tristique metus, ac maximus arcu sagittis sit amet. Sed eu porttitor lorem. Donec eget auctor sapien. Phasellus accumsan sodales turpis. Nullam efficitur sagittis lectus, ac efficitur enim gravida a.
                        <br><br>
                        <span>
                                        Ut lobortis nulla at suscipit
                                        blandit.
                                        Ut faucibus nisi massa, in
                                        dignissim ipsum imperdiet sed.
                                        Integer
                                        vitae neque felis. Curabitur
                                        molestie congue sem et aliquam.
                                        Nulla
                                        fringilla libero nec nulla
                                        tempor,
                                        sit amet molestie erat condimentum.
                                        Ut
                                        vehicula vulputate eros, eget
                                        semper leo dictum ac. Suspendisse
                                        eget
                                        euismod turpis. Fusce a nulla
                                        metus. Fusce in aliquet neque, sed
                                        luctus ipsum. Fusce consequat
                                        euismod
                                        velit a faucibus. Donec luctus eros
                                        non
                                        mollis porta. Mauris varius
                                        dolor at mi blandit blandit.
                                        Curabitur
                                        vulputate egestas accumsan.
                                        Praesent posuere, est sit amet
                                        dictum
                                        sagittis, dui diam tempus
                                        ante,
                                        lacinia tincidunt neque turpis
                                        consectetur enim. Aliquam vel dui
                                        quis
                                        augue ultricies ornare quis ut
                                        turpis.<br><br>
                                        Integer sed ipsum a urna iaculis
                                        sollicitudin et scelerisque quam.
                                        Proin
                                        sed mollis quam. Curabitur malesuada
                                        porta leo, sit amet euismod
                                        lacus
                                        fermentum sit amet. Sed convallis
                                        sed
                                        elit et congue. Aliquam a
                                        tempus
                                        quam, nec tristique ante. Curabitur
                                        eu
                                        efficitur ex. Praesent tellus
                                        arcu, ultrices quis turpis in,
                                        rutrum
                                        porttitor nisl. Pellentesque
                                        rutrum, felis a ultricies rutrum,
                                        nisi
                                        sem auctor est, eu congue ex
                                        dolor ac lorem. Mauris lacinia est
                                        in
                                        velit auctor suscipit. Aliquam
                                        ullamcorper massa risus, et feugiat
                                        nisl
                                        tempor at. Vestibulum
                                        dignissim
                                        velit scelerisque libero malesuada,
                                        vitae tincidunt neque aliquet.
                                        Praesent eu mattis augue. Quisque
                                        sed
                                        lectus arcu. Nulla eget
                                        feugiat
                                        massa.<br><br>
                                        Quisque lacinia urna ipsum, in
                                        viverra
                                        neque egestas nec. Sed
                                        pellentesque dolor vitae urna
                                        ultrices
                                        venenatis. Sed mauris velit,
                                        ullamcorper eu interdum vitae,
                                        egestas
                                        at dolor. Morbi tempor
                                        iaculis
                                        maximus. Donec consectetur tincidunt
                                        scelerisque. Pellentesque nec
                                        risus
                                        nunc. Sed leo dui, consectetur id
                                        commodo nec, ultrices sit amet
                                        massa.
                                        Nulla ac urna <br><br></span> </p>
                    <a id="see" href="pages/rotary.php">
                        <div id="seeMore">
                            <h2>ВИЖ ПОВЕЧЕ
                                <h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Text with Images-->

    <img src="images/shadow-up.png" id="shadow1" class="w-100">

        <!--News-->
    <div class="container-fluid custom-news">
        <div class="row justify-content-center
                                justify-content-md-start">
            <h1 class="custom-title pl-0 pl-md-5"><b>НОВИНИ</b> </h1>
        </div>
        <div class="row d-flex justify-content-space-between">
            <div class="col-12 col-md-6">
                <div class="card custom-card">
                    <iframe src="https://www.youtube.com/embed/u8X5D3j76FQ">
                    </iframe>
                    <div class="card-body">
                        <h2 class="card-title">Парк „Ротари“ на русенския кей. Първите 42 дръвчета</h2>
                        <div class="date">21.09.2022г.</div>
                        <span class="city">Русе<br><br></span>
                        <p id="s1">
                        Парк „Ротари“ е проект на Ротари клуб „Русе“ и предвижда засаждане на над 200 дръвчета по протежение на русенския
                         кей, облагородяване на тази зона чрез поставяне на пейки, кошчета, тоалетна, осигуряване на безплатен WiFi, връзки с Парка на младежка
                         и осъществяване на огромна графити рисунка „Русе поздравява света“, която младите русенци да сътворят върху 
                         10-метровата бетонна ивица на новия кей.
                        </p>
                        <a href="pages/singleNews.php" class="read">
                            <div id="buttonRead">
                                <p class="mt-2">
                                    ПРОЧЕТИ</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card custom-card" >
                    <iframe src="https://www.youtube.com/embed/rDjpu-J2r7E"></iframe>
                    <div class="card-body">
                        <h2 class="card-title">
                        Проект с дистриктен грант 2020/21
                        </h2>
                        <div class="date">21.09.2022г.</div>
                        <span class="city">Русе<br><br></span>
                        <p id="s1">
                        Проект на Ротари клуб „Русе“ за ремонт и обзавеждане на мултимедиен кабинет по гражданско образование и хуманитарни науки в ПГЕЕ „А.Арнаудов“ — гр. Русе с финансиране от Фондация „Ротари“ чрез дистриктен грант.
                        </p>
                        <a href="pages/singleNews.php" class="read">
                            <div id="buttonRead">
                                <p class="mt-2">
                                    ПРОЧЕТИ
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of News-->

    <img src="images/shadow-up.png" id="shadow1" class="w-100">

    <!--Video--> 
    <div class="container-fluid" id="video2">
        <h1>ПРЕДСТВЯМЕ</h1>
        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        <h1 class="text-center">
            Проект "Нови и модерни легла за Тубдиспансера в Русе"
        </h1>
        <p> Nullam id elementum dui. Vestibulum efficitur lacinia lobortis. Etiam hendrerit laoreet enim, vel porttitor orci semper pellentesque. In malesuada metus in augue pretium, non blandit ipsum vestibulum. Curabitur eget commodo lorem. Etiam gravida
            mattis tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean ullamcorper, nisi quis ultricies rutrum, ligula nisi vestibulum ligula, eget faucibus augue sem ac sapien. Vestibulum dictum
            libero vel augue facilisis, a sagittis justo consequat.
            <span class="video-text">
                Sed porttitor fermentum semper. Donec a nibh
                sit amet massa efficitur semper. Etiam
                pellentesque augue ut lectus pulvinar, at
                efficitur enim tempus. Vestibulum pretium,
                lorem quis vulputate tincidunt, ipsum
                ex auctor quam, ut consequat eros leo id
                ipsum.
            </span>
        </p>
    </div>
    <!--End of Video-->

    <!-- Contacts -->
    <div class="container-fluid" id="contactForm">
        <div class="row pl-0 d-block">
            <h1 class="form-title">СВЪРЖЕТЕ СЕ С НАС <a id="formcontacts" href="">Към контакти</a></h1>
            <h1 class="resp-title text-center d-block d-md-none">ИЗПРАТЕТE ЗАПИТВАНЕ</h1>
        </div>
        <div class="row ml-0 pl-4 pl-md-0 pr-4 pr-md-0">
            <div class="col-sm-12 col-md-12 col-lg-5 p-0">
                <form>
                    <div class="row pl-0 pr-4">
                        <div class="col-sm-12 col-md-6 col-lg-6" id="forma">
                            <input type="text" name="Names" placeholder="Име и фамилия*" class="form-control" id="name" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" id="forma">
                            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail*" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" id="forma">
                            <input type="text" name="Phone" placeholder="Телефон*" class="form-control" id="phone" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" id="forma">
                            <input type="text" name="Theme" placeholder="Тема*" class="form-control" id="theme" required>
                        </div>
                        <div class="col-12" id="forma">
                            <textarea name="Message" placeholder="Съобщение*" class="form-control" id="Messagebox" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="col-1">
                                <input type="checkbox" name="ToS" class="form-check-input" required>
                            </div>
                            <div class="col-11 pl-4">
                                <label class="form-check-label pl-4" for="custom-check">
                                    Phasellus auctor rutrum
                                    elit, sed consectetur
                                    diam malesuada at. Sed
                                    in massa quis velit
                                    efficitur
                                    scelerisque. Donec
                                    vestibulum maximus ante,
                                    vel congue mi gravida
                                    varius.
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                            <!-- Google reCaptcha -->
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-8 justify-content-end">
                            <input type="submit" value="изпрати" class="btn-form-submit mt-3" id="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-none d-md-block" >
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%A0%D1%83%D1%81%D0%B5,%20%D1%83%D0%BB.
                %20%D0%94%D0%BE%D0%B1%D1%80%D1%83%D0%B4%D0%B6%D0%B0%204&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Contacts-->

    <!--Footer-->
    <footer>
        <div class='container-fluid' id="footer-div">
            <div class='row d-flex'>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-2'>
                    <h5>ЗА НАС</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                    <a href="pages/forUs.php" class="text-decoration-none text-secondary"><li>За нас</li></a>
                    <a href="pages/forUs/#celi.php" class="text-decoration-none text-secondary"><li>Цели</li></a>
                    <a href="" class="text-decoration-none text-secondary"><li>Реализирани проекти</li></a>
                    <a href="pages/allNews.php" class="text-decoration-none text-secondary"><li>Новини</li></a>
                    <a href="" class="text-decoration-none text-secondary"><li>Полезни съвети</li></a>
                    <a href="" class="text-decoration-none text-secondary"><li>Често задавани въпроси</li></a>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-3'>
                    <h5>РОТАРИ КЛУБ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                    <a href="pages/rotary.php/#whatIsRotary" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#struct" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#integration" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#integration" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-4'>
                    <h5>РОТАРАКТ КЛУБ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                    <a href="pages/rotary.php/#whatIsRotary" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#struct" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#integration" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#integration" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-5'>
                    <h5>ИНТЕРАКТ КЛУБ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                    <a href="pages/rotary.php/#whatIsRotary" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#struct" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#integration" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    <a href="pages/rotary.php/#integration" class="text-decoration-none text-secondary"><li>Заглавие</li></a>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-lg-left order-1 order-md-5'>
                    <h5>ПИШЕТЕ НИ:</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                        <li class="d-inline pr-2" id="write"><img src="images/msg.png" class="footer-msg"></li>
                        <li class="d-inline pr-2"><img src="images/viber.png" class="footer-viber"></li>
                        <li class="d-inline pr-2"><img src="images/skype.png" class="footer-skype"></li>
                        <li class="d-inline pr-2"><img src="images/whatsapp.png" class="footer-whatsapp"></li>
                    </ul>
                    <h5>ПОСЛЕДВАЙТЕ НИ:</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                        <li class="d-inline pr-2"><img src="images/facebook.png" class="footer-facebook"></li>
                        <li class="d-inline pr-2"><img src="images/footer-youtube.png" class="footer-youtube"></li>
                        <li class="d-inline pr-2"><img src="images/linked.png" class="footer-linkedin"></li>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-0 order-md-6'>
                    <h5>ОФИС</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                    <a href="pages/contacts.php" class="text-decoration-none text-secondary">
                        <li >Адрес: Русе, 7000</li>
                        <li>ул. "Родопи 8"</li>
                    </a>
                    <div class="space">
                        <li class="d-inline"><img src="images/footer-tel.png"></li>
                        <li class="d-inline"><a href="tel:0899958845" class="phone-number">089995 8845</a></li>
                    </div> 
                        <li class="d-inline mb-5">
                            <a href="mailto:info@vipinnovations.bg"><img src="images/footer-mail.png"></a>
                        </li> 
                        <li class="d-inline">info@vipinnovations.bg</li>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-7 order-md-7'>
                    <h5>СЕРВИЗ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                        <li>Услуги</li>
                        <li>Обслужване</li>
                        <li>Запитване</li>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-8 order-md-8'>
                    <h5>ОБЩИ УСЛОВИЯ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                        <li>Общи условия за ползване</li>
                        <li>Политики да опазване на личните данни
                        </li>
                        <li>Политики за бисквитките</li>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-8 order-md-8'>
                    <h5>АРХИВ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                        <li>Избрано</li>
                        <li>Търсене</li>
                    </ul>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-2 text-left order-8 order-md-8'>
                    <h5>ОБЩИ УСЛОВИЯ</h5>
                    <ul class='footer-list p-0 list-unstyled'>
                        <li>Общи условия за ползване</li>
                        <li>Политики да опазване на личните данни
                        </li>
                        <li>Политики за бисквитките</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <img src="images/shadow.png" class="w-100">
    <!--End of Footer-->

    <div class="vip mb-0">
    <p class="mb-0">
        ВИП иновейшънс &copy; 2021-2022 &#124; Design & Development by FORMA Design & Innovations
    </p>
</div>

</body>

</html>