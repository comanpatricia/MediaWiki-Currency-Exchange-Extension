<!DOCTYPE html>
<html>
<head>
	<title>Currency Exchange Rates</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app">
		<table>
			<thead>
				<tr>
					<th>Currency</th>
					<th>Rate</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(rate, currency) in rates" :key="currency">
					<td>{{ currency }}</td>
					<td>{{ rate }}</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				rates: {}
			},
			mounted() {
				this.fetchData();
				setInterval(this.fetchData, 60000); // Refresh data every minute
			},
			methods: {
				fetchData() {
					fetch('CurrecyExchange.php')
						.then(response => response.json())
						.then(data => {
							this.rates = data.rates;
						})
						.catch(error => {
							console.error(error);
						});
				}
			}
		});
	</script>
</body>
</html>
