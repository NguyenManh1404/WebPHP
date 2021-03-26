<?php
// bắt đầu session
if (session_id() === '') session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Homework array</title>
    <link rel="icon" href="logo.png" sizes="20x20">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
        integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    body {
        color: black;
    }

    .text1 {
        font-size: 25px;
    }

    .text2 {
        color: orange;
        font-size: 20px;
    }

    p {
        margin: 0;
        padding: 0;
    }

    header {
        padding: 10px 20px;
    }

    #search {
        border-radius: 10px 0 0 10px;
        border: 2px gray solid;
        border-right: none;
        width: 70%;
    }

    #btn-search {
        background: #969696;
        color: gray;
        outline: none;
        border-radius: 0 10px 10px 0;
        border: 2px gray solid;
        border-left: none;
    }

    .nav-btn button {
        margin: 0 15px;
        background: inherit;
        border: none;
        padding: 5px;
    }

    .icon {
        border-radius: 50%;
        border: 1px gray solid;
        font-size: 20px;
        padding: 1px;
    }

    .title {
        border-radius: 20px;
        color: white;
        text-align: center;
        background: rgb(152, 0, 0);
        background: linear-gradient(90deg, rgba(152, 0, 0, 1) 0%, rgba(160, 12, 12, 1) 0%, rgba(226, 117, 105, 1) 50%, rgba(159, 13, 13, 1) 100%);
    }

    .btn-add {
        border-radius: 50%;
        padding: 5px;
        background: inherit;
    }

    .star-vote {
        color: #eba009;
    }

    .vote-num span {
        padding: 0 0 0 15px;
    }
    </style>
</head>

<body>




<?php
error_reporting(0);
        $smartphone = array(
            'hot' => array(
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/226264/xiaomi-mi-11-xanhduong-600x600-600x600.jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '21.990.000',
                    'vote' => 5
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/220833/TimerThumb/samsung-galaxy-s21-(2).jpg",
                    'name' => 'Samsung Galaxy S21 5G',
                    'price' => '20.990.000',
                    'vote' => 4
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/228743/TimerThumb/iphone-12-pro-max-256gb-(2).jpg",
                    'name' => 'iPhone 12 Pro Max 256GB',
                    'price' => '34.490.000',
                    'vote' => 3.5
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/217536/TimerThumb/samsung-galaxy-m51-(6).jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '21.990.000',
                    'vote' => 4.5
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/226264/xiaomi-mi-11-xanhduong-600x600-600x600.jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '21.990.000',
                    'vote' => 3
                )
            ),
            'new' => array(
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/217536/TimerThumb/samsung-galaxy-m51-(6).jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '22.990.000',
                    'vote' => 5
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/233460/oppo-reno5-5g-silver-600x600-1-600x600.jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '17.990.000',
                    'vote' => 1.5
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/233460/oppo-reno5-5g-silver-600x600-1-600x600.jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '25.990.00',
                    'vote' => 3.5
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/233460/oppo-reno5-5g-silver-600x600-1-600x600.jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '18.990.000',
                    'vote' => 4
                ),
                array(
                    'img' => "https://cdn.tgdd.vn/Products/Images/42/226226/TimerThumb/realme-c15-(4).jpg",
                    'name' => 'Xiaomi Mi 10',
                    'price' => '22.990.000',
                    'vote' => 5
                )
            )
        );
