@extends('header')
@section('title','A propos')
    @section('content')
		<!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h5>A propos de Nous</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Qui sommes nous ?</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="mosh-aboutUs-area section_padding_100_0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="mosh-about-us-content">
                        <div class="section-heading">
                            <h3 style="font-family: italic; color: black; ">Présentation de N-Technology</h3>
                            <div class="inline "></div>
                        </div>
       					<p style="font-style: initial;color: #464c5e;font-size: 1.rem;">N-Technology est une entreprise de technologie fournissant des services Informatiques.Nous aidons nos clients à contruire leur business dans ces domaines</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mosh-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/headpiece.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Features Area Start ***** -->
<section class="mosh-about-features-area section_padding_100" style="background-color:  #e6e6ebe5;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-12">
                    <div class="mosh-about-us-content">
                        <div class="section-heading">
                        
                        </div>
                        <div class="row devise">
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-4">
                                <div class="text-center">
                                <div class="folder" >
                                    <i class="fa fa-folder"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Facile à Utiliser</h5>
                                    <p >Nous fournissons de puissantes solutions qui sont conçues avec la facilité d'utilisation à l'esprit.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-4">
                                <div class="text-center">
                                    <div class="folder">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>ROBUSTE &amp; SECURISÉ</h5>
                                        <p>La sécurité des données est d'une importance capitale pour nous et est partie intégrante de notre travail</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-4">
                                <div class="text-center">
                                    <div class="folder">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>A JOUR</h5>
                                        <p>Nous utilisons les dernières technologies disponibles pour améliorer la qualité de notre travail</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- ========== Loaders ========== -->
        <div class="col-12">
            <div class="elements-title">
                <h2>CERTAINES DE NOS COMPETENCES</h2>
                <div class="line center"></div>    
                <p class="lead mb-0">Nous travaillons avec beacoup de technologies, voici les principales</p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-6">
                        <div class="competence">
                            <p>Le développement d'applications est un vaste sujet.Nous travaillons sur une vaste gamme de technologies allant d'AGL(atelier Génie Logiciel) tels que Windev à PHP pour les applications web.
                            </p>
                            <p>
                            Nous avons aussi des solutions clé en main comme une application de gestion des Ressources Humaines, de gestion de stock ou d'achat.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12" style=" padding-bottom:30px;padding-left: 90px;">
                                <a href="{{ route('contact') }}" class="btn mosh-btn">Contacter</a>
                            </div>
                        </div>
             </div>
               
            <div class="col-6">
                <!-- Loaders Area Start -->
                <div class="our-skills-area text-center mb-100">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="single-pie-bar m-bottom-50" data-percent="90">
                                <canvas class="bar-circle" width="70" height="70"></canvas>
                                <h6>WEB APP</h6>
                            
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="single-pie-bar m-bottom-50" data-percent="83">
                                <canvas class="bar-circle" width="70" height="70"></canvas>
                                <h6>MOBILE</h6>
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="single-pie-bar m-bottom-50" data-percent="25">
                                <canvas class="bar-circle" width="70" height="70"></canvas>
                                <h6>softawre</h6>
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="single-pie-bar m-bottom-50" data-percent="75">
                                <canvas class="bar-circle" width="70" height="70"></canvas>
                                <h6>CONSULTING</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <!--=========================loaders========================-->
    <!-- ***** Features Area End ***** -->
    <!-- ***** Few Words Area Start ***** -->
    <section class="few-words-from-ceo d-md-flex">
        <div class="few-words-thumb bg-img wow fadeInRightBig" data-wow-delay="1.1s" style="background-image: url(img/bg-img/macbook.jpg);">
            <p >Nous réalisons la partie technique de vos projets</p>
        </div>
        
    </section>
    <!-- ***** Few Words Area End ***** -->

    <!-- ***** Team Area Start ***** -->
    <section class="mosh-team-area section_padding_100" style="background-color: rgba(245, 245, 245, 0.883);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-heading text-center">
                       <div class="n-tec"><h3>Equipe de N-Technology</h3></div>
                        <div class="equipe"></div>
                       <div class="membre"><h5>Nous mettons à votre service une equipe competente, dynamique pour la reussite de vos projets. </h5></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="mosh-team-slides owl-carousel">
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/c-1.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Christine Smith</h4>
                                <span>CEO Company</span>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque.</p>
                            </div>
                            <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/c-2.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>William Donovan</h4>
                                <span>digital designer</span>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque.</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/c-3.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Michael Kellog</h4>
                                <span>Developer</span>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque.</p>
                            </div>
                            <!-- Social Info -->
                                <div class="team-social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/c-2.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>William Donovan</h4>
                                <span>digital designer</span>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque.</p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Area Start ***** -->

    <section class="mosh-subscribe-newsletter-area bg-img bg-overlay-white section_padding_100" style="background-image: url(img/bg-img/office.jpg);">
        <div class="container">
          <div class="row">
   
                <div class="col-sm-3 col-xs-6">
                    <div class="nombre">
                        <i class="fa fa-user"></i>
                        <h3 class="white-text"><span class="counter">20</span></h3>
                        <span class="white-text">Clients</span>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <div class="nombre">
                        <i class="fa fa-trophy"></i>
                        <h3 class="white-text"><span class="counter">12</span></h3>
                        <span class="white-text">Awards won</span>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <div class="nombre">
                        <i class="fa fa-code"></i>
                        <h3 class="white-text"><span class="counter">154</span>K</h3>
                        <span class="white-text">Ligne de code</span>
                    </div>
                </div>
                            
                <div class="col-sm-3 col-xs-6">
                    <div class="nombre">
                        <i class="fa fa-file"></i>
                        <h3 class="white-text"><span class="counter">45</span></h3>
                        <span class="white-text">Projects completed</span>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @endsection
