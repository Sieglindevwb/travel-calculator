<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream</title>
</head>
<body>
    <form action="">
         <label for="amount">Please enter the amount</label>
        <input id="amount" type="text" name="amount" placeholder="Type here...">

        <label for="selectMoney"></label>
        <select id="selectMoney" name="selectMoney">
            <option value="none">None</option>
            <option value="dollar">Dollar</option>
            <option value="euros">Euros</option>
            <option value="rupees">Rupees</option>
        </select>

        <label for="convertMoney">Convert into:</label>
        <select id="convertMoney" name="convertMoney">
            <option value="none">None</option>
            <option value="dollar">Dollar</option>
            <option value="euros">Euros</option>
            <option value="rupees">Rupees</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>