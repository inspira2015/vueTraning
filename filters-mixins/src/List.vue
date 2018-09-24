<template>
        <div>
                <h1>Filters & Mixins</h1>
                <input v-model="filterText">
                <ul>
                	<li v-for="fruit in filteredFruits">{{ fruit }}</li>
                </ul>
        </div>
  
</template>

<script>
    export default {
    	data() {
    		return {
    			fruits: ['Apple', 'Bannana', 'Mango', 'Melon', 'Orange'],
    			filterText: ''
    		}
    	},
    	computed: {
    		filteredFruits() {
    			return this.fruits.filter((element) => {
    				return element.match(this.filterText);
    			});
    		}
    	}
    }
</script>

<style>

</style>
