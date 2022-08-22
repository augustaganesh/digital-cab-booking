<?php 

$carDetails = $obj->select('tbl_cars','*','id',array($_GET['car_id']));
$carDetails = $carDetails[0];
print_r($carDetails);
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">


            <h3>Taxi Details</h3>

        </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <?php if(isset($carDetails['car_image']) && $carDetails['car_image'] != ''){ ?>
                <div class="col-md-6">
                    <img src="admin-pannel/backend-assets/cars/<?=$carDetails['car_image'];?>" class="col-sm-10 img-responsive" alt="">

                </div>
                <?php  } ?>

                <div class="col-md-5 portfolio-info">
                    <h3 class="alert-info" style="padding:10px">Taxi: <?=$carDetails['car_model'];?></h3>
                    <ul>
                        <?php if(isset($carDetails['car_no']) && $carDetails['car_no'] != ''){ ?><li><strong>Taxi
                                No.</strong> :
                            <?=$carDetails['car_no'];?></li>
                        <?php } ?>
                        <?php if(isset($carDetails['car_seat_limit']) && $carDetails['car_seat_limit'] != ''){ ?><li>
                            <strong>Seat Capacity</strong> :
                            <?=$carDetails['car_seat_limit'];?>
                        </li> <?php } ?>
                        <?php if(isset($carDetails['car_rate']) &&  $carDetails['car_rate'] != ''){ ?><li>
                            <strong>Rate/hr</strong> :$<?=$carDetails['car_rate'];?>
                        </li>
                        <?php } ?>
                        <?php if(isset($carDetails['car_owner']) && $carDetails['car_owner'] != ''){ ?><li>
                            <strong>Driver</strong> :
                            <?=$carDetails['car_owner'];?>
                        </li>
                        <?php } ?>
                        <?php if(isset($carDetails['car_contact']) && $carDetails['car_contact'] != ''){ ?><li>
                            <strong>Contact</strong>
                            :<?=$carDetails['car_contact'];?>
                        </li> <?php } ?>
                    </ul>

                    <?php  if(isset($carDetails['message']) && $carDetails['message'] != ''){ ?>
                    <p><strong>Descriptions: </strong> <?=$carDetails['message'];?></p>
                    <?php } ?>
                    <a href="car_book.php?car_id=<?=$_GET['car_id'];?>" class="btn btn-warning btn-block">Book
                        Now</a>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Details Section -->

</main><!-- End #main -->