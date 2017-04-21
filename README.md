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
				id: (int)
				username: (string)
				limit: (int)
			}
			</code>
		</td>
		<td></td>
		<td>GET</td>
	</tr>
</table>