<template>
	<section>
		<b-field label="Task Title">
            <b-input v-model="taskname" :value="title" placeholder="Enter Title Here"></b-input>
        </b-field>
        <b-field label="Task Decription">
            <b-input v-model="taskdescription" :value="description" placeholder="Enter Description Here" maxlength="100" type="textarea"></b-input>
        </b-field>
        <b-field label="Select Staff Member To Assign Task">
            <b-select v-model="selectedd" placeholder="Select Staff Member">
                <option  v-for="mem in staff" :value="mem.fullnames"> {{ mem.fullnames }}</option>
            </b-select>
        </b-field>

        <b-field label="Select Task Urgency" message="Task Urgency Level Ranges from 1 - 5. Choose According To How Urgent Task Completion is.">
            <b-slider v-model="urgency":min="1" :max="5" :step="1" :value="slider" ticks>
            </b-slider>
        </b-field>

        <b-field>
        	<b-button @click="createTask" type="is-success">Complete Create Task</b-button>
        </b-field>
	</section>
</template>

<script>
	export default {

		props:{
			staffmember: {
				type: Array
			},
		},
		data() {
			return {
				title: '',
				description: '',
				taskname:'',
				taskdescription:'',
				slider: 1,
				urgency:null,
				staff: this.staffmember,
				selectedd:null,
			}
		},
		methods: {
            createTask() {
            	
                this.$swal({
                  title: 'Confirm Create Task\n' + this.taskname.toUpperCase() + '?',
                  text: this.selectedd + ' Will Be Notified Immediately.',
                  type: 'question',
                  showCancelButton: true,
                  confirmButtonText: 'Create Task',
                  cancelButtonText: 'Cancel',
                  showCloseButton: true,
                  showLoaderOnConfirm: true
                }).then((result) => {
                  if(result.value) {
                    this.$swal('Task Assigned', '', 'success')
                  } else {
                    this.$swal('Cancelled', '', 'info')
                  }
                })
            }
        }

	}
</script>