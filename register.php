<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="action_page.php" method="POST">
    <table border="1"> 
        <tr>
            <th>Question</th>
            <th>Answer</th>
</tr>
<tr>    
            <td> Name: </td>    
            <td> <input type="text" name="name"> </td>
        </tr>
        <tr>
            <td> Gender: </td>
            <td>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
            </td>
        </tr>
        <tr>
            <td> Country: </td>
            <td>
                <select name="country">
                    <option value="PH" select>Philippines</option>
                    <option value="AUS">Australia</option>
                    <option value="US">United States</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" allign="right"> 
                <input type="submit" name="Save" value="Save">
            </td>
        </tr>
    </table>
</form>