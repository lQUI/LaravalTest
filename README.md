***

Installation
==
## php7

## composer

已完成：

1.输入 [http://localhost:8000](http://localhost:8000) ,浏览器显示 'Hello World!'.

2.输入 [http://localhost:8000/user?age=20](http://localhost:8000/user?age=20) ,会跳转到  'http://localhost:8000/' .如果age大于200,浏览器会显示 'pass!!!'.

3.访问 [http://localhost:8000/user/Tom](http://localhost:8000/user/Tom)  ,此时浏览器显示tom，如果Tom换成了包含除了英文字母之外的符号,将抛出NotFoundHttpException。

