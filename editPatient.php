<?php
include 'config.php';
include 'header.php';

$id =$_GET['id'];

$sql = "SELECT * from patient where patientid=$id";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $firstname = $_POST['lirstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $weight = $_POST['eweight'];
    $blood_type = $_POST['blood_type'];
    $created_on = $_POST['created_on'];
    $modified_on = $_POST['modified_on'];
        }
}
?>

<main>
    <div class="container">
        <h2>Cập nhật thông tin bệnh nhân</h2>
        <form action = "process_editPatient.php" method="POST">
            <input type="hidden" class="form-control" name='id' value = "<?php echo $id; ?>">
            <div class="mb-3">
                <label for="firstname" class="form-label">Tên</label>
                <input type="text" class="form-control" name='firstname' value = "<?php echo $firstname; ?>">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Họ</label>
                <input type="text" class="form-control" name="lastname"  value = "<?php echo $lastname; ?>">
            </div>
            <div class="mb-3">
                <label for="dateofbirth" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" name="dateofbirth"  value = "<?php echo $dateofbirth; ?>">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Giới tính</label>
                <input type="text" class="form-control" name="gender"  value = "<?php echo $gender; ?>">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">SDT</label>
                <input type="text" class="form-control" name="mobile"  value = "<?php echo $mobile; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email"  value = "<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Chiều cao</label>
                <input type="text" class="form-control" name="height"  value = "<?php echo $height; ?>">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Cân nặng</label>
                <input type="text" class="form-control" name="weight"  value = "<?php echo $weight; ?>">
            </div>
            <div class="mb-3">
                <label for="blood_type" class="form-label">Nhóm máu</label>
                <input type="text" class="form-control" name="blood_type"  value = "<?php echo $gender; ?>">
            </div>
            <div class="mb-3">
                <label for="created_on" class="form-label"> Ngày lập sổ</label>
                <input type="date" class="form-control" name="created_on"  value = "<?php echo $created_on; ?>">
            </div>
            <div class="mb-3">
                <label for="modified_on" class="form-label"> Ngày cập nhật</label>
                <input type="date" class="form-control" name="modified_on"  value = "<?php echo $modified_on; ?>">
            </div>
            
            <div class="mb-3">
            <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>