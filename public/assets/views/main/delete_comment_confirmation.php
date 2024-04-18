<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Comment</title>
    <link href="../../assets-bootstrap/css-bootstrap/styles.css" rel="stylesheet">
    <style>
       body {
            text-align: center;
        }  
    </style>
</head>
<body>
<h2>Delete Comment Confirmation</h2>
    <p>Are you sure you want to delete this comment?</p>
    <form action="delete_comment.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="section" value="<?php echo $_GET['section']; ?>">
        <button type="submit" name="confirm" value="yes">Yes, Delete</button>
        <button type="button" onclick="history.back()">No, Cancel</button>
    </form>
<?php
