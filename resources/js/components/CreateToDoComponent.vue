<template>
	<section>
		<b-field label="To Do Title">
            <b-input v-model="itemname" :value="title" placeholder="Enter Title Here"></b-input>
        </b-field>

        <b-field>
        	<b-button @click="createItem" type="is-success">Complete Create Item</b-button>
        </b-field>
	</section>
</template>

<script>
	export default {

		data() {
			return {
				title: '',
				itemname:''
			}
		},
		methods: {
            createItem() {
            	
                this.$swal({
                  title: 'Confirm Create ' + this.itemname + '?',
                  text: '',
                  type: 'question',
                  showCancelButton: true,
                  confirmButtonText: 'Create Task',
                  cancelButtonText: 'Cancel',
                  showCloseButton: true,
                  showLoaderOnConfirm: true
                }).then((result) => {
                  if(result.value) {
                    this.$swal('Item Created', '', 'success')
                  } else {
                    this.$swal('Cancelled', '', 'info')
                  }
                })
            }
        }

	}
</script>