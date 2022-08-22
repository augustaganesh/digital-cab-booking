<?php
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $obj->delete('tbl_cars','id',array($_GET['id']));
    echo "<script>window.location.href='".base_url('show_taxi.php')."'</script>";
    
}
$carData = $obj->Select('tbl_cars');
?>

<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h3 style="font-weight: bold!important;"><i class="fa fa-taxi"></i>  Available Taxi Lists </h3> <hr>
      
        <table class="table table-responsive table-bordered table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Model</th>
                    <th>No of Seats</th>
                    <th>Taxi no</th>
                    <th>Rate/hr</th>
                    <th>Owner</th>
                    <th>Action</th>
                </tr>

            </thead>

        <?php if($carData){ ?>
            <tbody>
                <?php foreach($carData as $key=>$data) :?>
                <tr <?php if(isset($_GET['action']) &&$_GET['action'] == 'hilight' && $_GET['id'] == $data['id']) { ?>
                    class="hilight_row" <?php } ?>>
                    <td><?=++$key;?></td>
                    <td><?=$data['car_model'];?></td>
                    <td><?=$data['car_seat_limit'];?></td>
                    <td><?=$data['car_no'];?></td>
                    <td>Rs.<?=$data['car_rate'];?></td>
                    <td><?=$data['car_owner'];?></td>
                    <td>
                        <div class="">
                            <a class="btn btn-info"
                                href="<?=base_url('edit_taxi.php?action=edit&id='.$data['id']);?>"><i
                                    class="fa fa-edit"> </i></a>
                            <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger"
                                href="<?=base_url('show_taxi.php?action=delete&id='.$data['id']);?>"><i
                                    class="fa fa-trash-o"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
             <?php } else{ ?>
        <p style="color:red"><b>No data available.</b></p>
        <?php   }?>
        </table>
       

    </div>
</div>
</div>