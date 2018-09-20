<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <app-quote>
               		<h2>A Quote</h2>
               		<p>A Wonderful Quote</p>
               </app-quote>
            </div>
        </div>
    </div>
</template>

<script>
	import quote from './components/quote.vue';
    export default {
     	components: {
     		appQuote: quote,
     	}   
    }
</script>

<style>
</style>
