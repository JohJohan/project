Enter username : <br>

<table>
	<tr>
		<td>
			Username :
		</td>

		<td>
			{{ Auth::user()->username }}
		</td>
	</tr>

	<tr>
		<td>
			Email :
		</td>

		<td>
			{{ Auth::user()->emailaddress }}
		</td>
	</tr>

	<tr>
		<td>
			Role level :
		</td>

		<td>
			{{ Auth::user()->role }}
		</td>
	</tr>
</table>