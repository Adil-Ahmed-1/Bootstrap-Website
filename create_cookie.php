<?php

if(isset($_COOKIE['email'])){

	header("location:login_form.php?msg=Cookie is Created...!");
}else{

	header("location:login_form.php?msg=Cookie is not Created...!");
}


setcookie("email",base64_encode("Ali12@gmail.com"),time()+(3600),"/","localhost",true,true);

setcookie("password",base64_encode("12345"),time()+(3600),"/","localhost",true,true);




?>