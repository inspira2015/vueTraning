<template>
	<div>
		<h3>Some User Details</h3>
		<p>User Id: {{ $route.params.id }}</p>
		<router-link tag="button"
					 :to="link"
					 class="btn btn-primary">Edit User</router-link>
	</div>
</template>

<script>
export default {
	data()	{
		return {
			link: {
				name: 'userEdit',
					params: {
						id: this.$route.params.id
					},
					query: {
						local: 'en',
						q: 100
					},
					hash: '#data'
				}
		}
	},
	beforeRouteEnter(to, from, next) {
		console.log('user Edit');
		next();
	}
}
</script>
