<?php /* Smarty version 2.6.25, created on 2020-04-24 20:51:08
         compiled from /Users/korgoth/htdocs/templates/lib/../templates/order-templates/VITALDERMAX/vitaldermax-order-v1/BG/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/Users/korgoth/htdocs/templates/lib/../templates/order-templates/VITALDERMAX/vitaldermax-order-v1/BG/index.html', 117, false),)), $this); ?>
<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">

  <title>VitaDermax</title>
  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#000">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#000">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

  <style><?php echo 'body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }'; ?>
</style>


  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/css/main.min.css">
  <script src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/scripts.min.js"></script>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'compability.html', 'smarty_include_vars' => array('exclude_bootstrap' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php echo '
	<script type="text/javascript">
		$(\'form\').submit(function(e){
			e.preventDefault();
			return false;
		});
	</script>
	
	<style media="screen">
		.alert-danger { border: solid 1px red; }
	</style>
	'; ?>

	


</head>

<body>
  <div class="overflow">
    <div class="block1">
      <div class="container">
        <div class="block1__decor1"></div>
        <div class="block1__decor2"></div>
        <div class="block1__decor3"></div>
        <div class="block1__decor4"></div>
        <div class="block1__container">
          <div class="block1__left">
            <div class="block1-logo">
              <div class="block1-logo__img">
                <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/logo.png" alt="">
              </div>
              <div class="block1-logo__tx clear">подмладяваща формула</div>
            </div>
            <div class="block1-pack desktop">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/pack.png" alt="">
              <div class="sale-label">-50%</div>
            </div>
            <div class="timer">
              <div class="timer__header">оставащо време:</div>
              <div class="timer__container">
                <div class="timer__item">
                  <div class="timer__item-tx">00</div>
                  <div class="timer__item-label">hours</div>
                </div>
                <div class="timer__item">
                  <div class="timer__item-tx">00</div>
                  <div class="timer__item-label">minutes</div>
                </div>
                <div class="timer__item">
                  <div class="timer__item-tx">00</div>
                  <div class="timer__item-label">seconds</div>
                </div>
              </div>
            </div>
          </div>
          <div class="block1__right">
            <h2 class="header-2"><span class="clear">Побеждава всякакви бръчки  само за </span> <span class="blue">28 дни!</span></h2>
            <div class="block1-pack--mobile mobile">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/mobile/pack.png" alt="">
              <div class="sale-label">-50%</div>
            </div>
            <div class="block1-list">
              <div class="block1-list__item">
                <div class="block1-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b1_list.png" alt="">
                </div>
                <div class="block1-list__tx">Стимулира производството на натурален колаген и еластин</div>
              </div>
              <div class="block1-list__item">
                <div class="block1-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b1_list.png" alt="">
                </div>
                <div class="block1-list__tx">Блокира факторите, които предизвикват появата на бръчки</div>
              </div>
              <div class="block1-list__item">
                <div class="block1-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b1_list.png" alt="">
                </div>
                <div class="block1-list__tx">Подхранва и хидратира суха и много суха кожа на лицето</div>
              </div>
              <div class="block1-list__item">
                <div class="block1-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b1_list.png" alt="">
                </div>
                <div class="block1-list__tx">Изглажда тена на кожата</div>
              </div>
            </div>
            <div class="block1-price">
              <div class="block1-price__old old"><?php echo smarty_function_math(array('equation' => "x*2",'x' => $this->_tpl_vars['campaign']['price'],'format' => "%.2f"), $this);?>
 лв</div>
              <div class="block1-price__new"><span><?php echo $this->_tpl_vars['campaign']['price']; ?>
 лв</span></div>
            </div>
            <div class="block1-button-container">
              <button class="button button_orange __js-scroll-form">ПОРЪЧАЙ</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block2">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-blue blue">ОСНОВНИ <span class="red">ПРИЧИНИ</span> ЗА ПОЯВАТА НА БРЪЧКИ<span class="header-2__dot"></span></h2>
        <div class="block2-list">
          <div class="block2-list_i">
            <div class="block2-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b2_i1.png" alt="">
            </div>
            <div class="block2-list__container">
              <h3 class="block2-list__header">НЕДОСТАТЪЧНА ХИДРАТАЦИЯ</h3>
              <div class="block2-list__text">Дори и много мазната кожа се нуждае от ежедневно подхранване и хидратация чрез специално подбрани средства.</div>
            </div>
          </div>
          <div class="block2-list_i">
            <div class="block2-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b2_i2.png" alt="">
            </div>
            <div class="block2-list__container">
              <h3 class="block2-list__header">УПОТРЕБА НА ТОНИРАЩИ ПРОДУКТИ</h3>
              <div class="block2-list__text">Тониращите кремове, пудра и коректорите блокират каналите на мастните жлези. Това води до сухота, лющене и стареене на кожата.</div>
            </div>
          </div>
          <div class="block2-list_i">
            <div class="block2-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b2_i3.png" alt="">
            </div>
            <div class="block2-list__container">
              <h3 class="block2-list__header">КОЗМЕТИКА С ЛОШО КАЧЕСТВО</h3>
              <div class="block2-list__text">Много козметични компании предпочитат да използват нискокачествени съставки, като добавят и опасни вещества като парабени, сулфати и нефтопродукти. Те блокират притока на полезни вещества в слоевете на епидермиса и значително изсушават кожата, което неизбежно води до появата на бръчки.</div>
            </div>
          </div>
          <div class="block2-list_i">
            <div class="block2-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b2_i4.png" alt="">
            </div>
            <div class="block2-list__container">
              <h3 class="block2-list__header">ПОСЕЩЕНИЯ НА СОЛАРИУМ</h3>
              <div class="block2-list__text">UV лъчите са най-опасният враг на кожата. Те блокират производството на естествен колаген и еластин, източват епидермиса и допринасят за появата на дълбоки бръчки.</div>
            </div>
          </div>
        </div>
        <div class="block2-girl desktop">
			<div class="block2-girl__line-emulation"></div>
          <div class="block2-girl__old">
            <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/girl_after.png" alt="">
          </div>
          <div class="block2-girl__new">
            <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/girl_befor.png" alt="">
          </div>
        </div>
        <div class="block2-girl--mobile mobile">
			<div style='width: 50%; text-align: center; float: left; margin-top: 20px; color: #23627e'>
				ПРЕДИ
			</div>
			<div style='width: 50%; text-align: center; float: left; margin-top: 20px; color: #23627e'>
				СЛЕД
			</div>

          <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/mobile/girl2.png" alt="">
        </div>
      </div>
    </div>

    <div class="block3">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-brown"><span class="blue">VitalDermax</span> БЕЗСПОРНО ПОБЕЖДАВА <br>ВСИЧКИ ФАКТОРИ НА СТАРЕЕНЕ<span class="header-2__dot"></span></h2>
        <div class="block3__container">
          <div class="block3__left">
            <div class="block3__text"><span class="bold">Уникалната интензивна формула на VitalDermax</span> е създадена специално за подобряване на външния вид и структурата на сухата и много суха кожа. Резултатът на младата и сияйна кожа се постига чрез:</div>
            <div class="block3__right--mobile mobile">
              <img class="water" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/mobile/water.png" alt="">
              <img class="pack" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/mobile/pack.png" alt="">
            </div>
            <div class="block3-list">
              <div class="block3-list__item">
                <div class="block3-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b3_i1.png" alt="">
                </div>
                <div class="block3-list__tx">
                  <span class="bold green">увеличаване нивото на влажността на кожата </span> чрез привличане и задържане на влага в продължение на 24 часа;
                </div>
              </div>
              <div class="block3-list__item">
                <div class="block3-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b3_i2.png" alt="">
                </div>
                <div class="block3-list__tx">
                  <span class="bold green">повишаване на здравето и еластичността </span>на кожата чрез възстановяването на нейната влакнеста структура на ниво дерма;
                </div>
              </div>
              <div class="block3-list__item">
                <div class="block3-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b3_i3.png" alt="">
                </div>
                <div class="block3-list__tx">
                  <span class="bold green">защита на кожата от ултравиолетовите UVA/UVB лъчи </span>благодарение на ефективното блокиране на слънчевата светлина, както и чрез неутрализиране на действието на свободните радикали.
                </div>
              </div>
            </div>
          </div>
          <div class="block3__right desktop">
            <div class="block3__water">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/pack2.png" alt="">
            </div>
            <div class="block3__pack">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/pack.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block4">
      <div class="container">
        <div class="block4__container">
          <div class="block4-left">
            <div class="block4-girl">
              <div class="block4-girl__plus-item"></div>
              <div class="block4-girl__plus-item"></div>
              <div class="block4-girl__plus-item"></div>
              <div class="block4-girl__plus-item"></div>
              <div class="block4-girl__plus-item"></div>
            </div>
          </div>
          <div class="block4-right">
            <h2 class="header-2 header-2_left-bottom-line header-2_left-bottom-line-blue">VitalDermax – НАЙ-ДОБРОТО РЕШЕНИЕ СРЕЩУ ПРОМЕНИТЕ НА ВЪЗРАСТТА</h2>
            <div class="block4-list">
              <div class="block4-list__item">
                <div class="block4-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b4_i.png" alt="">
                </div>
                <div class="block4-list__tx">Овлажнява, подхранва, възстановява сухата кожа с груба текстура</div>
              </div>
              <div class="block4-list__item">
                <div class="block4-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b4_i.png" alt="">
                </div>
                <div class="block4-list__tx">Избутва дълбоките бръчки от вътре навън, изглажда мимическите бръчки</div>
              </div>
              <div class="block4-list__item">
                <div class="block4-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b4_i.png" alt="">
                </div>
                <div class="block4-list__tx">Подпомага производството на естествен колаген и еластин за увеличаване на еластичността и устойчивостта на кожата</div>
              </div>
              <div class="block4-list__item">
                <div class="block4-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b4_i.png" alt="">
                </div>
                <div class="block4-list__tx">Идеално изравнява текстурата и тена на кожата, премахвайки свързаните с възрастта пигментни петна</div>
              </div>
              <div class="block4-list__item">
                <div class="block4-list__img">
                  <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b4_i.png" alt="">
                </div>  
                <div class="block4-list__tx">Освежава вида на кожата и осигурява най-важните микроелементи за поддържане младостта на кожата</div>
              </div>
            </div>
            <div class="block4-girl--mobile mobile">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/mobile/girl.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block5">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-blue">Революционно възстановяване на кожата <div class="header-1 green">САМО ЗА 4 СЕДМИЦИ</div><span class="header-2__dot"></span></h2>
        <div class="block5__decor1"></div>
        <div class="block5__decor2"></div>
        <div class="block5-list">
          <div class="block5-list__container">
            <div class="block5-list__item">
              <h4 class="block5-list__header">СЛЕД <br> 15 минути</h4>
              <div class="block5-list__tx">Кожата е осезаемо по-гладка и сияйна. Лицето е овлажнено, дермиса е наситен с важни микроелементи за оптимален баланс.</div>
            </div>
          </div>
          <div class="block5-list__container">
            <div class="block5-list__item">
              <h4 class="block5-list__header">СЛЕД <br> 14 дни</h4>
              <div class="block5-list__tx">Активно действие на засиления еффект на колаген и еластин. Лицевият овал е забележимо по-стегнат, дълбоките бръчки са намалени с 54%, мимическите бръчки почти напълно са елиминирани.</div>
            </div>
          </div>
          <div class="block5-list__container">
            <div class="block5-list__item">
              <h4 class="block5-list__header">СЛЕД <br> 28 дни</h4>
              <div class="block5-list__tx">Стареенето е напълно спряно. Дермиса се овлажнява и насища с естествен колаген и еластин. Контурите на лицето стават по-ясни, кожата - еластична и твърда, а бръчки почти не са останали.</div>
            </div>
          </div>
        </div>
        <button class="button button_orange __js-scroll-form">ПОРЪЧАЙ</button>
      </div>
    </div>

    <div class="block6">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-green"><div class="header-1">Тотално премахване </div>на измененията на възрастта!<span class="header-2__dot"></span></h2>
        <div class="block6-tx">VitalDermax притежава висока концентрация от билкови есенции, в допълнение към основните и натурални масла, които работят за възстановяване на кожата и подновяване на нейните клетъчни мембрани.</div>
        <div class="block6-list">
          <div class="block6-list__item">
            <div class="block6-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b6_i1.png" alt="">
            </div>
            <h4 class="block6-list__header">КОЛАГЕН С ЧИСТОТА 99.5%</h4>
            <div class="block6-list__tx">прави дълбоките бръчки много по-малко забележими, бутайки ги отвътре и се абсорбира напълно от кожата!</div>
          </div>
          <div class="block6-list__item">
            <div class="block6-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b6_i2.png" alt="">
            </div>
            <h4 class="block6-list__header">ХИАЛУРОНОВА КИСЕЛИНА</h4>
            <div class="block6-list__tx">неутрализира негативния ефект от пряката слънчева светлина, лошата среда и лошите навици</div>
          </div>
          <div class="block6-list__item">
            <div class="block6-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b6_i3.png" alt="">
            </div>
            <h4 class="block6-list__header">ДНК от сьомга</h4>
            <div class="block6-list__tx">предотвратява превръщането на фини бръчки в по-дълбоки.</div>
          </div>
          <div class="block6-list__item">
            <div class="block6-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b6_i4.png" alt="">
            </div>
            <h4 class="block6-list__header">Centella asiatica</h4>
            <div class="block6-list__tx">стимулира производството на колаген и еластин в кожата</div>
          </div>
        </div>
        <div class="block6-footer">
          <div class="block6-footer__info">
            <div class="block6-footer__percents">94%</div>
            <div class="block6-footer__text">от европейците предпочитат VitalDermax</div>
          </div>
          <div class="block6-footer__img">
            <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b6_image.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="block7">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-blue">Независимият експеримент, включващ повече от 10 000 жени, доказа <span class="green">високата ефективност на крема VITALDERMAX</span>. Резултатите показват, че:<span class="header-2__dot"></span></h2>
        <div class="block7_container">
          <div class="block7-left">
            <div class="block7-graph">
              <div class="block7-list">
                <div class="block7-list__item">
                  <div class="block7-list__bar-container">
                    <div class="block7-list__bar"></div>
                    <div class="block7-list__percent">99%</div>
                  </div>
                  <div class="block7-list__tx">от жените напълно са премахнали бръчките след курса на употреба</div>
                </div>
                <div class="block7-list__item">
                  <div class="block7-list__bar-container">
                    <div class="block7-list__bar"></div>
                    <div class="block7-list__percent">77%</div>
                  </div>
                  <div class="block7-list__tx">от жените са забелязали значителни промени след 8 дни използване на крема</div>
                </div>
                <div class="block7-list__item">
                  <div class="block7-list__bar-container">
                    <div class="block7-list__bar"></div>
                    <div class="block7-list__percent">81%</div>
                  </div>
                  <div class="block7-list__tx">са имали подобрение в цвета на кожата и овала на лицето след 14 дни</div>
                </div>
                <div class="block7-list__item">
                  <div class="block7-list__bar-container">
                    <div class="block7-list__bar"></div>
                    <div class="block7-list__percent">69%</div>
                  </div>
                  <div class="block7-list__tx">от жените са се отървали от подпухналост и тъмни петна по лицето и деколтето</div>
                </div>
              </div>
            </div>
          </div>
          <div class="block7-right">
            <div class="block7-right__before-tx">ПРЕДИ</div>
            <div class="block7-right__after-tx">СЛЕД</div>
          </div>
        </div>
      </div>
    </div>

    <div class="block8">
      <div class="container">
        <h2 class="header-2 header-2_left-bottom-line header-2_left-bottom-line-brown">МНЕНИЕТО НА СПЕЦИАЛИСТИ <br>ЗА <span class="blue">VitalDermax</span></h2>
        <div class="doc-img--mobile mobile">
          <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/mobile/doc.png" alt="">
        </div>
        <div class="block8-tx">Съвременните процедури за подмладяване дават добър резултат, но в повечето случаи има много странични ефекти - подуване, алергични реакции, притискане на нервите, мускулна атрофия на лицето и други. Всичко това се дължи на злоупотребата с инжекции. За съжаление, няма гаранция, че тези проблеми няма да ви се случат. Ето защо е много по-безопасно да използвате същите компоненти външно. В комбинация с биосъставките те могат да проникнат в дълбоките слоеве на епидермиса и да изгладят бръчките отвътре. С течение на времето кожата ви не само се подобрява, но и започва да произвежда колаген и еластин - протеини, отговорни за младостта на кожата. <span class="bold green">VitalDermax е любимото ми сред подмладяващите кремове</span>. Абсолютно естествено, хипоалергично, дава отличен резултат за 3-4 седмици употреба.</div>
        <div class="block8-sign">
            <div class="block8-sign__name">Антония Георгиева, <br> козметик</div>
            <div class="block8-sign__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b7_sign.png" alt="">
            </div>
            <div class="block8-sign__img2">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b7_sign2.png" alt="">
            </div>
          </div>
      </div>
    </div>

    <div class="block9">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-green">КАК ДА ИЗПОЛЗВАТЕ VitalDermax<span class="header-2__dot"></span></h2>
        <div class="block9-list">
          <div class="block9-list__item">
            <div class="block9-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b9_i1.png" alt="">
            </div>
            <h4 class="block9-list__header">Стъпка 1</h4>
            <div class="block9-list__tx">Премахнете грима и почистете лицето от мръсотията с лосион, подходящ за вашия вид кожа. Изсушете лицето си със суха кърпа.</div>
          </div>
          <div class="block9-list__item">
            <div class="block9-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b9_i2.png" alt="">
            </div>
            <h4 class="block9-list__header">Стъпка 2</h4>
            <div class="block9-list__tx">Разтъркайте лицето си с кубче лед. Масажирайте с пръсти около областта на очите и устните.</div>
          </div>
          <div class="block9-list__item">
            <div class="block9-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b9_i3.png" alt="">
            </div>
            <h4 class="block9-list__header">Стъпка 3</h4>
            <div class="block9-list__tx">Нанесете VitalDermax върху челото, бузите, скулите и в областта на деколтето. С бавните масажиращи движения разпространявайте продукта по цялото лице. Направете този масаж за 2-3 минути.</div>
          </div>
          <div class="block9-list__item">
            <div class="block9-list__img">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b9_i4.png" alt="">
            </div>
            <h4 class="block9-list__header">Стъпка 4</h4>
            <div class="block9-list__tx">Правете тази процедура ежедневно, докато постигнете желания резултат. </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block10">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-blue">РЕЗУЛТАТИ ОТ ИЗПОЛЗВАНЕ НА<br> VITALDERMAX ЗА <span class="green"> 28 ДНИ</span><span class="header-2__dot"></span></h2>
        <div class="block10-tx">9 от 10 жени, които избраха VitalDermax като основна грижа за кожата, бяха 100% доволни от резултата!</div>
        <div class="block10-review">
          <div class="block10-review__container">
            <div class="block10-review__item">
              <div class="block10-review__img"><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/otz1.png" alt=""></div>
              <div class="block10-review__tx">Имам много тънка кожа, отгоре на всичко и проблема. Бръчките започнаха да се появяват в студентските ми години - на клепачите и на челото. Опитах всички видове маски, лосиони, масажи - резултатът изобщо не ме удовлетворяваше. Следвайки съветите на моя приятелка, <span class="bold">купих VitalDermax - ефектът е просто зашеметяващ! </span>Кожата ми стана гладка, кадифена, бръчките изчезнаха след три седмици. Продължавам да използвам крема профилактично всеки ден - и нямам проблеми с кожата.</div>
              <div class="block10-review__name">Ирина Николаева, 32 години</div>
            </div>
          </div>
          <div class="block10-review__container">
            <div class="block10-review__item">
              <div class="block10-review__img"><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/otz2.png" alt=""></div>
              <div class="block10-review__tx">На моите години никоя козметика не може да се справи с бръчките. Но, както всяка жена, винаги искаме да изглеждаме добре. Заедно с дъщеря ми започнахме да използваме VitalDermax. Два месеца по-късно бяхме неразпознаваеми! <span class="bold">Кожата ми се стегна, пигментните ми петна изчезнаха напълно</span>, а бръчките станаха много по-малко забележими.</div>
              <div class="block10-review__name">Валентина Иванова, 59 години</div>
            </div>
          </div>
          <div class="block10-review__container">
            <div class="block10-review__item">
              <div class="block10-review__img"><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/otz3.png" alt=""></div>
              <div class="block10-review__tx">Дълго време исках да си направя лифтинг, но четях отрицателни коментари - някои момичета завършваха с изкривено лице и дори не можеха да се усмихнат след операцията... За рожденния ми ден дъщеря ми ми подари VitalDermax. Не вярвах, че може да има такъв ефект! <span class="bold">Само след два месеца изглеждах с 10 години по-млада.</span> Дори много дълбоките бръчки почти напълно изчезнаха.</div>
              <div class="block10-review__name">Елена Филипова, 48 години</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block11">
      <div class="container">
        <h2 class="header-2 header-2_bottom-line header-2_bottom-line-blue">КАК ДА ПОРЪЧАТЕ VITALDERMAX?<span class="header-2__dot"></span></h2>
        <div class="block11-list">
          <div class="block11-list__item">
            <div class="block11-list__container">
              <div class="block11-list__img">
                <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b11_i1.png" alt="">
              </div>
              <div class="block11-list__tx">
                <div class="block11-list__num">1</div>
                <div class="block11-list__title">Поръчайте на официалния сайт</div>
              </div>
            </div>
          </div>
          <div class="block11-list__item">
            <div class="block11-list__container">
              <div class="block11-list__img">
                <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b11_i2.png" alt="">
              </div>
              <div class="block11-list__tx">
                <div class="block11-list__num">2</div>
                <div class="block11-list__title">Очаквайте обаждане от наш оператор</div>
              </div>
            </div>
          </div>
          <div class="block11-list__item">
            <div class="block11-list__container">
              <div class="block11-list__img">
                <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b11_i3.png" alt="">
              </div>
              <div class="block11-list__tx">
                <div class="block11-list__num">3</div>
                <div class="block11-list__title">Получавате продукта и плащате на куриера в момента на доставка</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block12">
      <div class="container">
        <h2 class="header-2">ВЪЗТАНОВЕТЕ СВЕЖЕСТТА И МЛАДОСТТА НА<br> КОЖАТА СИ САМО ЗА <span class="blue">28 ДНИ!</span></h2>
        <div class="block12-tx">Поръчайте <b>VitalDermax</b> сега <br> и получете 50% отстъпка!</div>
        <div class="block12-container">
          <div class="block12-left">
            <div class="block12__pack">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/pack.png" alt="">
              <div class="sale-label">-50%</div>
            </div>
          </div>
          <div class="block12-center">
            <form action="" class="block12-form">
              <fieldset>
                <input type="text" placeholder="Име" name="first_name" class="block12-form__input required order_data">
                <input type="text" placeholder="Мобилен телефон" name="phone" class="block12-form__input required order_data">
                <div class="block12-form__price">
                  <div class="block12-form__price-old old"><?php echo smarty_function_math(array('equation' => "x*2",'x' => $this->_tpl_vars['campaign']['price'],'format' => "%.2f"), $this);?>
 лв</div>
                  <div class="block12-form__price-new"><span><?php echo $this->_tpl_vars['campaign']['price']; ?>
 лв</span></div>
                </div>
                <button class="button button_orange buynow" type="button"  data-pid='<?php echo $this->_tpl_vars['campaign']['product_id']; ?>
' data-campaign-uri='<?php echo $this->_tpl_vars['campaign']['uri']; ?>
'>ПОРЪЧАЙ</button>
              </fieldset>
            </form>
          </div>
          <div class="block12-right">
            <div class="block12__logo">
              <img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/b12_logo.jpg" alt="">
            </div>
            <div class="timer">
              <div class="timer__header">оставащо време:</div>
              <div class="timer__container">
                <div class="timer__item timer__item_hours">
                  <div class="timer__item-tx">00</div>
                  <div class="timer__item-label">часове</div>
                </div>
                <div class="timer__item timer__item_minutes">
                  <div class="timer__item-tx">00</div>
                  <div class="timer__item-label">минути</div>
                </div>
                <div class="timer__item timer__item_seconds">
                  <div class="timer__item-tx">00</div>
                  <div class="timer__item-label">секунди</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mouseout_popup.html", 'smarty_include_vars' => array('mop_name' => "ИМЕ, ФАМИЛИЯ",'mop_phone' => "МОБИЛЕН ТЕЛЕФОН",'mop_buy_now' => "ПОРЪЧАЙТЕ",'product_img' => ($this->_tpl_vars['cdn'])."/".($this->_tpl_vars['template'])."/img/pack.png",'mop_header_text' => "Само днес! Последен шанс - остават само 9 продукта на преференциална цена!",'mop_body_text' => "<span style='font-size: 28px;'>За всичките ни клиенти днес има специална промоция<br><strong style='color:red'> VitalDermax с отстъпка 50%</strong></span><br><br>",'mop_footer_text' => "Един от нашите оператори ще ви се обади за безплатна консултация и завършване на поръчката.")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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

  <?php if (FALSE): ?>
  <?php echo '
  <script>
	  $(function(){
		  $(\'a\').click(function(e){
			  e.preventDefault();

			  window.onbeforeunload = null;

			  //window.location.href = $(this).attr(\'href\');
		  });
	  });
	  window.onbeforeunload =  function (e) {

		  var confirmationMessage = \'************************** \\n \\n **************************\';

		  (e || window.event).returnValue = confirmationMessage; //Gecko + IE
		  return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
	  };
  </script>
  '; ?>

  <?php endif; ?>

 <?php echo $this->_tpl_vars['campaign']['track_landing']; ?>


</body>
</html>