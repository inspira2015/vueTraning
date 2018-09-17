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
  <button v-on:click="counter++">Increase</button>
  <button v-on:click="counter--">Decrease</button>
  <button v-on:click="secondCounter++">Increase Second</button>

  <p>{{ counter }} | {{ secondCounter }}</p>
  <p>{{ result() }} | {{ output }}</p>
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data: {
      counter: 0,
      secondCounter: 0
     // result: ''  // cannot be this.counter > 5 ? 'Greather than 5' : 'Smaller than 5'
    },
    computed: {
      output: function() {
        console.log('Computed');
        return this.counter > 5 ? 'Greather than 5' : 'Smaller than 5'
      }
    },
    methods: {
      result() {
        console.log('Method');
        return this.counter > 5 ? 'Greather than 5' : 'Smaller than 5'
      }
    }
  });
</script>

</body>
</html>
