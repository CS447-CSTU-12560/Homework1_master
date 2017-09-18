<?php require_once('Connections/MyConnect.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "home_login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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

mysql_select_db($database_MyConnect, $MyConnect);
$query_Recordset1 = "SELECT * FROM os2_store";
$Recordset1 = mysql_query($query_Recordset1, $MyConnect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ruler Store | Stock</title>
<meta charset="utf-8">
<noscript>
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
</head>
<body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div class="row">
      <div class="12u">
        <!-- Logo -->
        <h1><a href="#" class="mobileUI-site-name">ruler</a></h1>
        <p></p>
        <!-- Nav -->
        <nav class="mobileUI-site-nav"> <a href="index.php">Homepage</a> <a href="stock.php" class="active">stock</a>   <a href="update.php">update</a> </nav>
      </div>
    </div>
  </header>
</div>
<div id="wrapper">
  <div class="5grid-layout">
    <div id="page">
      <div class="row">
        <div class="12u">
          <div class="row"></div>
        </div>
      </div>
      <?php do { ?>
        <?php echo $row_Recordset1['nameItem']; ?>        <?php echo $row_Recordset1['item_Info']; ?>
        <?php echo $row_Recordset1['pice_In_stock']; ?>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
      <div class="row">
        <div class="12u" id="gallery"> </div>
      </div>
      <div class="row">
        <div class="12u"> </div>
      </div>
    </div>
  </div>
</div>
<div class="5grid-layout">
  <div id="copyright">
    <section>
      <p>&copy; Your Site Name | Images: <a target="_blank" href="http://fotogrph.com/">Fotogrph</a> | User : log out</p>
    </section>
  </div>
</div>
<a href="<?php echo $logoutAction ?>">Log out</a>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
