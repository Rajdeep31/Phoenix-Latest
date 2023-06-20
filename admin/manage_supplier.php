
<?php
require('top.inc.php');
$company_name='';
$email='';
$password='';
$contact_no='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($con,$_GET['id']);
    $res=mysqli_query($con,"select * from suppliers where supplier_id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
    $row=mysqli_fetch_assoc($res);
    $company_name=$row['company_name'];
    $email=$row['email'];
    $password=$row['password'];
    $contact_no=$row['contact_no'];
    }else{
        header('location:supplier.php');
    }

}


if(isset($_POST['submit'])){
    $company_name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
    $password=get_safe_value($con,$_POST['password']);
    $contact_no=get_safe_value($con,$_POST['contact']);
    $res=mysqli_query($con,"select * from suppliers where email='$email'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!=''){
            $getData=mysqli_fetch_assoc($res);
            if($id==$getData['supplier_id']){

            }else{
                $msg="Supplier already exist";
            }
        }else{
            $msg="Supplier already exist";
        }
    }
    if($msg==''){
        if(isset($_GET['id']) && $_GET['id']!=''){
            mysqli_query($con,"update suppliers set company_name='$company_name', email='$email',password='$password',contact_no='$contact_no' where supplier_id='$id'");
        }else{
            mysqli_query($con,"insert into suppliers(company_name,email,password,contact_no,status) values('$company_name','$email','$password','$contact_no','1')");
        }
        header('location:supplier.php');
        die();
    }

}


?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Supplier Form</strong></div>
                    <form method="post">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="categories" class=" form-control-label">Company Name</label>
                            <input title="Please Enter Only Alphabets" type="text" name="name" placeholder="Enter Name" class="form-control" required value="<?php echo $company_name?>">
                        </div>


                        <div class="form-group">
                            <label for="categories" class=" form-control-label">Email</label>
                            <input title="Please Enter Only Alphabets" type="email" name="email" placeholder="Enter Email" class="form-control" required value="<?php echo $email?>">
                        </div>



                        <div class="form-group">
                            <label for="categories" class=" form-control-label">Password</label>
                            <input title="Please Enter Only Alphabets" type="password" name="password" placeholder="Enter Password" class="form-control" required value="<?php echo $password?>">
                        </div>

                        <div class="form-group">
                            <label for="categories" class=" form-control-label">Contact</label>
                            <input title="Please Enter Only Alphabets" type="number" name="contact" placeholder="Enter Contact No" class="form-control" required value="<?php echo $contact_no?>">
                        </div>



                        <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block" onclick="return alert('Record Inserted!');">
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