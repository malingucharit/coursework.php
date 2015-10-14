<body bgcolor="#CCCCCC">
<?php require_once("includes/connection.php");?>
 <?php require_once("includes/functions.php");?>
 <?php include("includes/header.php");?>
 <div align="center">
  <table id="structure">
    <tr>
      <td id="navigation">
        <?php
//perform database query
$result=Mysql_query("SELECT * FROM subjects", $connection);
if(!$result){
die("Database query failed: " .Mysql_error());
}

//use returned data
while ($row=Mysql_fetch_array($result)){
echo $row["menu_name"]." ".$row["position"]."<br/>";
}

?>      </td>
    <td id="page">
      <h2>content Area</h2>    </td>
    </tr>
  </table>
 
  <p>this is a company co-orpation that deals in many services and productsand i t is well supported by its customers and other investors like the : </p>
  <ul>
  <ul>
    <li>kenyan embassy</li>
    <li>american embassy</li>
  </ul>
  it deals in alot of services and products like
 
  <p>
    <?php require("includes/footer.php");?>
  </p>