<?php 

session_start();
include "connect.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>
<h1> Hei, <?php echo $_SESSION['brukernavn']; ?> </h1>
    
<div class="calendar">   
    <header id="week_header"> Week <?php echo date("W");?></header>
    <button id="create_event_btn">Create event</button>
    <div class="week">
 
        <div id="monday" class="weekday">
            <h3>Monday</h3>
        </div>
        <div id="tuesday" class="weekday">
            <h3>Tuesday</h3>

        </div>
        <div id="wednesday" class="weekday">
            <h3>Wednesday</h3>

        </div>
        <div id="thursday" class="weekday">
            <h3>Thursday</h3>

        </div>
        <div id="friday" class="weekday">
            <h3>Friday</h3>

        </div>
        <div id="saturday" class="weekday">
            <h3>Saturday</h3>

        </div>
        <div id="sunday" class="weekday">
            <h3>Sunday</h3>

        </div>
            
    </div>
    <div id="myModal">
        <div class="modal-content">
            <span onclick="closeModal">&times;</span>
            <form action="createEvent.php">
        <input type="text" name="title" placeholder="Title"><br/>
        <select name="day">
            <option value="monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select><br/>
        <label for="event_start">Starts:</label>
        <input type="time" name="start" step="3600" min="00:00" max="23:59"><br/>
        <label for="event_end">Ends:</label>
        <input type="time" name="end" step="3600"><br/>
        <input type="text" name="notes" placeholder="Notes"><br/>
        <button type="submit">Create event</button>
    </form>
        </div>
    </div>
</div>
</body>
</html>