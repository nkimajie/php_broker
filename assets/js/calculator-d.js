$(function(){

	calc();

	$('#calc_plan').on('change', calc);
	$('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);

});

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode > 31 && (charCode < 45 || charCode > 57))
		return false;
	return true;
}

function calc() {

	var plan = $('#calc_plan').val();
	var amount = $('#inv_amount').val();
	 
	var percent;

	switch (plan) {
		case '1':
			switch (true) {
				case (amount<1):
					percent = 0;
					break;
			
				case (amount<=99999999999999999):
					percent = 0.12;
					break;	






			   default:
					percent = 0;
			}
			break;
			
			
			
			case '2':
			switch (true) {
				case (amount<2):
					percent = 0;
					break;
				case (amount>4.9999):
					percent = 0;
					break;
				case (amount<=4.9999):
					percent = 168;
					break;	
				
					
			   default:
					percent = 0;
			}
			break;


			case '3':
			switch (true) {
				case (amount<5):
					percent = 0;
					break;
				case (amount>9.9999):
					percent = 0;
					break;
				case (amount<=9.9999):
					percent = 168;
					break;	
				
					
			   default:
					percent = 0;
			}
			break;



			case '4':
			switch (true) {
				case (amount<10):
					percent = 0;
					break;
				case (amount>50):
					percent = 0;
					break;
				case (amount<=50):
					percent = 168;
					break;	
				
					
			   default:
					percent = 0;
			}
			break;

			
		
			
			
	}

$('#assign_per').val(percent+'%'); 
          
	var total = amount*percent/100;
        var total_day = amount*(percent * 24)/100;
        var total_weekly = amount*(percent * (24 * 7))/100;
 
	if(total <= 0){
		$('#net_hourly').text('$ 0.00000000');
	}else{
		$('#net_hourly').text('$ '+( Number(total)).toFixed(8));
	}

if(total_day <= 0){
		$('#net_daily').text('$ 0.00000000');
	}else{
		$('#net_daily').text('$ '+(Number(total_day)).toFixed(8));
	}
	
if(total_weekly <= 0){
		$('#net_weekly').text('$ 0.00000000');
	}else{
		$('#net_weekly').text('$ '+ (Number(total_weekly)).toFixed(8));
	}
	
	

}