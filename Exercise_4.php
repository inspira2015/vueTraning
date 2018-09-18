<script src="https://npmcdn.com/vue/dist/vue.js"></script>
<style type="text/css">
 #effect {
  width: 100px;
  height: 100px;
  border: 1px solid black;
}

.highlight {
  background-color: red;
  width: 200px !important;
}

.shrink {
  background-color: gray;
  width: 50px !important;
}
</style>


<div id="exercise">
  <!-- 1) Start the Effect with the Button. The Effect should alternate the "highlight" or "shrink" class on each new setInterval tick (attach respective class to the div with id "effect" below) -->
  <div>
    <button @click="startEffect">Start Effect</button>
    <div id="effect" v-bind:class="effectClasses"></div>
  </div>
  <!-- 2) Create a couple of CSS classes and attach them via the array syntax -->
  <div>I got no class :(</div>
  <!-- 3) Let the user enter a class (create some example classes) and attach it -->
  <div>
    <input type="text">
    <div></div>
  </div>
  <!-- 4) Let the user enter a class and enter true/ false for another class (create some example classes) and attach the classes -->
  <div>
    <input type="text">
    <input type="text">
    <div></div>
  </div>
  <!-- 5) Repeat 3) but now with values for styles (instead of class names). Attach the respective styles.  -->
  <div>
    <input type="text">
    <div></div>
  </div>
  <!-- 6) Create a simple progress bar with setInterval and style bindings. Start it by hitting the below button. -->
  <div>
  <!--  <button v-on:click="startProgress">Start Progress</button> -->
    <div></div>
  </div>
</div>


<script type="text/javascript">
    new Vue({
        el: '#exercise',
        data: {
            effectClasses: {
                highlight: false,
                shrink: true
            },
        },
        methods: {
            startEffect: function() {
            var vm = this;
                setInterval(function() {
                    vm.effectClasses.highlight = !vm.effectClasses.highlight;
                    vm.effectClasses.shrink = !vm.effectClasses.shrink;
                }, 1000);
            }
        }
    });

</script>