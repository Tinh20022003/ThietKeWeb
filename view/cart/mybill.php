<!-- <div class="row phuongthuc-dh mb"> -->
<div class="row mb">
        <div class="boxtrai mr">


        <div class="row mb">

              <div class="boxtitle"> ĐƠN HÀNG CỦA BẠN  </div>
              <!-- <div class="vienbang"> -->
                <div class="row boxcontent cart">
                <table>
                    <tr>
                       
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
    
                    <?php
                        if(is_array($listbill)){
                            foreach ( $listbill as $bill) {
                                extract($bill);
                                $ttdh=get_ttdh($bill['bill_status']);
                                $countsp=loadall_cart_count($bill['id']);
                                echo'<tr>
                                        <td>DAM-'.$bill['id'].'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$bill['total'].' vnd</td>
                                        <td>'.$ttdh.'</td>
                                   </tr>';
    
                            }
                        }
                    ?>
                    <?=$bill;?>
                </table>
                
            </div>
        </div>
        </div>
        <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div>
</div>