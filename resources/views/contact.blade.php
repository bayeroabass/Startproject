@extends('header')

@section('title','Contact')

@section('content')

    <!-- ***** Breadcumb Area Start ***** -->
        <div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="bradcumbContent">
                            <h2>Contact</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Say Hello</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Breadcumb Area End ***** -->

        <!-- ***** Contact Area Start ***** -->
        <section class="contact-area section_padding_100">
            <div class="container">
                <div class="row">
                    <!-- Contact Form Area -->
                    <div class="col-12 col-md-8">
                        <div class="contact-form-area">
                            <h2>Nous Contacter</h2>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="Nom">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Objet">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn mosh-btn mt-50" type="submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="col-12 col-md-4">
                        <div class="contact-information">
                            <h2>Contact</h2>
                            <div class="single-contact-info d-flex">
                                <div class="contact-icon mr-15">
                                    <img src="img/core-img/map.png" alt="">
                                </div>
                                <p>Dixinn-Landréa,<br> Conakry, Guinée</p>
                            </div>
                            <div class="single-contact-info d-flex">
                                <div class="contact-icon mr-15">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <p>Portable: +224 622 30 15 56 <br> Bureau: +224 664 65 28 21</p>
                            </div>
                            <div class="single-contact-info d-flex">
                                <div class="contact-icon mr-15">
                                    <img src="img/core-img/message.png" alt="">
                                </div>
                                <p>office@ntechnology.com</p>
                            </div>
                            <div class="contact-social-info mt-50">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Contact Area End ***** -->

        <!-- Google Maps -->
    <!-- Numbers -->
    <div id="numbers" class="section1 sm-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/bg-img/office.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-user"></i>
                        <h3 class="white-text"><span class="counter">20</span></h3>
                        <span class="white-text">Clients</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-trophy"></i>
                        <h3 class="white-text"><span class="counter">12</span></h3>
                        <span class="white-text">Awards won</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-code"></i>
                        <h3 class="white-text"><span class="counter">154</span>K</h3>
                        <span class="white-text">Ligne de code</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-file"></i>
                        <h3 class="white-text"><span class="counter">45</span></h3>
                        <span class="white-text">Projects completed</span>
                    </div>
                </div>
                <!-- /number -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Numbers -->

@endsection
