<?php
/*
По умолчанию
© Конструктор CMS
http://constructor.ru/
1297063254
*/

echo '<div class="fdd">';
echo '<div class="round ';
if($data['data_visible'] == '0') echo ' hide';
else echo ' visible';
echo '">';
echo '<h1>'.$data['data_title'].'</h1>';
if($data['data_description'] != NULL or $data['data_description'] != '') echo '<h2>'.$data['data_description'].'</h2>';
else echo '<h2>Дата публикации: '.ru_date($data['data_id']).'</h2>';
echo '<div class="round" style="border-top: none; padding: 6px 8px 7px 8px; margin: 0px 0px 16px 0px; font-size: 12px; text-align: center; background: #004F9D; color: #FFFFFF; border: 0px;">Внимание! У этой страницы отсутствует обработчик.</div>';
if($data['data_visible'] == '0') echo '<div class="round" style="border-top: none; padding: 6px 8px 7px 8px; margin: 0px 0px 16px 0px; font-size: 12px; text-align: center; background: #CC3300; color: #FFFFFF; border: 0px;">Внимание! Данная информация недоступна посетителям сайта.</div>';
echo ''.$data['data_text'].'';
echo '</div></div>';

?>