<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Involved</title>
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/getInvolved.css">

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/getInvolved.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
    <body>
    <?php include "header.php";?>
    <h1>What would you like information on?</h1>
    <div id="selectWrap" data-uk-background-muted>
        <div id="philanthropy" class="sflex" onclick="updateDisplay(philanthropy)"><h4>Philanthropies</h4></div>
        <div id="socials" class="sflex" onclick="updateDisplay(socials)"><h4>Socials</h4></div> 
        <div id="recruitment" class="sflex" onclick="updateDisplay(recruitment)"><h4>Recruitment</h4></div> 
        <div id="familyEvents" class="sflex" onclick="updateDisplay(familyEvents)"><h4>Family Events</h4></div> 
        <div id="display" class="clearfix">
           
        </div>
    </div>
    
    <?php include "footer.php"?>
    </body>

</html>