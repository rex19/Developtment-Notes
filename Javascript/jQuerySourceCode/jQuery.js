
(function(window,undefined){
    var jQuery = function(){
        return new jQuery.fn.init();
    }
    jQuery.fn = jQuery.prototype = {
        init:function(){

        },
        extend:function(){

        }
    };
    jQuery.fn.init.prototype = jQuery.fn;
    return jQuery;
})(window)

jQuery.fn.extend//直接对原型链进行操作
jQuery.extend //直接添加静态方法

jQuery=new jQuery.prototype.init()
jQuery.prototype.init.prototype = jQuery.prototype;

