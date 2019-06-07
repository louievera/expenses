<template>
<div class='container col-md-6'>

	<table class='table table-striped' >
		<thead class="thead-dark">
			<th>Category Name</th>
			<th>Description</th>
			<th>Created_at</th>
		</thead> 
		<tr v-for="category in categories">
			<td>{{category.category_name}}</td>
			<td>{{category.description}}</td>
			<td>{{category.created_at}}</td>
		</tr>
	</table>
		<div class="float-right">
			<button class='btn btn-primary'>Add Category</button>
		</div>

</div>
</template>

<script>
    export default {
    	
    	data(){
    		return{
    			categories: []
    		}
    	},
        
        created(){
        	axios.get('./api/expensesCategory')
        	.then(response => this.categories = response.data);
        }
    }

</script>

