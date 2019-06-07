<template>
<div class='container col-md-6'>

	<table class='table table-striped' >
		<thead class="thead-dark">
			<th>Display Name</th>
			<th>Description</th>
			<th>Created at</th>
		</thead> 
		<tr v-for="role in roles">
			<td>{{role.role_name}}</td>
			<td>{{role.description}}</td>
			<td>{{role.created_at}}</td>

		</tr>
	</table>
		<div class="float-right">
			<button class='btn btn-primary'>Add Role</button>
		</div>
</div>
</template>

<script>
    export default {
    	data(){
    		return{
    			roles: []
    		}
    	},
        
        created(){
        	axios.get('./api/roles')
        	.then(response => this.roles = response.data);
        }
    }

</script>

