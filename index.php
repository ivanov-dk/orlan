<?php require_once $_SERVER['DOCUMENT_ROOT'].'/editor/system/library.php'; if(_LIBRARY !== 1) exit(); ?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="yandex-verification" content="16bc290b93ba86ed" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<base href="http://<?php echo strval($_SERVER['HTTP_HOST']); ?>/" />

<?php if($global_tags['data_title'] != '' && $path_array[0] == '') { ?>
    <title><?php if($global_tags['page_title'] != '') echo ''.$global_tags['page_title'].''; else echo ''.$global_tags['page_title'].''; ?></title>
	<meta name="description" content="<?php if($global_tags['data_header'] != '') echo $global_tags['data_header']; else get_description($global_tags['data_id']); ?>" />
	<meta name="keywords" content="<?php echo $global_tags['page_keywords']; ?>, автошкола, получить права, сдать на права, права на автомобиль <?php echo $global_tags['page_keywords']; ?>" />
<?php } else { ?>
	<title><?php if($current_id['page_title'] != '') echo ''.$current_id['page_title'].''; else echo ''.$current_id['data_title'].''; ?></title>
	<meta name="description" content="<?php if($current_id['data_header'] != '') echo $current_id['data_header']; else get_description($current_id['data_id']); ?>" />
	<meta name="keywords" content="<?php echo $current_id['page_keywords']; ?>" />
<?php } ?>
	
	<!-- Favicon -->
	<link rel="icon" href="/img/favicon.png" type="image/x-icon">
 	<link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
 	<!-- CSS Styles -->
 	<link href="/https://fonts.googleapis.com/css?family=M+PLUS+1p:400,700&amp;subset=cyrillic" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
 	<?php if($global_tags['data_title'] != '') { ?>
 	<link rel="stylesheet" href="/css/jquery.arcticmodal-0.3.css">
 	<link rel="stylesheet" href="/css/lightbox.css">
 	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/slick-theme.css">
	<?php } ?>
 	<link rel="stylesheet" href="/css/main.css">
 	<link rel="stylesheet" href="/css/media.css">
 	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
