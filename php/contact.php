<?php 
    require_once('connect.php');
    if(isset($_POST['btn-submit'])){
        $secretKey ='6Ld5EsQUAAAAACu6GXpIrBNZnUflUoN6wJ_x9te7';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteip";
        $resp=json_decode(file_get_contents($url));
        
    
        if($resp->success){
            $sql= "INSERT INTO `contact` (`name`, `phone`, `email`, `detail`, `created_at`) 
            VALUES  ('".$_POST['name']."',
                    '".$_POST['phone']."', 
                    '".$_POST['email']."', 
                    '".$_POST['message']."', 
                    '".date("Y-m-d")."');";
          $result=$conn->query($sql) or die ($conn->error);
            if($result){
                sendToLine();
            }

        }else{
            echo  '<script> alert("Verification Recaptcha Failed !!!!") </script>';
            header('Refresh:0; url=../contact.php');
        }
    
    }else{
        header('Refresh:0; url=../index.php');
    }
  
    function sendToLine(){
        $text = "มีผู้ติดต่อมาจาก WebROMANCFC \n";
        $text .= "ชื่อ: " . $_POST['name']."\n";
        $text .= "เบอร์: " . $_POST['phone']."\n";
        $text .= "อีเมลล์: " . $_POST['email']."\n";
        $text .= "ข้อความ: " . $_POST['message']."\n";

        $message=array(
            'message'=>$text
        );

        notify_message($message);
    }

    function notify_message($message) {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"2dkrSw7fMzxYGd3gYyDQuV9PP8tjt95At0et0aE8FLK");
        $queryData = http_build_query($message,'','&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content'=> $queryData
            )
        );

        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API,FALSE,$context);
        $resp=json_decode($result);
        if($resp->status == 200){
            echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว")</script>';
            header('Refresh:0; url=../index.php');
        }else{
            echo '<script> alert("ส่งข้อมูลไม่สำเร็จ โปรดติดต่อผู้ดูแลระบบ 091-771179")</script>';
            header('Refresh:0; url=../contact.php');
        }
        
    }

    
?>