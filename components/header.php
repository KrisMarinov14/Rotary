<body>
    <div class="container-fluid" id="header1">
        <div id="header">
            <div class="row">
                <div class="col-3 d-none d-lg-block" id="logo">
                    <a href="../index.php"><img src="../images/logo1.svg" class="img-fluid"></a>
                </div>
                <div class="col-9 justify-content-end d-none d-xl-block">
                    <div class="row justify-content-end">
                        <div class="col-7">
                            <div id="topright">
                                <a onclick="SearchBar()"><img class="search" src="../images/search.svg" width="25px"></a>
                                <a href=""><img class="you" src="../images/youtube.png" width="25"></a>
                                <a href=""><img class="face" src="../images/facebook.png" width="25"></a>
                                <a href=""><img class="insta" src="../images/instagram.png" width="25"></a>
                                <a href=""><img class="in" src="../images/linked.png" width="25"></a>
                                <a href="mailto:info@vipinnovations.bg"><img class="mail" src="../images/footer-mail.png" width="25"></a>
                                <img class="line" src="../images/line.png">
                                <a href="" class="en">EN</a>
                            </div>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-none d-lg-flex">
                            <a href="../index.php" class=" mr-3"><img src="../images/logo2.svg" class="img-fluid"></a>
                            <a href="../index.php"><img src="../images/logo3.svg" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div id="menulinks">
                                <a href="../pages/forUs.php">ЗА НАС</a>
                                <a href="../pages/rotary.php">РОТАРИ КЛУБ</a>
                                <a href="../pages/rotary.php">РОТЕРАКТ КЛУБ</a>
                                <a href="../pages/rotary.php">ИНТЕРАКТ КЛУБ</a>
                                <a href="../pages/allNews.php">НОВИНИ</a>
                                <a href="">СЪБИТИЯ</a>
                                <a href="">АРХИВ</a>
                                <a href="../pages/contacts.php">КОНТАКТИ</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex d-lg-none">
                    <div class="col-4 m-auto">
                        <a href="../index.php"><img src="../images/logo1.svg" id="logo-resp" class="img-fluid"></a>
                    </div>
                    <div class="col-8 m-auto">
                        <div id="resp-images">
                            <div id="resp-img1">
                                <a href="tel:0884102869"><img src="../images/resp-tel.png"></a>
                            </div>
                            <div id="resp-img2">
                                <a onclick="SearchBar()"><img src="../images/resp-search.png"></a>
                            </div>
                            <div id="resp-img3">
                                <a href="javascript:void(0);" onclick="HambMenu(),ImageChange()"><img src="../images/ham-menu.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 pr-0">
                    <div class="col-12 pr-0">
                        <div id="myLinks">
                            <ul class="list-unstyled">
                                <li class="forUs"><a href="../pages/forUs.php">ЗА НАС</a></li>
                                <li>
                                    <a href="../pages/rotary.php">РОТАРИ КЛУБ</a>
                                </li>
                                <li>
                                    <a href="../pages/rotary.php">РОТЕРАКТ КЛУБ</a>
                                </li>
                                <li>
                                    <a href="../pages/rotary.php">ИНТЕРАКТ КЛУБ</a>
                                </li>
                                <li>
                                    <a href="../pages/allNews.php">НОВИНИ</a>
                                </li>
                                <li>
                                    <a href="">СЪБИТИЯ</a>
                                </li>
                                <li>
                                    <a href="">АРХИВ</a>
                                </li>
                                <li>
                                    <a href="../pages/contacts.php">КОНТАКТИ</a>
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
</body>