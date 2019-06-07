<template>
<div class='container col-md-6'>

	<table class='table table-striped' >
		<thead class="thead-dark">
			<th>Expense Category</th>
			<th>Amount</th>
			<th>Entry Date</th>

			<th>Created_at</th>
		</thead> 
		<tr v-for="expense in expenses">
			<td>{{expense.category_name}}</td>
			<td>{{expense.amount}}</td>
			<td>{{expense.date}}</td>

			<td>{{expense.created_at}}</td>
		</tr>
	</table>
	
	<div class="float-right">
		<button class='btn btn-primary' data-toggle="modal" data-target="#myModal">Add Expenses</button>
	</div>

	 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-left">Add Expenses</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        	<form method="post" action='api/saveExpenses'>
        		<label for='expensesCategory'>Expenses Category</label>
    			<select id='expensesCategory' class='form-control' name="expensesCategory">
    				<option v-for="category in categories" :value=category.id>{{category.category_name}}</option>
    			</select>

    			<label for='amount'>Amount</label>
    			<input type='text' id='amount' name="amount" class='form-control'>
        		

        		<label for='date'>Date</label>
    			<input type='date' id='date' name="date" class='form-control'>
    			<input type='hidden' name="userid" :value=userid >


    			<div class="form-group text-right" style="margin-top:5px;">
         			<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

    				<input type='submit' value='save' class='btn btn-primary'>
    			</div>
        	</form>
          
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</template>

<script>
    export default {
    	props:['userid'],
    	data(){
    		return{
    			expenses: [],
    			categories: []
    		}
    	},
        
        created(){
        	axios.get('./api/expenses/?id='+this.userid)
        	.then(response => this.expenses = response.data);

        	axios.get('./api/expensesCategory')
        	.then(response => this.categories = response.data);
        },

         
    }

</script>

