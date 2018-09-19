<!DOCTYPE html>
<html>
<head>
    <title>Setting Styles Dinamically</title>
    <meta name="description" content="The Admin Panel">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <!-- Init the plugin and component-->
</head>
<body>

<div id="app">
  <my-cmp> </my-cmp>
  <hr>
  <my-cmp> </my-cmp>
</div>

<script type="text/javascript">
  Vue.component('my-cmp', {
    data: function() {
      return {
        status: "Critical"
      }
    },
    template: '<p>Server Status: {{ status }}</p>'
  });


  new Vue({
    el: '#app',
  });
</script>

</body>
</html>
