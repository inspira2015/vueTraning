<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="description" content="The Admin Panel">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-loading-overlay@2"></script>
    <link href="https://cdn.jsdelivr.net/npm/vue-loading-overlay@2/dist/vue-loading.min.css" rel="stylesheet">
<!-- Init the plugin and component-->
</head>
<body>

<style type="text/css">
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>

<div id="app">
  <button v-on:click="increase(3)">Click me</button>
  <p>{{ counter }}</p>
  <p v-on:mousemove="updateCoordinates">
    Coordinates; {{ x }} / {{ y }} -
    <span v-on:mousemove="dummy">DEAD SPOT</span>
  </p>
  <input v-on:keyup.space.enter="alertMe" type="text">
</div>

<script type="text/javascript">
  new Vue({
    el: '#app',
    data: {
      counter: 0,
      x: 0,
      y: 0
    },
    methods: {
      increase: function(step) {
        this.counter += step;
      },
      updateCoordinates: function(event) {
        this.x = event.clientX;
        this.y = event.clientY;
      },
      alertMe: function() {
        alert('AlertMe');
      }
    }
  });
</script>

</body>
</html>
