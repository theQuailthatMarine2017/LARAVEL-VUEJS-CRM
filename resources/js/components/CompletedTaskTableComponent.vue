<template>
	<div>
    <b-table :hoverable="isHoverable" :paginated="isPaginated" :striped="isStriped" :data="data" :per-page="perPage" :pagination-simple="isPaginationSimple" :pagination-position="paginationPosition" :selected.sync="selected" :default-sort-direction="sortDirection" default-sort="id">

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

                <b-table-column field="datefinished" label="Date Completed">
                    <span class="tag is-success">
                    {{ new Date(props.row.datefinished).toLocaleDateString() }}
                    </span>
                </b-table-column>

            </template>
        
    </b-table>
    </div>
</template>

<script>
	export default {
		props:{
            completedtasks:{
                type:Array
            },
        },
        data() {
            return {
                data: this.completedtasks,
                isHoverable: true,
                sortDirection:'desc',
                isStriped: true,
                isPaginated:true,
                perPage: 5,
                isPaginationSimple: false,
                paginationPosition: 'bottom'

            }
        }
    }
</script>