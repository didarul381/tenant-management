<?php

class  User{

      private $con;
    public function  __construct()

    {

        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","tenant-menagement");

        $this->con=mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    


    }

    //user regitration

    public function registration($data){

   $name=$data['name'];
   $email=$data['email'];
   $pass=$data['pass'];

   $query= "INSERT INTO `landlord`(`landlord_name`, `landlord_email`, `landlord_password`) VALUES ('$name','$email','$pass')";
   $res = mysqli_query($this->con,$query);

//    return $res;
                
     if($res){
        header('location:router.php?page=login');
   
     }
   


    }

    public function login($data){

        
        $email=$data['email'];
        $pass=$data['pass'];
     
        $query= "SELECT * FROM `landlord` WHERE landlord_email='$email'";
        $res = mysqli_query($this->con,$query);
                     
        $result = mysqli_fetch_assoc($res); //when we want one data
        if($result){
    
            if($pass == $result['landlord_password']){
                $_SESSION['email'] = $result['landlord_email'];
                $_SESSION['id'] = $result['landlord_id'];
                header('location:router.php?page=home');
            }else{
                echo "invalid password";
            }
        }else{
            echo "user dosen't exit.please sing up.";
        }
   


    }


    public function add($data){
        $user_id= $_SESSION['id'];
        $name=$data['name'];
        $phone=$data['phone'];
        $occ=$data['occ'];
        $address=$data['address'];
        $imgName=$_FILES['img']['name'];
        $tem_dir=$_FILES['img']['tmp_name'];
        $my_dir="asset/images/{$imgName}";
        move_uploaded_file($tem_dir,$my_dir);

        $query="INSERT INTO `tenant`(`tenant_name`, `tenant_phone`, `tenant_img`, `tenant_occ`, `tenant_adderss`, `landlord_id`) VALUES ('$name','$phone','$my_dir','$occ','$address','$user_id')";
        $res = mysqli_query($this->con,$query);

        //    return $res;
                        
             if($res){
                header('location:router.php?page=home');
           
             }else{
                echo"faild";
             }
           

    }


    public function manage(){
        $user_id= $_SESSION['id'];
        $query= "SELECT * FROM `tenant` WHERE landlord_id='$user_id'";
        $res = mysqli_query($this->con,$query);
        $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
         return $data;
                     

    }
    public function edit($data){
        $user_id= $data['id'];
        $query= "SELECT * FROM `tenant` WHERE tenant_id='$user_id'";
        $res = mysqli_query($this->con,$query);
        $result = mysqli_fetch_assoc($res); //when we want one data
        return $result;
       
    }

    public function update($data){
        print_r($data);
        $user_id= $data['id'];
        $name=$data['name'];
        $phone=$data['phone'];
        $occ=$data['occ'];
        $address=$data['address'];
        $imgName=$_FILES['img']['name'];
        $tem_dir=$_FILES['img']['tmp_name'];
        $my_dir="asset/images/{$imgName}";
        move_uploaded_file($tem_dir,$my_dir);

         $query="UPDATE `tenant` SET `tenant_name`='$name',`tenant_phone`='$phone',`tenant_img`='$my_dir',`tenant_occ`=' $occ',`tenant_adderss`='$address' WHERE tenant_id='$user_id'";    
         $res = mysqli_query($this->con,$query);
        
                   
         if($res){
            header('location:router.php?page=home');
       
         }else{
            echo"faild";
         }
       
    }

    public function delet($data){
        $user_id= $data['id'];
        $query= "DELETE FROM `tenant` WHERE tenant_id='$user_id'";
        $res = mysqli_query($this->con,$query);
                    
       
    }
    public function details($data){
        $user_id= $data['id'];
        $query= "SELECT * FROM `tenant` WHERE tenant_id='$user_id'";
        $res = mysqli_query($this->con,$query);
        $result = mysqli_fetch_assoc($res); //when we want one data
        return $result;
                    
       
    }


        
     }
     
    




?>