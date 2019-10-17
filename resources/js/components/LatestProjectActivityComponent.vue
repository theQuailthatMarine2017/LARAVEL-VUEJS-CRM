<template>

	<div>

 		 <apexchart type="bar" :options="options" :series="series"></apexchart>

	</div>
  
</template>
<script>
	export default {
		props: {
			months: {
				type: Array
			}
		},
		data() {
			return {
		      options: {
		        chart: {
		          id: 'vuechart-example'
		        },
		        xaxis: {
		          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug','Sep','Oct','Nov','Dec']
		        }
		      },
		      series: [{
		        name: 'Number Of Projects Created This Month',
		        data: this.months
		      }]
		    }
		},
		mounted() {
			console.log(this.months);
		}
	  }
</script>