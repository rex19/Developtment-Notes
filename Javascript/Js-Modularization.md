# Js 模块化方案

## AMD
```js
define(['dep1]','dep2'],function(dep1,dep2){
  //内部只能使用指定的模块
  return function(){};
})
```

## CMD
```js
define(function(require,exports,module){
  //此处如果需要加载某模块，可以引入
  var xx = require('xx');
})
```

## es6
```js
export default xx; //暴露出去

import xx from '../xx.js';  //引入
```