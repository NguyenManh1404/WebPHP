<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item .decs {
            display: block;


        }


        .owl-item {
            display: flex;
            border: 0.1px solid lightgray;
            padding: 5px 10px;
        }

        span {
            display: block;
        }

        .owl-wrapper {
            display: flex !important;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <?php

    $dietthoai = [
        "Nổi bật nhất" => array(
            " Nokia 8000 4G" => array(
                "img"=>'https://cdn.tgdd.vn/Products/Images/42/101850/nokia-230-xam-dam-600x600-600x600.jpg',
                "gia" => "1.790.000₫",
                "Danhgia" => "17 đánh giá",
                "Màn hình" => '2.8", QVGA',
                "Camera" => "2 MP",
                "Thẻ nhớ" => "MicroSD, hỗ trợ tối đa 32 GB",
                "Danh bạ" => "1500 số",
                "SIM" => "2 Nano SIM",
                "Pin" => "1500 mAh",
            ),
            " Nokia 230" => array(
                "img"=>'https://cdn.tgdd.vn/Products/Images/42/219799/nokia-c2-xanh-600x600-1-600x600.jpg',

                "gia" => "1.250.000₫",
                "Danhgia" => "177 đánh giá",
                "Màn hình" => '2.8", QVGA',
                "Camera" => "2 MP",
                "Thẻ nhớ" => "MicroSD, hỗ trợ tối đa 32 GB",
                "Danh bạ" => "1000 số",
                "SIM" => "2 Nano SIM",
                "Pin" => "1200 mAh",
            ),

            "Nokia 105 Single SIM (2019)" => array(
                "img"=>'https://cdn.tgdd.vn/Products/Images/42/211934/nokia-105-2019-black-600x600.jpg',

                "gia" => "390.000₫",
                "Danhgia" => "33 đánh giá",
                "Màn hình" => '1.77", QQVGA',
                "Camera" => " ",
                "Thẻ nhớ" => " ",
                "Danh bạ" => "2000 số",
                "SIM" => "1  SIM",
                "Pin" => "800 mAh",
            ),
           



        ),
        "Sản phẩm mới" => array(
            " Nokia 8000 4G" => array(
                "img"=>'https://cdn.tgdd.vn/Products/Images/42/101850/nokia-230-xam-dam-600x600-600x600.jpg',
                "gia" => "1.790.000₫",
                "Danhgia" => "17 đánh giá",
                "Màn hình" => '2.8", QVGA',
                "Camera" => "2 MP",
                "Thẻ nhớ" => "MicroSD, hỗ trợ tối đa 32 GB",
                "Danh bạ" => "1500 số",
                "SIM" => "2 Nano SIM",
                "Pin" => "1500 mAh",
            ),
            " Nokia 230" => array(
                "img"=>'https://cdn.tgdd.vn/Products/Images/42/219799/nokia-c2-xanh-600x600-1-600x600.jpg',

                "gia" => "1.250.000₫",
                "Danhgia" => "177 đánh giá",
                "Màn hình" => '2.8", QVGA',
                "Camera" => "2 MP",
                "Thẻ nhớ" => "MicroSD, hỗ trợ tối đa 32 GB",
                "Danh bạ" => "1000 số",
                "SIM" => "2 Nano SIM",
                "Pin" => "1200 mAh",
            ),

            "Nokia 105 Single SIM (2019)" => array(
                "img"=>'https://cdn.tgdd.vn/Products/Images/42/211934/nokia-105-2019-black-600x600.jpg',

                "gia" => "390.000₫",
                "Danhgia" => "33 đánh giá",
                "Màn hình" => '1.77", QQVGA',
                "Camera" => " ",
                "Thẻ nhớ" => " ",
                "Danh bạ" => "2000 số",
                "SIM" => "1  SIM",
                "Pin" => "800 mAh",
            )
           
        )
    ];

    $content;
    foreach ($dietthoai as $_key => $_value) {
        $content .= "<br> <h1 style='text-align:center;background-color:green;'>$_key</h1> <br><br> 
        
    <div class='owl-wrapper-outer'>
    <div class='owl-wrapper'>";



        foreach ($_value as $key => $value) {

            $content .= (string)"
        <div class='owl-item' style='width: 341px;'>
        <div class='item' data-index='0'>
            <a href='/dtdd/nokia-8000-4g' class=' vertion2020 large' data-s='0'>
                <div class='heightlabel'>

                </div>
                <img width='180' height='180' src='{$value['img']}' class='lazy' alt='Nokia 8000 4G'>

                <h3> $key</h3>
                <div class='props'>
                </div>


                <div class='price'>
                    <strong> {$value['gia']}</strong>
                </div>
                <div class='ratingresult'>
                    <i class='icontgdd-ystar'></i>
                    <i class='icontgdd-ystar'></i>
                    <i class='icontgdd-gstar'></i>
                    <i class='icontgdd-gstar'></i>
                    <i class='icontgdd-gstar'></i>
                    <span>17 đánh giá</span>
                </div>


                <input class='spInfo' data-brand='Nokia' data-cat='Điện thoại' data-code='0130018000429' data-price='1790000' data-pro='3' data-version='' id='data230812' name='data230812' type='hidden' value='230812'>
            </a>

            <div class='desc' style='display: block;'>
                <span>$Manhinh:{$value['Màn hình']} ', QVGA</span><span>Camera: {$value['Camera']}</span><span>Thẻ nhớ:{$value['Thẻ nhớ']}</span><span>Danh bạ: {$value['Danh bạ']}</span><span>SIM:{$value['SIM']}</span><span>Pin:{$value['Pin']}</span>
            </div>
        </div>
    </div>";
        }
        $content .= "   </div> </div>  ";
    }
    ?>
    <?php echo $content ?>



</body>

</html>