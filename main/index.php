<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="/css/testcss.css">
    <!--    <link rel="stylesheet" type="text/css" href="/css/cardtest.css">-->
    <link rel="stylesheet" type="text/css" href="/css/maintest.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> /**/
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- 3.3.0-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 노필요 -->

    <!--
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->


    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="./logincheck.php" method="post" name="join">
            <table>
                <td width="80px">아이디&nbsp;</td>
                <td width="80px"><input type="text" name="id" placeholder="아이디"></td>
                <td width="80px">패스워드</td>
                <td width="80px"><input type="text" name="pw" placeholder="패스워드"></td>
                <td width="80px"><input type="submit" value="로그인"></td>
            </table>
        </form>
        
        <div class="row">
            <h2>로고</h2>

            <hr/>
        </div>
    </div>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>카테고리</h5>
                                    <hr>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active">음료수</a>
                                        <a href="#" class="list-group-item ">아이스크림</a>
                                        <a href="#" class="list-group-item">커피</a>
                                        <a href="#" class="list-group-item ">과자</a>
                                        <a href="#" class="list-group-item">라면</a>
                                        <a href="#" class="list-group-item">초콜릿/젤리</a>
                                        <a href="#" class="list-group-item">도시락</a>
                                    </div>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>

                </div>

                <div class="col-md-9">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h5>Sidebar Title</h5>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row title-links">
                                <div class="col-md-12">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                        <li class="list-inline-item"><a href="#">Icons</a></li>
                                    </ul>


                                </div>
                            </div>
                            <div class="divider"></div>

                            <div class="row mt-3 mb-4">
                                <div class="col-md-4">
                                    <div class="product border">
                                        <div class="product-img">
                                            <img src="http://www.ansonika.com/panagea/img/tour_1.jpg">
                                        </div>
                                        <div class="product-block">
                                            <h5>프렌치 커피</h5>
                                            <h5 class="text-danger"><br></h5>
                                            <ul class="list-inline ">
                                                <li class="list-inline-item">￦ 1200원</li>
                                            </ul>
                                        </div>
                                        <div class="product-footer">
                                            <div class="row">
                                               <form action="결제" method="post">
                                                <div class="col-md-6">
                                                    <center><button type="submit" class="btn btn-outline-secondary btn-sm">구매하기</button></center>
                                                </div>
                                                </form>
                                                <form action="../cart/cart.php" method="post">
                                                <div class="col-md-6">
                                                    <center><button type="submit" class="btn btn-outline-secondary btn-sm">장바구니</button></center>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product border">
                                        <div class="product-img">
                                            <img src="http://www.ansonika.com/panagea/img/tour_1.jpg">
                                        </div>
                                        <div class="product-block">
                                            <h5>프렌치 커피</h5>
                                            <h5 class="text-danger"><br></h5>
                                            <ul class="list-inline ">
                                                <li class="list-inline-item">￦ 1200원</li>
                                            </ul>
                                        </div>
                                        <div class="product-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center><button type="button" class="btn btn-outline-secondary btn-sm">구매하기</button></center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center><button type="button" class="btn btn-outline-secondary btn-sm">장바구니</button></center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="col-md-4">
                                    <div class="product border">
                                        <div class="product-img">
                                            <img src="http://www.ansonika.com/panagea/img/tour_1.jpg">
                                        </div>
                                        <div class="product-block">
                                            <h5>프렌치 커피</h5>
                                            <h5 class="text-danger"><br></h5>
                                            <ul class="list-inline ">
                                                <li class="list-inline-item">￦ 1200원</li>
                                            </ul>
                                        </div>
                                        <div class="product-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center><button type="button" class="btn btn-outline-secondary btn-sm">구매하기</button></center>
                                                </div>
                                                <div class="col-md-6">
                                                    <center><button type="button" class="btn btn-outline-secondary btn-sm">장바구니</button></center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="product border">
                                        <div class="product-img">
                                            <img src="http://www.ansonika.com/panagea/img/tour_1.jpg">
                                        </div>
                                        <div class="product-block">
                                            <h5>Discover our Featured </h5>
                                            <h5 class="text-danger">Rs. 7.95 Lakh</h5>
                                            <ul class="list-inline ">
                                                <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                                                <li class="list-inline-item"><i class="fa fa-car"></i> Private</li>
                                                <li class="list-inline-item"><i class="fa fa-tint"></i> Diesel</li>
                                            </ul>
                                        </div>
                                        <div class="product-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm">Contact Seller</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm">Contact Seller</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product border">
                                        <div class="product-img">
                                            <img src="http://www.ansonika.com/panagea/img/tour_1.jpg">
                                        </div>
                                        <div class="product-block">
                                            <h5>Discover our Featured </h5>
                                            <h5 class="text-danger">Rs. 7.95 Lakh</h5>
                                            <ul class="list-inline ">
                                                <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                                                <li class="list-inline-item"><i class="fa fa-car"></i> Private</li>
                                                <li class="list-inline-item"><i class="fa fa-tint"></i> Diesel</li>
                                            </ul>
                                        </div>
                                        <div class="product-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm">Contact Seller</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm">Contact Seller</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product border">
                                        <div class="product-img">
                                            <img src="http://www.ansonika.com/panagea/img/tour_1.jpg">
                                        </div>
                                        <div class="product-block">
                                            <h5>Discover our Featured </h5>
                                            <h5 class="text-danger">Rs. 7.95 Lakh</h5>
                                            <ul class="list-inline ">
                                                <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                                                <li class="list-inline-item"><i class="fa fa-car"></i> Private</li>
                                                <li class="list-inline-item"><i class="fa fa-tint"></i> Diesel</li>
                                            </ul>
                                        </div>
                                        <div class="product-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm">Contact Seller</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm">Contact Seller</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-text pull=left">
                <p> © company 2016.</p>
            </div>

        </div>
    </div>

</body>

</html>
