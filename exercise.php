<script src="https://npmcdn.com/vue/dist/vue.js"></script>

<div id="exercise">
    <!-- 1) Show an alert when the Button gets clicked -->
    <div>
        <button v-on:click="showAlert()">Show Alert</button>
    </div>
    <!-- 2) Listen to the "keydown" event and store the value in a data property (hint: event.target.value gives you the value) -->
    <div>
        <input v-on:keydown="saveKey($event)" type="text">
        <p>{{ value }}</p>
    </div>
    <!-- 3) Adjust the example from 2) to only fire if the "key down" is the ENTER key -->
    <div>
        <input v-on:keydown.enter="saveKeyOnEnter($event)" type="text">
        <p>{{ value2 }}</p>
    </div>
</div>


<script type="text/javascript">
    new Vue({
        el: '#exercise',
        data: {
            value: '',
            value2: ''
        },
        methods: {
            showAlert: function() {
                alert('Press Button');
            },
            saveKey: function(event) {
                this.value = event.target.value;
            },
            saveKeyOnEnter: function(event) {
                this.value2 = event.target.value;
            }
        }
    });

</script>