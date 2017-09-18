<?php require_once('Connections/MyConnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO login (Username, Pass, rePass) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['confirm_password'], "text"));

  mysql_select_db($database_MyConnect, $MyConnect);
  $Result1 = mysql_query($insertSQL, $MyConnect) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO login (Username, Pass, rePass) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['confirm_password'], "text"));

  mysql_select_db($database_MyConnect, $MyConnect);
  $Result1 = mysql_query($insertSQL, $MyConnect) or die(mysql_error());

  $insertGoTo = "home_login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO login (Username, Pass, rePass) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['Pass'], "text"),
                       GetSQLValueString($_POST['rePass'], "text"));

  mysql_select_db($database_MyConnect, $MyConnect);
  $Result1 = mysql_query($insertSQL, $MyConnect) or die(mysql_error());

  $insertGoTo = "home_login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="css/style_reg.css">

  
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Username:</td>
      <td><input type="text" name="Username" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Password:</td>
      <td><input type="password" name="Pass" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Confirm:</td>
      <td><input type="password" name="rePass" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index_reg.js"></script>

</body>
</html>
