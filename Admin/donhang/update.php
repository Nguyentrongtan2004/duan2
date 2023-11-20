<?php

if (is_array($donhang)) {
    extract($donhang);
}
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Đơn hàng</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Sửa đơn hàng</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <br>
                <form action="index.php?act=updatedh" method="post">
                    <div class="mb-3">
                        <label for="exampleInputId" class="form-label">Mã đơn hàng</label>
                        <input type="text" class="form-control" name="id" value="<?= $id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" name="tentk" value="<?= $tentk ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensp" value="<?= $tensp ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Giá tiền</label>
                        <input type="text" class="form-control" name="gia" value="<?= $gia ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Địa chỉ giao hàng</label>
                        <input type="text" class="form-control" name="diachi_giaohang" value="<?= $diachi_giaohang ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Thời gian mua</label>
                        <input type="text" class="form-control" name="thoigian_mua" value="<?= $thoigian_mua ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Trạng thái</label><br>
                        <div class="row">
                            <div class="form-check">
                                
                                <input type="radio" name="trangthai" id="trangthai" value="1"> Chờ xác nhận <br>
                                <input type="radio" name="trangthai" id="trangthai" value="2"> Đã xác nhận <br>
                                <input type="radio" name="trangthai" id="trangthai" value="3"> Đang xử lý<br>
                                <input type="radio" name="trangthai" id="trangthai" value="4"> Đang vận chuyển<br>
                                <input type="radio" name="trangthai" id="trangthai" value="5"> Giao hàng thành công<br>
                                <input type="radio" name="trangthai" id="trangthai" value="6"> Đã hủy<br>
                                <input type="radio" name="trangthai" id="trangthai" value="7"> Chờ thanh toán<br>
                                <input type="radio" name="trangthai" id="trangthai" value="7"> Đã thanh toán<br>
                            </div>
                        </div>


                        <input type="text" class="form-control" name="trangthai" value="<?= $id_trangthai_donhang ?>">
                    </div>
                    <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật">
                    <input type="reset" class="btn btn-info" value="Nhập lại">

                    <a href="index.php?act=listdh"><input type="button" class="btn btn-primary" value="Danh sách"></a>
                    <?php

                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;

                    ?>
                </form>
            </div>
        </div>
    </div>
</div>

</div>