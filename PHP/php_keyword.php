<?php
    /**
     * 
     * 7-5 PHP关键字
     * 
     * final:
     * final 只能用来修饰类和方法，不能使用final来修饰成员属性
     * final特性：
     *  使用final关键字标识的类不能被继承；
     *  使用final关键字标识的方法不能被子类覆盖(重写),是最终版本；
     * 
     * static：
     * 用于修饰类的成员属性或成员方法 ,即静态属性和静态方法； 类中的静态属性和方法不用实例化就可以直接用类名访问；
     *  格式 ：  类::静态属性/方法
     * 在类的方法中。不能用this引用静态属性或静态方法,需要用self来引用；
     * 静态方法中不可以使用非静态内容，就是不让使用$this;
     * 静态属性是共享的,也就是new很多对象也是共用一个属性；
     * 
     * 单例设计模式
     * 主要作用是保证面向对象编程设计中，一个类只能有一个实例对象存在；
     * 
     * const
     * 常量关键字 ，不能修改
     * 
     * instanceof
     * 用于检测当前对象实例是否属于某一个类或这个类的子类
     * 
     * 
     * 
     */
?>