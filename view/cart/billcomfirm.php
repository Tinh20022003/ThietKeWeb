<div class="row">
      <!-- <div class="row phuongthuc-dh"> -->
        <div class="row mb">
        <div class="boxtrai mr">
        <div class="row mb">
        <div class="boxtitle"> CẢM ƠN BẠN ĐÃ ĐẶT HÀNG !  </div>
        <div class="row boxcontent" style="text-align:center">
            <h2>Cảm ơn quý khách đã đặt hàng! </h2> 
        </div>

        <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
        ?>
        <div class="row mb">
            <div class="boxtitle"> THÔNG TIN ĐƠN HÀNG  </div>
            <div class="row boxcontent" style="text-align:center">
      <!-- <div class="row phuongthuc-dh"> -->
                <li>- Mã đơn hàng: DMA-<?=$bill['id'];?></li> 
                <li>- Ngày đặt hàng: <?=$bill['ngaydathang'];?></li>  
                <li>- Tổng đơn hàng<?=$bill['total'];?></li> 
                <li>- Phương thức thanh toán<?=$bill['bill_pttt'];?></li>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle"> THÔNG TIN ĐẶT HÀNG  </div>
            <div class="row boxcontent billform">
            <!-- <div class="content bang"> -->

               <table>
                   
                   <tr>    
                       <td>- Người đặt hàng:</td>
                       <td><?=$bill['bill_name'];?> </td>
                   </tr>
                   <tr>
                       <td>- Địa chỉ : </td>
                       <td><?=$bill['bill_address'];?></td>
                   </tr>
                   <tr>
                       <td>- Email : </td>
                       <td><?=$bill['bill_email'];?></td>
                   </tr>
                   <tr>
                       <td>- Điện thoại : </td>
                       <td><?=$bill['bill_tel'];?></td>
                   </tr>
                   <!-- <tr>
                       <td>- Phương thức thanh toán:</td>
                       <td> Thanh toán khi nhận hàng</td>
                      
                   </tr> -->
               </table>

            </div>  
      </div>

        <div class="row mb">
        <!-- <div class="row phuongthuc-dh mb"> -->
            <div class="boxtitle"> CHI TIẾT GIỎ HÀNG  </div>
            <!-- <div class="content vienbang"> -->
            <div class="row boxcontent cart">
            <table>
                    <!-- <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>

                    </tr> -->
                    <?php
                        bill_chi_tiet($billct);
                    ?>
            </table>

         </div>
        </div>

        </div>
        <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div>

         <!-- <div class="nut-dh">
            <a href="index.php?act=mybill">
                <input  type="submit" value="Xem đơn hàng của bạn" >
            </a>
        </div> -->
     
</div>
</div>










