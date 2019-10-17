<template>
	<div>
		<strong><p class='is-size-3'>
	      {{ widgettitle }}: {{ totalprojects }}
	    </p></strong>
	</div>
</template>

<script>
	export default {

		props: ['totalprojects','widgettitle'],
		mounted() {
			console.log('');
		}
	}
</script>