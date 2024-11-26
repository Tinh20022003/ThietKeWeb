<div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 5</div>
                        <img src="view/images/banner1.jpg" style="width:720%">
                        <div class="text">One</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 5</div>
                        <img src="view/images/banner8.jpg" style="width:720%">
                        <div class="text">Two</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 5</div>
                        <img src="view/images/banner7.jpg" style="width:720%">
                        <div class="text"> Three</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">4 / 5</div>
                        <img src="view/images/banner6.jpg" style="width:720%">
                        <div class="text"> Four</div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <img src="view/images/banner9.jpg" style="width:720%">
                        <div class="text"> Five </div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                       
                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                       
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==10)||($i==12)||($i==14)||($i==16)||($i==18)||($i==20)||($i==22)||($i==24)||($i==26)||($i==28)||($i==30)||($i==32)||($i==34)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">

                                    <div class="row img"> <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                                      <p> '    .$price.' đ</p> 
                                        <a href="'.$linksp.'">'.$name.'</a>
                                        <div class="row btnaddtocart">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
                                        </form>
                                        </div>
                                </div>';
                                $i+=1;
                        }
                    ?> 
                 

                    <!-- <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images1.jpg" alt=""></div>
                            <p>120.000 đ</p>
                            <a href="#">Excel Ứng Dụng Văn Phòng</a>
                    </div>
                    gười Mới Bắt Đầu</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/images5.jpg" alt=""></div>
                
                        <div class="row img"> <img src="view/images/images9.jpg" alt=""></div>
                            <p>85.000 đ</p>
                            <a href="#">Kế Toán Vỉa Hè</a>
                    </div> -->
                </div> 
            </div>
            <div class="boxphai ">
                <?php include "boxright.php"; ?>
            </div>
        </div>