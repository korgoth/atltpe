<?php /* Smarty version 2.6.25, created on 2020-04-24 20:48:28
         compiled from /Users/korgoth/htdocs/templates/lib/../templates/order-templates/2SLIM/healthy-balanced-weight-FULLFORM/BG/index.html */ ?>
<!DOCTYPE html>

<html lang="en" style="height: auto;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>2Slim</title>
    <meta name="description" content="">
	<meta name="author" content="">


	<!-- CSS
	================================================== -->

	<script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/jquery.js"></script>


	<!-- compability & bootstrap -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "compability.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Template styles-->
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/css/style.css">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/css/custom.css">
     <script>
	 <?php echo '
	function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

 $(document).ready(function() {
    var fiveMinutes = 60 * 5,
        display = $(\'#time\');
    startTimer(fiveMinutes, display);
});
	'; ?>

	</script>

</head>

<body class="home">

	<div class="body-inner">

<div id="top-bar" class="hidden-xs">
		<div class="container">
			<p>ПРЕДУПРЕЖДЕНИЕ: Поради голямото търсене на 2SLIM, наличните количества са ограничени от  <script type="text/javascript"><!--
function makeArray() {
for (i = 0; i<makeArray.arguments.length; i++)
this[i + 1] = makeArray.arguments[i];
}

var months = new makeArray('Януари','Февруари','Март','Април','Май',
'Юни','Юли','Август','Септември','Октомври','Ноември','Декември');
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;

document.write( months[month] + " " + day + ", " + + year);
//--></script>. <span>ПОБЪРЗАЙТЕ! <span id="time"> 04:57</span></span></p>
        </div>
	</div>

<div class="clearfix"></div>

<!-- section start -->
<section class="sec-totus">
	<div class="container">
    	<div class="col-md-3">
        	<img class="prod-life" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/lifproducts.png" />
        </div>
        <div class="col-md-9 sec-totus-cont">
        	<div class="logo-sec">
        	<img class="logo" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/logo.png" />

            </div>

            <img class="head-arr" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/arrow.png" />
            <div class="totus-points">

                <ul>
                <li class="top">Отслабнете, намалете талията и засилете метаболизма си!</li>
                	<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Постигнете мечтаното тегло</li>
 					<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Чувствайте се неотразими и енергизирани</li>
  					<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Запазете всички естествени съставки</li>
   					<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Без вредни химикали</li>
    				<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Овладейте апетита си</li>
                    <li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Заредете се с енергия </li>
                </ul>
                <h2 class="act-now-tits">Отслабнете <br/><span style="padding-left:20px">здравословно, <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/ftext.png'/></span></h2>


                <img class="act-now" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/actnow.png" /><br/>
                <div class="lasts">
                <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/natural.png" />
        	<img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/produly.png" />
        	<img  src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/100.png" /></div>
            </div>
            <div class="totus-form">
            	<div class="form-tit">
                <h2 style='line-height: 100%; font-size: 24px; margin-top: 30px; margin-bottom: 22px;'>Вземете вашата <span>2SLIM</span> бутилка ДНЕС!</h2>
                </div>
                <div class="form-tit1">
                	<h2 style='font-size: 14px; padding-top: 3px; padding-left: 8px; text-align: center'><span>ПОБЪРЗАЙТЕ!</span> ОСТАВАТ САМО <span class="txt-box">222</span> БУТИЛКИ</h2>
                </div>
                <div class="form-cont" style='min-height: 400px;'>
				<div class='text-center' style=' margin-left: 10px;'>
  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/text-addon.png" alt="" class='img-responsive' style='max-height: 325px;'>
</div>

				<a href='<?php echo $this->_tpl_vars['dir']; ?>
/order/<?php echo $this->_tpl_vars['campaign']['uri']; ?>
'>
					<img class="submit-btn" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/order-now-sm.png" />
				</a>
                <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/form-bootom-icon.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>



<section class="sec-works">
	<div class="container">
    	<div class="sec-works-cont">
    		<img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/textnew2.png" class="text2">	<img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/flower.png'  class="flowers"/>
            <p><b>Подпомага процеса на отслабване, намалява холестерола и ви зарежда с енергията!</b></p>
        	<p>2SLIM е уникална течна хранителна добавка, базирана на три взаимнозасилващи се съставки, чието едновременно действие води до по-бързо изгаряне на мазнините, подпомага увеличаването на чистата мускулна маса и улеснява изхвърлянето на токсините от организма.</p>
 <p>
Мазнините се натрупват на конкретни места в нашето тяло. Като едновременно се намали количеството на мазнините и се увеличи мускулната маса, вие ще намалите теглото си до желаните норми.</p>


    	</div>
    </div>
</section>
<section class="sec-naturals">
	<div class="container">
    <div class="col-md-6 "><img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/text3.png' /></div>
    <div class="col-md-6 "><img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/textsmall.png' style="float:right"/></div>

        <div class="col-md-5 sec-nat-cont-left naturals">
        	<div class="row" style="margin-bottom:0px">
              <P style="font-size:20px">  Безброй хора използват 2SLIM всеки ден, за да бъдат слаби и здрави по природосъобразен начин. </P>

 <P>Въпреки нашумелите наскоро невероятни резултати на 2SLIM в отслабването, всъщност неговите основни съставки са се използвали от векове в Южна Америка с тази цел.</P>
 <p>2SLIM ви помага да изчистите тялото си от токсините, да засилите метаболизма си и да се чувствате здрави и изпълнени с енергия.</p>
 <p>Формулата на 2SLIM е изцяло от природни съставки и билки, защото те са напълно безопасни и нямат никакви странични ефекти. </p>
            </div>
            <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/line1.png'/>
            <div class="row smalls" >




					<div class="sec-cont-dtl">
                    <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/smallbott.png" style="float:left; padding-left:15px; padding-right:18px" />
                    <p>2SLIM превзе света на отслабването и оформянето на мечтаното тяло с невероятен успех. Продадохме над 250, 000 бутилки в магазини по цял свят и онлайн. Поръчайте своята днес!</p></div></div>
        </div>
        <div class="col-md-2 sec-nat-cont-left">
        </div>
        <div class="col-md-5 sec-nat-cont-right">
        	<div class="row">  <div class="col-md-6 nat-img">
                    <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/roundpic3.png" />
                </div>
                <div class="col-md-6 nat-cont">
                    <h4 class="sec-cont-tit">Постигнете мечтаното тегло</h4>
					<p class="sec-cont-dtl">Намалете усвояването на мазнини, засилете  метаболизма и термогенното изгаряне на мазнините в организма, за да постигнете значително намаляване на теглото</p>
                </div>

            </div>
            <div class="row">
            <div class="col-md-6 nat-img">
                    <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/roundpic2.png" />
                </div>
                <div class="col-md-6 nat-cont">
                    <h4 class="sec-cont-tit">Чувствайте се неотразими и енергизирани</h4>
					<p class="sec-cont-dtl">2SLIM съдържа само естествени съставки, които засилват метаболизма и подпомагат изгарянето на нежеланите мазнини.</p>
                </div>

            </div>
            <div class="row">
            <div class="col-md-6 nat-img">
                    <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/roundpic1.png" />
                </div>
                <div class="col-md-6 nat-cont">
                    <h4 class="sec-cont-tit">Контрол чрез съставките</h4>
					<p class="sec-cont-dtl">Здравословните, напълно естествени съставки дават на тялото ви невероятен шанс да победи наднорменото тегло ефективно.</p>
                </div>

                <img class="arrows" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/footer-arrow.png" />
                <a href='<?php echo $this->_tpl_vars['dir']; ?>
/order/<?php echo $this->_tpl_vars['campaign']['uri']; ?>
'>
					<img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/formbutton.png' class="orders"/>
				</a>
            </div>

        </div>
        <div class='poss' style='left: -100px; bottom: 90px; line-height: 100%; position: relative; margin-bottom: -100px;'>
             <P class="lose"> Отслабнете здравословно, по естествен начин!</P>
                <P class="gets">Вземете вашата бутилка днес!</P>
            </div>
    </div>
</section>


<section class="sec-natural">
	<div class="container">
    <div align="center">
    <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/text4.png' style="padding-left:30px;"/><img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/allicon.png' style="float:right; padding-right:20px; padding-top:10px"/>

        </div><div class="clearfix"></div>

        <div class="col-md-3 sec-nat-cont-left" style="margin-left:35px">
        	<div class="row">


              <h4 class="sec-cont-tit">CLA от Шафранка</h4>
					<p class="sec-cont-dtl">CLA подпомага увеличаването на мускулната тъкан, което по естествен път води до отслабване. По-голямата мускулна маса гори повече калории от мастната маса, което засилва и метаболизма.</p>

            </div>

            <div class="row">


                    <h4 class="sec-cont-tit">Екстракт от Зелено кафе</h4>
					<p class="sec-cont-dtl"> Този екстракт съдъжа високо ниво на Хлорогенна киселина, която е мощен антиоксидант. Тя се препоръчва при сърдечни заболявания, диабет, наднормено тегло.</p>

            </div>
        </div>
        <div class="col-md-4 ">
        </div>
        <div class="col-md-4 sec-nat-cont-right">
        	<div class="row">

                   <h4 class="sec-cont-tit">Мурсалски чай </h4>
					<p class="sec-cont-dtl">Използва се за подсилване на имунитета, подпомагане на храносмилането, балансиране на нервната система, при проблеми с белите и черните дробове, при анемии, диабет и много други.</p>
                </div>



            <div class="row">

                   <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/line.png'/>
					<p class="sec-cont-dtl">За хилядите наши клиенти отслабването вече не е само мираж. Прочетете какво споделят те с нас!</p>
                <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/line.png'/>
            </div>
        </div>
    </div>
</section>

<section class="sec-testimonial">
	<div class="container" >

        <p class="sec-sub-tit"></p>
    	<div class="col-md-4 sec-testi-cont">
        	<img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/test1.jpg" />
            <p ><span>&quot;Той изигра ключова роля за отслабването ми и го препоръчвам непрекъснато&quot; </span><br/>
Имах нормално тегло, но след раждането на детето ми натрупах няколко излишни килограма. Чух за 2SLIM и реших да го пробвам. Той изигра ключова роля за отслабването ми и го препоръчвам непрекъснато<br/>
<strong>- Магдалена Г.</strong></p>
        </div>
        <div class="col-md-4 sec-testi-cont">
        	<img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/test2.jpg" />
            <p ><span>&quot;Моите тяло, живот и гардероб драстично се промениха!&quot; </span><br/>
Видях и поръчах продукта ви онлайн и го пия вече няколко месеца. Започнах да тренирам и да се храня здравословно. Моите тяло, живот и гардероб драстично се промениха! <br/>
<strong>- Гергана К.</strong></p>
        </div>
        <div class="col-md-4 sec-testi-cont">
        	<img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/test3.jpg" />
            <p ><span>Усещах как отслабвам всеки ден и как енергията ми за тренировки се увеличава!</span> <br/>
  Чувствах се безпомощна. Сега отново се усещам здрава. Този продукт ми помогна да победя наднорменото тегло. Усещах как отслабвам всеки ден и как енергията ми за тренировки се увеличава! Благодаря, че ми върнахте живота!<br/>
  <strong>- Елена И.</strong></p>
        </div>
        <div>
        <div class="tbg">
        <div class="col-md-5 tbgimg">
        <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/bodys.jpg'/> </div> <div class="col-md-7 tbgtest">
      <h5>  <span>Отслабнете с 22 кг</span> само за няколко месеца.</h5>
         <p >След раждането на 3 деца реших, че е време да започна да се храня здравословно и да се отърва от мазнините, станали неразделна част от моето тяло. Чудех се как да дам начален тласък на този процес и приятел ми разказа за този продукт. Само за 3 месеца свалих 22 кг. 2SLIM беше решаващият фактор за отслабването ми! Благодаря!<br/>
</p>
<h6>Преди 86кг | After 64kg</h6>
        <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/dan.jpg'/>
        </div>
        </div>   </div>

    </div>
</section>
<section class="sec-totus sec-totus-last">
	<div class="container">
    	<div class="col-md-4">
        </div>
        <div class="col-md-8 sec-totus-cont">

            <div class="totus-points"> <h2 class="act-now-tit">Отслабнете  <br/><span style="padding-left:20px">здравословно,  <img src='<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/ftext.png'/></span></h2>
            	<ul><li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Постигнете мечтаното тегло</li>
 					<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Чувствайте се неотразими и енергизирани</li>
  					<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Запазете всички естествени съставки</li>
   					<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Без вредни химкали</li>
    				<li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Овладейте апетита си</li>
                    <li style='font-size: 14px;'><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/icon.png" />Заредете се с енергия </li>
                </ul>

				<a href='<?php echo $this->_tpl_vars['dir']; ?>
/order/<?php echo $this->_tpl_vars['campaign']['uri']; ?>
'>
                	<img class="submit-btn" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/footerbutton.png" />
				</a>
                <img class="foot-arr" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/footer-arrow.png" />
            </div>
            <div class=" form-prod-img">
            	<img class="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/images/lifproducts.png"  style="margin-top:50px;"/>
            </div>
        </div>
    </div>
</section>
<div id="txt-slider" >
	<ul id="demo">
  		<li class="active" style="display:block">Мария Т. току що купи <span>2</span>бр.</li>
  		<li>Луиза M. току що купи <span>2</span>бр.</li>
      	<li>Силвия К. току що купи <span>3</span>бр.</li>
      	<li>Елена Ф. току що купи <span>2</span>бр.</li>
      	<li>Катя С. току що купи <span>2</span>бр.</li>
      	<li>Ана И. току що купи <span>2</span>бр.</li>
      	<li>Теодора M. току що купи <span>2</span>бр.</li>
    </ul>
</div>
	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->

	<!-- Bootstrap jQuery -->

	<script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/./js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/jquery.textrotator.js"></script>
	<script>
	<?php echo '
	$(document).ready(function()
	{
		$(\'#txt-slider\').fadeIn(2000);

	$(function(){
        $(\'#demos\').textRotator({
            random : false,
            fadeIn : 1000,
            fadeOut : 500,
            duration : 15000,
            debug : false

         })
       $(document).ready(function(){
    setInterval(function(){
		var ln = $("#demo li").length-1;
		var current = $(\'#demo li.active\').index();
 		$(\'#demo li\').removeClass(\'active\');
               $(\'#demo li\').hide(100)
		current = current + 1;
              $(\'#txt-slider\').hide(100);
		if(current > ln)
		{
                        $(\'.txt-box\').text(\'222\')
                        var tot = parseInt($(\'.txt-box\').text(), 10);
                        var min = parseInt($(\'#demo li:eq(0) span\').text(), 10);
                          var curtot = tot-min;
                         $(\'.txt-box\').text(curtot)
			$(\'#demo li:eq(0)\').addClass(\'active\');
                        $(\'#demo li:eq(0)\').fadeIn(5000);
                  $(\'#txt-slider\').fadeIn(4000);
		}
		else
		{
			$(\'#demo li:eq(\'+current+\')\').addClass(\'active\');
                        $(\'#demo li:eq(\'+current+\')\').fadeIn(5000);
                        var tot = parseInt($(\'.txt-box\').text(), 10);
                        var min = parseInt($(\'#demo li:eq(\'+current+\') span\').text(), 10);
                          var curtot = tot-min;
                         $(\'.txt-box\').text(curtot)
                 $(\'#txt-slider\').fadeIn(4000);
		}

	}, 15000); $(\'.txt-box\').text(\'220\')
});

    })
});
	'; ?>

	</script>

	</div><!-- Body inner end -->

	<?php if ($this->_tpl_vars['GA']): ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?php echo $this->_tpl_vars['GA']; ?>
', 'auto');
      ga('send', 'pageview');

    </script>
    <?php endif; ?>

	<script>
        <?php echo '
        $(function(){
            $(\'a, input\').click(function(e){
                e.preventDefault();

                window.onbeforeunload = null;

                window.location.href = $(this).attr(\'href\');
            });
        });
        '; ?>

        <?php if (FALSE): ?>
        <?php echo '
        window.onbeforeunload =  function (e) {

            window.setTimeout(function () { // escape function context

    					}, 0);
    				window.onbeforeunload = null;   // necessary to prevent infinite loop


            var confirmationMessage = \'************************** \\n Не пропускайте тази СПЕЦИАЛНИ ПРОМОЦИЯ! Ако затворите ще пропусне най-големите ни оферти! Кликнете ОСТАНИ на страница, за да се възползвате от най-новите промо продукти! \\n **************************\';

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
        };
        '; ?>

        <?php endif; ?>
    </script>
  <?php echo $this->_tpl_vars['campaign']['track_landing']; ?>



</body></html>