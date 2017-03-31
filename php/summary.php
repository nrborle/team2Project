<?php
session_start();
#check user authorization
if(!(isset($_SESSION['user']) && isset($_SESSION['permissions']) && $_SESSION['permissions' == true]))
{
    die("This page is only available to authorized users");
}

#check if correct data is recieved
else if($_SERVER['REQUEST_METHOD']!= "POST" || !isset($_POST['eventID']))
{
    die("No selection");
}
else
{   #Retrieve and echo event details
    $eventID = $_POST['eventID'];
    require "connect.php";
    $sql = "SELECT 'date', level, location FROM Event WHERE id = ?";
    if($stmt = mysqli_prepare($connection, $sql)){
        mysqli_stmt_bind_param($stmt, 'i', $eventID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $date, $level, $location);
        if(mysqli_stmt_fetch($stmt))
        {
            echo "<p>Event Location: $location</p>";
            echo "<p>Event Date: $date</p>";
            echo "<p>Event Level: $level</p>";

            #Retrieve and output speaker data into a table
            mysqli_stmt_free_result($stmt);
            $sql = "SELECT speaker, finalScore, squad FROM Speaker WHERE eventID = ? ORDER BY finalScore ASC";
            if($stmt = mysqli_prepare($connection, $sql))
            {
                mysqli_stmt_bind_param($stmt, 'i', $eventID);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $speaker, $score, $squad);

                echo "<table><thead><th>Rank</th><th>Speaker Name</th><th>SQN/Region</th><th>Score</th></thead>";
                $rank = 1;
                while(mysqli_stmt_fetch($stmt))
                {
                    echo "<tr><td>$rank</td><td>$speaker</td><td>$squad</td><td>$score</td></tr>";
                    ++$rank;
                }
                echo "</table>";
            }
        }
        else
        {
            die("Event not found");
        }
    }
    mysqli_close($connection);
}
 ?>
