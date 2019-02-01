<div class="container">
<div style="padding: 44px 0px 64px 0px;">


<h1 style="color: #2E2E50; font-size: 40px; font-weight: 700; margin: 0px 0px 36px 0px;"><?php echo $data['data_title']; ?></h1>

<div style="height: 3px; background: #f6a7b9; width: 100px; margin: 0px auto 56px;"></div>

<div style="text-align: center; width: 972px; position: relative; left: -11px;">
<?php
$col = 0;
$subquery = "SELECT * FROM data WHERE data_visible = '1' AND data_structure = 1 AND data_parent = '".mysql_real_escape_string(intval($current_id['data_id']))."' ORDER BY data_order ASC;";
$subresult = mysql_query($subquery);
if(!mysql_num_rows($subresult) or $subresult == FALSE) {
} else {
		
	while($subdata = mysql_fetch_assoc($subresult)) {
		
		echo '<a href="/'.$subdata['data_url'].'/"><div class="service wow fadeInUp">
					<img width="294" src="/images/id/588x654/'.$subdata['data_id'].'.jpg">
					<a href="" style="line-height: 60px;"><i>'.$subdata['data_title'].'</i></a>
				</div></a>';
	
	}
	
}

?>
</div>




<div class="galery-wrap" style="text-align: center; position: relative">
<?php




$col = 0;
$subquery = "SELECT * FROM data WHERE data_visible = '1' AND data_structure = 0 AND data_parent = '".mysql_real_escape_string(intval($current_id['data_id']))."' ORDER BY data_order ASC;";
$subresult = mysql_query($subquery);
if(!mysql_num_rows($subresult) or $subresult == FALSE) {
} else {
	
	
	while($subdata = mysql_fetch_assoc($subresult)) {
		
		echo '<a href="/files/'.$current_id['data_id'].'/images/normal/'.$subdata['data_id'].'.jpg" rel="group" data-lightbox="images" class="galery-item fancybox"><div class="service wow fadeInUp" style="height: 240px;">
					<img width="294" src="/files/'.$current_id['data_id'].'/images/588x654/'.$subdata['data_id'].'.jpg">
				</div></a>';
		
	
	}
	
}

?>
</div>


<div class="null"></div>

<div style="padding: 64px 0px 0px 0px;" class="fdd">
<?php echo $data['data_text']; ?>
</div>


<div class="null"></div>
</div>
</div>