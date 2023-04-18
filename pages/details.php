<?php
include('./classes/User.php');
$user=new User();
 $data=$user->details($_POST);





?>
<div class="row">
    <div class="col-md-6 col-sm-12 mx-auto my-5">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $data['tenant_img'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name:<?php echo $data['tenant_name'] ?></h5>
    <p class="card-text">Phone:<?php echo $data['tenant_phone'] ?></p>
    <p class="card-text">Address:<?php echo $data['tenant_adderss'] ?></p>
    <a  href="router.php?page=home" class="btn btn-primary">Go Home</a>
  </div>
</div>
    </div>
</div>