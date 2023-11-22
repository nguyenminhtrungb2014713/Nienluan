<div class="row1 mb ">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row1 mb10 ">
                <h3>Xin chào</h3><i class="fas fa-user"></i>
                <?= $user ?>
            </div>
            <div class="row1 mb10 lienket">
                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                
                
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>
        <?php
        } else {


        ?>
            </form>
            <div class="tk">
            <li>
                <a href="index.php?act=dangnhap">Đăng nhập</a>
            </li>    
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng kí</a>
            </li>
            </div>
        <?php } ?>
    </div>
</div>
<div class="row1 mb ">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menungang">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input class="mt-2" type="submit" name="tiemkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
