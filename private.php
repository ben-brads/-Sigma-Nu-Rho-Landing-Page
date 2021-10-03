<?php
    $username = empty($_COOKIE['username']) ? "" : $_COOKIE['username'];

    if(!$username){
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Active Member Page</title>
    <script src="js/jquery-2.1.4.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/private.css">
   
    <link rel="stylesheet" href="css/uikit.min.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>


</head>
<body>
    <a href="logout.php"><button id="logout" class="uk-button-default">logout</button></a>
    <h1>Active and Alumni Information</h1>
    <div id="wrapper">
        <div class="exec" id="ec"><div class="title">EC</div><div class="name">Cam Woodin</div></div>
        <div class="exec"><div class="title">VP</div><div class="name">Jake Propeck</div></div>
        <div class="exec"><div class="title">Treasurer</div><div class="name">Henry Lexau</div></div>
        <div class="exec"><div class="title">Chaplain</div><div class="name">Ben Bradshaw</div></div>
        <div class="exec"><div class="title">Marshall</div><div class="name">Patrick Gibbs</div></div>
          <div class="exec"><div class="title">Marshall</div><div class="name">Michael Ellinger</div></div>
        <div class="exec"><div class="title">Recorder</div><div class="name">
        Jake Hadawi</div></div>
        <div class="exec"><div class="title">Sentinel</div><div class="name">Max Wright</div></div>
         <div class="exec"><div class="title">Rush</div><div class="name">Cam Saunders</div></div>
         <div class="exec"><div class="title">Rush</div><div class="name">Michael Beattie</div></div>
    
        <div id="botw" class="top">Brother of the week!<div id="brotherofweek"></div></div>
      
        <div id="currentEvents" class="top">Upcoming Events:<div id="cname"></div>
        </div>                                                                   <div id="twitter"><a class="twitter-timeline" href="https://twitter.com/MizzouSigmaNu?ref_src=twsrc%5Etfw">Tweets by MizzouSigmaNu</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>                            
           
        <div id="submit">
            <?php
                    if($error) {
                        print "<div class='uk-alert-danger' uk-alert>
                               <a class='uk-alert-close' uk-close></a>
                                 <p>$error</p>
                                </div>";
                         }
            ?>
            <form method="GET" action="privReq.php">
                <input type="hidden" name="action" value="do_feedback">
                <fieldset class="uk-fieldset">

                    <div class="uk-margin">
                    <input class="uk-input" type="text" name="Name" placeholder="Name">
                    </div>           
        
                    <div class="uk-margin">
                    <textarea class="uk-textarea text" rows="5" name="Suggestions" placeholder="Please give us any suggestions you may have for the site or the chapter as a whole."></textarea>
                    </div>
                    <div class="uk-margin">
                        <button class="uk-button-default" type="submit">Submit</button>
                    </div>
                </fieldset>
                
            </form>
        </div>
    
    </div>  
    <script src="js/private.js"></script>
</body>
</html>