?>





    <div class="container-fluid">

      

        <div class="container">

            <ul class="nav nav-tabs" id="product-manage" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="hot-product-tab" data-toggle="tab" href="#hot" role="tab"
                        aria-controls="hot" aria-selected="true">Sản phẩm nôt bật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-product-tab" data-toggle="tab" href="#new" role="tab"
                        aria-controls="new" aria-selected="false">Sản phẩm mới</a>
                </li>
            </ul>
            <div class="tab-content" id="product-manageContent">
                <!-- hot product -->
                <div class="tab-pane fade show active" id="hot" role="tabpanel" aria-labelledby="hot-product-tab">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                        <i class="fas fa-plus mr-2"></i> Thêm sản phẩm</button>
                    <form action="hotProduct.php" method="post">
                        <table class="table">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Vote</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                error_reporting(0);
                                if (isset($_SESSION['phone'])) {
                                    $smartphone = $_SESSION['phone'];
                                };
                                foreach ($smartphone as $key => $value) {
                                    if ($key == "hot") {
                                        echo '<script> var array_temp = '.json_encode($smartphone['hot']).'</script>';
                                        foreach ($value as $k => $v) {
                                            $btn_action = '<button type="button" onclick="update(' . $k . ')" class="btn btn-outline-danger" data-toggle="modal" data-target="#updateProduct"><i class="fas fa-cogs"> </i></button>
                                            <button type="submit" value="' . $k . '" name="deleteProduct" class="btn btn-out-warning"> <i class="fas fa-trash"> </i></button>'
                                ?>
                                <tr>
                                    <td><?php echo $k ?></td>
                                    <td><?php echo $v['name'] ?></td>
                                    <td><img src=<?php echo $v['img'] ?> style="width: 50px;"></td>
                                    <td><?php echo $v['price'] ?></td>
                                    <td>
                                        <?php
                                                    $vote = '';
                                                    if ($v['vote'] == 1 || $v['vote'] == 2 || $v['vote'] == 3 || $v['vote'] == 4 || $v['vote'] == 5) {
                                                        for ($i = 0; $i < $v['vote']; $i++) {
                                                            $vote = $vote . '<i class="fa fa-star fa-fw star-vote" aria-hidden="true"></i>';
                                                        }
                                                    } else {
                                                        for ($i = 0; $i < ($v['vote'] - 0.5); $i++) {
                                                            $vote = $vote . '<i class="fa fa-star fa-fw star-vote" aria-hidden="true"></i>';
                                                        };
                                                        $vote = $vote . '<i class="fa fa-star-half fa-fw star-vote" aria-hidden="true"></i>';
                                                    };
                                                    echo $vote; ?>
                                    </td>
                                    <td><?php echo $btn_action ?></td>
                                </tr>

                                <?php };
                                    };
                                }; ?>
                            </tbody>
                        </table>
                    </form>
                    <!-- Modal addProduct-->
                    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog"
                        aria-labelledby="addProductModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addProductModalLabel">Thêm sản phẩm </h5>
                                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                        <span aria-hidden="true">&times; </span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="hotProduct.php" method="post" class="form-row">
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" name="namep"
                                                placeholder="Tên sản phẩm">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" name="imgp" placeholder="Link ảnh">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" name="pricep" placeholder="Giá">
                                        </div>
                                        <div class="col-12 mt-3">
                                            Đánh giá:(sao)
                                            <div class="row vote-num">
                                                <span><input type="radio" name="votep" value="0.5">0.5</span>
                                                <span><input type="radio" name="votep" value="1">1</span>
                                                <span><input type="radio" name="votep" value="1.5">1.5</span>
                                                <span><input type="radio" name="votep" value="2">2</span>
                                                <span><input type="radio" name="votep" value="2.5">2.5</span>
                                                <span><input type="radio" name="votep" value="3">3</span>
                                                <span><input type="radio" name="votep" value="3.5">3.5</span>
                                                <span><input type="radio" name="votep" value="4">4</span>
                                                <span><input type="radio" name="votep" value="4.5">4.5</span>
                                                <span><input type="radio" name="votep" value="5" checked="true">5</span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-danger mt-3"
                                            name="addProduct">Thêm</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    function update(key) {
                        $("#idd").val(key);
                        $("#named").val(array_temp[key]['name']);
                        $("#imgd").val(array_temp[key]['img']);
                        $("#priced").val(array_temp[key]['price']);
                        $('input[name="voted"]').filter(`[value="${array_temp[key]['vote']}"]`).attr('checked', true);
                    }
                    </script>

                    <!-- Modal updateProduct
                    <div class="modal fade" id="updateProduct" tabindex="-1" role="dialog"
                        aria-labelledby="updateProductLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateProductLabel">Chỉnh sửa thông tin sản phẩm </h5>
                                    <button type="button" class="close" data-dismiss='modal' aria-label="close">
                                        <span aria-hidden="true">&times; </span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="hotProduct.php" method="post" class="form-row">
                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" id="idd" name="idd" disabled="true">
                                        </div>

                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" id="named" name="named">
                                        </div>

                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" id="imgd" name="imgd">
                                        </div>

                                        <div class="col-12 mt-3">
                                            <input type="text" class="form-control" id="priced" name="priced">
                                        </div>
                                        <div class="col-12 mt-3">
                                            Đánh giá:(sao)
                                            <div class="row vote-num">
                                                <span><input type="radio" name="voted" id="0.5" value="0.5">0.5</span>
                                                <span><input type="radio" name="voted" id="1" value="1">1</span>
                                                <span><input type="radio" name="voted" id="1.5" value="1.5">1.5</span>
                                                <span><input type="radio" name="voted" id="2" value="2">2</span>
                                                <span><input type="radio" name="voted" id="2.5" value="2.5">2.5</span>
                                                <span><input type="radio" name="voted" id="3" value="3">3</span>
                                                <span><input type="radio" name="voted" id="3.5" value="3.5">3.5</span>
                                                <span><input type="radio" name="voted" id="4" value="4">4</span>
                                                <span><input type="radio" name="voted" id="4.5" value="4.5">4.5</span>
                                                <span><input type="radio" name="voted" id="5" value="5">5</span>
                                            </div>
                                        </div>
                                        <button type="submit" class="mt-3 btn btn-danger" name="updateProduct">
                                            Cập nhật
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                                </div>
                            </div>
                        </div>

                    </div> -->




                </div>

                <!-- new product -->
                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-product-tab">
                </div>
            </div>

        </div>
    </div>
</body>

</html>