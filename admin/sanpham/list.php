<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="keyw">
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="clickOK" value="GO">
                </form>
           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>HÌNH</th>
                <th>LƯỢT XEM</th>
                <th>SỐ BÌNH LUẬN</th>
                <th></th>
            </tr>
           
            
                <?php 
                foreach ($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp= "index.php?act=suasp&idsp=".$id;
                    $hard_delete = "index.php?act=hard_delete&idsp=" . $id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)) {
                        $hinhpath = "<img src = '".$hinhpath."' width='100px' height='100px'>";
                    }else {
                        $hinhpath="No file img!";
                    }
                    
                    
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$price.'</td>
                <td>'.$hinhpath.'</td>
                <td>'.$luotxem.'</td>
                <td>' .$sobinhluan.'</td>
                <td>
                <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                <a href="' . $hard_delete .'"><input type = "button" value="Xoá cứng" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')";
                </td>
            </tr>';
                }
                ?>
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
<a href="index.php?act=bieudosp"> <input class="mr20" type="button" value="BIỂU ĐỒ bình luận theo sản phẩm"><a>   
        
        </div>
          </form>
         </div>
        </div>



       
    </div>