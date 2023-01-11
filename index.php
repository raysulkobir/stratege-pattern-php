<?php 
    include "inc/header.php";
    include "inc/sendMsg.php";
    include "inc/sendEmail.php";
    include "inc/sendFax.php";
    include "inc/sendSmas.php";
    include "inc/user.php";
?>
<?php
//       function __autoload($calss_name){
//           include "inc/".$calss_name.".php";
//       }
?>

    <div class="para">
        <?php
            $user = user;
            $msg->getMes;
            switch($msg){
                case "email":
                $objmsg = new sendEmail();
                break;
            
                case "smas":
                $objmsg= new sendSmas();
                break;
            
                case "fax":
                $objmsg = new sendFax();
                break;
                
                case "mag":
                    $objmsg =new sendMsg();
            }
            
           echo $objmsg->notification();
            
        ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>