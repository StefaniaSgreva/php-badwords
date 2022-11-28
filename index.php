<?php
/*
""	    "apple"	 NULL	FALSE	0	    undefined	     TRUE	array()	 123
------------------------------------------------------------------------------
isset	    TRUE	TRUE	 FALSE	TRUE	TRUE	FALSE	        TRUE	TRUE	TRUE
empty	    TRUE	FALSE	 TRUE	TRUE	TRUE	TRUE	        FALSE	TRUE	FALSE
is_null	FALSE	FALSE	 TRUE	FALSE	FALSE	Warning/ TRUE	FALSE	FALSE	FALSE
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles  -->
    <link rel="stylesheet" href="main.css">
    <title>Bad Words</title>
</head>

<body>
    <section id="badwords">
        <h1>Detecting Unwanted Words</h1>
        <form action="badwords.php" method="GET">

            <!-- <label for="text" class="form-label">Text</label> -->
            <textarea type="text" name="text" class="textbox" autocomplete="off" required></textarea>

            <!-- <label for="badword">bad word</label> -->
            <input type="text" name="badword" placeholder="bad word" required>

            <button type="submit">Submit</button>
            <button type="reset">Cancel</button>

        </form>
    </section>
</body>

</html>