<template>
	<div>
    	<h1>The User Page</h1>
		<hr>
		<p>Loaded ID: {{ id }}</p>
		<button @click="naviagateToHome">Go to Home</button>
	</div>
</template>

<script>
	export default {
		data() {
				return {
					id: this.$route.params.id
				}
		},
		methods: {
			naviagateToHome() {
				this.$router.push({path: '/'});
			}
		}
	}
</script>