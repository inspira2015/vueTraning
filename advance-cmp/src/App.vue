<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <app-quote quote="A wonderful quote!"></app-quote>
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
