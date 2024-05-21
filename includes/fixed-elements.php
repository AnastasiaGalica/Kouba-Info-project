<!-- ******************** START FIXED BUTTONS ********************** -->
<a href="#s-navbar" class="arrow-up" id="arrow-up"><i class="fas fa-arrow-up"></i></a>

<button class="menu-bars"id="menu-bars" onclick="showMenu()"><i class="fas fa-bars"></i></button>

<form action="/action_page.php" class="search" id="search">
    <button type="submit"><i class="fa fa-search"></i></button>
    <input type="text" placeholder="ابحث.." name="search">
      
</form>
<!-- ******************** END FIXED BUTTONS ********************** -->


<!-- ******************** START FIXED MENU ********************** -->
<div class="show-menu" id="show-menu">
    <div>
        <div>
            <ul>
                <li><a href="/index.php" id="home" >الرئيسية</a></li>
                <li onmouseover="show1()" onclick="closeMenu()"><a href="/index.php#page2"> عن التخصص </a></li>
                <li onmouseover="show2()" onclick="closeMenu()"><a href="http://moodle.ens-kouba.dz/course/index.php?categoryid=2"> منصة موودل</a></li>
                <li><a href="https://www.ens-kouba.dz/arabic/index.php/library">المكتبة</a></li>
                <li><a href="/news.php">المستجدات</a></li>
                <li><a href="/index.php#page5">مجلة الإعلام الآلي</a></li>
                <li><a href="/contact.php">Newsletter</a></li>
                <li onclick="closeMenu()"><a href="#footer">اتصل بنا</a></li>
            </ul>
        
            <ul id="show-1" onmouseleave="hide1()" >
                <li onclick="closeMenu()"><a href="/index.php#page2">نبذة عن التخصص</a></li>
                <li onclick="closeMenu()"><a href="/index.php#page2">المقاييس المدرسة</a></li>
            </ul>
            <ul id="show-2" onmouseleave="hide2()">
                <li>
                    <p style="color: rgb(204, 204, 204);">
                        توفّر المنصّة الوصول إلى المقرّرات والدورات والأدوات التعليميّة المرفقة بها (المسابقات القصيرة، المنتديات، صفحة تقديم ورفع التقارير، التصحيحات، إلخ). وتتيح المنصّة تنزيل المواد الدراسية بتنسيق PDF وتنزيل الملفات الخاصة بالمنهجية كما تسمح بالدردشة مع الأساتذة والطلّاب الآخرين.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    
    <article>
        <img src="img/logo-ens.png"><h3 style="color:rgb(236, 166, 14); margin-right: 1rem;">قسم الإعلام الآلي</h3>
    </article>
    <button onclick="closeMenu()"><i class="fas fa-times"></i></button>
    
</div>