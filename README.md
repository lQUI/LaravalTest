***

Installation and Use
==
Before installing,you must be sure that  [php7](http://php.net/downloads.php) ,[composer](https://getcomposer.org/download/) and [laravel](https://laravel.com/docs/5.4#installation) are installed.

Also,you can use [this](https://github.com/genxium/Ubuntu14InitScripts/tree/master/backend/php7) to install those;

Then,you can clone my respository with Terminal or CMD
<code>$ git clone https://github.com/lQUI/LaravalTest</code><br/>
<code>$ cd LaravalTest </code><br/>
<code>$ composer install</code><br/>
<code>$ php artisan serve</code><br/>
and it is working if you can see 'Laravel development server started:<http://127.0.0.1:8000>'
***

Finished
==

1.输入 [http://localhost:8000](http://localhost:8000) ,浏览器显示 'Hello World!'.

2.输入 [http://localhost:8000/user?age=20](http://localhost:8000/user?age=20) ,会跳转到  [http://localhost:8000/] .如果age大于200,浏览器会显示 'pass!!!',例如：[http://localhost:8000/user?age=201](http://localhost:8000/user?age=201).

3.访问 [http://localhost:8000/user/Tom](http://localhost:8000/user/Tom)  ,此时浏览器显示Tom，如果Tom换成了包含除了英文字母之外的符号,将抛出NotFoundHttpException。

4.

