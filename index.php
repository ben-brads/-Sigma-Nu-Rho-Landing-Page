<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sigma Nu Rho Chapter</title>
<link rel="stylesheet" href="css/landingPage.css">
<script src="js/jquery-2.1.4.min.js"></script>
   
</head>
<body>
    
    <div class="wrapper">
        <div id="uPrompt">
        <img src="images/snucrest.png" alt="snucrest">
        <h1>Are you currently an active member of Sigma Nu Rho Chapter?</h1>
            <button onclick="activeMem('yes')" class="pSelect">Yes</button>
            <button onclick="activeMem('no')" class="pSelect">No</button>
        </div>
        
    </div>
<script>
    $( document ).ready(function() {
        $("#login").hide();
    });
    function activeMem(value) {
        if(value=="yes")
        {   
            window.location="loginPage.php";
        }
        if(value=="no")
        {
            window.location = "public.php";
        }
    }
</script>
</body>



</html>