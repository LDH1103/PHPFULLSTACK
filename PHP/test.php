<?php

// for ($i = 'A'; $i < 'Z'; $i++) { 
//     echo $i. "\n"; 
// }

// $arr = [];
// for($j = 101; $j <= 105; $j++) {
//     for($i = 0; $i < 5; $i++) {
//         $arr[] = ['plane_name' => 'A'.$j, 'total_seat_num' => 96 , 'line_no' => $i];
//     }
// }

// var_dump($arr);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.1.5.js"></script>
</head>
<body>
    
</body>
</html>
<script>
    $(".btn_payment").click(function() {
  //class가 btn_payment인 태그를 선택했을 때 작동한다.
	
  	IMP.init(/*'가맹점 식별코드'*/);
  	//결제시 전달되는 정보
	IMP.request_pay({
			    pg : 'inicis', 
			    pay_method : 'card',
			    merchant_uid : 'merchant_' + new Date().getTime(),
			    name : '주문명:결제테스트'/*상품명*/,
			    amount : 1000/*상품 가격*/, 
			    buyer_email : 'iamport@siot.do'/*구매자 이메일*/,
			    buyer_name : '구매자이름',
			    buyer_tel : '010-1234-5678'/*구매자 연락처*/,
			    buyer_addr : '서울특별시 강남구 삼성동'/*구매자 주소*/,
			    buyer_postcode : '123-456'/*구매자 우편번호*/
			}, function(rsp) {
				var result = '';
			    if ( rsp.success ) {
			        var msg = '결제가 완료되었습니다.';
			        msg += '고유ID : ' + rsp.imp_uid;
			        msg += '상점 거래ID : ' + rsp.merchant_uid;
			        msg += '결제 금액 : ' + rsp.paid_amount;
			        msg += '카드 승인번호 : ' + rsp.apply_num;
			        result ='0';
			    } else {
			        var msg = '결제에 실패하였습니다.';
			        msg += '에러내용 : ' + rsp.error_msg;
			        result ='1';
			    }
			    if(result=='0') {
			    	location.href= $.getContextPath()+"/Cart/Success";
			    }
			    alert(msg);
			});
    });
</script>