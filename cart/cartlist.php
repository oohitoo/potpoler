<?php
    session_start();
?>
    <!DOCTYPE html>
    <html lang="ko">

    <head>
        <link rel="stylesheet" type="text/css" href="/css/testcss.css">
        <link rel="stylesheet" type="text/css" href="/css/maintest.css">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- 3.3.0-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <?
$name = $_SESSION['name'];
$product = $_POST['product'];
$cnt = $_POST['cnt'];
$price = $_POST['price'];

//echo $name.'<br>';
//echo $product.'<br>';
//echo $cnt.'<br>';
//echo $price.'<br>';        
?>

        <body>
            <div class="container">
        
        <div class="row">
            <h2>로고</h2>

            <hr/>
        </div>
    </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form name='price_exec' method='get' onSubmit='submit_value();'>

                                        <!--원래 가격을 hidden된 total_price에 넣어주세요-->
                                        <input type=hidden name='total_price' value='1200'>
                                        <!--계산된 총 가격을 보내기 위함-->
                                        <input type=hidden name='exec_price' value='0'>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#"><? echo $product?></a></h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center">
                                            <select name='getsu' onChange='change_price();'>
                                                <option value='1'>1개</option>
                                                <option value='2'>2개</option>
                                                <option value='3'>3개</option>
                                                <option value='4'>4개</option>
                                                <option value='5'>5개</option>
                                                <option value='6'>6개</option>
                                                <option value='7'>7개</option>
                                            </select>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong>1200</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center">
                                            <strong>원래가격 : <span id='total_price'>0</span>원</strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button><input type=submit value='구매하자~!'>
                                    </form>
                                    </td>
                                </tr>

                                <script>
                                    function submit_value() {
                                        var f = document.price_exec;
                                        opened = window.open('', 'test', 'width=300,height=300');
                                        opened.document.writeln('<pre>총 가격 : ' + f.exec_price.value + '<br>구매갯수 : ' + f.getsu.value);
                                    }

                                    function change_price(value) {
                                        //귀찮으니까 price_exec form을 f로 설정
                                        var f = document.price_exec;
                                        //원가(가장 기초되는 가격)를 읽어온다. 이때 option들은 가장 기초적인 것들로 구성해야 한다.
                                        original_price = parseInt(f.total_price.value);

                                        //모든 값들을 곱한다.
                                        ok_price = original_price * f.getsu.value;

                                        //세자리마다 , 찍어주면 좋겠죠?
                                        //우선 정수를 문자형으로 변환
                                        var checked_price = '' + ok_price;
                                        //만약 합계금액이 십만원 초과이며 천만원 미만일때
                                        if (checked_price.length - 1 >= 6) {
                                            //우선 문자형으로 변환한 가격의 자릿수를 구함
                                            alength = checked_price.length - 1;
                                            //3으로 딱 떨어지게 나머지 구하여 나머지값+원본을 하여 3 6 9 형식으로 맞춤 (3으로 잘라서 붙이기 위하여).
                                            count_r = parseInt(alength % 3);
                                            count_r = 3 - count_r;
                                            count = parseInt(checked_price.length - 1) + parseInt(count_r);
                                            //이건 특수형 (맨 앞부터 남은갯수를 구하기 위함.)
                                            count_rd = parseInt((alength + 1) % 3);
                                            //잘라서 콤마를 붙일 자릿수 구함. first, second, third
                                            first = ((count / 3 - 1) * 3) - 2;
                                            second = first - 3;
                                            third = 0;
                                            //가격 자르기
                                            ook_price_1 = checked_price.substr(first, 3);
                                            ook_price_2 = checked_price.substr(second, 3) + ',';
                                            if (checked_price.substr(third, count_rd) != '') {
                                                ook_price_3 = checked_price.substr(third, count_rd) + ',';
                                            } else {
                                                ook_price_3 = '';
                                            }
                                            //출력할 가격 조합.
                                            print_price = ook_price_3 + ook_price_2 + ook_price_1;

                                            //만약 합계금액이 천원 이상이며 십만원 이하일때
                                        } else if (checked_price.length - 1 > 3 && checked_price.length - 1 < 6) {
                                            ook_price_1 = checked_price.substr(2, 3);
                                            ook_price_2 = checked_price.substr(0, checked_price.length - 3);
                                            print_price = ook_price_2 + ',' + ook_price_1;
                                            //백원단위일 경우.
                                        } else {
                                            print_price = checked_price;
                                        }
                                        //페이지에 보여줌
                                        total_price.innerHTML = print_price;
                                        //form에 결과값 저장
                                        f.exec_price.value = ok_price;
                                    }

                                    //페이지 로딩시 한번 동작시켜주자.
                                    change_price();

                                </script>



                                <tr>
                                    <td class="col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                                <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                                    </td>
                                    <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                                    <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                                    <td class="col-md-1">
                                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h5>Subtotal</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5><strong>$24.59</strong></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h5>Estimated shipping</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5><strong>$6.94</strong></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h3>Total</h3>
                                    </td>
                                    <td class="text-right">
                                        <h3><strong>$31.53</strong></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                                    <td>
                                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <div class="navbar navbar-inverse navbar-fixed-bottom">
                <div class="container">
                    <div class="navbar-text pull=left">
                        <p> © company 2016.</p>
                    </div>

                </div>
            </div>

        </body>

    </html>
