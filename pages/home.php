<?php 
$taxi = $obj->select('tbl_cars');
?>
<div class="container" style="height:80vh;display: none;"><span class="close" style="cursor: pointer;font-size:25px;color: red;">&times;</span>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <img src="http://localhost:8012/CBS/assets/cars/car1.jpg" width="100%" height="100%">
                <!-- <h4 style="animation: fadeIn 4s infinite alternate;" class="font-weight-bold pt-2 text-white">Hi</h4> -->
               
            </div>
        </div>
    </div>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background:url('assets/img/slide/slider-1.jpg')">
                    <div class="carousel-container">

                        <div class="carousel-content">

                            <h2 class="animate__animated animate__fadeInLeft">Faster and Safe <span>Ride</span></h2>
                           <div class="container">
                                        <div class="row justify-content-center">
                                            <h5 class="text center animate__animated animate__fadeInRight">We provide you the best services among other
                                taxi servies over obline. We care about your satisfaction not about the cost and other things.</h5>
                                            
                                        </div>
                                    </div>
                            <a href="<?=base_url('about.php');?>"
                                class="btn-get-started animate__animated animate__fadeInUp ">Read More</a>
                        </div>
                    </div>
                </div>


               












                <!-- Slide 2 -->
                <div class="carousel-item" style="background:url('assets/img/slide/slider-2.jpg')">
                    <div class="carousel-container">

                        <div class="carousel-content">

                            <h2 class="animate__animated animate__fadeInLeft"> 24x7<span> Available</span></h2>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <h5 class="text center animate__animated animate__fadeInRight">We provide you the best services among other
                                taxi servies over obline. We care about your satisfaction not about the cost and other things.</h5>
                                            
                                        </div>
                                    </div>
                            
                            <a href="<?=base_url('about.php');?>"
                                class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background:url('assets/img/slide/car2.jpg')">
                    <div class="carousel-container">

                        <div class="carousel-content">

                            <h2 class="animate__animated animate__fadeInLeft">Available for <span>Reservation</span></h2>
                             <div class="container">
                                        <div class="row justify-content-center">
                                            <h5 class="text center animate__animated animate__fadeInRight">We provide you the best services among other
                                taxi servies over obline. We care about your satisfaction not about the cost and other things.</h5>
                                            
                                        </div>
                                    </div>
                            <a href="<?=base_url('about.php');?>"
                                class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

          <!--   <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h1>Available Taxi</h1>

                    <!-- <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul> -->
                </div>
            </div>
            <hr>

            <div class="row portfolio-container">
                <?php 
                foreach($taxi as $key=>$data) : ?>


                <div class="col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="admin-pannel/backend-assets/cars/<?=$data['car_image'];?>" height="350px"
                            class=" img-responsive" alt="">
                        <div class="portfolio-info">
                            <h4><?=$data['car_model'];?></h4>
                            <p><?=$data['car_seat_limit'];?> Seater</p>
                            <hr>
                            <div class="portfolio-links">
                                <a href="car_details.php?car_id=<?=$data['id'];?>" class="btn btn-outline-info">View
                                    Details</a>
                                <a href="car_book.php?car_id=<?=$data['id'];?>" class="btn btn-outline-success">Book
                                    Now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ;?>




            </div>

        </div>


    </section><!-- End Portfolio Section -->




</main><!-- End #main --><hr>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');

.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.service-box{
    padding: 30px 20px;
    margin-bottom:2rem;
    }
.service-box p{
    color: #444;
    font-size: 16px;
    opacity: 0.9;
    /*text-align: justify;*/
}




.icon i{
    color:darkred;
    font-size:3rem;
    margin-bottom:1rem;
}

</style>

<div class="container mb-5 text-center">
    <div class="text-center mt-5">
        <h1>Our Services</h1>
    </div>
    <div class="row">
        <div class="col-md-4 shadow-sm">
                <div class="service-box">

            <div>
                 <div class="icon"> 
                        <i class="fas fa-route"></i>
                    </div>
                    <h4>Short & Long Trips</h4>
                    <p>
                        We are available for both long and short trips all over Nepal.
                    </p>
                    <br>
                </div>
            
            </div>
        </div>
        <div class="col-md-4 shadow-sm">
                <div class="service-box">

            
                    <div class="icon"> 
                        <i class="fas fa-user-shield"></i>
                     </div>
                    <h4>Faster and Safe</h4>
                    <p>We ensure you to reach your destination safe and successfully.</p><br>
        </div>
    </div>
        <div class="col-md-4 shadow-sm">
                <div class="service-box">

                    <div class="icon">
                        <i class="far fa-smile"></i>
                    </div>
                    <h4>Great Customer Service</h4>
                    <p>We have professional and friendly drivers with air conditioner facility</p>
        </div>
    </div>
</div>
    <div class="row justify-content-center ">
        <div class="col-md-4 shadow-sm">
            <div class="service-box">
            <div class="icon">
             <i class="fas fa-phone"></i>
             </div>
             <h4>On Call, 24/7</h4>
                <p>Our dispatchers are on call 24/7. We strive
                to be available at any moment to accommodate all our clients needs.</p>
         </div>
        </div>
        <div class="col-md-4 shadow-sm">
                <div class="service-box">

                    <div class="icon"> 
                    <!-- <i class="fas fa-taxi"></i> -->
                    <i class="far fa-taxi"></i>
                     </div>
                    <h4>Reservation Available</h4>
                    <p>This is specially available for long routes.
                    You can simply call us to reserve our vehicles as per your necessities.</p>
                </div>
            </div>
         
        <div class="col-md-4 shadow-sm">
                <div class="service-box">

           
                    <div class="icon"> 
                        <i class="far fa-clock"></i>
                     </div>
                    <h4>Always on time</h4>
                    <p>Being punctual is key to our professionalism. We understand that your time is valuable.

                    </p><Br>
                </div>
        </div>
    </div>
</div>
<hr>

<div >
    
</div>


<div class="container-fluid">
    <div class="text-center"><h1>Our Process</h1><br>
</div>
    <div class="row">
        <img src="http://localhost:8080/CBS/assets/img/123.png" width="100%">
    </div>
</div><br><br>
<script>
        var closebtns = document.getElementsByClassName("close");
        var i;

        for (i = 0; i < closebtns.length; i++) {
          closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
          });
        }
        </script>