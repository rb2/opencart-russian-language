-- Thanks to tim21701, http://opencartforum.ru/topic/6219-ocstore-v1513-%d1%80%d0%b5%d0%bb%d0%b8%d0%b7/page__view__findpost__p__39002

-- Перевод в таблице "layout" (Система > Дизайн > Схемы)
UPDATE layout SET name =REPLACE(name, 'Account', 'Личный Кабинет');
UPDATE layout SET name =REPLACE(name, 'Affiliate', 'Кабинет Партнера');
UPDATE layout SET name =REPLACE(name, 'Category', 'Категории');
UPDATE layout SET name =REPLACE(name, 'Checkout', 'Оформление Заказа');
UPDATE layout SET name =REPLACE(name, 'Contact', 'Контакты');
UPDATE layout SET name =REPLACE(name, 'Default', 'По Умолчанию');
UPDATE layout SET name =REPLACE(name, 'Home', 'Главная Страница');
UPDATE layout SET name =REPLACE(name, 'Information', 'Информация');
UPDATE layout SET name =REPLACE(name, 'Product', 'Страница Товара');
UPDATE layout SET name =REPLACE(name, 'Manufacturer', 'Производители');
UPDATE layout SET name =REPLACE(name, 'Sitemap', 'Карта сайта');

-- Перевод в таблице "return_reason" (Система > Локализация > Возвраты > Причины возврата)
UPDATE return_reason SET name =REPLACE(name, 'Dead On Arrival', 'Испорчен по прибытию');
UPDATE return_reason SET name =REPLACE(name, 'Received Wrong Item', 'Отправлен не по адресу');
UPDATE return_reason SET name =REPLACE(name, 'Order Error', 'Заказ по ошибке');
UPDATE return_reason SET name =REPLACE(name, 'Faulty, please supply details', 'Неисправность. Опишите');
UPDATE return_reason SET name =REPLACE(name, 'Other, please supply details', 'Другое. Укажите причину');

-- Перевод в таблице "return_action" (Система > Локализация > Возвраты > Операции возврата)
UPDATE return_action SET name =REPLACE(name, 'Refunded', 'Возвращено');
UPDATE return_action SET name =REPLACE(name, 'Credit Issued', 'Выданы кредиты');
UPDATE return_action SET name =REPLACE(name, 'Replacement Sent', 'Отправлен другой товар');

-- Перевод в таблице "return_status" (Система > Локализация > Возвраты > Статусы возвратов)
UPDATE return_status SET name =REPLACE(name, 'Pending', 'На рассмотрении');
UPDATE return_status SET name =REPLACE(name, 'Complete', 'Завершен');
UPDATE return_status SET name =REPLACE(name, 'Awaiting Products', 'Ожидание товара');

-- Перевод в таблице "order_status" (Система > Локализация > Статусы заказов)
UPDATE order_status SET name =REPLACE(name, 'Expired', 'Срок оплаты истёк');
UPDATE order_status SET name =REPLACE(name, 'Processed', 'Заказ Обработан');
UPDATE order_status SET name =REPLACE(name, 'Voided', 'Заказ аннулирован');
