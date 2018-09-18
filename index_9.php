<!DOCTYPE html>
<html>
<head>
    <title>Setting Styles Dinamically</title>
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
    </style>
</head>
<body>

<div id="app">
  <div class="demo" :style="{backgroundColor: color}"></div>
  <div class="demo" :style="myStyle"></div>
  <div class="demo"></div>
  <hr>
  <input type="text" v-model="color">
  <input type="text" v-model="width">
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data : {
      color: 'gray',
      width: 100
    },
    computed: {
      myStyle: function() {
        return {
          backgroundColor: this.color,
          width: this.width + 'px'
        }
      }
    }
  });
</script>

</body>
</html>
