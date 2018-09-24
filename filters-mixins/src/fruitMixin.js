export const fruitMixin = {
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
};