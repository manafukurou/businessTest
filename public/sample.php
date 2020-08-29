<?php

    $dataList[] = array(
        "title" => "上海",
        "discription" => "同国の商業・金融・工業・交通などの中心地。強力な世界都市であり、アメリカのシンクタンクが2017年に発表した総合的な世界都市ランキングにおいて、世界9位と評価された",
        "img" => "img/img1.jpg"
    );
    $dataList[] = array(
        "title" => "ベネチア",
        "discription" => "中世にはヴェネツィア共和国の首都として栄えた都市で、「アドリア海の女王」「水の都」などの別名を持つ",
        "img" => "img/img2.jpg"
    );
    $dataList[] = array(
        "title" => "アムステルダム",
        "discription" => "オランダの首都。北ホラント州の基礎自治体であり、オランダ最大の都市である。商業や観光が盛んなヨーロッパ屈指の世界都市である",
        "img" => "img/img3.jpg"
    );
    $i = 1; 
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Hello, world!</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <span class="text-light">お仕事体験！開発現場をリアルに再現しました！[PHP運用編]</span>
    </nav>

    <div class="p-5">
        <div class="card-deck">
            <?php foreach($dataList as $data){ ?>
                <div class="card" style="width:300px;">
                    <img class="card-img-top" src="<?php echo $data["img"]; ?>" >
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $data["title"]; ?></h5>
                    <p class="card-text"><?php echo $data["discription"]; ?></p>
                    test
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <div class="mt-3 text-center" >
        <a href="https://manafukurou.com/article/?p=269" class="btn btn-danger" style="width:250px">記事に戻る</a>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
