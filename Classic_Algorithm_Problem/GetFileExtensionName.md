
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