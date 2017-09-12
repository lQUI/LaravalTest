***

Installation and Use
==
在运行项目之前先确保本机已有[php7](http://php.net/downloads.php) ,[composer](https://getcomposer.org/download/), [laravel](https://laravel.com/docs/5.4#installation) 和Mysql.

可以通过[这里](https://github.com/genxium/Ubuntu14InitScripts)获取你要的安装脚本;<br/>

然后通过cmd输入<br/>
<code>$ git clone https://github.com/lQUI/LaravalTest</code><br/>
<code>$ cd LaravalTest </code><br/>
<code>$ composer install</code><br/>
<code>$ ./initMysql            ##初始化数据库当然也可以采用[migrate](https://github.com/lQUI/LaravalTest/tree/migrate)生成schema</code><br/>

然后,需要修改[.env](https://github.com/lQUI/LaravalTest/blob/master/.env)里的mysql连接配置信息.

然后启动运行
<code>$ php artisan serve</code><br/>

***

Finished
==

1.输入 [http://localhost:8000](http://localhost:8000) ,浏览器显示 'Hello World!'.

2.输入 [http://localhost:8000/user?age=20](http://localhost:8000/user?age=20) ,会跳转到  [http://localhost:8000/] .如果age大于200,浏览器会显示 'pass!!!',例如：[http://localhost:8000/user?age=201](http://localhost:8000/user?age=201).

3.访问 [http://localhost:8000/user/Tom](http://localhost:8000/user/Tom)  ,此时浏览器显示Tom，如果Tom换成了包含除了英文字母之外的符号,将抛出NotFoundHttpException。

4.访问 [http://localhost:8000/form](http://localhost:8000/form),会显示一个表单，该表单的验证规则为：username为必填且必须少于12个字符，age为必填且必须不小于16且不大于100，email可以不填但必须为email格式.通过验证显示“success”

##
完成[文档](https://shimo.im/doc/jMyLTKOtyRobZFcB?r=XY7NO9/#magicdomid96)中的任务

定义Routes文件在[routes/web.php](https://github.com/lQUI/LaravalTest/tree/master/routes/web.php)
 
3.1 Basic Parameterized Http Route<br/>
操作步骤：浏览器输入[http://localhost:8000/v3/test-api](http://localhost:8000/v3/test-api),如果没显示任何错误信息，则说明已成功访问到。<br/>


3.2 Basic Query in Request<br/>
操作步骤：浏览器输入[http://localhost:8000/v3/plus?a=3&b=4](http://localhost:8000/v3/plus?a=3&b=4)，如果访问成功，浏览器会接受到json字符串：'{ret: 1000, version: 3, action: plus, result: 7}'。<br/>
涉及到的文件：[app/Http/Controllers/Arithnetic.php](https://github.com/lQUI/LaravalTest/tree/master/app/Http/Controllers/Arithnetic.php)

3.3 URLEncoded Form in Request<br/>
操作步骤：浏览器输入[http://localhost:8000/v3](http://localhost:8000/v3)，然后显示一个表单，填写表单后，点击’submit'按钮提交表单，如果提交成功，浏览器会接受到json字符串：'{ret: 1000, version: 3, action: plus, result: 7}'。<br/>
涉及到的文件：[app/Http/Controllers/Arithnetic.php](https://github.com/lQUI/LaravalTest/tree/master/app/Http/Controllers/Arithnetic.php)

3.4  Html Template Engine Practice<br/>
操作步骤：浏览器输入[http://localhost:8000/v3/tutorial/student/list](http://localhost:8000/v3/tutorial/student/list)，然后显示一个student的表格。<br/>
涉及到的文件：[app/Student.php](https://github.com/lQUI/LaravalTest/tree/master/app/Student.php)、[resources/views/student.blade.php](https://github.com/lQUI/LaravalTest/blob/master/resources/views/student.blade.php)

3.5 Logging to Multiple Files Differentiated by Levels<br/>
操作步骤：浏览器输入[http://localhost:8000/v3](http://localhost:8000/v3#ltmfdbl)将会打开页面，然后选择需要记录的日志的用户名和日志的级别，点击'add'按钮，将会在[storage/logs]下创建一个你选择的用户的日志文件，而且该文件会记录下此次访问的时间，日志的级别和输出信息'WOW!!!'。例如选择用户名为'peter'，那么将会在[storage/logs]创建一个peter.log日志文件。<br/>
如果点击'delete'按钮，将会把选择的用户的日志文件删除。<br/>
涉及到的文件：[app/UserLogger.php](https://github.com/lQUI/LaravalTest/tree/master/app/UserLogger.php)、页面：[resources/views/test.blade.php](https://github.com/lQUI/LaravalTest/tree/master/resources/views/test.blade.php)

3.6 Hiding Your Authentication Protected Service behind AuthMiddleware<br/>
实现过程:该例子中并没有提供登陆的实现,这里主要根据用户拿到intAuthToken和id通过[app\Http\Controllers\AuthnicationControll.php](https://github.com/lQUI/LaravalTest/blob/master/app/Http/Controllers/AuthnicationControll.php)进行判断,首先根据intAuthToken去token表查询是否有数据,如果有在判断查到的数据里的id是否与request提供的id一致,若一致说明已经登陆了.<br/>
操作步骤:浏览器输入[http://localhost:8000/sp100029/wallet/self/detail?intAuthToken=xxxyyyzz](http://localhost:8000/sp100029/wallet/self/detail?intAuthToken=xxxyyyzz),则会显示'Welcome "iphone6" user from "192.168.1.88"!',
如果输入的是[http://localhost:8000/sp100029/wallet/self/detail](http://localhost:8000/sp100029/wallet/self/detail),则显示'{"ret":1001}';<br/>
涉及到的文件:[app\User.php](https://github.com/lQUI/LaravalTest/blob/master/app/User.php), [app\Token.php](https://github.com/lQUI/LaravalTest/blob/master/app/Token.php), [resource\views\user.blade.php](https://github.com/lQUI/LaravalTest/blob/master/resources/views/user.blade.php),  [app\Http\Controllers\AuthnicationControll.php](https://github.com/lQUI/LaravalTest/blob/master/app/Http/Controllers/AuthnicationControll.php)




