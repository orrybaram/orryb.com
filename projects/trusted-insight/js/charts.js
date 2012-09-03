 /* Investment Charts (high-charts)
	================================================== */
	
	
	//GEOGRAPHIES CHART
	var geoChart;
	geoChart = new Highcharts.Chart({
		chart: {
			renderTo: 'geoChart',
			 plotBackgroundColor: null,
	         plotBorderWidth: null,
	         plotShadow: true,
	         
		},
		credits: {
			enabled: false
		},
		
		title: {
			text: 'Geographies',
			style: {
				color: '#222222',
				fontSize: '16px'
			},
			y: 10,
			floating:true
		},
		tooltip: {
	        formatter: function() {
	        	return '<strong>'+ this.point.name +'</strong>: '+ this.y +' %';
	        }
      	},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled:false,
					}
				}
		},
		series: [{
			type: 'pie',
			name: 'Geographies',
			data: [
				['New York', 45.0],
				['Tokyo', 26.8],
				['Hong Kong', 12.8],
				['Philadelphia', 8.5],
				['Moon', 6.2],
				['Mexico', 0.7]
			]
		}]
		
	});
	
	//ASSET CHART
	var assetChart;
	assetChart = new Highcharts.Chart({
		chart: {
			renderTo: 'assetChart',
			 plotBackgroundColor: null,
	         plotBorderWidth: null,
	         plotShadow: true,
	         
		},
		credits: {
			enabled: false
		},
		
		title: {
			text: 'Assets',
			style: {
				color: '#222222',
				fontSize: '16px'
			},
			y: 10,
			floating:true
		},
		tooltip: {
	        formatter: function() {
	        	return '<strong>'+ this.point.name +'</strong>: '+ this.y +' %';
	        }
      	},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled:false,
					}
				}
		},
		series: [{
			type: 'pie',
			name: 'Assets',
			data: [
				['Asset 1', 18],
				['Asset 2', 12],
				['Asset 3', 43],
				['Asset 4', 9],
				['Asset 5', 12],
				['Asset 6', 6]
			]
		}]
		
	});
	
	//CHART 3
	var firmChart;
	firmChart = new Highcharts.Chart({
		chart: {
			renderTo: 'firmChart',
			 plotBackgroundColor: null,
	         plotBorderWidth: null,
	         plotShadow: true,
	         
		},
		credits: {
			enabled: false
		},
		
		title: {
			text: 'Firms',
			style: {
				color: '#222222',
				fontSize: '16px'
			},
			y: 10,
			floating:true
		},
		tooltip: {
	        formatter: function() {
	        	return '<strong>'+ this.point.name +'</strong>: '+ this.y +' %';
	        }
      	},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled:false,
					}
				}
		},
		series: [{
			type: 'pie',
			name: 'Firms Chart',
			data: [
				['Firm 1', 12],
				['Firm 2', 28],
				['Firm 3', 17],
				['Firm 4', 20],
				['Firm 5', 8],
				['Firm 6', 15]
			]
		}]
		
	});