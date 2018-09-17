<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="description" content="The Admin Panel">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<!-- Init the plugin and component-->
    <style type="text/css">
      .demo {
        width: 100px;
        height: 100px;
        background-color: gray;
        display: inline-block;
        margin: 10px;
      }
      .red {
        background-color: red;
      }
      .green {
        background-color: green;
      }
      .blue {
        background-color: blue;
      }
    </style>
</head>
<body>

<div id="app">
  <div class="demo" @click="attachRed = !attachRed" :class="{red: attachRed}"></div>
  <div class="demo"></div>
  <div class="demo"></div>
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data : {
      attachRed: false,
    }
  });
</script>

</body>
</html>
