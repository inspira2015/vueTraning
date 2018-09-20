<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            	<button @click="selectedComponent = 'appQuote'">Quote</button>
            	<button @click="selectedComponent = 'Author'">Author</button>
            	<button @click="selectedComponent = 'New'">New</button>
            	<hr>
            	<p>{{ selectedComponent }}</p>
            	<component :is="selectedComponent">
            		<p>Default Content</p>
            	</component>
               <!--<app-quote>
               		<h2 slot="title">{{ quoteTitle }}</h2>
               		<p slot="content">A Wonderful Quote</p>
               </app-quote> -->
            </div>
        </div>
    </div>
</template>

<script>
	import quote from './components/quote.vue';
	import Author from './components/Author.vue';
	import New from './components/New.vue';


    export default {
    	data: function() {
    		return {
    			quoteTitle: 'The Quote',
    			selectedComponent: 'app-quote'
    		}
    	},
     	components: {
     		appQuote: quote,
     		appAuthor: Author,
     		appNew: New,
     	}   
    }
</script>

<style>
</style>
