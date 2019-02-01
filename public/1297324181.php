<?php if($path_array[0] == 'ceny') { ?>

<section class="progtraining" id="progtraining">
		<div class="container">
			<h2 class="prog-training-title">
				<?php echo $current_id['data_title']; ?>
			</h2>
			<div class="program-wrapper d-flex">
				<?php
				
				$sub55query = "SELECT * FROM data WHERE data_parent = '1545146298' AND data_visible = 1;";
                $sub55result = mysql_query($sub55query);
                if(!mysql_num_rows($sub55result) or $sub55result == FALSE) {
                } else while($sub55data = mysql_fetch_assoc($sub55result)) {
                    $sup[] = $sub55data['data_id'];
                }
				
				$rt = implode(',',$sup);
				
				
				$sub44query = "SELECT * FROM data WHERE data_parent IN (".$rt.") AND data_visible = 1 AND (data_city = '".strval($global_tags['data_title'])."' OR data_city = '') ORDER BY data_order ASC;";
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
		</div>
	</section>
    
    
    
    
    
<section class="words" id="words">
		<div class="container">
			<div class="words-wrap">
				<div class="words-text"><?php echo $current_id['data_text_1']; ?></div>
			</div>
		</div>
	</section>



 
<section class="ourautopark" id="ourautopark">
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
				<a href="/pdd-onlayn/"><button class="btn-filled btn">
					Узнать подробнее
				</button></a>
			</div>
			<img src="img/red-comp.svg" alt="" class="red-comp">
			<img src="img/ellipse-small.svg" alt="" class="ball_small">
			<img src="img/ellipse-big.svg" alt="" class="ball_big">
		</div>
	</section>
	
	
	<section class="words" id="words">
		<div class="container">
			<h1 class="sub-title"><?php echo $current_id['page_title']; ?></h1>
			<div class="words-wrap">
				<div class="words-text"><?php echo $current_id['data_text']; ?></div>
			</div>
		</div>
	</section>

<?php } else { ?>



<div class="container">
<div style="padding: 44px 0px 64px 0px;">

<h1 class="sub-title"><?php echo $current_id['data_title']; ?></h1>

<div style="margin: 0px 0px 36px 0px;"><?php echo $current_id['data_text_1']; ?></div>
<?php if(file_exists($_SERVER['DOCUMENT_ROOT'].'/images/id/normal/'.$current_id['data_id'].'.jpg')) { ?>
<div style="width: 1160px; height: 500px; background: url(/images/id/normal/<?php echo $current_id['data_id']; ?>.jpg) center no-repeat; background-size: cover; margin: 0px 0px 36px 0px;"></div>
<?php } ?>

<div class="words-wrap">
	<div class="words-text"><?php echo $current_id['data_text']; ?></div>
</div>

</div>
</div>


<?php } ?>







