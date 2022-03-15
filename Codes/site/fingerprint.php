<?php
include("inc/head.php");
$message = "hello!! please scan your fınger.";
$path = "fingerprint.php";


    $myfile = fopen("putty.log","r");
    $filecontent = fread($myfile,filesize("putty.log"));
    fclose($myfile);
    if(preg_match("/Stored!/", $filecontent)){
        
        $message = "You can click here to see the results";
        $path = "statistics.php";
    }

    
        
        
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fingerprint scan</title>
</head>
<body>
   

<header class="masthead">
            <div class="container">
                
                <link href="css/styles.css" rel="stylesheet" />
                

</div>
               <a href=<?php echo $path; ?>  class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"><?php echo $message; ?></a>
               
            </div>
        </header>

</body>

</html>



