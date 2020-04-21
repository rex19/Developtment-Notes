/**
 *  连贯接口
 * 1，链式调用
 * 2，命令查询媒体 重载
 * 3，参数映射
 */


var obj ={
    a:function(){
        console.log(1);
        return this;
    },

    b:function(){
        console.log(2);
    }

}
obj.a().b()


//位运算
var s= Object(this)
var length = s.length>>>0 //1

//短路语句
a && test() //如果为true 则得到后面方法的返回值
a || test() //如果test()返回值为false  则整体false

// hooks  钩子或者字典函数写法  用来解决一种或多种情况的处理
var s = 'index'
var obj = {
    index:function(){}
}
obj[s] && obj[s]();

//$.type
(function type(window,undefined){
    var class2type = {}
    jQuery.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(""),function(){
        class2type["[object"+name] = name;

    })
    typeof(obj)=="object" && class2type //直接操作
})(window)


//$.ready
document.addEventListener("DOMContentloaded")

