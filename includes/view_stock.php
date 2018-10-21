<?php

include_once 'dbh.inc.php';

if(isset($_POST['viewstock'])){

$result = mysqli_query($conn,"SELECT * FROM stock");

echo "<table class='table table-responsive table-stripped table-justified'>
<thead class='thead-dark'>
<tr>
<th>stock_id</th>
<th>stock_name</th>
<th>supplier_id</th>
<th>Quantity</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['stock_id'] . "</td>";
echo "<td>" . $row['stock_name'] . "</td>";
echo "<td>" . $row['supplier_id'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "</tr>";
}
echo "</tbody></table>";

mysqli_close($conn);
}
?>