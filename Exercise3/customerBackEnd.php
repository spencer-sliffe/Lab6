<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8" />
        <title>WELCOME</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="formChecker.js"></script>
    </head>
    <body>
        <div id="page-wrap">
			<h1>WELCOME</h1>
			<table align="center" border='1' width="100%">
			<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uName'];
    $password = $_POST['pWord'];
    $item1 = $_POST['item-option-1'];
    $item2 = $_POST['item-option-2'];
    $item3 = $_POST['item-option-3'];
    $shipping = $_POST['ship-options'];
    $totalcost = 0;
    echo "<div id='account'> Username: $username </br> Password: $password </div>";
    echo "<div id='receipt'>";
    echo "<tr>";
    echo "<td> Item </td>";
    echo "<td> Quantity </td>";
    echo "<td> Cost per item </td>";
    echo "<td> Subtotal </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>JayHawks </td>";
    if ($item1 == "Hawks") {
        echo "<td> 1 </td>";
    } else {
        echo "<td> 0 </td>";
    }
    echo "<td> $1,000,000,000.00  </td>";
    if ($item1 == "Hawks") {
        echo "<td> $1,000,000,000 </td>";
        $totalcost = $$totalcost + 1000000000;
    } else {
        echo "<td> $0 </td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<td> Wildcats </td>";
    if ($item2 == "Wildcats") {
        echo "<td> 1 </td>";
    } else {
        echo "<td> 0 </td>";
    }
    echo "<td> $0.00 </td>";
    if ($item2 == "Wildcats") {
        echo "<td> $0 </td>";
    } else {
        echo "<td> $0 </td>";
    }
    echo "</tr>";
    echo "<tr>";
    echo "<td> Tigers </td>";
    if ($item3 == "Tigers") {
        echo "<td> 1 </td>";
    } else {
        echo "<td> 0 </td>";
    }
    echo "<td> $0.00 </td>";
    if ($item3 == "Tigers") {
        echo "<td> $0 </td>";
    } else {
        echo "<td> $0 </td>";
    }
    echo "<tr/>";
    echo "<tr>";
    echo "<td> Shipping </td>";
    if ($shipping == "free") {
        echo "<td> 7 day </td>";
        echo "<td> $0.00 </td>";
    } else if ($shipping == "50") {
        echo "<td> Overnight </td>";
        echo "<td> $50.00 </td>";
        $totalcost = $totalcost + 50;
    } else {
        echo "<td> 3 day </td>";
        echo "<td> $5.00 </td>";
        $totalcost = $totalcost + 5;
    }
    echo "</tr>";
    echo "<tr>";
    echo "<td> Total Cost </td>";
    echo "<td> $$totalcost </td>";
    echo "</tr>";
    echo "</div>";
}
?>
</table>
            
        </div>
    </body>
</html>