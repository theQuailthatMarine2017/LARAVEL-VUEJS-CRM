<template>
    <div>
    <b-table :hoverable="isHoverable" :paginated="isPaginated" :striped="isStriped" :data="data" :per-page="perPage" :pagination-simple="isPaginationSimple" :pagination-position="paginationPosition" checkable :checkbox-position="checkboxPosition" :header-checkable="headerChecked" :default-sort-direction="sortDirection" default-sort="id" :checked-rows.sync="check">

        <template slot-scope="props">

                <b-table-column field="id" label="Task ID" sortable numeric :visible="false">
                    {{ props.row.id }}
                </b-table-column>

                <b-table-column field="name" label="Task Title">
                    {{ props.row.name }}
                </b-table-column>

                <b-table-column field="fullnames" label="Added By">
                    {{ props.row.fullnames }}
                </b-table-column>

                <b-table-column field="dateadded" label="Date Created">
                    <span class="tag is-success">
                    {{ new Date(props.row.dateadded).toLocaleDateString() }}
                    </span>
                </b-table-column>

            </template>

        
        <template slot="bottom-left">
            <b-button @click="markComplete" :disabled="!check.length" type="is-success">Mark Selected As Complete</b-button>
        </template>
    </b-table>
    </div>
</template>

<script>
    export default {
        props:{
            mytasks:{
                type:Array
            },
        },
        data() {
            return {
                data: this.mytasks,
                isHoverable: true,
                isStriped: true,
                isPaginated:true,
                check: [],
                sortDirection:'desc',
                checkboxPosition: 'right',
                perPage: 5,
                isPaginationSimple: false,
                paginationPosition: 'bottom',
                headerChecked: false

            }
        },
        methods: {
            markComplete() {
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
