<?php 

$destination = $obj->select('tbl_destination');
if(isset($_POST['submit']) ){
   
    if($_POST['submit'] == 'add'){
        unset($_POST['submit']);
        if($obj->insert('tbl_destination',$_POST)){
            // $_SESSION['success'] = "Data has been added successfully!";
            echo "<script>window.location.href='".base_url('destination.php')."'</script>";
    
        }else{
            $_SESSION['error'] = "Something went wrong, Data couldn't inserted!";
        }
    }elseif($_POST['submit'] == 'update'){
        unset($_POST['submit']);    
        if($obj->update('tbl_destination',$_POST,'id',array($_GET['id']))){
            $_SESSION['success'] = "Data has been updated successfully!";
            echo "<script>window.location.href='".base_url('destination.php')."'</script>";
    
        }else{
            $_SESSION['error'] = "Something went wrong, Data couldn't updated!";
        }
    }
    
}

if(isset($_GET['action'])){
    if($_GET['action'] == 'active'){
        $datastatusA['status'] = 0;
        $obj->update('tbl_destination',$datastatusA,'id',array($_GET['id']));
        echo "<script>window.location.href='".base_url('destination.php')."'</script>";


    }elseif($_GET['action'] == 'inactive'){
        $datastatusI['status'] = 1;
        $obj->update('tbl_destination',$datastatusI,'id',array($_GET['id']));
        echo "<script>window.location.href='".base_url('destination.php')."'</script>";

    }elseif($_GET['action'] == 'delete'){
      
        $obj->delete('tbl_destination','id',array($_GET['id']));
        echo "<script>window.location.href='".base_url('destination.php')."'</script>";

    }
}
?>


<div class="col-md-12">
    <h3><i class="fa fa-home"></i> Manage Destinations</h3>
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
    <hr>
    <div class="col-md-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Places</label>
                <input type="text" name="place" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="">Cost</label>
                <input type="text" name="cost" class="form-control">
            </div>
          <!--   <div class="form-group">
                <label for="">Cost</label>
                <input type="text" name="title" class="form-control">
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-success" name="submit" value="add">Add</button>
            </div>
        </form>
    </div>

        <div class="col-md-9">
        <table class="table table-bordered table-responsive table-info table-hover">
                    <h2 class="text-center"> Destinations </h2>

            <thead>
                <tr>
                    <th>SN</th>
                    <th>Place</th>
                    <th>Cost</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
    <?php if($destination) { ?>

            <tbody>

                <?php foreach($destination as $key=>$value) : ?>
                <tr>
                    <td><?=++$key;?></td>
                 
                    <td>
                        <?php 
                        if(isset($_GET['action']) && $_GET['action'] == 'edit' && $value['id'] == $_GET['id']){ ?>
                        <div class="row">
                            <form action="" method="post">
                                <div class="col-md-5">
                                    <input type="text" name="place" class="form-control" value="<?=$value['place'];?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="cost" class="form-control" value="<?=$value['cost'];?>" required value="<?=$edit[0]['cost'] ; ?>" placeholder="New cost"><br>
                                    <button type="submit" name="submit" value="update" class="btn btn-success btn-circle btn-sm">Done</button>
                                </div>
                               
                                    
                                </div>
                            </form>
                        </div>
                        <?php }else{
                    echo $value['place'];}
                                         
                ?>
            </td>
                    <td>Rs.<?=$value['cost'];?></td>
                    <td><?php 
                        if($value['status'] == 0){ ?>
                        <a href="<?=base_url('destination.php?action=inactive&id='.$value['id']);?>"
                            class="btn btn-sm btn-danger"> <i class="fa fa-times"></i></a>
                        <?php  }elseif($value['status'] == 1){ ?>
                        <a href="<?=base_url('destination.php?action=active&id='.$value['id']);?>"
                            class="btn btn-sm btn-success"> <i class="fa fa-check"></i></a>

                        <?php  }
                    
                    ?>
                    </td>
                    <td>
                        <a href="<?=base_url('destination.php?action=edit&id='.$value['id']);?>"
                            class="btn  btn-info"><i class="fa fa-edit"></i></a>
                        <a href="<?=base_url('destination.php?action=delete&id='.$value['id']);?>"
                            onclick="return confirm('Are you sure you want to delete?')" class="btn  btn-danger"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ;?>
                 <?php } else{ ?>
        <p style="color:red"><b>No data available.</b></p>
        <?php   }?>
            </tbody>
        </table>
       
    </div>
</div>