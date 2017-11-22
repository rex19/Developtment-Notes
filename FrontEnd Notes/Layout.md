```html

<!DOCTYPE html>
<html lang="en">
<!-- 三栏布局 -->

<head>
  <meta charset="UTF-8">
  <title>三栏布局</title>
  <style media="screen">
    html * {
      padding: 0;
      margin: 0;
      min-width: 200px;
    }

    .layout article div {
      min-height: 100px;
    }
  </style>
</head>

<body>
  <!-- 浮动 -->
  <section class="layout float">
    <style media="screen">
      .layout.float .left {
        float: left;
        width: 300px;
        background: red;
      }

      .layout.float .right {
        float: right;
        width: 300px;
        background: blue;
      }

      .layout.float .center {
        background: yellow;
      }
    </style>
    <article class="left-right-center">
      <div class="left">1，这是左边部分</div>
      <div class="right">1，这是右边部分</div>
      <div class="center">
        <h1>浮动解决方案</h1>
        1，这是中间部分 2,这是中间部分 1，这是中间部分 2,这是中间部分
      </div>
    </article>
  </section>

  <!-- 绝对定位 -->
  <section class="layout absolute">
    <article class="left-center-right">
      <style media="screen">
        .layout.absolute .left-center-right>div {
          position: absolute;
          margin-top: 30px;
        }

        .layout.absolute .left {
          left: 0;
          width: 300px;
          background: red;
        }

        .layout.absolute .center {
          left: 300px;
          right: 300px;
          background: yellow;
        }

        .layout.absolute .right {
          right: 0;
          width: 300px;
          background: blue;
        }
      </style>
      <div class="left"></div>
      <div class="right"></div>
      <div class="center">
        <h1>绝对定位解决方案</h1>
        1，这是中间部分 2,这是中间部分 1，这是中间部分 2,这是中间部分
      </div>
    </article>
  </section>

  <!-- flexbox -->
  <section class="layout flexbox">
    <style media="screen">
      .layout.flexbox {
        margin-top: 150px;
      }

      .layout.flexbox .left-center-right {
        display: flex;
      }

      .layout.flexbox .left {
        width: 300px;
        background: red;
      }

      .layout.flexbox .center {
        flex: 1;
        right: 300px;
        background: yellow;
      }

      .layout.flexbox .right {
        width: 300px;
        background: blue;
      }
    </style>
    <section class="left-center-right">
      <div class="left"></div>
      <div class="center">
        <h1>flexbox解决方案</h1>
        1，这是中间部分 2,这是中间部分 1，这是中间部分 2,这是中间部分
      </div>
      <div class="right"></div>
    </section>
  </section>

  <!-- tablecell -->
  <section class="layout table">
    <style media="screen">
      .layout.table {
        margin-top: 20px
      }

      .layout.table .left-center-right {
        width: 100%;
        display: table;
        height: 100px;
      }

      .layout.table .left-center-right>div {
        display: table-cell;
      }

      .layout.table .left {
        width: 300px;
        background: red;
      }

      .layout.table .center {
        background: yellow;
      }

      .layout.table .right {
        width: 300px;
        background: blue;
      }
    </style>
    <section class="left-center-right">
      <div class="left"></div>
      <div class="center">
        <h1>tablecell解决方案</h1>
        1，这是中间部分 2,这是中间部分 1，这是中间部分 2,这是中间部分
      </div>
      <div class="right"></div>
    </section>
  </section>

  <!-- grid布局 -->
  <section class="layout grid">
    <style media="screen">
      .layout.grid {
        margin-top: 20px
      }

      .layout.grid .left-center-right {
        display: grid;
        width: 100%;
        grid-template-rows: 100px;
        grid-template-columns: 300px auto 300px;
      }

      .layout.grid .left {
        background: red;
      }

      .layout.grid .center {
        background: yellow;
      }

      .layout.grid .right {
        background: blue;
      }
    </style>
    <section class="left-center-right">
      <div class="left"></div>
      <div class="center">
        <h1>grid解决方案</h1>
        1，这是中间部分 2,这是中间部分 1，这是中间部分 2,这是中间部分
      </div>
      <div class="right"></div>
    </section>
  </section>

  <!-- 圣杯布局 -->
  <section class="container">
    <style>
      .container {
        margin-top: 5%;
        padding: 0 220px 0 200px;
        overflow: hidden;
      }

      .container .left,
      .container .center,
      .container .right {
        position: relative;
        float: left;
        min-height: 130px;
      }

      .container .left {
        margin-left: -100%;
        left: -200px;
        width: 200px;
        background: red;
      }

      .container .right {
        margin-left: -220px;
        right: -220px;
        width: 220px;
        background: green;
      }

      .container .center {
        width: 100%;
        background: blue;
        word-break: break-all;
      }
    </style>
    <div class="center">
      <h4>center</h4>
      <p>圣杯布局</p>
    </div>
    <div class="left">
      <h4>left</h4>
      <p>left
      </p>
    </div>

    <div class="right">
      <h4>right</h4>
      <p>right
      </p>
    </div>
  </section>


  <!-- 双飞翼布局 -->
  <section class="warp">
    <style>
      .warp {
        margin-top: 5%;
      }

      .warp .left,
      .warp .center,
      .warp .right {
        float: left;
        min-height: 130px;
      }

      .warp .left {
        margin-left: -100%;
        width: 200px;
        background: red;
      }

      .warp .right {
        margin-left: -220px;
        width: 220px;
        background: blue;
      }

      .warp .center {
        width: 100%;
      }

      .warp .center .main-inner {
        margin-left: 200px;
        margin-right: 220px;
        min-height: 130px;
        background: green;
        word-break: break-all;
      }
    </style>
    <div class="center">
      <div class="main-inner">
        <h4>center</h4>
        <p>双飞翼布局
        </p>
      </div>
    </div>
    <div class="left">
      <h4>left</h4>
      <p>left
      </p>
    </div>

    <div class="right">
      <h4>right</h4>
      <p>right
      </p>
    </div>
  </section>
</body>

</html>
```