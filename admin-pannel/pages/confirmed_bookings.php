<?php
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $obj->delete('tbl_bookings','id',array($_GET['id']));
    echo "<script>window.location.href='".base_url('all_bookings.php')."'</script>";
    
}
$all_bookings_data = $obj->Select('tbl_bookings','*','confirm',array(1),' AND status=1');
?>

<div class="container">
<div class="row">
    <div class="col-lg-12">

        <h3 style="font-weight: bold!important;">
            <i class="fa fa-check"></i> Verified bookings</h3>

        <hr>
        <?php if($all_bookings_data){ ?>
        <table class="table table-responsive table-bordered table-hover">
            <thead style="background: #fff;">
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Destination</th>
                    <th>Taxi</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach($all_bookings_data as $key=>$data) :?>
                <tr>
                    <td><?=++$key;?></td>
                    <td><?=$data['fullname'];?></td>
                    <td><?=$data['address'];?></td>
                    <td><?=$data['contact'];?></td>
                    <td><?=$data['from_destination'];?>

                        <?php  
                      
                        $to = $obj->select('tbl_destination','*','id',array($data['to_destination']));
                        echo '-'.$to[0]['place'];
                        ?>

                    </td>
                    <td><?php
                        $carName = $obj->select('tbl_cars','*','id',array( $data['car_id']));
                    echo $carName[0]['car_model'];
                   ?></td>
                    <td>
                        <div class="btn-group">

                            <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger"
                                href="<?=base_url('all_bookings.php?action=delete&id='.$data['id']);?>"><i
                                    class="fa fa-trash-o"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } else{ ?>
        <p style="color:red"><b>No data available.</b></p>
        <?php   }?>

    </div>
</div>
</div>