<?php

$get_id = $_GET['post_id'];
$get_com = "select *from posts where post_id='$get_id' ORDER by 1 DESC";
$run_com = mysqli_query($con, $get_posts);
while ($row = mysqli_fetch_array($run_com)) {
    $com = $row['comment'];
    $com_name = $row['comment_author'];
    $date = $row['date'];
    //styling for comments
    echo '$com_name<i>said</i> on $date
                <p>$com</p>';
}