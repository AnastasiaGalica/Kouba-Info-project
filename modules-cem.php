<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>قسم الإعلام الالي - الطورالمتوسط</title>
  <link rel="stylesheet" type="text/css" href="/styles/styles.css">
  <link rel="stylesheet" type="text/css" href="/styles/sub-header.css">
  <link rel="stylesheet" type="text/css" href="/styles/modules.css">
  <script type="text/javascript" src="/scripts/scripts.js" defer></script>
  <script type="text/javascript" src="/scripts/modules-cem.js" defer></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="/img/favicon.ico" rel="icon" type="image/vnd.microsoft.icon">
</head>
<body>

<?php 
$title= 'مقاييس الطور المتوسط';
require_once(__DIR__.'/includes/header.php');
require_once(__DIR__.'/includes/sub-header.php');


function showModules($year){
    $modules = [
        'السنة الأولى' => ['خوارزميات','هندسة الحاسوب', 'نظام التشغيل', 'علم النفس العام','التحليل','الكهرباء','الإنجليزية'],
        'السنة الثانية' =>['مقياس 1','مقياس 2','مقياس 3','مقياس 4','مقياس 5','مقياس 6','مقياس 7','مقياس 8'],
        'السنة الثالثة' => ['مقياس 1','مقياس 2','مقياس 3','مقياس 4','مقياس 5','مقياس 6','مقياس 7','مقياس 8'],
        'السنة الرابعة' => ['مقياس 1','مقياس 2','مقياس 3','مقياس 4','مقياس 5','مقياس 6','مقياس 7','مقياس 8'],
    ];
    
    echo "<h1>$year</h1>";

    foreach ($modules[$year] as $i){
        echo "<li>$i</li>";
    }
}
?>

<div class="modules-wrapper">
    <div class="modules-menu">
        <h2>الطور المتوسط</h2>
        <ul>
            <li onclick="showYear(1)"><a href="#">السنة الأولى</a></li>
            <li onclick="showYear(2)"><a href="#">السنة الثانية</a></li>
            <li onclick="showYear(3)"><a href="#">السنة الثالثة</a></li>
            <li onclick="showYear(4)"><a href="#">السنة الرابعة</a></li>
        </ul>
    </div>

    <div class="modules-content" id="year1" style="display: block">
        <?php showModules('السنة الأولى'); ?>
    </div>
    <div class="modules-content" id="year2">
        <?php showModules('السنة الثانية'); ?>
    </div>
    <div class="modules-content" id="year3">
        <?php showModules('السنة الثالثة'); ?>
    </div>
    <div class="modules-content" id="year4">
        <?php showModules('السنة الرابعة'); ?>
    </div>
    <div class="modules-content" id="year5"></div>

    
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