</head>
<body>
    
    
    
    <?php if($global_tags['data_title'] != '') { ?>
    
    
    <header class="header" id="header">
		<div class="navigation" id="navigator">
			<div class="container">
				<nav>
					<ul class="menu__list d-flex">
						<li class="menu__item">
							<a href="/" class="menu__link">Главная</a>
						</li>
						<li class="menu__item">
							<a href="/ob-avtoshkole/" class="menu__link">Об автошколе</a>
						</li>
						<li class="menu__item">
							<a href="/kategorii/" class="menu__link">Категории</a>
						</li>
						<li class="menu__item">
							<a href="/ceny/" class="menu__link">Цены</a>
						</li>
						<li class="menu__item">
							<a href="/otzyvy/" class="menu__link">Отзывы</a>
						</li>
						<li class="menu__item">
							<a href="/fotogalereya/" class="menu__link">Фотогалерея</a>
						</li>
						<li class="menu__item">
							<a href="/novosti/" class="menu__link">Новости</a>
						</li>
						<li class="menu__item">
							<a href="/kontakty/" class="menu__link">Контакты</a>
						</li>
					</ul>
					<button class="menu-btn">
						<i class="fa fa-bars"></i>
					</button>
				</nav>
			</div>
		</div>
		<div class="container d-flex ai-center">
			<a href="/" class="logo">
				<img src="/img/logo-blue.svg" alt="Автошкола Орлеан" class="logo__img">
			</a>
			<a href="https://vk.com/orlan_school" target="_blank" class="vk-link">
				<img src="/img/header-vk.svg" alt="VK">
			</a>
			<div class="city">
				<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="city__select">
				    <option value="" class="main-wrap__option">Выберите филиал</option>
					<?php
					$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                    $subresult = mysql_query($subquery);
                    if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                    } else while($data_inner = mysql_fetch_assoc($subresult)) {
                        $datar = str_replace(' ','-',$data_inner['data_title']);
                        if($global_city[0] == mb_strtolower($datar)) {
                            $selected = ' selected="selected"';
                        } else {
                            $selected = '';
                        }
                        echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                    }
					?>
				</select>
			</div>
			<a href="tel:88005554159" class="tel">8 (800) 555-41-59</a>
			<button class="btn-empty btn call-btn" style="margin-right: 10px">Обратный звонок</button>
		</div>
	</header>
	
	<?php if(count($path_array) == 0) { ?>

	
	<section class="main" id="main">
		<div class="main-wrap">
			<div class="main-wrap__item">
				<div class="main-wrap__window">
					<h3 class="main-wrap__title">
						Запишись на обучение!
					</h3>
					<form action="#" class="main-wrap__form">
						<p class="main-wrap__text">
							Заполните форму, с вами свяжется наш специалист:
						</p>
						<input type="text" name="name" placeholder="Ваше имя" class="main-wrap__input">
						<input type="tel" name="phone" placeholder="Контактный телефон" class="main-wrap__input phone">
						<select class="main-wrap__select">
							<option value="" class="main-wrap__option">Выберите филиал</option>
							<?php
    						$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                            $subresult = mysql_query($subquery);
                            if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                            } else while($data_inner = mysql_fetch_assoc($subresult)) {
                                $datar = str_replace(' ','-',$data_inner['data_title']);
                                if($global_city[0] == mb_strtolower($datar)) {
                                    $selected = ' selected="selected"';
                                } else {
                                    $selected = '';
                                }
                                echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                            }
    						?>
						</select>
						<button class="btn-filled btn" type="submit">
							<span>Отправить заявку</span>
						</button>
					</form>
				</div>
			</div>
			<div class="main-wrap__item">
				<div class="main-wrap__window">
					<h3 class="main-wrap__title">
						Запишись на обучение!
					</h3>
					<form action="#" class="main-wrap__form">
						<p class="main-wrap__text">
							Заполните форму, с вами свяжется наш специалист:
						</p>
						<input type="text" name="name" placeholder="Ваше имя" class="main-wrap__input">
						<input type="tel" name="phone" placeholder="Контактный телефон" class="main-wrap__input phone">
						<select class="main-wrap__select">
							<option value="" class="main-wrap__option">Выберите филиал</option>
							<?php
    						$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                            $subresult = mysql_query($subquery);
                            if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                            } else while($data_inner = mysql_fetch_assoc($subresult)) {
                                $datar = str_replace(' ','-',$data_inner['data_title']);
                                if($global_city[0] == mb_strtolower($datar)) {
                                    $selected = ' selected="selected"';
                                } else {
                                    $selected = '';
                                }
                                echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                            }
    						?>
						</select>
						<button class="btn-filled btn" type="submit">
							<span>Отправить заявку</span>
						</button>
					</form>
				</div>
			</div>
			<div class="main-wrap__item">
				<div class="main-wrap__window">
					<h3 class="main-wrap__title">
						Запишись на обучение!
					</h3>
					<form action="#" class="main-wrap__form">
						<p class="main-wrap__text">
							Заполните форму, с вами свяжется наш специалист:
						</p>
						<input type="text" name="name" placeholder="Ваше имя" class="main-wrap__input">
						<input type="tel" name="phone" placeholder="Контактный телефон" class="main-wrap__input phone">
						<select class="main-wrap__select">
							<option value="" class="main-wrap__option">Выберите филиал</option>
							<?php
    						$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                            $subresult = mysql_query($subquery);
                            if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                            } else while($data_inner = mysql_fetch_assoc($subresult)) {
                                $datar = str_replace(' ','-',$data_inner['data_title']);
                                if($global_city[0] == mb_strtolower($datar)) {
                                    $selected = ' selected="selected"';
                                } else {
                                    $selected = '';
                                }
                                echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                            }
    						?>
						</select>
						<button class="btn-filled btn" type="submit">
							<span>Отправить заявку</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="categories" id="categories">
		<div class="container">
			<h2 class="categories-title">
				Категории обучения
			</h2>
			<div class="cat-wrap d-flex">
			    <?php
				
				$sub44query = "SELECT * FROM data WHERE data_parent = '1545146298' AND data_visible = 1 AND (data_city = '".strval($global_tags['data_title'])."' OR data_city = '') ORDER BY data_order ASC;";
                $sub44result = mysql_query($sub44query);
                if(!mysql_num_rows($sub44result) or $sub44result == FALSE) {
                } else while($sub44data = mysql_fetch_assoc($sub44result)) {
                    
                    if(strpos($sub44data['data_url'], 'kategorii/a-a1-m-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_1">
    					<div class="cat-wrap__img cat-wrap__img_1"></div>
    					<p class="cat-wrap__text cat-wrap__text_1">А, А1, М<br /><span>мотоциклы/мопеды</span></p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/b-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_2">
    					<div class="cat-wrap__img cat-wrap__img_2"></div>
    					<p class="cat-wrap__text cat-wrap__text_2">В<br /><span>легковые авто</span></p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/c-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_3">
    					<div class="cat-wrap__img cat-wrap__img_3"></div>
    					<p class="cat-wrap__text cat-wrap__text_3">C<br /><span>грузовые авто</span></p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/d-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_4">
    					<div class="cat-wrap__img cat-wrap__img_4"></div>
    					<p class="cat-wrap__text cat-wrap__text_4">D<br /><span>автобус</span></p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/becede-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_5">
    					<div class="cat-wrap__img cat-wrap__img_5"></div>
    					<p class="cat-wrap__text cat-wrap__text_5">BE/CE/DE<br /><span>прицеп</span></p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/spectehnika-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_6">
    					<div class="cat-wrap__img cat-wrap__img_6"></div>
    					<p class="cat-wrap__text cat-wrap__text_6">Спецтехника</p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/kvadrocikl-snegohod-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_7">
    					<div class="cat-wrap__img cat-wrap__img_7"></div>
    					<p class="cat-wrap__text cat-wrap__text_7">Квадроцикл/<br />Снегоход</p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/traktor-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_8">
    					<div class="cat-wrap__img cat-wrap__img_8"></div>
    					<p class="cat-wrap__text cat-wrap__text_8">Трактор</p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/pogruzchik-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_9">
    					<div class="cat-wrap__img cat-wrap__img_9"></div>
    					<p class="cat-wrap__text cat-wrap__text_9">Погрузчик</p>
    				</div></a>
    				<?php }
    				if(strpos($sub44data['data_url'], 'kategorii/malomernye-suda-') !== false) { ?>
                    <a href="/<?php echo $sub44data['data_url']; ?>/"><div class="cat-wrap__item cat-wrap__item_10">
    					<div class="cat-wrap__img cat-wrap__img_10"></div>
    					<p class="cat-wrap__text cat-wrap__text_10">Маломерные<br />суда</p>
    				</div></a>
    				<?php }
    				
                }
				
				?>
				
			</div>
		</div>
	</section>
	<section class="bluestrip" id="bluestrip">
		<div class="container">
			<div class="bs-wrap d-flex">
				<p class="bs-text">
					+10
					<br>
					<span>
						лет опыта
					</span>
				</p>
				<p class="bs-text">
					3500
					<br>
					<span>
						выпускников в год
					</span>
				</p>
				<p class="bs-text">
					+25
					<br>
					<span>
						инструкторов
					</span>
				</p>
				<p class="bs-text">
					+40
					<br>
					<span>
						авто разных марок
					</span>
				</p>
			</div>
		</div>
	</section>
	<section class="notime" id="notime">
		<div class="container">
			<div class="no-time-scr">
				<h2 class="no-time-scr__title">
					Нет времени на <br>
					занятия?
				</h2>
				<p class="no-time-scr__text">
					Воспользуйтесь личным кабинетом — все уроки по правилам в одном месте доступны в любое время!
				</p>
				<a href="/pdd-onlayn/"><button class="btn-filled btn call-btn">
					Узнать подробнее
				</button></a>
			</div>
			<img src="img/red-comp.svg" alt="" class="red-comp">
			<img src="img/ellipse-small.svg" alt="" class="ball_small">
			<img src="img/ellipse-big.svg" alt="" class="ball_big">
		</div>
	</section>
	<section class="selinstr" id="selinstr">
		<div class="container">
			<h2 class="selintr-title">
				Выбери инструктора
			</h2>
			<div class="sel-instr-wrap d-flex">
			    
			    <?php
				
				$sub44query = "SELECT * FROM data WHERE data_parent = '1545146335' AND data_visible = 1 AND (data_city = '".strval($global_tags['data_title'])."' OR data_city = '') ORDER BY RAND();";
                $sub44result = mysql_query($sub44query);
                if(!mysql_num_rows($sub44result) or $sub44result == FALSE) {
                } else while($sub44data = mysql_fetch_assoc($sub44result)) {
                    ?>
                    
                    <div class="instr-block d-flex">
                    	<div class="instr-block__photo" style="background: url(img/man-1.png) 100% 100% / cover;"></div>
    					<div class="instr-block__text">
    						<p class="instr-block__name"><?php echo $sub44data['data_title']; ?></p>
    						<p class="instr-block__rating instr-block__rating_2">Рейтинг: <?php echo $sub44data['data_address']; ?></p>
    						<p class="instr-block__cat"><?php echo $sub44data['data_header']; ?></p>
    						<div class="btn-filled btn call-btn">Записаться</div>
    					</div>
    				</div>
                	
                	<?php
                }
				
				?>
			    
				
				
			</div>
		</div>
	</section>
	<section class="progtraining" id="progtraining">
		<div class="container">
			<h2 class="prog-training-title">
				Программы обучения категории «B»
			</h2>
			<div class="program-wrap d-flex">
				<?php
				
				$sub44query = "SELECT * FROM data WHERE data_parent = '1545151511' AND data_visible = 1 AND (data_city = '".strval($global_tags['data_title'])."' OR data_city = '') ORDER BY data_order ASC;";
                $sub44result = mysql_query($sub44query);
                if(!mysql_num_rows($sub44result) or $sub44result == FALSE) {
                } else while($sub44data = mysql_fetch_assoc($sub44result)) {
                    ?>

            	<div class="program program_online">
					<div class="program__top">
						<p class="program__caption">
							<?php echo $sub44data['data_title']; ?>
						</p>
					</div>
					<p class="program__price">
						<?php echo $sub44data['data_price']; ?> руб.
					</p>
					<p class="program__cond">
						<?php echo $sub44data['data_header']; ?>
						<span>
							<?php echo $sub44data['page_keywords']; ?>
						</span>
					</p>
					<?php echo $sub44data['data_text']; ?>
					<button class="btn-empty btn call-btn">
						Узнать подробнее
					</button>
				</div>
    				
                	
                	<?php
                }
				
				?>
				
				
				
				
				
				
				
				
			</div>
			<a href="/ceny/"><button class="price-btn btn-empty btn">Узнать все цены</button></a>
		</div>
	</section>
	<section class="photogalery" id="photogalery">
		<div class="container">
			<h2 class="galery-title">
				Галерея
			</h2>
			<div class="galery d-flex">
			    <?php
			    
			    $subquery = "SELECT * FROM data WHERE data_visible = '1' AND data_structure = 0 AND data_parent = '1545146249' ORDER BY RAND() ASC;";
                $subresult = mysql_query($subquery);
                if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                } else {
                	
                	
                	while($subdata = mysql_fetch_assoc($subresult)) {
                		
                		echo '<a href="/files/1545146249/images/normal/'.$subdata['data_id'].'.jpg" data-lightbox="images" class="galery__item">
        				  <img src="/files/1545146249/images/normal/'.$subdata['data_id'].'.jpg" style="height: 226px">
        				</a>';
                		
                	
                	}
                	
                }
			    
			    ?>
				<a href="img/galery-1.jpg" data-lightbox="images" class="galery__item">
				  <img src="img/galery-1.jpg" style="height: 226px">
				</a>
				<a href="img/galery-2.jpg" data-lightbox="images" class="galery__item">
				  <img src="img/galery-2.jpg" style="height: 226px">
				</a>
				<a href="img/galery-3.jpg" data-lightbox="images" class="galery__item">
				  <img src="img/galery-3.jpg" style="height: 226px">
				</a>
				<a href="img/galery-4.jpg" data-lightbox="images" class="galery__item">
				  <img src="img/galery-4.jpg" style="height: 226px">
				</a>
			</div>
			<a href="/fotogalereya/" class="galery-link">Посмотреть все фото</a>
		</div>
	</section>
	
	<?php } else { ?>
	
	
	<?php if($path_array[0] != 'ceny') { ?>
	<div class="container">
    <div style="margin: 24px 0px 12px 0px; font-size: 14px;"><b><a style="text-decoration: none;" href="http://<?php echo $parameters['parameter_url']; ?>/">Главная</a></b><?php echo $infobar; ?></div>
    </div>
    <?php } ?>
    
    <?php get_content($global_url, $link); ?>
	
	
	<?php } ?>
	
	<section class="testdrive" id="testdrive">
		<div class="container">
			<div class="test">
				<form action="#" class="test__form">
					<p class="test__text">
						Есть сомнения? Пройди <br> БЕСПЛАТНЫЙ ТЕСТ-ДРАЙВ автошколы.
					</p>
					<input type="text" name="name" placeholder="Ваше имя" class="test__input">
					<input type="tel" name="phone" placeholder="Контактный телефон" class="test__input phone">
					<button class="test__btn btn-filled btn" type="submit">
						Узнать подробнее
					</button>
					<p class="test__desc">
						Доступ в личный кабинет, Безлимитные занятия по ПДД, одно занятие на тренажере или с инструктором.
					</p>
				</form>
			</div>
		</div>
	</section>
	
	<?php if(count($path_array) == 0) { ?>
	
	<section class="words" id="words">
		<div class="container">
			<h2 class="words-title">
				Пару слов о нас
			</h2>
			<div class="words-wrap">
				<p class="words-text"><i><?php echo $global_tags['data_text_1']; ?></i></p>
				<div class="words-text">
					<?php echo $global_tags['data_text']; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="advantages" id="advantages">
		<div class="container">
			<h2 class="advantages-title">
				Наши преимущества
			</h2>
			<div class="advant-wrap_1 d-flex">
				<div class="advant d-flex">
					<img src="img/adv-1.svg" alt="" class="advant__img">
					<p class="advant__text">
						У нас всегда чистые и полностью оборудованные машины
					</p>
				</div>
				<div class="advant d-flex">
					<img src="img/adv-2.svg" alt="" class="advant__img">
					<p class="advant__text">
						Вы сами выбираете график обучения: теория утром и вечером
					</p>
				</div>
				<div class="advant d-flex">
					<img src="img/adv-3.svg" alt="" class="advant__img">
					<p class="advant__text">
						Обучайтесь возле дома <br>или работы — у нас много филиалов
					</p>
				</div>
			</div>
			<div class="advant-wrap_2 d-flex">
				<div class="advant d-flex"> 
					<img src="img/adv-4.svg" alt="" class="advant__img">
					<p class="advant__text">
						Оплачивайте курсы поэтапно — вносите сумму по частям
					</p>
				</div>
				<div class="advant d-flex">
					<img src="img/adv-5.svg" alt="" class="advant__img">
					<p class="advant__text">
						Мы проводим экзамен также, как он проходит <br>в ГИБДД
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="ourautopark" id="ourautopark">
		<div class="ourpark-blue">
			<div class="container d-flex">
				<p class="autopark-title">
					В ВАШЕМ <br>РАСПОРЯЖЕНИИ <br>СОВРЕМЕННЫЙ АВТОПАРК
				</p>
				<div class="autopark-wrap">
					<p class="autopark__text">
						50 новых легковых авто известных марок, таких как <br>NISSAN, FORD, TOYOTA, HYUNDAI и др.
					</p>
					<p class="autopark__text">
						Широкий выбор мототранспорта, в том числе, SUZUKI <br>MOLET, YAMAHA YBR 125 и HONDA CB 400
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<h2 class="our-park-title">
				Наш автопарк
			</h2>
			<div class="ourpark-wrap d-flex">
				<?php
				
				$sub44query = "SELECT * FROM data WHERE data_parent = '1545155888' AND data_visible = 1 AND (data_city = '".strval($global_tags['data_title'])."' OR data_city = '') ORDER BY RAND() LIMIT 10;";
                $sub44result = mysql_query($sub44query);
                if(!mysql_num_rows($sub44result) or $sub44result == FALSE) {
                } else while($sub44data = mysql_fetch_assoc($sub44result)) {
                    ?>
                    
                    <div class="ourpark">
					<div class="ourpark-wrapper">
						<img src="/images/id/normal/<?php echo $sub44data['data_id']; ?>.jpg" alt="<?php echo $sub44data['data_title']; ?>" class="ourpark__img" style="width: 100%">
						<div class="ourpark__overlay">
							<div class="btn-filled btn call-btn">
								Выбрать авто
							</div>
						</div>
					</div>
					<p class="ourpark__name"><?php echo $sub44data['data_title']; ?></p>
					<p class="ourpark__cat">
						<?php echo $sub44data['data_header']; ?>
					</p>
				</div>
				
                	
                	<?php
                }
				
				?>
				
			</div>
		</div>
	</section>
	<section class="vkontacte" id="vkontacte">
		<div class="container">
			<p class="vk__title">
				Наша группа «ВКонтакте»
			</p>
			<div class="vk">
				<p class="vk__text">
					1. Вы имеете возможность получить ответ и консультацию по любому вопросу;
				</p>
				<p class="vk__text">
					2. Записаться на обучение онлайн, на любую категорию: легковой автомобиль (механика и автомат), грузовой автомобиль, автобус, мотоцикл, квадроцикл;
				</p>
				<p class="vk__text">
					3. Присоединиться к сообществу автошколы «Орлан». Мы общаемся, встречаемся, помогаем Вам во всех вопросах, связанных с приобретением и обслуживанием автомобиля.
				</p>
				<p class="vk__text">
					Так же в группе Вы всегда найдете много интересной информации раздела авто-мото, путевые заметки наших инструкторов и учеников. Мы с радостью опубликуем отчеты о Ваших автопутешествиях!
				</p>
				<a href=".joinus" class="more-btn btn-filled btn">
					Перейти в группу
				</a>
			</div>
		</div>
	</section>
	<section class="joinus" id="joinus">
		<div class="container">
			<h2 class="joinus-title">
				Присоединяйтесь к нашим подписчикам!
			</h2>
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 3, no_cover: 1, width: "auto"}, 21857175);
			</script>
		</div>
	</section>
	<section class="reviews" id="reviews">
		<div class="container">
			<h2 class="reviews-title">
				Отзывы о нашей автошколе
			</h2>
			<div class="pupils d-flex">
				<?php
				
				$sub44query = "SELECT * FROM data WHERE data_parent = '1545146233' AND data_visible = 1 AND (data_city = '".strval($global_tags['data_title'])."' OR data_city = '') ORDER BY RAND() LIMIT 10;";
                $sub44result = mysql_query($sub44query);
                if(!mysql_num_rows($sub44result) or $sub44result == FALSE) {
                } else while($sub44data = mysql_fetch_assoc($sub44result)) {
                    ?>
                    
                    <div class="pupils__wrap d-flex">
                    	<div class="pupils__img" style="background: url(../img/bg-home.jpg) no-repeat top left / cover"></div>
    					<div class="pupils__review">
    						<p class="pupils__text"><?php echo $sub44data['data_text']; ?></p>
    						<p class="pupils__name"><?php echo $sub44data['data_title']; ?></p>
    					</div>
    				</div>
                	
                	<?php
                }
				
				?>
				
				
			</div>
		</div>
	</section>
	<section class="tickets" id="tickets">
		<div class="container">
			<p class="pdd__title">
				Билеты ПДД онлайн!
			</p>
			<p class="pdd__text">
				Билеты ПДД категорий «А» «В» «M» и подкатегорий «A1» «B1» <br> для подготовки к экзамену в ГИБДД. Содержание билетов по Правилам дорожного движения полностью соответствует официальным билетам ГИБДД в редакции от 10 апреля 2018 г.
			</p>
			<a href="http://<?php echo $global_city[0]; ?>.автошкола-орлан.рф/pdd-onlayn/" class="pdd__link">http://<?php echo $global_city[0]; ?>.автошкола-орлан.рф/pdd-onlayn/</a>
			<a href="/pdd-onlayn/"><button class="btn-filled btn">Проверить себя</button></a>
			<img src="img/pdd-comp.svg" alt="" class="pdd-comp">
			<img src="img/pdd-ellipse.svg" alt="" class="pdd-ellipse">
		</div>
	</section>
	<section class="map" id="map">
		<div class="school">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af9bf11a16eccce9201edaad0ceda43f51faa398cf1473e0de211b77f68b4d9db&amp;width=100%25&amp;height=571&amp;lang=ru_RU&amp;scroll=false"></script>
		</div>
		<div class="container">
			<div class="connect">
				<h3 class="connect__title">
					Запишись на обучение!
				</h3>
				<form action="#" class="main-wrap__form">
					<p class="main-wrap__text">
						Заполните форму, с вами свяжется наш специалист:
					</p>
					<input type="text" name="name" placeholder="Ваше имя" class="main-wrap__input">
					<input type="tel" name="phone" placeholder="Контактный телефон" class="main-wrap__input phone">
					<select class="main-wrap__select">
						<option value="" class="main-wrap__option">Выберите филиал</option>
						<?php
    						$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                            $subresult = mysql_query($subquery);
                            if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                            } else while($data_inner = mysql_fetch_assoc($subresult)) {
                                $datar = str_replace(' ','-',$data_inner['data_title']);
                                if($global_city[0] == mb_strtolower($datar)) {
                                    $selected = ' selected="selected"';
                                } else {
                                    $selected = '';
                                }
                                echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                            }
    						?>
					</select>
					<button class="btn-filled btn" type="submit">
						<span>Обратный звонок</span>
					</button>
					<p class="connect__desc">
						Все наши филиалы отмечены на карте. <br>
						Единый номер для связи: <a href="tel:88005554159">8 (800) 555-41-59</a>
					</p>
				</form>
			</div>
		</div>
	</section>
	
	<?php } ?>
	
	<footer class="footer" id="footer">
		<div class="container">
			<nav class="menu">
				<ul class="menu__list d-flex">
					<li class="menu__item">
						<a href="/" class="menu__link">Главная</a>
					</li>
					<li class="menu__item">
						<a href="/ob-avtoshkole/" class="menu__link">Об автошколе</a>
					</li>
					<li class="menu__item">
						<a href="/kategorii/" class="menu__link">Категории</a>
					</li>
					<li class="menu__item">
						<a href="/ceny/" class="menu__link">Цены</a>
					</li>
					<li class="menu__item">
						<a href="/otzyvy/" class="menu__link">Отзывы</a>
					</li>
					<li class="menu__item">
						<a href="/fotogalereya/" class="menu__link">Фотогалерея</a>
					</li>
					<li class="menu__item">
						<a href="/novosti/" class="menu__link">Новости</a>
					</li>
					<li class="menu__item">
						<a href="/kontakty/" class="menu__link">Контакты</a>
					</li>
				</ul>
			</nav>
			<div class="footer-wrap d-flex">
				<a href="https://vk.com/orlan_school" target="_blank" class="vk-link">
					<img src="img/vk-footer.svg" alt="VK">
				</a>
				<div class="city">
					<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="city__select">
					    <option value="" class="main-wrap__option">Выберите филиал</option>
						<?php
						$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                        $subresult = mysql_query($subquery);
                        if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                        } else while($data_inner = mysql_fetch_assoc($subresult)) {
                            $datar = str_replace(' ','-',$data_inner['data_title']);
                            if($global_city[0] == mb_strtolower($datar)) {
                                $selected = ' selected="selected"';
                            } else {
                                $selected = '';
                            }
                            echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                        }
						?>
					</select>
				</div>
				<a href="tel:88005554159" class="tel">
					8 (800) 555-41-59
				</a>
				<button class="call-btn btn-empty btn">
					Обратный звонок
				</button>
				<a href="https://<?php echo $global_city[0]; ?>.мультзавод.рф/" target="_blank" class="mult-logo">
					<img src="/img/multzavod.gif" alt="Создание и продвижение сайтов в Королеве" title="Разработка и продвижение сайтов в Королеве" class="mult-logo__img">
				</a>
			</div>
		</div>
	</footer>
	<div style="display: none;">
		<div class="box-modal" id="callModal">
			<div class="box-modal_close arcticmodal-close modal__close"></div>
			<h3 class="modal__title">
				Запишись на обучение!
			</h3>
			<form action="#" class="main-wrap__form">
				<p class="main-wrap__text">
					Заполните форму, с вами свяжется наш специалист:
				</p>
				<input type="text" name="name" placeholder="Ваше имя" class="main-wrap__input">
				<input type="tel" name="phone" placeholder="Контактный телефон" class="main-wrap__input phone">
				<select class="main-wrap__select">
					<option value="" class="main-wrap__option">Выберите филиал</option>
					<?php
					$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                    $subresult = mysql_query($subquery);
                    if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                    } else while($data_inner = mysql_fetch_assoc($subresult)) {
                        $datar = str_replace(' ','-',$data_inner['data_title']);
                        if($global_city[0] == mb_strtolower($datar)) {
                            $selected = ' selected="selected"';
                        } else {
                            $selected = '';
                        }
                        echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
                    }
					?>
				</select>
				<button class="btn-filled btn" type="submit">
					<span>Обратный звонок</span>
				</button>
			</form>
		</div>
	</div>
    
    
    <?php } else { ?>
	<section class="homescr" id="homescr">
		<div class="container">
			<div class="home-top d-flex">
				<a href="/" class="home-top__logo">
					<img src="/img/logo-trans.svg" alt="Автошкола ОРЛАН" class="home-top__logo">
				</a>
				<a href="tel:88005554159" class="tel">
					8 (800) 555-41-59
				</a>
			</div>
			<div class="home-bot">
				<div class="home-bot__city d-flex">
					<p class="home-bot__span">
						Выберите город:
					</p>

					<div class="city">
						<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="city__select">
						    <option value="" class="main-wrap__option">Выбрать</option>
							<?php
							$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
			                $subresult = mysql_query($subquery);
			                if(!mysql_num_rows($subresult) or $subresult == FALSE) {
			                } else while($data_inner = mysql_fetch_assoc($subresult)) {
			                    $datar = str_replace(' ','-',$data_inner['data_title']);
			                    if($global_city[0] == mb_strtolower($datar)) {
			                        $selected = ' selected="selected"';
			                    } else {
			                        $selected = '';
			                    }
			                    echo '<option'.$selected.' value="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="city__item">'.$data_inner['data_title'].'</option>';
			                }
							?>
						</select>
					</div>

					<!-- <div class="dropdown-menu" id="dropdown-menu">
						<span class="drop-title">
							Выбрать
						</span>
						<ul><?php
						$subquery = "SELECT * FROM data WHERE data_parent = '1545134686';";
                        $subresult = mysql_query($subquery);
                        if(!mysql_num_rows($subresult) or $subresult == FALSE) {
                        } else while($data_inner = mysql_fetch_assoc($subresult)) {
                            $datar = str_replace(' ','-',$data_inner['data_title']);
                            echo '<li><a href="http://'.mb_strtolower($datar).'.автошкола-орлан.рф/" class="drop-link">'.$data_inner['data_title'].'</a></li>';
                        }
						?></ul>
						<div class="arrow-down arrow-down_1"></div>
					</div> -->
				</div>
				<form action="#" class="home-bot__rec d-flex">
					<p class="home-bot__text">
						Запишись на обучение
					</p>
					<input type="text" name="name" placeholder="Ваше имя" class="home-bot__input">
					<input type="tel" name="phone" placeholder="Контактный телефон" class="home-bot__input phone">
					<button class="btn-filled btn" type="submit">
						<span>Записаться</span>
					</button>
				</form>
			</div>
		</div>
	</section>
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/jquery.maskedinput.min.js"></script>
	<script src="/js/main.js"></script>
	<?php } ?>
	
	<?php if($global_tags['data_title'] != '') { ?>
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/lightbox.min.js"></script>
	<script src="/js/jquery.sticky.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/jquery.maskedinput.min.js"></script>
	<script src="/js/jquery.arcticmodal-0.3.min.js"></script>
	<script src="/js/main.js"></script>
	<?php } ?>
	
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(51618398, "init", { id:51618398, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/51618398" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>