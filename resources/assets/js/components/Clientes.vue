<template class="html">
	<div >
		<table class="table table-striped">
			<thead>
				<tr>
					<th>nombre</th>
					<th>email</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="cliente in clientes">
					<td>
						{{cliente.username}}
					</td>
					<td>
						{{cliente.email}}
					</td>
				</tr>
			</tbody>
		</table>

	</div>

</template>

<script>
	export default
	{
		data(){
			return {
				clientes: []
			}
		},
		created(){
			this.fetchClientes();
		},
		methods:{
			fetchClientes(){
				this.$http.get('/clientes').then(response => {
					this.clientes = response.data.clientes;
				});
			}
		}
	}

</script>

<script lang="css"></script>