//outputting live data
	$(function(){
		//getting the districts
		$('#selectRegion').change(function(){
			$('#selectDistrict').html(' ');
			$('#blockId').html(' ');
			$('#roundId').html(' ');
			$('#plotId').html('  ');
			var regionData = $('#selectRegion').find(':selected').val();
			$.ajax({
			type:"GET",
			url:'zones/live',
			data:{id:regionData},
			success:function(data){
				data = $.parseJSON(data);
				$.each(data,function(key,value){
				var id = value.id;
				$('#selectDistrict').append('<option data-new="'+id+'">'+value.name+'</option>');
				});
			}
		});
		});
		//getting the blocks
		$('#selectDistrict').change(function(){
			$('#blockId').html(' ');
			$('#roundId').html(' ');
			$('#plotId').html('  ');
			var blockData = $('#selectDistrict').find(':selected').data('new');

			$.ajax({
				type:"GET",
				url: 'zones/live/regiondata',
				data:{blockId: blockData},
				success:function(data){
				 data = $.parseJSON(data);
				 $.each(data,function(key,value){
				 var blockName = value.name;
				 var id = value.id;
				 $('#blockId').append('<option data-block="'+id+'" data-name="'+value.name+'">'+value.name+'</option>');
				});
				},
			});
		});
		//getting the rounds
			$('#blockId').change(function(){
			$('#roundId').html('  ');
			$('#plotId').html('  ');
			var round = $('#blockId').find(':selected').data('block');
			console.log(round);
			$.ajax({
				type:"GET",
				url: 'zones/live/rounddata',
				data:{roundId: round},
				success:function(data){
				 data = $.parseJSON(data);
				 $.each(data,function(key,value){
				 var id = value.id;
				 $('#roundId').append('<option data-round="'+id+'" data-name="'+value.name+'">'+value.name+'</option>');
				});
				},
			});
		});
			//getting the plots
			$('#roundId').change(function(){
			$('#plotId').html('  ');
			var roundId = $('#roundId').find(':selected').data('round');
			var blockId = $('#selectDistrict').find(':selected').data('new');
			var plot1 = $('#blockId').find(':selected').data('name');
			var plot2 = $('#roundId').find(':selected').data('name');
			var plot = plot1 + '-' + plot2 ;
			//console.log(round);
			$.ajax({
				type:"GET",
				url: 'zones/live/plotdata',
				data:{plot:plot},
				success:function(data){
				 console.log(data);
				$('#plotId').append('<option>'+data+'</option>');
				
				},
			});
		});
	});

	
//region-id