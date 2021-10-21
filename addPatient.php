<?php
    include 'header.php';
    include 'config.php';
?>

    <main class="container">
        <h2>Thêm thông tin bệnh nhân</h2>
        <form action="process-add-Patient.php" method="post">
            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">Tên Bệnh nhân:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname" >
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Họ đệm bệnh nhân</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="dateofbirth" class="col-sm-2 col-form-label"> Ngày sinh</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="gender" name="gender">
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="mobile" name="mobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"> Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label"> Chiều cao</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="height" name="height">
                </div>
            </div>
            <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label"> Cân nặng</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="weight" name="weight">
                </div>
            </div>
            <div class="form-group row">
                <label for="blood_type" class="col-sm-2 col-form-label"> Nhóm máu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="blood_type" name="blood_type">
                </div>
            </div>
            <div class="form-group row">
                <label for="created_on" class="col-sm-2 col-form-label">Ngày lập sổ</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="created_on" name="created_on">
                </div>
            </div>
            <div class="form-group row">
                <label for="modified_on" class="col-sm-2 col-form-label">Ngày cập nhật</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="modified_on">
                </div>
            </div>

            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
    
<?php
    include 'footer.php';
?>