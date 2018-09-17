<!DOCTYPE html>
<html>
<head>
    <title>Two Ways Bind</title>
    <meta name="description" content="The Admin Panel">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<!-- Init the plugin and component-->
</head>
<body>

<div id="app">
  <input type="text">
  <p>{{ name }}</p>
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data: {
      name: "Daniel",
    },
  });
</script>

</body>
</html>
