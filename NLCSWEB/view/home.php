<div style="overflow: auto;" class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="view/img/bia3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row1 mt-3">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $idsp;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
                    <div class="row1 img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                    <p>' . $price . ' Triệu VNĐ</p>
                    
                    <div class="row1 btnviewcart ">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $idsp . '" >
                            <input type="hidden" name="name" value="' . $namesp . '" >
                            <input type="hidden" name="img" value="' . $img . '" >
                            <input type="hidden" name="price" value="' . $price . '" >
                            <input class="themvaogiohang" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                    <a href="' . $linksp . '">' . $namesp . '</a>
                    </div>';
                $i += 1;
            }
            ?>

        </div>
    </div>


    <div class="boxphai ">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>