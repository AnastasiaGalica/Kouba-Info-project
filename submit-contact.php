<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>قسم الإعلام الالي - النشرة البريدية</title>
  <link rel="stylesheet" type="text/css" href="/styles/styles.css">
  <link rel="stylesheet" type="text/css" href="/styles/sub-header.css">
  <link rel="stylesheet" type="text/css" href="/styles/contact.css">
  <script type="text/javascript" src="/scripts/scripts.js" defer></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="/img/favicon.ico" rel="icon" type="image/vnd.microsoft.icon">
</head>

<body>
<?php 
$title= 'النشرة البريدية';
require_once(__DIR__.'/includes/header.php');
require_once(__DIR__.'/includes/sub-header.php');
?>

<div class="contact-form">
<div class="contact-content"> 
    <div>
        <?php 
        $servername = "localhost";
        $username = "root";
        
        
        try{
            $bdd = new PDO("mysql:host=$servername;dbname=mail_list", $username);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Erreur : " .$e->getMessage();
        }



        $getData = $_POST;
        if ( !isset($getData['email']) || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
        )
        {
            echo "
            <h4><i class='fas fa-exclamation-triangle'></i>   البريد الإلكتروني الذي ذكرته غير صالح، يرجى إعادة المحاولة</h4>
            <div><a href='/contact.php'>انقر هنا لإعادة التسجيل</a></div>
            ";
            
            
        }
        else{
            $maile = $_POST['email'];
            $bdd->exec("INSERT INTO mails VALUES (0, '$maile')");
            echo "<h4>من اليوم سوف تتلقى النشرة البريدية الخاصة بقسم الإعلام الآلي على بريدك الإلكتروني</h4>";
            echo "<div><b>بريدك الإلكتروني: </b> <p>";
            echo $getData['email'];
            echo "</p></div>";
            echo " <p>شكرا على التسجيل</p>";

        };

        ?>
    </div>

    <div><img src="img/newsletter.png" alt="newsletter"></div>
</div>
</div>


<!-- START Footer -->
<?php require_once(__DIR__.'/includes/footer.php');
?>
<!-- END Footer -->

<!-- START Fixed elements -->
<?php require_once(__DIR__.'/includes/fixed-elements.php');
?>
<!-- END Fixed elements -->
</body>
</html>