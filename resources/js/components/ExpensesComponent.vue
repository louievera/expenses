<template>
<div class='container col-md-6'>

	<table class='table table-striped' >
		<thead class="thead-dark">
			<th>Expense Category</th>
			<th>Amount</th>
			<th>Created_at</th>
		</thead> 
		<tr v-for="expense in expenses">
			<td>{{expense.category_name}}</td>
			<td>{{expense.amount}}</td>
			<td>{{expense.created_at}}</td>
		</tr>
	</table>
		<div class="float-right">
			<button class='btn btn-primary'>Add Expenses</button>
			id goes here
		</div>

</div>
</template>

<script>
    export default {
    	props:['userid'],
    	data(){
    		return{
    			expenses: []
    		}
    	},
        
        created(){
        	axios.get('./api/expenses/?id='+this.userid)
        	.then(response => this.expenses = response.data);
        }
    }

</script>

