<template>

	<div>

 		 <apexchart type="pie" height="300px" :options="options" :series="series" :label="labels"></apexchart>

	</div>
	
</template>

<script>

	export default {

		data() {

			return {

		      	options: {
		      		labels: ['Completed Projects', 'Ongoing Projects'],
	      			dataLabels: {
				  		style: {
				    		colors: ['#FFFFFF', '#FFFFFF']
				  		}
		      		},
		      		fill: {
					  colors: ['#1A73E8', '#2ecc71']
					}
		  		},
		      series: [1, 9]

		    }
		}
	}
</script>