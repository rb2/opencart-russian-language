<?php
// Text
$_['text_title']           = 'Klarna Invoice - оплата в течение 14 дней';
$_['text_terms_fee']       = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']    = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']      = 'Для Klarna Invoice требуется дополнительная информация, чтобы обработать Ваш заказ.';
$_['text_male']            = 'Мужчина';
$_['text_female']          = 'Женщина';
$_['text_year']            = 'Год';
$_['text_month']           = 'Месяц';
$_['text_day']             = 'День';
$_['text_comment']         = 'Klarna Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']         = 'Пол:';
$_['entry_pno']            = 'Персональный номер';
$_['entry_dob']            = 'Дата рождения:';
$_['entry_phone_no']       = 'Телефон';
$_['entry_street']         = 'Улица';
$_['entry_house_no']       = 'Номер дома.';
$_['entry_house_ext']      = 'Дополнительная информация к номеру дома';
$_['entry_company']        = 'Регистрационный номер компании';

// Help
$_['help_pno']             = 'Пожалуйста, введите Ваш Social Security Number';
$_['help_phone_no']        = 'Укажите ваш номер телефона.';
$_['help_street']          = 'Помните, что доставка осуществляется только на зарегистрированный адрес при оплате посредством Klarna.';
$_['help_house_no']        = 'Пожалуйста, укажите номер дома.';
$_['help_house_ext']       = 'Укажите дополнительную информацию, например номер блока, подъезда, цвет или приметы дома в частном секторе.';
$_['help_company']         = 'Введите регистрационный номер Вашей компании';

// Error
$_['error_deu_terms']     = 'Требуется согласие с Klarna privacy policy (Datenschutz)';
$_['error_address_match'] = 'Адреса доставки и платежа должны совпадать, если вы хотите использовать Klarna Invoice';
$_['error_network']       = 'Произошла ошибка во время соединения с сервером  Klarna. Повторите попытку позже.';
