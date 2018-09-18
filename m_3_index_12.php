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
  <p v-if="show">You can see me!</p>
  <p v-else>Now you see me!</p>
  <template v-if="show">
    <p>Inside a template</p>
  </template>
  <p>Do you also see me?</p>
  <button @click="show = !show">Switch</button>
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data : {
      show: true,
    },
  });
</script>

</body>
</html>
