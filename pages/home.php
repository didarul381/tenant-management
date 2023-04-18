
<?php 
 include('./classes/User.php');
 $user=new User();

  if(isset($_POST['delet'])){
    $user->delet($_POST);
  }
   
   ?>
<div class="row my-5">
  <h2 class="my-3 text-center">Tenant Management</h2>
    <div class="col-md-8 col-sm-12  mx-auto">
    <table class="table table-striped table-bordered table-hover">
    <thead>
    
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Occupassion</th>
        <th>Image</th>
        <th>Action</th>
  
  </thead>
  <tbody>
   <?php 
   

   $value=$user->manage();
   foreach($value as $data){
   
   ?>
    <tr>
       <td><?php echo $data['tenant_name'] ?></td> 
       <td><?php echo $data['tenant_phone'] ?></td> 
       <td><?php echo $data['tenant_adderss'] ?></td> 
       <td><?php echo $data['tenant_occ'] ?></td> 
       <td><img src="<?php echo $data['tenant_img'] ?>" width="100" height="100" alt=""></td> 
        <td class="">
        <form action="router.php?page=edit-tenant"  method="POST" class="d-inline ">
        <input type="hidden" name="id" value="<?php echo $data['tenant_id']?>">
        <button type="submit" class="btn btn-secondary  ms-3 " name="edit" value="edit">Edit</button>
        </form>
        <form action=""  method="POST" class=" mt-2">
        <input type="hidden" name="id" value="<?php echo $data['tenant_id']?>">
        <button onclick ="return confirm('Are you sure to delete?')" type="submit" class="btn btn-secondary  ms-3 " name="delet" value="">Delet</button>
        </form>
        <form  action="router.php?page=details"  method="POST" class="d-inline ">
        <input type="hidden" name="id" value="<?php echo $data['tenant_id']?>">
      <button class="btn btn-primary d-inline my-2 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Details
       </button> 
        </form>

      </td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>

</div>