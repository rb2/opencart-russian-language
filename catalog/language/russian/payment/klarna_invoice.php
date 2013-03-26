<?php
// Text
$_['text_title']          = 'Klarna Invoice';
$_['text_fee']            = 'Klarna Invoice - оплата в течение 14 дней <span id="klarna_invoice_toc_link"></span> (+%s)<script text="javascript\">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\', charge: %s});})</script>';
$_['text_no_fee']         = 'Klarna Invoice - оплата в течение 14 дней <span id="klarna_invoice_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Invoice({ el: \'klarna_invoice_toc_link\', eid: \'%s\', country: \'%s\'});})</script>';
$_['text_additional']     = 'Для Klarna Invoice требуется дополнительная информация, чтобы обработать Ваш заказ.';
$_['text_wait']           = 'Подождите, пожалуйста!';
$_['text_male']           = 'Мужчина';
$_['text_female']         = 'Женщина';
$_['text_year']           = 'Год';
$_['text_month']          = 'Месяц';
$_['text_day']            = 'День';
$_['text_comment']        = "Klarna Invoice ID: %s\n%s/%s: %.4f";

// Entry
$_['entry_gender']         = 'Пол:';
$_['entry_pno']            = 'Персональный номер:<br /><span class="help">Пожалйста, введите Ваш Social Security Number</span>';
$_['entry_dob']            = 'Дата рождения:';
$_['entry_phone_no']       = 'Телефон:<br /><span class="help">Укажите ваш номер телефона.</span>';
$_['entry_street']         = 'Улица:<br /><span class="help">Помните, что доставка осуществляется только на зарегистрированный адрес при оплате посредством Klarna.</span>';
$_['entry_house_no']       = 'Номер дома.:<br /><span class="help">Пожалуйста, укажите номер дома.</span>';
$_['entry_house_ext']      = 'Дополнительная информация к номеру дома:<br /><span class="help">Укажите дополнительную информацию, например номер блока, подъезда, цвет или приметы дома в частном секторе.</span>';
$_['entry_company']        = 'Регистрационный номер компании:<br /><span class="help"></span>';

// Error
$_['error_deu_terms']     = 'Требуется согласие с Klarna privacy policy (Datenschutz)';
$_['error_address_match'] = 'Адреса доставки и платежа должны совпадать, если вы хотите использовать Klarna Invoice';
$_['error_network']       = 'Произошла ошибка во время соединения с сервером  Klarna. Повторите попытку позже.';
?>