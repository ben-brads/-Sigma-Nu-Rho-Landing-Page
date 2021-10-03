<?php
    

    $request = $_POST["request"];


    if($request == "botw")
    {
    grabBrothers();
    }
    else if($request == "events")
    {
    grabEvents();
    }
    
    $action = empty($_GET['action']) ? '' : $_GET['action'];

    if($action == "do_feedback")
    {
        submit_feedback();
    }

    function submit_feedback()
    {
        
        $dbhost = "localhost";
        $dbuser = "ec2-user";
        $dbpass = "ben";
        $dbname = "CS2830";
        
        
        
        // Connect to the database
 		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // Check for errors
        if(!$mysqli)
        {
            print "CONNECTION ERROR";
            exit;
        }
        
        $Name = empty($_GET['Name']) ? '' : $_GET['Name'];
        $Suggestion = empty($_GET['Suggestions']) ? '' : $_GET['Suggestions'];
        
        if( empty($_GET['Name']) or empty($_GET['Suggestions']))
        {
            $error="Please enter values for both fields!"; 
            require "private.php";
            exit;
        }
        
        $query = "INSERT INTO suggestions (sname, suggestion)
                  value('$Name','$Suggestion');";
         
        if($mysqli->query($query) === TRUE)
        {
                $error = "Suggestion Submitted! Site admin will take a look soon!";
                require "private.php";
               
                exit;
        }
        else {
                require "private.php";
                $error = "Insert Error: " .$query . "<br>" .$msqli->error;
               
                exit;
        }
            $mysqli->close();
        
    }
    function grabBrothers(){


    $dbhost = "localhost";
    $dbuser = "ec2-user";
    $dbpass = "ben";
    $dbname = "CS2830";
        
        
        
        // Connect to the database
 		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // Check for errors
        if(!$mysqli)
        {
            print "CONNECTION ERROR";
            exit;
        }
    
    $query = "SELECT id,bname,reason FROM bow";
    
    $result = $mysqli->query($query);
  
    $mysqli->close();
    if($result->num_rows > 0)
    {
    
     while($row = $result->fetch_assoc() ) {   
        if($row["id"] > 1)
        {
            $result->close();
            exit;
        }
        print $row["bname"]."<br>". $row["reason"];
    }
    }
    else {
        print "No brothers of the week found in database!";
        exit;
    }
}

    function grabEvents() {
        
    
    $dbhost = "localhost";
    $dbuser = "ec2-user";
    $dbpass = "ben";
    $dbname = "CS2830";
        
        // Connect to the database
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // Check for errors
    if(!$mysqli)
    {
        print "CONNECTION ERROR";
        exit;
    }
    
    $query = "SELECT * FROM uevents";
    
    $result = $mysqli->query($query);    
    if($result->num_rows > 0)
    {
    
     while($row = $result->fetch_assoc()) {   
        print $row["eventname"]." on: ".$row["eventdate"]."<br>". $row["eventdesc"]."<br>";
    }
    }
    else {
        print "No upcoming events!";
        exit;
    }    
           
}


?>