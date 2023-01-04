<?php require ("header_admin.php") ?>

<div id="chart" style="height: 250px;"></div>
<p> 
	<select class ="select-date">	
		<option value ="7ngay" >7 ngày  </option>
		<option value ="28ngay">28 ngày  </option>
		<option value ="90ngay">90 ngày  </option>
		<option value ="365ngay">365  ngày </option>
</select> 
</p>
<p> thống kê theo ngày : <span id="text-date"></span></p> 
<?php
		require '../Carbon/autoload.php';
		use Carbon\Carbon;
		use Carbon\CarbonInterval;
		printf("Now: %s", Carbon::now('Asia/Ho_Chi_Minh'));
		printf("1 day: %s", CarbonInterval::day()->forHumans());
?> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			thongke();		
			var char =  new Morris.Line({
			element: 'chart',
			xkey: 'date',
			ykeys: ['date','order','sales','quantity'],
			labels: ['Don Hang ', 'Danh Thu',' So Luong Ban Ra']
	});
		$('.select-date').change(function(){
			var thoigian = $(this).val(); 
		if(thoigian =='7ngay'){
			var text = '7 ngày qua'; }
		else if(thoigian =='28ngay'){
			var text = '28 ngày qua'; 
		}else if(thoigian =='90ngay'){
			var text = '90 ngày qua'; 
		}else{
			var text = '365 ngày qua';
		}
		$('#text-date').text(text);
		$.ajax({
				url:"thongke.php",
				method: "POST", 
				dataType:"JSON",
				data:{thoigian:thoigian},
				success:function(data)
				{
					char.setData(data); 
					$('#text-date').text(text);
				}
			});	
		});
		function thongke(){
				var text = '365 ngày qua';
				$('#text-date').text(text);	
				$.ajax({
				url:"thongke.php",
				method: "POST", 
				dataType:"JSON",
				success:function(data)
				{
					char.setData(data); 
					$('#text-date').text(text);
				}
			});
			}
	

	});
		</script>
<?php require ("footer_admin.php") ?>	