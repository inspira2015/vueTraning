<template>
	<div>
		<h3>Some User Details</h3>
		<p>User Id: {{ $route.params.id }}</p>
		<router-link tag="button" :to=" '/user/' + $route.params.id + '/edit' ">Edit User</router-link>
	</div>
</template>