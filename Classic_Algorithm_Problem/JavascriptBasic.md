
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