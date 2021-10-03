<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Recruitment</title>
    <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"> 
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/public.css">
    <link rel="stylesheet" href="css/recruitment.css">

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/recruitment..js"></script>
   
  
 
    </head>

<body>
    <?php include "header.php" ?>
    <div class="rPrompt">
        <h2>Interested in joining Sigma Nu Rho chapter?</h2>
        
        <button class="uk-button uk-button-default uk-button-large prompt" onclick="openDrag()">Click here to see if you would be a good fit</button>
    </div>
    <div id="dragWrap">
        <h2>Drag three values that are most important to you into the heart</h2>
        <div id="selector"><img src="images/heart.png" alt="heart"></div>
        <div id="dragItemWrap">
            <div class="drag">Love</div>
            <div class="drag">Honor</div>
            <div class="drag">Truth</div>
            <div class="drag">Intelligence</div>
            <div class="drag">Integrity</div>
            <div class="drag">Dependability</div>
            <div class="drag">Efficiency</div>
            <div class="drag">Consistency</div>  
        </div>
    </div>
    <div id="cShowWrap">
        <div id="display"></div>
        <br/>
        <div id="snuValues">At Sigma Nu, our core values are Love, Honor, and Truth.  While these are the ones we find most important for our orginization, all values listed are important to being both a Knight and a Man.  If you're interested in joining our brotherhood and learning more about Love, Honor, and Truth, click the button below.</div>
        <button class="uk-button uk-button-default uk-button-large lprompt" onclick= "window.location.href = 'https://docs.google.com/forms/d/e/1FAIpQLSdon1XCf0JrbwziYjgxoNgoZODTxqwsOqcdCiBXGAws7DfZXQ/viewform?c=0&w=1';">Click here for our recruitment form</button>
    </div>
    <?php include "footer.php" ?>
</body>
</html>