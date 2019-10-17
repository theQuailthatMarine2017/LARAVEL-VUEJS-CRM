<template>
	<b-table :hoverable="isHoverable" :paginated="isPaginated" :striped="isStriped" :data="data" :per-page="perPage" :pagination-simple="isPaginationSimple" :pagination-position="paginationPosition" checkable :checkbox-position="checkboxPosition" :header-checkable="headerChecked" :selected.sync="selected" :default-sort-direction="sortDirection" default-sort="todoid" :checked-rows.sync="check">

        <template slot-scope="props">

                <b-table-column field="todoid" label="Task ID" sortable numeric :visible="false">
                    {{ props.row.id }}
                </b-table-column>

                <b-table-column field="name" label="Title">
                    {{ props.row.description }}
                </b-table-column>


                <b-table-column field="dateadded" label="Date Created">
                    <span class="tag is-success">
                    {{ new Date(props.row.dateadded).toLocaleDateString() }}
                    </span>
                </b-table-column>

            </template>

        <template slot="bottom-left">
            <b-button type="is-success" @click="markDone" :disabled="!check.length">Mark Selected As Complete</b-button>
        </template>

    </b-table>
</template>

<script>
	export default {
        props:{
            todos:{
                type:Array
            },
        },
		data() {
            return {
                data: this.todos,
                sortDirection:'desc',
                isHoverable: true,
                check: [],
                isStriped: true,
                isPaginated:true,
                checkboxPosition: 'right',
                perPage: 5,
                isPaginationSimple: false,
                paginationPosition: 'bottom',
                headerChecked: false

            }
        },
        methods: {
            markDone() {
                console.log(this.check)
                this.$swal({
                  title: 'Are you sure you?',
                  text: 'You can\'t revert your action',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Mark Complete',
                  cancelButtonText: 'No, Keep it!',
                  showCloseButton: true,
                  showLoaderOnConfirm: true
                }).then((result) => {
                  if(result.value) {
                    this.$swal('Marked Complete', '', 'success')
                  } else {
                    this.$swal('Cancelled', '', 'info')
                  }
                })
            }
        }
    }
	

</script>