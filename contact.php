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
$title= 'التسجيل في النشرة البريدية';
require_once(__DIR__.'/includes/header.php');
require_once(__DIR__.'/includes/sub-header.php');
?>


<div class="contact-form">
<form action="submit-contact.php" method="POST" class="contact-content">
  <div>
    <h2>أخبار، نشاطات، مسابقات، منح والكثير <i class="fas fa-envelope"></i></h2>
    <p>سجل في النشرة البريدية لكي تحصل على كل ما هو جديد في قسم الإعلام الآلي على بريدك الإلكتروني</p>
    <div>
        <label for="email">أدخل بريدك الإلكتروني</label>
        <input type="email" name="email" placeholder="البريد الإلكتروني">
        <button type="submit">التسجيل</button>
    </div>   
  </div>
  
  <div><img src="img/newsletter.png" alt="newsletter"></div>
  

</form>
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