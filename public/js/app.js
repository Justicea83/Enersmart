//outputting live data
	$(function(){
		//getting the districts
		$('#selectRegion').change(function(){
			$('#selectDistrict').html(' ');
			var regionData = $('#selectRegion').find(':selected').val();
			$.ajax({
			type:"GET",
			url:'zones/live',
			data:{id:regionData},
			success:function(data){
				data = $.parseJSON(data);
				$.each(data,function(key,value){
					$('#selectDistrict').append('<option data-id="+'value.id'+">'+value.name+'</option>');
				});
			}
		});
		});
	//getting the blocks //copy and paste the data to continue
	});
//region-id