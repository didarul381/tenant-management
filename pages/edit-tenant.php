<?php
 include_once './classes/User.php';

 $user=new User();

 $data= $user->edit($_POST);


 if (isset($_POST['update'])){

    $user->update($_POST);
}

?>

<div class="row">
  <div class="col-6 mx-auto text-center ">
  <form action="" method="post" enctype="multipart/form-data"  class="bg-ligth shadow-lg p-3 mb-5 bg-body-tertiary rounded">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control"  name="name" value="<?php echo $data['tenant_name']?>" >
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Phone</label>
    <input type="text" name="phone" value="<?php echo $data['tenant_phone']?>"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Occupation</label>
    <input type="text" name="occ" value="<?php echo $data['tenant_occ']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Address</label>
    <input type="text" name="address" value="<?php echo $data['tenant_adderss']?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <img src="<?php echo $data['tenant_img']?>" class="width:50px, heigth:50px" alt="">
  <input type="file" name="img" id="img">
  <input type="hidden" name="id" value="<?php echo $data['tenant_id']?>">
  <button type="submit"  name="update" value="update" class="btn btn-primary">Update</button>
</form>

  </div>
</div>

