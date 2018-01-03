配置git
$ git config --global user.name "Your Name"
$ git config --global user.email your@example.com


接下来设置 Git 推送分支时相关配置：

$ git config --global push.default simple
此设置是 Git 命令 push 的默认模式为 simple，当我们执行 git push 没有指定分支时，自动使用当前分支，而不是报错。

初始化git：git init

将项目所有文件纳入到 Git 中：
$ git add -A

检查 Git 状态：
$ git status

保留改动并提交：
$ git commit -m "Initial commit"

查看历史提交记录：
$ git log


Git 进行恢复被删除文件：
$ git checkout -f 【git checkout -f 的作用是将在暂存区的更改文件进行强制撤销。】


合并分支示例：
$ git merge fake-branch

删除分支示例：
$ git branch -d fake-branch


1、保存到暂存区：
$ git add -A

2、输入描述信息并提交到本地的 Git：
$ git commit -m "Say something"

3、将代码推送到 GitHub：
$ git push

参考：https://fsdhub.com/books/laravel-essential-training-5.5/560/git-and-making