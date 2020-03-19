<?PHP
if(!defined('ISITSAFETORUN')) {
// This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
   die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oliver Page, Alisdair Page" />
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
</head>
<body>
    <div class="container"> 
    <header> 
       <a class="link-title" href="./index.php">Haute Vue</a>
    </header>
    <nav class="menu"> <!--Class name for the navigation menu--> 
            <?php include('includes/nav.php'); ?>
    </nav>
