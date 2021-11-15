<?php
    $user = [
        'admin'=>"admin123",
        'vahid'=>"3e4r5t6y",
        'mehebbet'=>'ask2021' 
    ];
foreach($user as $admin=>$pass){
if(   isset($_POST['user']) && isset($_POST['pass']) && 
        $_POST['user'] = $admin && $_POST['pass'] = $pass) {$access=true;
        break;}  
        else{$access=false;}
}
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            if($access) echo "<h1>Salam ". $admin ." , saytına xoş gəlmisən !</h1>";
            else echo '
                <form action="" method="POST">
                    <p><input name="user" type="text" value="" /></p>
                    <p><input name="pass" type="password" value="" /></p>
                    <p><input type="submit" value="Ok" /></p>
                </form>
            ';
        ?>
    </body>
</html>