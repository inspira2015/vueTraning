<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="description" content="The Admin Panel">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<!-- Init the plugin and component-->
</head>
<body>

<div id="app">
  <button v-on:click="increase">Increase</button>
  <button v-on:click="decrease">Decrease</button>
  <p>{{ counter }}</p>
  <p>{{ result }}</p>
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data: {
      counter: 0,
      result: ''
    },
    methods: {
      increase: function() {
        this.counter ++;
        this.result = this.counter > 5 ? 'Greater 5' : 'Smaller 5'
      },
      decrease: function() {
        this.counter --;
        this.result = this.counter > 5 ? 'Greater 5' : 'Smaller 5'
      },
    }
  });
</script>

</body>
</html>
