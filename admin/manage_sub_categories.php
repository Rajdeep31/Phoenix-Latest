<html>
    <head>
        <title>Manage Categories</title>
    </head>    
</html>

<?php
require('top.inc.php');
$categories='';
$sub_categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($con,$_GET['id']);
    $res=mysqli_query($con,"select * from sub_categories where categories_id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
    $row=mysqli_fetch_assoc($res);
    $sub_categories=$row['sub_categories'];
    $categories=$row['categories_id'];
    }else{
        header('location:sub_categories.php');
    }

}


if(isset($_POST['submit'])){
    $categories=get_safe_value($con,$_POST['categories_id']);
    $sub_categories=get_safe_value($con,$_POST['sub_categories']);
    $res=mysqli_query($con,"select * from sub_categories where categories_id='$categories' and sub_categories_id='$sub_categories'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!=''){
            $getData=mysqli_fetch_assoc($res);
            if($id==$getData['sub_categories_id']){

            }else{
                $msg="Sub Category already exist";
            }
        }else{
            $msg="Sub Category already exist";
        }
    }
    if($msg==''){
        if(isset($_GET['id']) && $_GET['id']!=''){
            mysqli_query($con,"update sub_categories set categories_id='$categories',sub_categories='$sub_categories' where categories_id='$id'");
        }else{
            mysqli_query($con,"insert into sub_categories(categories_id,sub_categories,status) values('$categories','$sub_categories','1')");
        }
        header('location:sub_categories.php');
        die();
    }

}


?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Sub Categories Form</strong></div>
                    <form method="post">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="categories" class=" form-control-label">Category</label>
                            <select name="categories_id" class="form-control" required>
                                <option value="">Select Categories</option>
                                <?php
                                    $res=mysqli_query($con,"select * from category where status='1'");
                                    while($row=mysqli_fetch_assoc($res)){
                                        if($row['sub_categories']==$categories){
                                            echo "<option value=".$row['categories_id']." selected>".$row['category_name']."</option>";
                                        }else{
                                            echo "<option value=".$row['categories_id'].">".$row['category_name']."</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="categories" class=" form-control-label">Sub Categories</label>
                                <input pattern="[A-Za-z]+*" title="Please Enter Only Alphabets Between A to Z" type="text" name="sub_categories" placeholder="Enter Sub Categories" class="form-control" required value="<?php echo $sub_categories ?>">
                         </div>
                        <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount" name="submit">Submit</span>
                        </button>
                        <div class="field_error"><?php echo $msg?></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php')
?>