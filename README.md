* [Русский перевод Opencart v1.5.x. Информация о других переводах (русский, украинский язык)](http://rb.labtodo.com/page/opencart-1505-russian-language-pack)
* [Русский язык в расширениях на Opencart.com](http://www.opencart.com/index.php?route=extension/extension/info&extension_id=2778)

* https://github.com/rb2/opencart-russian-language
* История изменений (v1.5.3): https://github.com/rb2/opencart-russian-language/commits/v153

----

Установка

1.  Скопируйте содержимое архива (папки `admin` и `catalog`) в каталог интернет-магазина.
2.  Зайдите в админку и **добавьте** ещё один язык, русский: **System / Localisation / Languages / Insert**.
    Все поля появившейся формы должны быть пустые. Заполните их, как показано ниже:

        Language Name: Русский
        Code: ru
        Locale: ru,ru_RU,ru_RU.UTF-8
        Image: ru.png
        Directory: russian
        Filename: russian
        Status: Enabled
        Sort Order: 1

    и нажмите кнопку Save

3. Проверьте работоспособность добавленного языка: перейдите в магазин и переключитесь
   там на русский язык (обычно переключатель языков находится на сайте вверху). Если всё
   отображается без сообщений об ошибках и по-русски, можете переходить к следующему пункту.
   Если возникают какие-либо ошибки - не переключайте язык админки на русский ни в коем случае,
   пока не разберётесь с причиной и не исправите ошибки.
4. перейдите на вкладку **System / Settings / Edit / Local** и выберите в выпадающих списках
   `Language` и `Administration Language` параметр "Русский" (чтобы созданный язык
   использовался в интерфейсе магазина и в админ-части)
