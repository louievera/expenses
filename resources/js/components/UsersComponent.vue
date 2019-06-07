<template>
<div class='container col-md-6'>

	<table class='table table-striped' >
		<thead class="thead-dark">
			<th>Name</th>
			<th>Email Address</th>
			<th>Role</th>
			<th>Created_at</th>
		</thead> 
		<tr v-for="user in users">
			<td>{{user.name}}</td>
			<td>{{user.email}}</td>
			<td>{{user.role_name}}</td>
			<td>{{user.created_at}}</td>
		</tr>
	</table>
		<div class="float-right">
			<button class='btn btn-primary'>Add User</button>
		</div>

		
</div>
</template>

<script>
    export default {
    	data(){
    		return{
    			users: []
    		}
    	},
        
        created(){
        	axios.get('./api/users')
        	.then(response => this.users = response.data);
        }
    }

</script>

