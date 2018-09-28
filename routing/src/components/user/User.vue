<template>
	<div>
    	<h1>The User Page</h1>
		<hr>
		<button @click="naviagateToHome">Go to Home</button>
		<hr>
		<router-view></router-view>
	</div>
</template>

<script>
	export default {
		methods: {
			naviagateToHome() {
				this.$router.push({path: '/'});
			}
		}
	}
</script>