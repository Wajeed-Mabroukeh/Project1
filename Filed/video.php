<?php
    @$db = new mysqli('localhost','root','','funtime');
    if(mysqli_connect_errno()){
        header('location: ERROR.php');
        die();
    }
    else {

        $srtQuery = "SELECT * FROM `media`";
        $result = $db->query($srtQuery);
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Watch Video</title>
    <link rel="stylesheet" href="video.css">
</head>
<body>

    <div class="brand" >
        <h2>name video</h2>
        <p> Human Stories in the Qur’an is an Egyptian animated series The series revolves around the story of the late writer Ahmed Bahjat, and the episodes of the series deal with the human stories contained in the Holy Quran in a realistic narrative framework based on
            religious truth</p>
    </div>
        <div class="video" controls>
            <iframe  width="700px"; height="400px";  src="https://www.youtube.com/embed/5i8jLiBLUSc"
                     frameborder="0" allow="accelerometer; autoplay; clipboard-write;"></iframe>
        </div>
    </div>

    <div class="meta">
        <p class="date">APRIL 09, 2012 by <a href="#">JOHN DOE</a></p>
        <div class="right">
            <div class="rating-holder">
                <p>RATING</p>
                <div class="rating"> <span style="width: 100%;"></span> </div>
            </div>
            <a href="#" class="comments">59 comments</a> </div>
        <div class="cl">&nbsp;</div>
    </div>



</body>
</html>