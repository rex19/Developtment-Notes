/**
 * js 手写重载 
 * js没有多态 没有重载
 */

var people =  ["rex", "Alex", "sass"];
function addMethod(object, name, fn) {
　　var old = object[name]; //把前一次添加的方法存在一个临时变量old里面
　　object[name] = function() { // 重写了object[name]的方法
　　　　// 如果调用object[name]方法时，传入的参数个数跟预期的一致，则直接调用
　　　　if(fn.length === arguments.length) {
　　　　　　return fn.apply(this, arguments);
　　　　// 否则，判断old是否是函数，如果是，就调用old
　　　　} else if(typeof old === "function") {
　　　　　　return old.apply(this, arguments);
　　　　}
　　}
}

addMethod(people, "find", function() {　return 1; } );

addMethod(people, "find", function(firstName) {　return 2;});

addMethod(people, "find", function(firstName, lastName) {　return 3;});

console.log(people.find()); 

console.log(people.find("rex")); 

console.log(people.find("rex ","sass")); 