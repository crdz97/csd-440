<!--
Carolina Rodriguez
CSD-440
PHP Nested Loop Random Number Generation HTML Table

Resources: 

GeeksforGeeks. (2025, July 11). PHP program to generate the random number in the given range (min, max). https://www.geeksforgeeks.org/php/php-program-to-generate-the-random-number-in-the-given-range-min-max/
madnomad10011. (2013, September 26). Creating a table from 1 to 100 in PHP nested in HTML [Online forum post]. Stack Overflow. https://stackoverflow.com/questions/19033854/creating-a-table-from-1-to-100-in-php-nested-in-html
OpenAI. (2026). ChatGPT [Large language model]. https://chat.openai.com/   
    -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Number Table</title>
</head>
<body>

<h2>Random Number Table</h2>

<!-- Create table with border and spacing -->
<table border="1" cellpadding="10"> 
    

<?php
//outer loop for rows
for ($row = 1; $row <= 4; $row++) {
?>

    <tr>

    <?php
    // Inner loop for columns
    for ($column = 1; $column <= 4; $column++) {
        //random number generation between 1 and 100
        $randomNumber = rand(1, 100);
    ?>

        <td> 
        <?php 
        // Random number displayed in each cell
        echo $randomNumber; 
        ?>
        </td>
<!-- End of inner loop for columns -->
    <?php
    }
    ?>

    </tr>
<!-- End of outer loop for rows -->
<?php
}
?>

</table>

</body>
</html>