<?php

include './pages/includes/header.php';

if ($_GET['page']=="registration"){
    include("./pages/registration.php");
    if (isset($_POST['submit'])){
        // print_r($_POST);
         include_once './classes/User.php';
         $user=new User();
         $user->registration($_POST);

        //  header('location:router.php?page=login');
         
             
         }
        
    
}

else if ($_GET['page']=="login"){
    include("./pages/login.php");
    if (isset($_POST['submit'])){
        
         include_once './classes/User.php';
         $user=new User();
         $user->login($_POST);
             
         }
        
    
}
else if ($_GET['page']=="home"){
    
        if(isset($_SESSION['email'])){
        include("./pages/home.php");
      
       }else{
        include("./pages/login.php");
       }
    
}
else if ($_GET['page']=="add-tenant"){
    
    include("./pages/add-tenant.php");

    if (isset($_POST['submit'])){
        // print_r($_POST);
        // print_r($_FILES);
         include_once './classes/User.php';
        $user=new User();
         $user->add($_POST);
    }
}

else if($_GET['page']=="edit-tenant"){
   
        include("./pages/edit-tenant.php");
   

   
}
else if($_GET['page']=="details"){
   
    include("./pages/details.php");



}


else if ($_GET['page']=="logout"){
    
    include("./pages/logout.php");

}





include 'pages/includes/footer.php';



