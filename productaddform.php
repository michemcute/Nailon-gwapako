
<?php
include "dbconnect.php"
?>
<form action="">


<label for="product" id="product">

<select name="Product." id="Product.">    <?php
        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);

        while ($row=mysqli_fetch_object($res))
        {
            echo "<option value=\"$row->id\">$row->name</option>";
        }
?>
</select>
<br>

<input type="text" placeholder="Enter Category name" name="name">
<br>
<input type="text" placeholder="Enter Category status" name="status">
<br>
<input type="submit">
<br><br><br>

<?php
include "dbconnect.php"
?>
