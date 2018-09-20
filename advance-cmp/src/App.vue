<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <app-quote>
               		<h2 slot="title">{{ quoteTitle }}</h2>
               		<p slot="content">A Wonderful Quote</p>
               </app-quote>
            </div>
        </div>
    </div>
</template>

<script>
	import quote from './components/quote.vue';
    export default {
    	data: function() {
    		return {
    			quoteTitle: 'The Quote'
    		}
    	},
     	components: {
     		appQuote: quote,
     	}   
    }
</script>

<style>
</style>
