

# Webpack 常用配置

### package.json<example>

  ```json
{
  "name": "react-dianping-webpack",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "start": "NODE_ENV=dev webpack-dev-server --progress --colors",
    "mock": "node --harmony ./mock/server.js",
    "build": "rm -rf ./build && NODE_ENV=production webpack --config ./webpack.production.config.js --progress --colors"
  },
  "author": "",
  "license": "ISC",
  "devDependencies": {
    "autoprefixer": "^6.4.0",
    "babel-core": "^6.14.0",
    "babel-loader": "^6.2.5",
    "babel-plugin-react-transform": "^2.0.2",
    "babel-preset-es2015": "^6.14.0",
    "babel-preset-react": "^6.11.1",
    "css-loader": "^0.24.0",
    "eslint": "^3.4.0",
    "eslint-loader": "^1.5.0",
    "extract-text-webpack-plugin": "^1.0.1",
    "file-loader": "^0.9.0",
    "html-webpack-plugin": "^2.22.0",
    "json-loader": "^0.5.4",
    "koa": "^1.2.2",
    "koa-router": "^5.4.0",
    "less": "^2.7.1",
    "less-loader": "^2.2.3",
    "open-browser-webpack-plugin": "0.0.2",
    "postcss-loader": "^0.11.0",
    "react-transform-hmr": "^1.0.4",
    "style-loader": "^0.13.1",
    "url-loader": "^0.5.7",
    "webpack": "^1.13.2",
    "webpack-dev-server": "^1.15.0"
  },
  "dependencies": {
    "es6-promise": "^3.2.1",
    "immutable": "^3.8.1",
    "react": "^15.3.1",
    "react-addons-css-transition-group": "^15.3.1",
    "react-addons-pure-render-mixin": "^15.3.1",
    "react-dom": "^15.3.1",
    "react-redux": "^4.4.5",
    "react-router": "^2.7.0",
    "redux": "^3.5.2",
    "whatwg-fetch": "^1.0.0"
  }
}

  ```


### Webpack.config.js<example>

  ```js
  //require引入的都是package.json里面的包
var path = require('path')  //引入path依赖  这是node.js的
var webpack = require('webpack')
var HtmlWebpackPlugin = require('html-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin'); 
var OpenBrowserPlugin = require('open-browser-webpack-plugin');

module.exports = {
  //唯一入口文件
  entry: path.resolve(__dirname, 'app/index.jsx'),
  //打包出口到／build下
  output: {
    path: __dirname + "/build",
    filename: "bundle.js"
  },
  //文件如果没有后缀自动从js  jsx识别
  resolve: {
    extensions: ['', '.js', '.jsx']
  },

  module: {
    loaders: [
      { test: /\.(js|jsx)$/, exclude: /node_modules/, loader: 'babel' },
      { test: /\.less$/, exclude: /node_modules/, loader: 'style!css!postcss!less' },
      { test: /\.css$/, exclude: /node_modules/, loader: 'style!css!postcss' },
      { test: /\.(png|gif|jpg|jpeg|bmp)$/i, loader: 'url-loader?limit=5000' },  // 限制大小5kb
      { test: /\.(png|woff|woff2|svg|ttf|eot)($|\?)/i, loader: 'url-loader?limit=5000' } // 限制大小小于5k
    ]
  },

  eslint: {
    configFile: '.eslintrc' // Rules for eslint
  },
  //自动补全css3前缀
  postcss: [
    require('autoprefixer') //调用autoprefixer插件，例如 display: flex
  ],

  plugins: [
    //  自动生成html插件
    new HtmlWebpackPlugin({
      template: __dirname + '/app/index.tmpl.html'
    }),

    // 热加载插件
    new webpack.HotModuleReplacementPlugin(),

    // 打开浏览器
    new OpenBrowserPlugin({
      url: 'http://localhost:8080'
    }),

    // 可在业务 js 代码中使用 __DEV__ 判断是否是dev模式（dev模式下可以提示错误、测试报告等, production模式不提示）
    new webpack.DefinePlugin({
      __DEV__: JSON.stringify(JSON.parse((process.env.NODE_ENV == 'dev') || 'false'))
    })
  ],

  devServer: {
    contentBase: "./public", //本地服务器所加载的页面所在的目录
    colors: true, //终端中输出结果为彩色
    historyApiFallback: true, //不跳转
    inline: true, //实时刷新
    hot: true  // 使用热加载插件 HotModuleReplacementPlugin
  }
}

  ```


### Webpack.production.config.js<example>

  ```js
var path = require('path')
var webpack = require('webpack');
var HtmlWebpackPlugin = require('html-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  entry: {
    app: path.resolve(__dirname, 'app/index.jsx'),
    // 将 第三方依赖单独打包 =》package.json=> dependencies{}     发布环境才需要
    vendor: [
      'react', 
      'react-dom', 
      'react-redux', 
      'react-router', 
      'redux', 
      'es6-promise', 
      'whatwg-fetch', 
      'immutable'
    ]
  },
  output: {
    path: __dirname + "/build",
    filename: "[name].[chunkhash:8].js",
    publicPath: '/'
  },

  resolve:{
      extensions:['', '.js','.jsx']
  },

  module: {
    loaders: [
        { test: /\.(js|jsx)$/, exclude: /node_modules/, loader: 'babel' },
        { test: /\.less$/, exclude: /node_modules/, loader: ExtractTextPlugin.extract('style', 'css!postcss!less') },
        { test: /\.css$/, exclude: /node_modules/, loader: ExtractTextPlugin.extract('style', 'css!postcss') },
        { test:/\.(png|gif|jpg|jpeg|bmp)$/i, loader:'url-loader?limit=5000&name=img/[name].[chunkhash:8].[ext]' },
        { test:/\.(png|woff|woff2|svg|ttf|eot)($|\?)/i, loader:'url-loader?limit=5000&name=fonts/[name].[chunkhash:8].[ext]'}
    ]
  },
  postcss: [
    require('autoprefixer')
  ],

  plugins: [
    // webpack 内置的 banner-plugin    可以用来做版权声明
    new webpack.BannerPlugin("Copyright by wangfupeng1988@github.com."),

    // html 模板插件
    new HtmlWebpackPlugin({
        template: __dirname + '/app/index.tmpl.html'
    }),

    // 定义为生产环境，编译 React 时压缩到最小   压缩作用很大
    new webpack.DefinePlugin({
      'process.env':{
        'NODE_ENV': JSON.stringify(process.env.NODE_ENV)
      }
    }),

    // 为组件分配ID，通过这个插件webpack可以分析和优先考虑使用最多的模块，并为它们分配最小的ID
    new webpack.optimize.OccurenceOrderPlugin(),
    
    //变量更换代码混淆  去掉warning
    new webpack.optimize.UglifyJsPlugin({
        compress: {
          //supresses warnings, usually from module minification
          warnings: false
        }
    }),
    
    // 分离CSS和JS文件
    new ExtractTextPlugin('[name].[chunkhash:8].css'), 
    
    // 提供公共代码
    new webpack.optimize.CommonsChunkPlugin({
      name: 'vendor',
      filename: '[name].[chunkhash:8].js'
    }),

    // 可在业务 js 代码中使用 __DEV__ 判断是否是dev模式（dev模式下可以提示错误、测试报告等, production模式不提示）
    new webpack.DefinePlugin({
      __DEV__: JSON.stringify(JSON.parse((process.env.NODE_ENV == 'dev') || 'false'))
    })
  ]
}
  ```

