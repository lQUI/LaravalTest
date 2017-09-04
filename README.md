***

Installation and Use
==
Before installing,you must be sure that  [php7](http://php.net/downloads.php) ,[composer](https://getcomposer.org/download/) and [laravel](https://laravel.com/docs/5.4#installation) are installed.

Also,you can use [this](https://github.com/genxium/Ubuntu14InitScripts/tree/master/backend/php7) to install those;

Then,you can clone my respository with Terminal or CMD<br/>
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

4.访问 [http://localhost:8000/form](http://localhost:8000/form),会显示一个表单，该表单的验证规则为：username为必填且必须少于12个字符，age为必填且必须不小于16且不大于100，email可以不填但必须为email格式.通过验证显示“success”

****
完成[文档](https://shimo.im/doc/jMyLTKOtyRobZFcB?r=XY7NO9/#magicdomid96)中的任务

定义Routes文件在[routes/web.php](https://github.com/lQUI/LaravalTest/tree/master/routes/web.php)
 
3.1 Basic Parameterized Http Route
操作步骤：浏览器输入[http://localhost:8000/v3/test-api](http://localhost:8000/v3/test-api),如果没显示任何错误信息，则说明已成功访问到。<br/>


3.2 Basic Query in Request
操作步骤：浏览器输入[http://localhost:8000/v3/plus?a=3&b=4](http://localhost:8000/v3/plus?a=3&b=4)，如果访问成功，浏览器会接受到json字符串：'{ret: 1000, version: 3, action: plus, result: 7}'。<br/>
涉及到的文件：[app/Http/Controllers/Arithnetic.php](https://github.com/lQUI/LaravalTest/tree/master/app/Http/Controllers/Arithnetic.php)

3.3 URLEncoded Form in Request
操作步骤：浏览器输入[http://localhost:8000/v3](http://localhost:8000/v3)，然后显示一个表单，填写表单后，点击’submit'按钮提交表单，如果提交成功，浏览器会接受到json字符串：'{ret: 1000, version: 3, action: plus, result: 7}'。<br/>
涉及到的文件：[app/Http/Controllers/Arithnetic.php](https://github.com/lQUI/LaravalTest/tree/master/app/Http/Controllers/Arithnetic.php)

3.4  Html Template Engine Practice
操作步骤：浏览器输入[http://localhost:8000/v3/tutorial/student/list](/v3/tutorial/student/list)，然后显示一个student的表格。<br/>
涉及到的文件：[app/Student.php](https://github.com/lQUI/LaravalTest/tree/master/app/Student.php)、[resources/views/student.blade.php](https://github.com/lQUI/LaravalTest/tree/master/resources/view/student.blade.php)



