


<?=$this->extend("layout")?>
  
<?=$this->section("content")?>
  
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">EDIT KONTEN</a>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="<?php echo base_url('/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header>
        <!-- <nav>
            <div class="nav-logo">
                <img src="asset/image/logo/logo-nav.png" />
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav> -->
        <!-- <nav class="navbar-expand-xl navbar navbar-fixed-top">
            <div class="menu-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="logo">
                <a href="index.html"> 
                    AAAA
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home </a></li>
                    <li><a href="company.html">Company</a></li>
                    <li> <a href="our-operation.html"> Our Operation</a></li>
                    <li> <a href="our-management.html"> Our Management</a></li>
                </ul>
            </div>
        </nav> -->
        
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('#about') ?>">About</a>
					</li>
                    			<li class="nav-item">
						<a class="nav-link" href="<?= base_url('#services') ?>">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('#contact') ?>">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

        <div class="container-header">
            <div class="row-header">
                <img src="../../public/asset/image/logo/logo.png" class="logo-header" />
            </div>
            <div>
                <h1 class="brand-name">Rachwan</h1>
            </div>
            <div>
                <hr class="line-header" />
            </div>
            <div>
                <hr class="line-header" />
            </div>
            <div>
                <h2 class="tag-line">Reach Your Global</h2>
            </div>
            <div style="margin-bottom: 100px">
                <div style="margin: 0 auto; text-align: center; margin-top: 50px; width: 50px;">
                    <a class="btn-arrow" href="#about">
                        <i class="fa fa-arrow-circle-down  fa-lg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <main>
        <div id="about">
            <h1>ABOUT</h1>
            <h3>Title Definision</h3>
            <hr class="line-header" />
            <hr class="line-header" />
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        
        <div id="services">
            <h1>WHAT WE DO</h1>
            <hr class="line-section" />
            <hr class="line-section" />
            <h5>Our Core in Integrated Marketing Services :</h5>
            <div class="container-services">
                <div class="services-left">
                    <img src="asset/image/services/1.png" class="icon-service" />
                </div>
                <div class="services-right">
                    <h2 class="title-services">1. Services 1</h2>
                    <ul>
                        <li class="list-services">Marketing Communication</li>
                        <li class="list-services">Event Services</li>
                        <li class="list-services">Digital Solution</li>
                    </ul>
                </div>

                </div>
                <div class="container-services">
                <div class="services-left">
                    <img src="asset/image/services/2.png" class="icon-service" />
                </div>
                <div class="services-right">
                    <h2 class="title-services">2. Services 2</h2>
                    <ul>
                        <li class="list-services">Media Placement</li>
                        <li class="list-services">Public Relations</li>
                        <li class="list-services">Sales Leverage</li>

                    </ul>
                </div>
                </div>
                <div class="container-services">

                <div class="services-left">
                    <img src="asset/image/services/3.png" class="icon-service" />
                </div>
                <div class="services-right">
                    <h2 class="title-services">3. Services 3</h2>
                    <ul>
                        <li class="list-services">Media Activities</li>
                        <li class="list-services">Brand Activation</li>
                        <li class="list-services">Integrated Film Solution</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="media-partner">
            <h1>MEDIA PARTNER</h1>
            <hr class="line-section" />
            <hr class="line-section" />
            <h5>Our Core in Integrated Marketing Services :</h5>
            <div>
                <img src="asset/image/media/antv.png" class="logo-media" />
                <img src="asset/image/media/detik.png" class="logo-media" />
                <img src="asset/image/media/globaltv.png" class="logo-media" />
                <img src="asset/image/media/jawa.png" class="logo-media" />
                <img src="asset/image/media/kumparan.png" class="logo-media" />
                <img src="asset/image/media/metrotv.png" class="logo-media" />
                <img src="asset/image/media/net.png" class="logo-media" />
                <img src="asset/image/media/rcti.png" class="logo-media" />
                <img src="asset/image/media/sctv.png" class="logo-media" />
                <img src="asset/image/media/tirto.png" class="logo-media" />
                <img src="asset/image/media/transtv.png" class="logo-media" />
                <img src="asset/image/media/tribun.png" class="logo-media" />
                <img src="asset/image/media/tvri.png" class="logo-media" />
            </div>
        </div>
        <div id="contact">
            <h1>CONTACT US</h1>
            <hr class="line-section" />
            <hr class="line-section" />
            <h5>Please tell us about your next project and we will let you know what we can do to help you.</h5>
            <div>
                <form class="contact-us">
                    <div class="field">
                        <label for="name" style="font-size: 20px; float: left; ">Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="field">
                        <label for="email" style="font-size: 20px; float: left; ">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="field">
                        <label for="phone-number" style="font-size: 20px; float: left; ">Phone Number</label>
                        <input type="number" name="phone-number">
                    </div>
                    <div class="field">
                        <label for="message" style="font-size: 20px; float: left; ">Message</label>
                        <input type="textarea" name="message">
                    </div>
                    <a href="#contact" class="btn-full-width">Let's Discuss!</a>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="address-detail">
            <div class="contact-details">
                <div class="title-contact">
                    <i class='fa fa-phone-square'></i>
                    <h4>
                        Call</h4>
                </div>
                <p><a href="https://wa.me/+6281xxxxxxxx" class="footer-text">081xxxxxxxx</a></p>
            </div>
            <div class="contact-details">
                <div class="title-contact">
                    <i class='fa fa-map-marker'></i>
                    <h4>
                        Visit</h4>
                </div>
                <p> <a href="https://goo.gl/maps/GpjMTqSTKenzxpkw8" class="footer-text">Jl. KH AHmad Junaedi 2 No 15
                        <br />Bekasi</a></p>
            </div>
            <div class="contact-details">
                <div class="title-contact">
                    <i class='fa fa-envelope'></i>
                    <h4>
                        Email</h4>
                </div>
                <p><a href="mailto:info@rsmartcomm.com" class="footer-text">info@rachwn.com</a>
                </p>
            </div>
        </div>
        <div class="social">
            <div class="social-medsos-center">
                <div class="container-medsos" >
                    
                    <a href="https://facebook.com">
                        <i class='font-fa fa fa-facebook-square' ></i>
                    </a>
                    <a href="https://instagram.com">
                        <i class='font-fa fa fa-instagram'> </i>
                    </a>
                    <a href="https://linkedin.com">
                        <i class='font-fa fa fa-linkedin-square' ></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-copy">
            <p class="copyright">&copy; Rachwan all right reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url('js/bootstrap.min.css') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        $(document).ready(function () {
            $(".menu-icon").on("click", function () {
                $("nav ul").toggleClass("showing");
                $('nav').addClass('panjang');

            });
        });

        $(window).on("scroll", function () {
            if ($(window).scrollTop() >= 500) {
                $('nav').addClass('blue');
                // $('transform-img img').addClass('bounce');
                transform-img.classList.add("bounce");

                
            }

            else {
                $('nav').removeClass('blue');
                transform-img.classList.remove("bounce");

            }
        })

    </script>
        </div>
    </div>
     


</div>
  
<?=$this->endSection()?>
