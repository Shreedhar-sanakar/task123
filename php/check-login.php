<?php
    $useremail=isset($_POST['useremail'])?$_POST['useremail']:'';
    $password=isset($_POST['password'])?$_POST['password']:'';
    $ok=true;
    $message=array();
    
    if($ok){
        if($useremail==='chandru6501@gmail.com')
        {
            if($password==='Chandru@123'){
                $ok=true;
                $message[]="Successful login";
            }else{
                $ok=false;
                $message[]="Invalid Password";
            }
            
        }else{
            $ok=false;
            $message[]="Incorrect Email / Password combination";
        }
    }
    echo json_encode(
        array(
            'ok' => $ok,
            'message' =>$message
        )
    );
?>