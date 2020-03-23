<?php

//try分支，代码测试，有问题抛出异常，没问题继续执行
try {
    //catch 捕捉异常对象...
    //参数：异常对象。使用的是类型约束，只能捕捉由Exception类实例化来的对象
} catch (Exception $e) {
    echo '错误文件为:';
    echo $e->getFile(); 
    echo '发生错误的行为:';
    echo $e->getLine();
    echo '错误代码为:';
    echo $e->getCode();
    echo '发生信息为:';
    echo $e->getMessage();
}


?>