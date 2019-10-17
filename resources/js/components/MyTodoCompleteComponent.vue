<template>
	<b-table :hoverable="isHoverable" :paginated="isPaginated" :striped="isStriped" :data="data" :per-page="perPage" :pagination-simple="isPaginationSimple" :pagination-position="paginationPosition" :header-checkable="headerChecked" :selected.sync="selected" :default-sort-direction="sortDirection" default-sort="todoid">

        <template slot-scope="props">

                <b-table-column field="todoid" label="Task ID" sortable numeric :visible="false">
                    {{ props.row.id }}
                </b-table-column>

                <b-table-column field="name" label="Title">
                    {{ props.row.description }}
                </b-table-column>


                <b-table-column field="datefinished" label="Date Completed">
                    <span class="tag is-success">
                    {{ new Date(props.row.datefinished).toLocaleDateString() }}
                    </span>
                </b-table-column>

            </template>

    </b-table>
</template>

<script>
	export default {
        props:{
            todosdone:{
                type:Array
            },
        },
		data() {
            return {
                data: this.todosdone,
                sortDirection:'desc',
                isHoverable: true,
                isStriped: true,
                isPaginated:true,
                perPage: 5,
                isPaginationSimple: false,
                paginationPosition: 'bottom',

            }
        }
    }
	

</script>