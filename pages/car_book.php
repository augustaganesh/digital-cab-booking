<?php 
$destinations = $obj->select('tbl_destination','*','status',array(1));
if(isset($_POST['submit']) && $_POST['submit'] == 'book'){
    unset($_POST['submit']);
   if(isset($_GET['car_id'])){
    $_POST['car_id'] = $_GET['car_id'];
   }
   if( $obj->insert('tbl_bookings',$_POST)){
    echo "<script>window.location.href='".base_url('car_book.php?action=booked')."'</script>";

   }else{
       $_SESSION['error'] = "Booking fail!";
    echo "<script>window.location.href='".base_url('car_book.php')."'</script>";

   }
}
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h3>Taxi Booking</h3>

        </div>
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-4 shadow" style="background: #fff;">
            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success'];unset($_SESSION['success']);  ?>
            </div>
            <?php }  ?>
            <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error'];unset($_SESSION['error']);  ?>
            </div>
            <?php }  ?>
            
            <?php if(isset($_GET['action']) && $_GET['action'] == 'booked'){ ?>
            <div class="alert-success booked-message-box">
                <p>Your booking request has been delivered successfully ! Please wait for response.</p>
                <!-- <a href="<?=base_url('booking_history.php');?>" class="btn btn-outline-info">View your booking
                    history</a> -->
                <a href="<?=base_url();?>" class="btn btn-outline-primary"><i class="icofont-arrow-left"></i> Go back
                    history</a>
            </div>
            <?php   }else{ ?>
             
                <div class="col-md-12 p-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Name">Full Name</label>
                        <input type="text" name="fullname" class="form-control" required placeholder="Enter your full name">
                    </div>

                     <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Address</label>
                                    <input type="text" name="address" class="form-control" required placeholder="Your address">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Contact</label>
                                    <input type="text" name="contact" class="form-control" required placeholder="Your contact number">
                                </div>
                               
                            </div>
                        </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="Choose your Destination">Choose your Destination</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="From">From</label>
                                 <input type="text" name="from_destination" placeholder="Enter your current location" class="form-control" required >

                             <!--   <select class="form-control" name="from_destination" id="">
                                    <option selected disabled>---Selct---</option> -->
                                    <?php
                                     // foreach($destinations as $key=>$value) : ?>
                                    <!-- <option value="<?=$value['id'];?>"><?=$value['place'];?></option> -->
                                    <?php 
                                // endforeach ;?>
                                <!-- </select>  -->

                            </div>
                            <div class="col-md-6">
                                <label for="To">To</label>

                                <select class="form-control" name="to_destination" id="">
                                    <option selected disabled>Select your destination</option>
                                    <?php foreach($destinations as $key=>$value) : ?>
                                    <option value="<?=$value['id'];?>"><?=$value['place'];?></option>
                                    <?php endforeach ;?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Name">Message (if any)</label>
                        <textarea type="text" rows="4" name="contact" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                             <div class="form-group">
                                <button type="submit" class="btn btn-block btn-outline-primary rounded-pill" name="submit" value="book">Request Taxi</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <button type="reset" class="btn btn-danger rounded">Cancel</button>

                             </div>
                        </div>
                    </div>
                   

                    </div>
                </form>
            </div>
            <?php  } ?>
        </div>
    </div>
</div>
</main>