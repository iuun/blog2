namespace 代表的是 命名空间
用 use 来引用在 PHP 文件中要使用的类，引用之后便可以对其进行调用。

自定义控制器类都继承了Controller这个类，这意味着你可以在任何自定义的控制器类中任意使用父类中除私密方法外的其它方法。

渲染视图view 方法接收两个参数，第一个参数是视图的路径名称，第二个参数是与视图绑定的数据（可选）

view文件中重复的代码都放在views/layout/文件下

yarn install --no-bin-links【安装yarn】