<?php /* Smarty version 2.6.25, created on 2020-04-24 15:57:01
         compiled from /Users/korgoth/htdocs/templates/lib/../templates/order-templates/2SLIM-ANTICELL/2SlimAntic_AchillesIT/IT/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/Users/korgoth/htdocs/templates/lib/../templates/order-templates/2SLIM-ANTICELL/2SlimAntic_AchillesIT/IT/index.html', 642, false),)), $this); ?>
<!DOCTYPE html>
<html>

<head>
    <script>var locale = "it";</script>        <!-- country code -->
    <script>var lang_locale = "en";</script>   <!-- browser locale -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/placeholders.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/dr.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/dtime.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/js.cookie.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/order_me.js"></script>
    <?php echo '
    <script>

        var package_prices = {};
        var shipment_price = 0;
        var name_hint = \'Bruno bellini\';
        var phone_hint = \'+393476736735\';
    </script>
    '; ?>

    <link type="text/css" href="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/css/order_me.css" rel="stylesheet" media="all">
    <?php echo '
    <style>
        input.alert-danger { background: #c73729 !important; border: solid 1px #340704 !important; color: white !important;}
    </style>
    '; ?>



<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
<title>2SLIM</title>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "compability.html", 'smarty_include_vars' => array('exclude_bootstrap' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/css/style.css" media="all" rel="stylesheet" type="text/css"/>
<script src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/jquery.plugin.min.js"></script>
<script src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/jquery.countdown.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/main.js" type="text/javascript"></script>


</head>
<body>
<div class="cont-wrapper">
<div class="block block1">
<div class="limit clearfix">
<a class="logo" data-scroll="true" data-scroll-to="#request-form" href="#">2SLIM</a>
<div class="content">
<p class="title1 ttu light">Sbarazzati della cellulite!</p>
<p class="title2 ttu light">Il sistema 2SLIM anticellulite è veloce ed efficace!</p>
<p class="description">2SLIM anticellulite è il must per avere un corpo perfetto</p>
<div class="list">
<span>Questo sistema ha tre caratteristiche principali</span>
<ul>
<li>Migliora il metabolismo e stimola la microcircolazione della pelle</li>
<li>Favorisce la separazione del tessuto adiposo</li>
<li>Stimola la produzione di collagene</li>
</ul>
</div>
<!--          <p class="block1__text">Azioni semplici per avere un bel fisico senza l’effetto “buccia d’arancia”!</p>-->
<p class="block1__text timer-margin"><span>Ore</span><span>Minuti</span><span>Secondi</span><span class="offer-ends"></span></p>
<div class="timer timer-margin"></div>
</div>
</div>
</div>
<div class="block block2">
<div class="limit clearfix">
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block2-1.jpg"/>
<div>
<span>Pelle liscia</span>
</div>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block2-2.jpg"/>
<div>
<span>Struttura del corpo forte</span>
</div>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block2-3.jpg"/>
<div>
<span>Contorno definito delle aree problematiche</span>
</div>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block2-4.jpg"/>
<div>
<span>Nessun deposito di grasso</span>
</div>
</div>
</div>
</div>
<div class="block block3">
<div class="limit">
<p class="title1 ttu">I metodi più utilizzati per tenersi in forma sono le limitazioni alimentari e l’attività fisica</p>
<div class="clearfix">
<div class="l-graph">
<p class="title ttu">
<span>Quadro clinico di sovrappeso nel periodo</span> 1950-2010
            </p>
<div class="content">
<span class="line line1">Sovrappeso in bambini di età compresa tra i 6 e gli 11 anni</span>
<span class="line line2">Sovrappeso in adolescenti di età compresa tra i 12 e i 19 anni</span>
<span class="line line3">Obesità dai 20 ai 74 anni</span>
<span class="line line4">Sovrappeso senza obesità dai 20 ai 74 anni</span>
<span class="line line5">Sovrappeso e obesità dai 20 ai 74 anni</span>
</div>
<div class="info">Secondo l’Istituto di Nutrizione degli USA, negli ultimi cinque anni il numero di persone affette da obesità di vari gradi è cresciuto costantemente.<span>Il trenta per cento della popolazione americana soffre di sovrappeso.</span>
</div>
</div>
<div class="r-graph">
<div class="title clearfix">
<p class="ttu">Come si preferisce perdere peso?</p>
<ul>
<li>gli uomini</li>
<li>le donne</li>
</ul>
</div>
<div class="content">
<div class="row clearfix">
<div class="label">Lieve cambiamento della solita dieta e assunzione di integratori biologicamente attivi</div>
<div class="scale">
<span class="man" style="width: 100%"></span>
<span class="woman" style="width: 97%;"></span>
</div>
</div>
<div class="row clearfix">
<div class="label">Assunzone esclusiva di integratori biologicamente attivi</div>
<div class="scale">
<span class="man" style="width: 94%;"></span>
<span class="woman" style="width: 55%;"></span>
</div>
</div>
<div class="row clearfix">
<div class="label">Consumo ridotto di prodotti nocivi</div>
<div class="scale">
<span class="man" style="width: 83%;"></span>
<span class="woman" style="width: 36%;"></span>
</div>
</div>
<div class="row clearfix">
<div class="label">Pratica intensa di sport</div>
<div class="scale">
<span class="man" style="width: 40%;"></span>
<span class="woman" style="width: 36%;"></span>
</div>
</div>
<div class="row clearfix">
<div class="label">Cambiamento drastico della dieta</div>
<div class="scale">
<span class="man" style="width: 47%;"></span>
<span class="woman" style="width: 36%;"></span>
</div>
</div>
<div class="row clearfix">
<div class="label">Dieta rigorosa e carichi fisici pesanti</div>
<div class="scale">
<span class="man" style="width: 32%;"></span>
<span class="woman" style="width: 18%;"></span>
</div>
</div>
</div>
<div class="info">l’Istituto di Nutrizione degli USA conferma che il metodo migliore per controllare il peso è seguire una dieta semplice (70% della popolazione).<span>Questo metodo dimagrante è inefficace. Il fatto che non si osservi nessun effetto immediato e urgente e la riluttanza a seguire le regole alimentari portano al rifiuto di ulteriori piani di dieta.</span>
</div>
</div>
</div>
<div class="block-title">
<span class="light ttu">Pelle liscia, senza cellulite</span>
<em>Facile, veloce, per sempre!</em>
</div>
</div>
</div>
<div class="block block4">
<div class="limit clearfix">
<div class="side light-side">
<ol>
<li>Senza allenamenti lunghi e inefficaci!</li>
<li>Senza massaggi dolorosi e impacchi che provocano allergie!</li>
<li>Senza aggeggi costosi e inutili!</li>
</ol>
<div class="prompt light ttu">
<span class="cell">Mangia ciò che più ti piace e goditi un corpo in forma!</span>
</div>
<div class="info">Il tuo corpo diventerà bello e giovane!</div>
</div>
<div class="side dark-side">
<ol>
<li>Gli allenamenti non influiscono sulla condizione della pelle</li>
<li>I massaggi e gli impacchi hanno controindicazioni</li>
<li>Le procedure che adottano dispositivi meccanici sono eccessivamente costose</li>
</ol>
<div class="clearfix ">
<div class="prompt light ttu">
<span class="cell _darkcell">Le diete sono pericolose a causa della possibilità di scarsa aderenza e di aggravamento delle condizioni delle aree problematiche.</span>
</div>
</div>
<div class="info">I vecchi metodi contro la cellulite sono inefficaci!</div>
</div>
</div>
</div>
<div class="block block5">
<div class="limit clearfix">
<div class="side l-side">
<p class="title1 light ttu">Ottieni una forma <br> fisica perfetta senza <br> cellulite!</p>
<em>Un ciclo di trattamento potrebbe essere sufficiente per una trasformazione efficace!</em>
<div class="image">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/coffee2.png"/>
<em>Programma anticellulite 2SLIM anticellulite</em>
</div>
</div>
<div class="side r-side">
<p class="title1 ttu">La scienza della bellezza offre un metodo innovativo per combattere la “buccia d’arancia” sui fianchi!</p>
<div class="description">
<p>Le sostanze organiche saturano il corpo dell’energia necessaria senza calorie e grassi eccessivi. I flavonoidi e i fitoestrogeni “regolano” il corpo per rimuovere efficacemente i depositi di grasso accumulati. Le vitamine del gruppo B vengono coinvolte nella microcircolazione della pelle migliorandone la nutrizione. Esse contribuiscono a creare una struttura collagenica che favorisce l’elasticità di tutto il corpo.</p>
<p>Rimozione efficace della cellulite di qualsiasi grado di complessità! Otterrai il corpo dei tuoi sogni in modo facile e veloce!</p>
</div>
<a class="btn btn-transparent btn-with-arrow btn_tr" data-scroll="true" data-scroll-to="#request-form" href="#">Ordinalo subito</a>
</div>
</div>
</div>
<div class="block block6">
<div class="limit">
<h3 class="title ttu">Rimozione efficace della cellulite di qualsiasi grado di complessità! <span>Otterrai il corpo dei tuoi sogni in modo facile e veloce!</span></h3>
<img alt="" class="block6__img" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block6-1.jpg"/>
<div class="row clearfix">
<div class="item">
<div class="info">
<p class="label">7° giorno</p>
<p>Il tuo corpo è pieno di energia e vitamine. Il profilo endocrino responsabile del controllo sulla massa grassa del corpo viene normalizzato. Una miglior circolazione sanguigna favorisce il drenaggio dei liquidi dalle aree problematiche. La cellulite diventa meno visibile del 30%. Si può ottenere un effetto simile con un mese di allenamento intensivo.</p>
</div>
</div>
<div class="item">
<div class="info">
<p class="label">14° giorno</p>
<p>La pelle dei glutei diventa più densa. I solchi profondi della cellulite sono quasi impercettibili. La circonferenza dei fianchi diminuisce di 5-8 cm. Un risultato fantastico simile a quello ottenuto da due mesi regolari di massaggi profondi!</p>
</div>
</div>
<div class="item">
<div class="info">
<p class="label">28° giorno</p>
<p>Riduzione significativa della manifestazione evidente della cellulite. Nessun effetto “buccia d’arancia”. Le condizioni della pelle del corpo migliorano e si iniziano a sentire morbidezza ed elasticità. La circonferenza dei fianchi si riduce di 5 cm in più.</p>
</div>
</div>
<div class="item">
<div class="info">
<p class="label">60° giorno</p>
<p>Pelle liscia su fianchi e glutei. Contorno del corpo bello e definito. La circonferenza dei fianchi si riduce alla taglia desiderata. Questa forma fisica permette di indossare vestiti stretti, costumi da bagno e shorts!</p>
</div>
</div>
</div>
</div>
</div>
<div class="block block7">
<div class="limit">
<p class="title ttu light">Fonti dei depositi di grasso nelle aree problematiche:</p>
<div class="content">
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block7-1.png"/>
</div>
<span class="label ttu">Step 1</span>
<p>Nessuna dieta, piano alimentare, carico fisico irregolare, riposo inefficiente, stress frequente fa sì che il corpo accumuli energia. Il grasso è la sua forma fisiologica.</p>
</div>
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block7-2.png"/>
</div>
<span class="label ttu">Step 2</span>
<p class="sec">Dato che viene accumulata ma non smaltita, la massa grassa si estende sulle pareti dei vasi sanguigni, attorno agli organi, nei tessuti e nelle cellule. Più il grasso rimane nel corpo, più è difficile eliminarlo. Spesso tale massa rimane nel corpo per sempre.</p>
</div>
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block7-3.png"/>
</div>
<span class="label ttu">Step 3</span>
<p>I depositi di grasso possono accumularsi in strati. Smaltire densi accumuli di grasso diventa quasi impossibile.</p>
</div>
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block7-4.png"/>
</div>
<span class="label ttu">Step 4</span>
<p>Col passare del tempo, il grasso penetra negli strati profondi della pelle. Lo strato di grasso inibisce l’afflusso e il deflusso del sangue nelle aree problematiche. Le manifestazioni di cellulite diventano sempre più percepibili.</p>
</div>
</div>
</div>
</div>
<div class="block block8">
<div class="limit">
<h3 class="ttu clearfix">
<span class="label1">Programma anticellulite 2SLIM anticellulite</span>
<span class="label2">Innovazione nella lotta contro la cellulite senza massaggi dolorosi e lunghi allenamenti
            <em>Rimozione rapida della cellulite persistente</em>
</span>
</h3>
<div class="content line1 clearfix">
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-1.jpg"/>
</div>
<div class="label">
<span>Azione sugli strati cutanei interni</span>
</div>
<p>Il contenuto di 2SLIM anticellulite è studiato per stimolare le cellule della pelle a rimuovere il grasso in eccesso attraverso il sangue in modo più facile e veloce. Migliorando il funzionamento dei vasi sanguigni, il complesso vitaminico 2SLIM anticellulite satura il corpo con le sostanze necessarie. L’assenza di ulteriori grassi, zuccheri e carboidrati semplifica la dissoluzione di vecchi depositi di grasso e la loro rimozione.</p>
</div>
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-2.jpg"/>
</div>
<div class="label">
<span>Distruzione dei depositi di grasso</span>
</div>
<p>I flavonoidi e i fitoestrogeni aiutano a normalizzare il profilo endocrino. In questo caso, il grasso viene bruciato e smaltito più facilmente. Le vitamine del gruppo B aumentano l’effetto brucia grassi e facilitano la costruzione di nuove strutture collageniche. La pelle diventa più liscia e soda dell’80%.</p>
</div>
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-3.jpg"/>
</div>
<div class="label">
<span>Eliminazione della massa grassa</span>
</div>
<p>L’acido folico e il beta-carotene contenuti in 2SLIM anticellulite migliorano il funzionamento del tratto gastrointestinale inibendo i processi di stagnazione. L’acido folico ha anche un effetto anti-ossidante che può eliminare le tossine dal corpo e drenare i liquidi in eccesso in modo naturale attraverso l’intestino.</p>
</div>
<div class="item">
<div class="image with-label">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-4.jpg"/>
</div>
<div class="label">
<span>Bella dentro e fuori</span>
</div>
<p>Il complesso vitaminico contenuto in 2SLIM anticellulite è la base perfetta per un corpo sano e bello. I supplementi speciali (fitoestrogeni e flavonoidi) migliorano le condizioni della pelle rendendola liscia, elastica e flessibile. Eliminando il grasso nelle aree problematiche, il corpo diventa giovane e bello.</p>
</div>
</div>
<div class="content line2">
<h4 class="block-title">
<span class="title">Come funziona 2SLIM anticellulite?</span>
<span class="description">L’eliminazione della cellulite mediante l’utilizzo di 2SLIM anticellulite diventa possibile grazie alle proprietà dei componenti di base del farmaco</span>
</h4>
<div class="squad1 clearfix">
<div class="item">
<div class="image">
<span><img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad1-1.jpg"/></span>
</div>
<div class="description with-label">
<span>COMPOSTI ORGANICI</span>
<p>Il prezioso complesso vitaminico svolge un’importante funzione “nutrizionale”. Dato che sazia il corpo con elementi di importanza fondamentale, i composti organici escludono la necessità di introdurre cibi extra e rendono impossibile un’alimentazione eccessiva.</p>
</div>
</div>
<div class="item">
<div class="image">
<span><img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad1-2.jpg"/></span>
</div>
<div class="description with-label">
<span>FITOESTROGENI</span>
<p>Normalizzano le condizioni del corpo indipendenti dagli ormoni che possono creare depositi di grasso. In caso di corretta attività ormonale, il grasso viene trasformato in energia più rapidamente senza accumularsi nei tessuti.</p>
</div>
</div>
<div class="item">
<div class="image">
<span><img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad1-3.jpg"/></span>
</div>
<div class="description with-label">
<span>VITAMINE DEL GRUPPO B</span>
<p>Sono assistenti indispensabili nella lotta contro i processi di ristagno all’interno dei vasi sanguigni. Grazie a questo tipo di vitamine, la struttura muscolare si costruisce più facilmente con il sostegno del collagene dei tessuti. Una quantità sufficiente di vitamine del gruppo B favorisce una miglior condizione della pelle.</p>
</div>
</div>
</div>
<div class="squad2">
<h4><span>Inoltre, il complesso 2SLIM anticellulite è arricchito di</span></h4>
<div class="row clearfix">
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad2-1.jpg"/>
<div class="story">
<span class="label ttu">FLAVONOIDI</span>
<p>Favoriscono un miglior funzionamento del tratto gastrointestinale, stimolano il metabolismo e accelerano i processi di pulizia dell'intestino.</p>
</div>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad2-2.jpg"/>
<div class="story">
<span class="label ttu">Beta-Carotene</span>
<p>Rende il corpo più resistente ai carichi fisici. Una quantità sufficiente di questa sostanza nel corpo favorisce una digestione più veloce di vitamine e minerali e diminuisce il rischio di iperalimentazione.</p>
</div>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad2-3.jpg"/>
<div class="story">
<span class="label ttu">ACIDI GRASSI</span>
<p>Contribuiscono a digerire i grassi utili all’interno del corpo e a stimolare il metabolismo. Inoltre, favoriscono il miglioramento della microcircolazione del sangue nei tessuti.</p>
</div>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block8-squad2-4.jpg"/>
<div class="story">
<span class="label ttu">Ca, Mg, Fe, Zn, Cu</span>
<p>Stimolano il funzionamento dei vasi sanguigni. Saziano il corpo eliminando la necessità di pasti extra.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="block block9">
<div class="limit">
<p class="title ttu">Rimozione efficace del grasso!<span>Risultati veloci e senza sforzi!</span></p>
<p class="description">Analisi comparativa delle condizioni delle aree problematiche. Migliorata la condizione della pelle, compresa la struttura e l’aspetto!</p>
<div class="content">
<div class="compare clearfix">
<div class="side before">
<div class="image">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-before.png"/>
<span class="weight">89 kg</span>
</div>
<span class="tooltip tooltip-shoulder">Circonferenza fianchi - 108 cm</span>
<span class="tooltip tooltip-waist">Struttura - porosa</span>
<span class="tooltip tooltip-hip">Effetto visibile della “buccia d’arancia” - 100%</span>
</div>
<div class="side after">
<div class="image">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-after.png"/>
<span class="weight">80 kg</span>
</div>
<span class="tooltip tooltip-shoulder">Circonferenza fianchi – 99 cm</span>
<span class="tooltip tooltip-waist">Struttura - solida</span>
<span class="tooltip tooltip-hip">Effetto visibile della “buccia d’arancia” - 0%</span>
</div>
</div>
<div class="info clearfix">
<div class="label">
<p class="title1 ttu">Complesso anticellulite 2SLIM anticellulite</p>
<p class="title2 ttu">Rimozione del grasso dalle aree problematiche!</p>
<p class="title3">Contenuto naturale!</p>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-info1.png"/>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-info2.png"/>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-info3.png"/>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-info4.png"/>
</div>
<div class="item">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block9-info5.png"/>
</div>
</div>
</div>
</div>
</div>
<div class="block block10">
<div class="limit clearfix">
<div class="side l-side">
<h3 class="ttu">Prodotti farmaceutici e aggeggi anti-cellulite</h3>
<p class="description">Nessun effetto visibile. Perché?</p>
<ul>
<li>Necessità di seguire diete rigorose</li>
<li>Difficoltà nel fare esercizi fisici</li>
<li>Controindicazioni</li>
<li>Lungo periodo di correzione delle aree problematiche</li>
</ul>
</div>
<div class="side r-side">
<h3 class="ttu ttu-rs">2SLIM anticellulite è l’innovazione anticellulite</h3>
<p class="description">Risultati veloci e duraturi con 2SLIM anticellulite! Perché?</p>
<ul>
<li>Stimolazione dei processi fisiologici del corpo</li>
<li>Attivazione della costruzione di strutture collageniche</li>
<li>Arricchimento del corpo con sostanze utili</li>
<li>Eliminazione della fame e diminuzione del rischio di iperalimentazione</li>
</ul>
</div>
</div>
</div>
<!--
    <div class="block block11">
      <div class="limit clearfix">
        <div class="content">
          <p class="title1 ttu">Complesso naturale 2SLIM anticellulite</p>
          <p class="title2 ttu">Programma anticellulite</p>
          <p class="title3">Remediu pentru slăbit fără înfometare și exerciții fizice extenuante</p>
          <p class="title4">Corpo in forma senza diete rigide né carichi fisici pesanti</p>
          <a class="btn btn-primary" data-scroll="true" data-scroll-to="#request-form" href="#">Ordinalo subito</a>
          <div class="brands">
            <img alt="" src="img/block11-brands.png" />
          </div>
        </div>
      </div>
    </div>
-->
<div class="block block12">
<div class="limit clearfix">
<img class="prod" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/prod.png" width="180"/>
<div class="title">
<div>
<div class="cell label ttu">Complesso naturale
              <span>2SLIM anticellulite</span>
</div>
<div class="cell description">Corpo in forma senza diete rigide né carichi fisici pesanti</div>
<div class="cell before step1">
<div class="before">
<span>Prima</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block12-before1.jpg"/>
</div>
<div class="after">
<span>Dopo</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block12-after1.jpg"/>
</div>
</div>
<div class="cell before step2">
<div class="before">
<span>Prima</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block12-before2.jpg"/>
</div>
<div class="after">
<span>Dopo</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block12-after2.jpg"/>
</div>
</div>
</div>
</div>
<div class="content clearfix">
<div class="side l-side">
<div class="row clearfix">
<span class="label">Nome del prodotto:</span>
<span class="value">2SLIM anticellulite</span>
</div>
<div class="row clearfix">
<span class="label">Parametri:</span>
<span class="value">Un flacone contiene 300 ml di sciroppo</span>
</div>
<div class="row clearfix">
<span class="label">Contenuto:</span>
<span class="value">complesso vitaminico naturale e composti organici</span>
</div>
<div class="row clearfix">
<span class="label">Somministrazione:</span>
<span class="value">interna. Un cucchiaino di sciroppo per 3 volte al giorno, un’ora prima dei pasti. Assumere con un po’ di acqua.</span>
</div>
</div>
<div class="side r-side">
<div class="row clearfix">
<span class="label">Azione:</span>
<span class="value">Il complesso 2SLIM anticellulite fornisce al corpo vitamine e composti organici naturali. Consumare una quantità sufficiente di vitamine mitiga la fame, normalizza l’appetito e riduce la possibilità di iperalimentazione. Gli acidi grassi, i fitoestrogeni e i flavonoidi contenuti in 2SLIM anticellulite migliorano la microcircolazione del sangue e favoriscono lo sviluppo di strutture collageniche. I processi di ristagno nei tessuti grassi si arrestano. La normalizzazione del funzionamento dei vasi sanguigni permette una rimozione facile e veloce del grasso in eccesso dalle aree problematiche.</span>
</div>
</div>
</div>
</div>
</div>
<div class="block block13">
<div class="limit clearfix">
<div class="title ttu">Esperienza d’uso del complesso 2SLIM anticellulite</div>
<div class="content">
<div class="item">
<div class="image">
<span>-15 cm</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block13-1.jpg"/>
</div>
<p class="label">La cellulite è scompasa per sempre!</p>
<p class="duration">Periodo di utilizzo: 2,5 mesi</p>
<p class="result">
<span class="before">Prima: 104 cm</span>
<span class="after">Dopo: 89 cm</span>
</p>
<p class="name">Emilia C., 41 anni</p>
<p class="story">Ho combattuto la cellulite su glutei e fianchi senza successo fin da quando avevo 20 anni. Seguivo diete folli, pativo la fame, mi torturavo con attrezzature speciali per il fitness, avevo comprato vari massaggiatori... È spaventoso pensare a quanti soldi e fatica avessi sprecato... E il mio problema non se n’era andato. Quando ho comprato il complesso 2SLIM anticellulite avevo già perso tutte le speranze. Per fortuna mi sbagliavo! Dopo solo qualche settimana di utilizzo ho notato magnifici risultati, come se la cellulite si fosse fusa!</p>
</div>
<div class="item">
<div class="image">
<span>-40 cm</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block13-2.jpg"/>
</div>
<p class="label">Miracolo con 2SLIM anticellulite!</p>
<p class="duration">Periodo di utilizzo: 7 mesi</p>
<p class="result bl-13-result">
<span class="before ">Prima: 127 cm</span>
<span class="after">Dopo: 102 cm</span>
</p>
<p class="name ">Katia M., 38 anni</p>
<p class="story">Stavo combattendo la cellulite da molto tempo. Pensavo che la perdita di peso si sarebbe tradotta nella scomparsa della “buccia d’arancia”. Avevo perso quasi 20 kg; tuttavia, la pelle porosa e brufolosa sui fianchi era diventata ancora più evidente... così ho deciso di provare 2SLIM anticellulite insieme ad un’amica. I primi cambiamenti si sono resi visibili dopo la primissima settimana di applicazione. Ho notato che la mia pelle era diventata più piana, la sentivo morbida e uniforme. Dopo un mese di utilizzo del complesso non riuscivo a riconoscermi allo specchio. Avevo dei bei contorni e la pelle era diventata elastica! Continuo a migliorare il mio corpo. È semplice e piacevole se si utilizza 2SLIM anticellulite!</p>
</div>
<div class="item">
<div class="image">
<span>-22 cm</span>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block13-3.jpg"/>
</div>
<p class="label">La mia esperienza per chi ha dubbi!</p>
<p class="duration">Periodo di utilizzo: 3 mesi</p>
<p class="result">
<span class="before">Prima: 102 cm</span>
<span class="after">Dopo: 91 cm</span>
</p>
<p class="name">Elisabetta V., 29 anni</p>
<p class="story">Non sono mai stata grassa e mi sono sempre presa cura di me stessa e del mio corpo. Andavo in palestra e, sostanzialmente, potevo vantare una bella silhouette. Eppure, nonostante la mia ridotta circonferenza, soffrivo di cellulite sui fianchi. Mia mamma aveva un problema simile, forse era ereditario. Ho provato creme, impacchi e altri metodi, ma senza alcun effetto. Il complesso 2SLIM anticellulite ha attirato la mia attenzione con un’affermazione curiosa: prometteva di “eliminare la cellulite senza diete ed esercizi”. Ho provato lo sciroppo! Ho lasciato volutamente invariata la mia dieta e non ho fatto esercizi speciali. 2SLIM anticellulite mi ha stupita con la sua efficacia. Ho potuto notare risultati concreti dopo un paio di settimane di applicazione. Consiglio a tutte di diventare più belle solo con 2SLIM anticellulite!</p>
</div>
</div>
</div>
</div>
<div class="block block14">
<div class="limit">
<div class="content1">
<p class="title1 ttu light">Ottieni un corpo perfetto!</p>
<p class="title2 ttu light">2SLIM anticellulite è un compagno affidabile nella lotta contro la cellulite!</p>
<p class="description">Un ciclo è sufficiente per avere un corpo bello e tonico!</p>
</div>
<div class="content2">
<p class="title1">Il 99% di coloro che hanno utilizzato 2SLIM anticellulite conferma l’elevata efficacia di questo complesso</p>
<p class="title2">La ricetta della star Dakota Johnson</p>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block14-zeta.png"/>
<div class="story">Oggi Dakota Johnson, attrice celebre in tutto il mondo, possiede le misure perfette. Tuttavia, questa ragazza talentosa non è sempre stata così snella e in forma. “A volte ero troppo magra e a volte un po’ paffuta... Queste trasformazioni giocavano un brutto scherzo al mio corpo. Dopo essere stata accettata per il ruolo di Anastasia Steele, ho deciso di prendermi maggiore cura del mio corpo”, afferma Dakota. All’attrice non piace parlare dei suoi allenamenti, delle diete e di altri metodi per mantenersi in buona forma fisica. I commenti posteriori dell’agente dell’attrice chiariscono il perché. Secondo lui, prima di recitare nel famoso dramma erotico, Dakota praticava yoga e usava uno stimolante speciale per combattere le imperfezioni nelle aree problematiche. Rispondendo alle domande dei giornalisti, l’agente ha precisato che questo “assistente miracoloso” è un cocktail bilanciato di vitamine e composti organici speciali.</div>
</div>
<div class="content3">
<p class="title">Ci consigliano</p>
<div class="row">
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block14-recommend1.jpg"/>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block14-recommend2.jpg"/>
<img alt="" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block14-recommend3.jpg"/>
</div>
</div>
</div>
</div>
<div class="block block15">
<div class="limit clearfix">
<div class="content">
<img alt="" class="block15__product" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/block1-content_discount.png"/>
<div class="title1 ttu">Ordina 2SLIM anticellulite in questo momento</div>
<form action="#" class="form" id="request-form" method="post">
<div class="form-group">
<select id="country_code_selector" name="country_code">
<option value="IT">Italia</option>
</select>
</div>
<div class="form-group">
<input name="first_name" placeholder="Nome" class='order_data required' type="text" value=""/>
</div>
<div class="form-group">
<input class="only_number order_data required" name="phone" placeholder="Numero di telefono" type="text" value=""/>
</div>
  <div class="old_price">Vecchio prezzo: <s><?php echo smarty_function_math(array('equation' => "x*2",'x' => $this->_tpl_vars['campaign']['price'],'format' => "%.2f"), $this);?>
 <?php echo $this->_tpl_vars['campaign']['currency']; ?>
</s></div>
<div class="new_price">Prezzo: <span><?php echo $this->_tpl_vars['campaign']['price']; ?>
 <?php echo $this->_tpl_vars['campaign']['currency']; ?>
 </span></div>
<div class="form-group">
<button class="btn btn-primary btn-block buynow" type="submit" data-pid='<?php echo $this->_tpl_vars['campaign']['product_id']; ?>
' data-campaign-uri='<?php echo $this->_tpl_vars['campaign']['uri']; ?>
'>Invia una richiesta</button>
</div>
</form>
<p class="block1__text timer-margin"><span>Ore</span><span>Minuti</span><span>Secondi</span></p>
<div class="timer timer-margin"></div>
</div>
</div>
</div>
<a class="btn btn-fixed" data-scroll="true" data-scroll-to="#request-form" href="#"><span>Ordinalo subito</span></a>
</div>

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

            //window.location.href = $(this).attr(\'href\');
        });
    });
    '; ?>

    <?php if (FALSE): ?>
    <?php echo '
    window.onbeforeunload =  function (e) {

        window.setTimeout(function () { // escape function context

                    }, 0);
                window.onbeforeunload = null;   // necessary to prevent infinite loop


        var confirmationMessage = \'************************** \\n  \\n **************************\';

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    };
    '; ?>

    <?php endif; ?>
</script>

<?php echo $this->_tpl_vars['campaign']['track_landing']; ?>

</body>

</html>