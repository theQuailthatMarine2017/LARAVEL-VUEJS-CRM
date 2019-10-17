<template>
	<b-navbar shadow=true>
		<template slot="start">
            <b-navbar-item href="#" active>
                Ongoing Tasks
            </b-navbar-item>
            <b-navbar-item href="#">
                Completed Tasks
            </b-navbar-item>
            <b-navbar-item href="#">
                Overview
            </b-navbar-item>
        </template>


	</b-navbar>
	
</template>

<script>
	export default {
		mounted() {
			console.log('mounted se');
		},
		type: 'is-dark',
		shadow: true
	}
</script>