@extends('homepage.layouts.app')
 
@section('title', "Mariane's Cake and Pastries")
 
@section('content')


        @include('homepage.includes.nav')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To!</div>
                <div class="masthead-heading text-uppercase">Mariane's Cakes and Pastries</div>
            </div>
        </header>




        <!-- Announcement Section-->
        <section class="page-section" id="Announcement"> 
        <div class="container">
        <div class="text-center">
                <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Announcements</h2>
        </div>
        <div class="carousel" data-flickity='{ "autoPlay": true }'>
        @foreach ($sliders as $sliderItems)
            <div class="carousel-cell" style="background-image: url({{ asset($sliderItems->image)}})"></div>
        @endforeach
        </div>
        </div>
        {{-- <br>
        <br> --}}
        

 

        <!-- About Section-->
        <section class="page-section .bg-primary text-white mb-0" id="About">
            <div class="container">
        <div class="text-center">
            <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">About Us</h2>
        </div> 
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/portfolio/Mar.jpg" alt="..." /></div>
                        <p></p>
                    </div> 
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5 fst-italic text-align-justify">
                            <p></p>
                            <p>The small business Mariane's Cakes & Pastries offers a wide selection of cakes and pastries. 
						            There are several cakes available, including custard cake, red velvet cake, mango cake, and custom desserts that can be ordered.
                                	Brownies, Macaroons, ButterScotch, 
                                	Revel Bars, Cake Pops, and No Bake  Cheesecake are just a few of the pastries they provide, all of which are delicious and delightful.</p>
                            <p></p>
                            <p>We think that eating is a coping method for stress, and that cakes and pastries are among the finest.
                                Therefore, Mariane's Cakes and Pastries is here to give or satisfy your needs whenever you desire any nice cakes or pastries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        {{-- <!-- About Section-->
        <section class="page-section" id="team">
            <div class="container">
        <div class="text-center">
            <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Mision & Vision</h2>
        </div> 
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/portfolio/Mar.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            {{-- <h2 class="display-4">For those about to rock...</h2> --}}
                            {{-- <p>Mision</p>
                            <p>To constantly innovate and provide exceptional service, using sustainable ingredients and fostering a culture of excellence among our team members.</p>
                            <p>Vision</p>
                            <p>To become the leading provider of high-quality baked goods in the market, consistently exceeding customer expectations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}} 
        
 <section class="page-section .bg-primary text-white mb-0" id="Vision and Mission">
            <div class="container">
        <div class="text-center">
                    <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Vision & Mission</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>   
 <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="assets/img/portfolio/Kitkat.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="assets/img/portfolio/pastries1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 fst-italic">
                        {{-- <p class="text-primary text-uppercase mb-2">// About Us</p> --}}
                        <h2 class="display-6 mb-4">We Bake Every Item From The Core Of Our Hearts</h2>
                        <p>Vision</p> 
                        <p>To become the leading provider of high-quality baked goods in the market, consistently exceeding customer expectations.</p>
                        <p>Mission</p> 
                        <p>To constantly innovate and provide exceptional service, using sustainable ingredients and fostering a culture of excellence among our team members.</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Quality Products
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Custom Products
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Order
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Home Delivery
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Vision & Mision Section-->
        {{-- <section class="content-section" id="team">
            <div class="container px-4 px-lg-5">
                <div class="text-center">
                    <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Mission & Vision</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item text-decoration-none">
                            <div class="caption">
                                <div class="caption-content fst-italic">
                                    <div class="h2">Mission</div>
                                    <p class="mb-0">To constantly innovate and provide exceptional service, using sustainable ingredients and fostering a culture of excellence among our team members.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item text-decoration-none">
                            <div class="caption">
                                <div class="caption-content fst-italic">
                                    <div class="h2">Vision</div>
                                    <p class="mb-0">To become the leading provider of high-quality baked goods in the market, consistently exceeding customer expectations.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                        </a>
                    </div> --}}
        
        <!-- Pastries Grid-->
        <section class="page-section .bg-white" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Pastries</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Macaroons.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="fst-italic portfolio-caption-heading">Macaroons</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Revel Bars.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="fst-italic portfolio-caption-heading">Revel Bars</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/ButterScotch.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="fst-italic portfolio-caption-heading">ButterScotch</div>                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Brownies.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="fst-italic portfolio-caption-heading">Brownies</div>                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Cakepops.webp" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="fst-italic portfolio-caption-heading">Cake Pops</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/NoBake.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="fst-italic portfolio-caption-heading">No Bake Cheesecake</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Cakes-->
        <section class="page-section .bg-light" id="Cakes">
            <div class="container">
                <div class="text-center">
                    <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Cakes</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Customized Cake.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="fst-italic timeline-heading">
                                <h4>Customized Cake</h4>
                                <h4 class="fst-italic subheading">Price: P 1500.00</h4>
                            </div>
                            <div class="timeline-body"><p class="fst-italic">Any form of cake that deviates from standard cake work is considered a customized cake. This can involve extra details not found in a standard design birthday cake, such as handcrafted fondant decorations, flowers, or attention to detail. Wedding cakes and tiered cakes are also regarded as custom.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Red Velvet Cake.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="fst-italic timeline-heading">
                                <h4>Red Velvet Cake</h4>
                                <h4 class="fst-italic subheading">Price: P 800.00</h4>
                            </div>
                            <div class="timeline-body"><p class="fst-italic">Traditionally, red velvet cake is a layer cake with ermine frosting on top that is red, red-brown, crimson, or scarlet in hue. The crimson hue of traditional recipes comes from non-Dutch, anthocyanin-rich chocolate rather than from food coloring. Buttermilk, butter, chocolate, vinegar, and wheat are typical components.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Mango Cake.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="fst-italic timeline-heading">
                                <h4>Mango Cake</h4>
                                <h4 class="fst-italic subheading">Price: P 800.00</h4>
                            </div>
                            <div class="timeline-body"><p class="fst-italic">A layered chiffon cake from the Philippines called mango cake or mango chiffon cake contains sweet, ripe Carabao mangoes. Typically, mango cream icing, fresh mango slices, or pureed mangoes with gulaman or gelatin are used as the toppings. In addition, cream, cream cheese, and chocolate are frequently used as toppings.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Custard Cake.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="fst-italic timeline-heading">
                                <h4>Custard Cake</h4>
                                <h4 class="fst-italic subheading">Price: P 500.00</h4>
                            </div>
                            <div class="timeline-body"><p class="fst-italic">Cake with leche flan or caramel custard cake is a two-layer delicacy. Specifically, a light and airy chiffon cake layer was placed on top of a layer of caramel custard. A light chiffon cake is combined with a sweet caramel custard to give it firmness. The custard has a hint of burnt sugar flavor.</p></div>
                        </div>
                    </li>
                    {{-- <li class="timeline-inverted">
                        <div class="fst-italic timeline-image">
                            <h4>
                                Buy
                                <br />
                                Now!
                                <br />
                            </h4> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Gallery-->
        <section id="gallery" class="gallery">

      <div class="container fst-italic" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Gallery</h2>
          <h5>Some photos of Mariane's Cakes and Pastries</h5>
        </div>
      </div>
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/14.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/14.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/5.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/15.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/6.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/7.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/9.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/9.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/11.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/11.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/12.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/12.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              {{-- <a href="assets/img/portfolio/13.jpg" class="gallery-lightbox" data-gall="gallery-item"> --}}
                <img src="assets/img/portfolio/13.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>

        {{-- <!-- About-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Vison & Mision</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <div class="row">
                        <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                     </div>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
        </section> --}}
        {{-- <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <section class="contact-section bg-black">
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fa-regular fa-user text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Name</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50">Maricris S. Acido</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-envelope text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Email</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50"><a href="#!">acidovincent6@gmail.com</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Phone</h4>
                                            <hr class="my-4 mx-auto" />
                                            <div class="small text-black-50">0912 593 1632</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>

                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <div class="responsive-container">
                                    <iframe class="responsive-iframe d-flex align-content-around flex-wrap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924.9788965363963!2d125.55306392918145!3d8.962668024328067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7b4a50a174a079d!2zOMKwNTcnNDUuNiJOIDEyNcKwMzMnMTMuMCJF!5e1!3m2!1sen!2sph!4v1674537397526!5m2!1sen!2sph" width="426" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    {{-- <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form> --}}
            </div>
        </section>
        
        @include('homepage.includes.footer')

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Macaroons</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Macaroons.jpg" alt="..." />
                                    <p>A macaroon is a type of drop cookie that is created using sugar, egg whites, shredded coconut, other flavors (such vanilla essence), and occasionally ground almonds. Nowadays, sweetened condensed milk is frequently used in macaroon recipes. Traditional cookies resemble coconut mounds more than macaroons do.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            P 110.00/Tub
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Revel Bars</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Revel Bars.jpg" alt="..." />
                                    <p>Chocolate Revel Bars are a type of chewy crunchy dessert / snack made with oats, nuts, chocolates, and condensed milk; it's one of the best oatmeal recipes. You can tell this is going to be good just by the name, as revel means "to take great pleasure or delight," and that's exactly what you get with every bite of this delectable treat.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            P 110.00/Tub
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ButterScotch</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/ButterScotch.jpg" alt="..." />
                                    <p>Butterscotch Bars are a centuries-old dessert. These chewy bars are sure to please the entire family. They're made with brown sugar, butter, corn syrup, and vanilla extract. It is typically topped with toasted nuts or whipped cream.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            P 110.00/Tub
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Brownies</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Brownies.jpg" alt="..." />
                                    <p>A brownie, is a baked chocolate confection. Brownies can be fudgy or cakey depending on their density. Brownies frequently, but not always, have a glossy "skin" on their upper crust. They may also contain nuts, frosting, cream cheese, chocolate chips, or other ingredients. A blond brownie or blondie is a variation that uses brown sugar and vanilla instead of chocolate in the batter.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            P 110.00/Tub
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cake Pops</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Cakepops.webp" alt="..." />
                                    <p>A cake pop is a type of cake that is shaped like a lollipop. Cake crumbs are combined with icing or chocolate and formed into small spheres or cubes, similar to cake balls, before being coated with icing, chocolate, or other decorations and attached to lollipop sticks.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            P 300.00/10 pcs.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">No Bake Cheesecake</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/NoBake.jpg" alt="..." />
                                    <p>This is truly the most perfect and simple no-bake cheesecake. Following this no-bake cheesecake recipe will result in a smooth and creamy dessert that sets up beautifully in the refrigerator. No-bake cheesecake is lighter than regular cheesecake. It's lightly sweet and perfectly refreshing!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            P 360.00/10 pcs.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection        