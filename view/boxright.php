
            
                    <!-- <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images1.jpg" alt=""></div>
                            <p>120.000 đ</p>
                            <a href="#">Excel Ứng Dụng Văn Phòng</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images2.jpg" alt=""></div>
                            <p>80.000 đ</p>
                            <a href="#">Tiếng Anh Cho Người Bắt Đầu</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"> <img src="view/images/images3.jpg" alt=""></div>
                            <p>120.000 đ</p>
                            <a href="#">Tự Học Tiếng Anh Cấp Tốc Cho Người Mới Bắt Đầu</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images4.jpg" alt=""></div>
                            <p>90.000 đ</p>
                            <a href="#">Tự Học Tiếng Trung Cho Người Mới Bắt Đầu</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images5.jpg" alt=""></div>
                            <p>122.000 đ</p>
                            <a href="#">Ngữ Pháp Tiếng Anh Bằng Sơ Đồ Tư Duy</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"> <img src="view/images/images6.jpg" alt=""></div>
                            <p>75.000 đ</p>
                            <a href="#">Không Bao Giờ Là Thất Bại Tất Cả Là Thử Thách</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images7.jpg" alt=""></div>
                            <p>155.000 đ</p>
                            <a href="#">Tự Lập Tuổi 20</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images8.jpg" alt=""></div>
                            <p>60.200 đ</p>
                            <a href="#">Chiến Thắng Con Quỷ Trong Bạn</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"> <img src="view/images/images9.jpg" alt=""></div>
                            <p>85.000 đ</p>
                            <a href="#">Kế Toán Vỉa Hè</a>
                    </div> -->
                <!-- </div> 
            </div> -->
            <!-- <div class="boxphai "> -->
                <div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>

                            <div class="row mb10">
                                Xin chào <br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($role==1){?>
                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                    <?php }?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>

                        <?php
                            }else{

                           

                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" > 
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                            <input type="password" name="pass" >
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" >Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                            <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                            
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng kí thành viên</a>
                        </li>
                        <?php   } ?>

                    </div>

                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC SÁCH</div>
                    <div class="boxcontent2 menudoc">
                       <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo ' <li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                            }

                            ?>
                        <!-- <li>
                            <a href="#">Excel Ứng Dụng Văn Phòng</a>
                        </li>
                        <li>
                            <a href="#">Tiếng Anh Cho Người Bắt Đầu</a>
                        </li>
                        <li>
                            <a href="#">Tự Học Tiếng Anh Cấp Tốc Cho Người Mới Bắt Đầu</a>
                        </li>
                        <li>
                            <a href="#">Kế Toán Vỉa Hè</a>
                        </li>
                        <li>
                            <a href="#">Chiến Thắng Con Quỷ Trong Bạn</a>
                        </li>
                        <li>
                            <a href="#">Tự Lập Tuổi 20</a>
                        </li>
                        <li>
                            <a href="#">Không Bao Giờ Là Thất Bại Tất Cả Là Thử Thách</a>
                        </li>
                        <li>
                            <a href="#">Ngữ Pháp Tiếng Anh Bằng Sơ Đồ Tư Duy</a>
                        </li>
                        <li>
                            <a href="#">Tự Học Tiếng Trung Cho Người Mới Bắt Đầu</a>
                        </li>
                        <li>
                            <a href="#">Niềm Tin Thắp Sáng</a>
                        </li>
                        <li>
                            <a href="#">Một Ngày Tiết Kiệm Một Giờ</a>
                        </li> -->
                       </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" >
                            <input type="submit" name="timkiem" value="TÌM KIẾM">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 SÁCH YÊU THÍCH</div>
                    <div class=" row boxcontent">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }

                        ?>

                        <!-- <div class="row mb10 top10">
                            <img src="view/images/images11.jpg" alt="">
                            <a href="#">Nhạc Phi Diễn Nghĩa</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images12.jpg" alt="">
                            <a href="#">Ký Ức Độc Quyền </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images13.jpg" alt="">
                            <a href="#">Mỗi Ngày Tiết Kiệm Một Giờ </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images15.jpg" alt="">
                            <a href="#">Niềm Tin Thắp Sáng</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images16.jpg" alt="">
                            <a href="#">Khoảnh Khắc Thức Tỉnh</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images17.jpg" alt="">
                            <a href="#">Vằng Mặt Một Tấm Lòng</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images18.jpg" alt="">
                            <a href="#">TheVanishingAct</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images1.jpg" alt="">
                            <a href="#">Excel Ứng Dụng Văn Phòng</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images2.jpg" alt="">
                            <a href="#">Tiếng Anh Cho Người Bắt Đầu</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/images3.jpg" alt="">
                            <a href="#">Tự Học Tiếng Anh Cấp Tốc</a>
                        </div> -->
                        
                    <!-- </div>  -->
                    
                </div>
            </div>
        </div>