<?php
include("../Classes/User_Class.php");
if(@$_POST["btnSignUp"])
{
$user=new usermanagements();
if($user->AddUser($_POST["txtuser"],$_POST["txtemail"],$_POST["txtcontact"],$_POST["txtpass"],$_POST["txtrole"]))
{
    // echo "<script>alert('User created successfully')</script>";
    header("location:signin.php");
}
else{
    echo "<script>alert('error in your sql syntex...')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from adminlte.io/themes/v3/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 15:39:53 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | General Form Elements</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">
<script nonce="ae7caac5-dbe4-45b9-a98f-18a41a624949">(function(w,d){!function(eK,eL,eM,eN){eK.zarazData=eK.zarazData||{};eK.zarazData.executed=[];eK.zaraz={deferred:[],listeners:[]};eK.zaraz.q=[];eK.zaraz._f=function(eO){return function(){var eP=Array.prototype.slice.call(arguments);eK.zaraz.q.push({m:eO,a:eP})}};for(const eQ of["track","set","debug"])eK.zaraz[eQ]=eK.zaraz._f(eQ);eK.zaraz.init=()=>{var eR=eL.getElementsByTagName(eN)[0],eS=eL.createElement(eN),eT=eL.getElementsByTagName("title")[0];eT&&(eK.zarazData.t=eL.getElementsByTagName("title")[0].text);eK.zarazData.x=Math.random();eK.zarazData.w=eK.screen.width;eK.zarazData.h=eK.screen.height;eK.zarazData.j=eK.innerHeight;eK.zarazData.e=eK.innerWidth;eK.zarazData.l=eK.location.href;eK.zarazData.r=eL.referrer;eK.zarazData.k=eK.screen.colorDepth;eK.zarazData.n=eL.characterSet;eK.zarazData.o=(new Date).getTimezoneOffset();if(eK.dataLayer)for(const eX of Object.entries(Object.entries(dataLayer).reduce(((eY,eZ)=>({...eY[1],...eZ[1]})))))zaraz.set(eX[0],eX[1],{scope:"page"});eK.zarazData.q=[];for(;eK.zaraz.q.length;){const e_=eK.zaraz.q.shift();eK.zarazData.q.push(e_)}eS.defer=!0;for(const fa of[localStorage,sessionStorage])Object.keys(fa||{}).filter((fc=>fc.startsWith("_zaraz_"))).forEach((fb=>{try{eK.zarazData["z_"+fb.slice(7)]=JSON.parse(fa.getItem(fb))}catch{eK.zarazData["z_"+fb.slice(7)]=fa.getItem(fb)}}));eS.referrerPolicy="origin";eS.src="../../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));eR.parentNode.insertBefore(eS,eR)};["complete","interactive"].includes(eL.readyState)?zaraz.init():eK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="container">

<form method="post">
<div class="card-body">
    <h2>Register User</h2>
    <hr>
<div class="form-group">
<label for="exampleInputEmail1">User Name</label>
<input type="text" class="form-control" name="txtuser" id="exampleInputEmail1" placeholder="Enter Name">
</div>

<div class="form-group">
<label for="exampleInputEmail1">User Email</label>
<input type="text" class="form-control" name="txtemail" id="exampleInputEmail1" placeholder="Enter Username">
</div>


<div class="form-group">
<label for="exampleInputPassword1">Contact</label>
<input type="text" class="form-control" name="txtcontact" id="exampleInputPassword1" placeholder="Contact No">
</div>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Role</label>
<input type="text" class="form-control" name="txtrole" id="exampleInputPassword1" placeholder="Role">
</div>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="txtpass" id="exampleInputPassword1" placeholder="Password">
</div>
</div>



<div class="card-footer">
<input type="submit" name="btnSignUp" class="btn btn-primary" value="SignUp">
</div>
</form>

</div>

<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script src="../../dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 15:39:53 GMT -->
</html>
