<body>
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
</body>