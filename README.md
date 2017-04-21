<h1>Countcals</h1>


<table>
	<tr>
		<th>Endpoint</th>
		<th>Response</th>
		<th>Params</th>
		<th>Method</th>
	</tr>
	<tr>
		<td>/auth</td>
		<td>
			<code>
			{
				token: (string)
			}
			</code>
		</td>
		<td>username, password</td>
		<td>GET</td>
	</tr>
	<tr>
		<td>/account</td>
		<td>
			<code>
			{
				id: (int),
				username: (string),
				limit: (int)
			}
			</code>
		</td>
		<td></td>
		<td>GET</td>
	</tr>
	<tr>
		<td>/entries</td>
		<td>
			<code>
			[
				{
					id: (int),
					timestamp: (timestamp),
					food: {
						id: (int),
						name: (string),
						calories: (int)
					}
				}	
			]
			</code>
		</td>
		<td>date('YYYY-MM-DD')</td>
		<td>GET</td>
	</tr>
	<tr>
		<td>/entries/new</td>
		<td>
			<code>
			{
				id: (int),
				timestamp: (timestamp),
				food: {
					id: (int),
					name: (string),
					calories: (int)
				})
			}
			</code>
		</td>
		<td>date('YYYY-MM-DD'), foodId</td>
		<td>POST</td>
	</tr>
	<tr>
		<td>/entries/{id}</td>
		<td>
			<code>
			{
				id: (int),
				timestamp: (timestamp),
				food: {
					id: (int),
					name: (string),
					calories: (int)
				})
			}
			</code>
		</td>
		<td></td>
		<td>GET</td>
	</tr>
	<tr>
		<td>/entries/{id}</td>
		<td>
			<code>
			{
				id: (int),
				timestamp: (timestamp),
				food: {
					id: (int),
					name: (string),
					calories: (int)
				})
			}
			</code>
		</td>
		<td>date('YYYY-MM-DD'), foodId</td>
		<td>PUT</td>
	</tr>
	<tr>
		<td>/entries/{id}</td>
		<td>
			<code>
			{
				id: (int)
			}
			</code>
		</td>
		<td></td>
		<td>DELETE</td>
	</tr>
</table>