
## 完成 extname 函数，它会接受一个文件名作为参数，你需要返回它的扩展名。

### 例如，输入 emoji.png，返回 .png。
```jsx
const extname = (filename) => {
  if (filename.length > 0 && filename.lastIndexOf(".") !== -1 && filename.lastIndexOf(".") !== 0) {
    var index = filename.lastIndexOf(".");
    let x = filename.substring(index + 1, filename.length);
    return filename.substring(index, index + 1) + x;
  }
  return ''
}
```
```jsx
const extname = (filename) => filename.lastIndexOf('.') > 0 ? filename.slice(filename.lastIndexOf('.')) : '';
```


## 完成正则表达式 TRIM_REGX，可以用它来删除一个字符串前后多余的空白字符。

### 注意：你只需要完成正则表达式的编写。
```jsx
//例如：
' ScriptOJ   '.replace(TRIM_REGX, '') // => ScriptOJ
```
```jsx
const TRIM_REGX = /(^[\s\n]+|[\s\n]+$)/g
```

## 李雷向韩梅梅求婚，韩梅梅说过一段时间（20~50ms）再回复他。
## 完成 proposeToMissHan 函数，会传入一个布尔值参数 isOK，用来预先设定是否答应李雷的求婚。这个函数会返回一个 Promise，一段时间（20～50ms）以后，根据 isOK 参数，韩梅梅可能会说字符串 ok 答应李雷，也可能说字符串 no 来拒绝（reject）李雷。

## 你只需要完成 proposeToMissHan 函数的编写。。

```jsx
const proposeToMissHan = (isOK) => {
  /* TODO */
  return new Promise(function(resolve,reject){
    setTimeout(function(){
      const say =isOK?resolve('ok'):reject('no')
      console.log(say)
    },30)
  })
}
```

## 分页判断
## 完成分页函数 getPages，接收两个参数：getPages(total, itemsPerPage)
#### total： 表示总共有多少条数据
#### itemsPerPage：表示每页有多少条数据

### getPages(total, itemsPerPage) 会返回一个数字告诉我们需要有多少页数据。例如，总共 101 条数据，每页有 10 条，就需要 11 页，那么就返回 11。
### itemsPerPage 为 0 的时候返回 0。

### 你只需要完成 getPages 函数。

```jsx
const getPages = (total, itemsPerPage) =>{ 
  if(total===0||itemsPerPage===0) return 0;
  let pageNum = parseInt(total/itemsPerPage);
  if(total%itemsPerPage!==0) pageNum++;
  if(total<itemsPerPage) pageNum=1;
  return pageNum;
}
```

```jsx
function getPages(total, itemsPerPage) {
  if (!itemsPerPage) {
    return 0
  }
  return Math.ceil(total / itemsPerPage)
}
```


## 单例模式（Singleton）是一种常用的软件设计模式，它保证我们系统中的某一个类在任何情况实例化的时候都获得同一个实例。例如：
```jsx
const root1 = new Root()
const root2 = new Root()
const root3 = new Root()

root1 === root2 // true
root2 === root3 // true
//我们构造一个名为 singletonify 方法，可以传入一个用户自定义的类，可以返回一个新的单例模式的类。例如：

class A () {}
const SingleA = singletonify(A)

const a1 = new SingleA()
const a2 = new SingleA()
const a3 = new SingleA()

a1 === a2 // => true
a2 === a3 // => true
//注意，你要保证 singletonify 返回的类的实例也是原来的类的实例：

a1 instanceof A // => true
a1 instanceof SingleA // => true
//自定义的类属性也要保持一致，例如：

class A () {}
A.staticMethod = () => {}

const SingleA = singletonify(A)
SingleA.staticMethod === A.staticMethod // => true
//请你完成 singletonify 的编写。

```

```jsx
const singletonify = fn => {
  const one = new fn()
  return new Proxy(fn, {
    construct(target, argumentsList, newTarget) {
      return one
    }
  })
}
```

## 数组去重
```jsx
//编写一个函数 unique(arr)，返回一个去除数组内重复的元素的数组。例如：
unique([0, 1, 2, 2, 3, 3, 4]) // => [0, 1, 2, 3, 4]
unique([0, 1, '1', '1', 2]) // => [0, 1, '1', 2]
```

```jsx
const unique = (arr) => [...new Set(arr)]
//或者
const unique = (arr) => {
 var item = typeof arr[0] === 'undefined' ? [] : [arr[0]];
 for (var i=1; i<arr.length; i++) {
  item.indexOf(arr[i]) === -1 && item.push(arr[i])
 }

 return item;
}
