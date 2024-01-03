<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream</title>
</head>
<body>
    <form action="includes/formhandler.php" method="post">
         <label for="amount">Please enter the amount</label>
        <input id="amount" type="text" name="amount" placeholder="Type here...">

        <label for="selectMoney"></label>
        <select id="selectMoney" name="selectMoney">
            <option value="none">None</option>
            <option value="dollar">Dollar</option>
            <option value="euros">Euros</option>
            <option value="yen">Yen</option>
        </select>

        <label for="convertMoney">Convert into:</label>
        <select id="convertMoney" name="convertMoney">
            <option value="none">None</option>
            <option value="dollar">Dollar</option>
            <option value="euros">Euros</option>
            <option value="yen">Yen</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <?php
    // index.php

    // Check if a result parameter is present in the URL
    if (isset($_GET["result"])) {
        $result = htmlspecialchars($_GET["result"]);
        echo "<div>Result: $result</div>";
    }
    ?>
</body>
</html>