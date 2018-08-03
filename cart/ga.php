상품명 : 금반지에용.
원래가격 : <span id='total_price'>0</span>원
<form name='price_exec' method='get' onSubmit='submit_value();'>

<!--원래 가격을 hidden된 total_price에 넣어주세요-->
<input type=hidden name='total_price' value='150000'>
<!--계산된 총 가격을 보내기 위함-->
<input type=hidden name='exec_price' value='0'>

종류 : <select name='jongryu' onChange='change_price();'>
<option value='1'>14k</span>
<option value='1.3'>18k</span>
<option value='1.6'>순금</span>
</selecT>
수량 : <select name='getsu' onChange='change_price();'>
<option value='1'>1개</option>
<option value='2'>2개</option>
<option value='3'>3개</option>
<option value='4'>4개</option>
<option value='5'>5개</option>
<option value='6'>6개</option>
<option value='7'>7개</option>
</select>
성별 : <select name='sex' onChange='change_price();'>
<option value='1'>여자꺼</option>
<option value='1.5'>남자꺼</option>
</select>

<script>
function submit_value(){
var f=document.price_exec;
opened=window.open('','test','width=300,height=300');
opened.document.writeln('<pre>총 가격 : '+f.exec_price.value+'<br>구매갯수 : '+f.getsu.value+'<br>종류 : '+f.sex.value);
}

function change_price(value){
//귀찮으니까 price_exec form을 f로 설정
var f=document.price_exec;
//원가(가장 기초되는 가격)를 읽어온다. 이때 option들은 가장 기초적인 것들로 구성해야 한다.
original_price=parseInt(f.total_price.value);

//모든 값들을 곱한다.
ok_price=original_price * f.jongryu.value * f.getsu.value * f.sex.value;

//세자리마다 , 찍어주면 좋겠죠?
//우선 정수를 문자형으로 변환
var checked_price=''+ok_price;
//만약 합계금액이 십만원 초과이며 천만원 미만일때
if(checked_price.length-1>=6){
//우선 문자형으로 변환한 가격의 자릿수를 구함
alength=checked_price.length-1;
//3으로 딱 떨어지게 나머지 구하여 나머지값+원본을 하여 3 6 9 형식으로 맞춤 (3으로 잘라서 붙이기 위하여).
count_r=parseInt(alength%3);
count_r=3-count_r;
count=parseInt(checked_price.length-1)+parseInt(count_r);
//이건 특수형 (맨 앞부터 남은갯수를 구하기 위함.)
count_rd=parseInt((alength+1)%3);
//잘라서 콤마를 붙일 자릿수 구함. first, second, third
first=((count/3-1)*3)-2;
second=first-3;
third=0;
//가격 자르기
ook_price_1=checked_price.substr(first,3);
ook_price_2=checked_price.substr(second,3)+',';
if(checked_price.substr(third,count_rd)!=''){
ook_price_3=checked_price.substr(third,count_rd)+',';
}else{
ook_price_3='';
}
//출력할 가격 조합.
print_price=ook_price_3+ook_price_2+ook_price_1;

//만약 합계금액이 천원 이상이며 십만원 이하일때
}else if(checked_price.length-1>3 && checked_price.length-1<6){
ook_price_1=checked_price.substr(3,3);
ook_price_2=checked_price.substr(0,checked_price.length-3);
print_price=ook_price_2+','+ook_price_1;
//백원단위일 경우.
}else{
print_price=checked_price;
}
//페이지에 보여줌
total_price.innerHTML=print_price;
//form에 결과값 저장
f.exec_price.value=ok_price;
}

//페이지 로딩시 한번 동작시켜주자.
change_price();
</script>
<input type=submit value='구매하자~!'>