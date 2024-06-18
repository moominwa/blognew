<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการตารางแข่งขัน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .add-btn-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-btn-group .btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3 class="text text-center py-2">ใบสมัครเข้าร่วมการแข่งขัน </h3>
        <h3 class="text text-center py-2"> ฟุตบอลคณะเกษตรศาสตร์และเทคโนโลยีต้านภัยยาเสพติด </h3>
        <h3 class="text text-center py-2">ครั้งที่ 17 “17th Agri-Tech CUP Anti Drugs” </h3>

        <form id="scheduleForm" method="POST" action="save_schedule.php">
            <div class="table-responsive">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="form-group">
                            <label for="f-name">ชื่อทีม</label>
                            <input type="text" class="form-control" id="f-name" name="name" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="form-group">
                            <label for="l-name">สังกัดสาขา</label>
                            <select id="l-name" name="lastname" class="form-control">
                                <option value="" disabled selected>เลือกสาขา</option>
                                <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                                <option value="สัตวศาสตร์">สัตวศาสตร์</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="phone">ประเภท</label>
                            <select id="phone" name="phone" class="form-control">
                                <option value="" disabled selected>เลือกประเภท</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                                        <th>คำนำหน้า</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>รหัสนักศึกษา</th>
                                        <th>เบอร์เสื้อ</th>
                                        <th>รูปภาพผู้เล่น</th>
                                        <th>หลักฐานยืนยันการเป็นนักศึกษา</th>
                                        <th>การดำเนินการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- แถวตัวอย่าง -->
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td><input type="text" name="name1"class="form-control"placeholder="ชื่อ-นามสกุล"></td>
                            <td><input type="text" name="code1"class="form-control"placeholder="รหัส-นักศึกษา"></td>
                            <td><input type="text" name="codenumber"class="form-control"placeholder="เบอร์เสื้อ"></td>
                            <td><input type="file" name="image1" class="form-control-file"></td>
                            <td><input type="file" name="imagee1" class="form-control-file"></td>

                            <td class="text-center col-mt-6">
                                <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                                <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                                <button type="button" class="btn btn-primary save-btn"
                                    style="display: none;">บันทึก</button>
                            </td>
                        </tr>
                        <!-- เพิ่มแถวตารางแข่งขันตามต้องการ -->
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-4">
                <button type="button" class="btn btn-success add-row-btn">เพิ่มแถว</button>
                <button type="submit" class="btn btn-primary">บันทึกตารางแข่งขัน</button>
            </div>
        </form>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const editButtons = document.querySelectorAll('.edit-btn');
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const saveButtons = document.querySelectorAll('.save-btn');
        const addRowButton = document.querySelector('.add-row-btn');

        // Function to handle edit button click
        editButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const row = button.closest('tr');
                const selectElements = row.querySelectorAll('select, input[type="text"], input[type="file"]');
                selectElements.forEach((select) => {
                    select.removeAttribute('disabled');
                });
                button.style.display = 'none';
                row.querySelector('.save-btn').style.display = 'inline-block';
            });
        });

        // Function to handle save button click
        saveButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const row = button.closest('tr');
                const selectElements = row.querySelectorAll('select, input[type="text"], input[type="file"]');
                selectElements.forEach((select) => {
                    select.setAttribute
                    ('disabled', 'disabled');
                 });
                 button.style.display = 'none';
                 row.querySelector('.edit-btn').style.display = 'inline-block';
             });
         });

         // Function to handle delete button click
         deleteButtons.forEach((button) => {
             button.addEventListener('click', () => {
                 const confirmation = confirm("คุณแน่ใจหรือไม่ว่าต้องการลบแถวนี้?");
                 if (confirmation) {
                     const row = button.closest('tr');
                     row.remove();
                     updateRowNumbers(); // Update row numbers after deletion
                 }
             });
         });

         // Function to handle add row button click
         addRowButton.addEventListener('click', () => {
             const tableBody = document.querySelector('tbody');
             const newRow = document.createElement('tr');
             newRow.innerHTML = `
                 <td class="text-center">${tableBody.rows.length + 1}</td>
                 <td>
                     <select name="lastname${tableBody.rows.length + 1}" class="form-control">
                         <option value="" disabled selected>คำนำหน้า</option>
                         <option value="เด็กชาย">เด็กชาย</option>
                         <option value="เด็กหญิง">เด็กหญิง</option>
                         <option value="นาย">นาย</option>
                         <option value="นาง">นาง</option>
                         <option value="นางสาว">นางสาว</option>
                     </select>
                 </td>
                 <td><input type="text" name="name${tableBody.rows.length + 1}" class="form-control" placeholder="ชื่อ-นามสกุล"></td>
                 <td><input type="text" name="code${tableBody.rows.length + 1}" class="form-control" placeholder="รหัส-นักศึกษา"></td>
                 <td><input type="text" name="codenumber${tableBody.rows.length + 1}" class="form-control" placeholder="เบอร์เสื้อ"></td>
                 <td><input type="file" name="image${tableBody.rows.length + 1}" class="form-control-file"></td>
                 <td><input type="file" name="imagee${tableBody.rows.length + 1}" class="form-control-file"></td>
                 <td class="text-center">
                     <button type="button" class="btn btn-warning edit-btn">แก้ไข</button>
                     <button type="button" class="btn btn-danger delete-btn">ลบ</button>
                     <button type="button" class="btn btn-primary save-btn" style="display: none;">บันทึก</button>
                 </td>
             `;
             tableBody.appendChild(newRow);

             const editButton = newRow.querySelector('.edit-btn');
             const deleteButton = newRow.querySelector('.delete-btn');
             const saveButton = newRow.querySelector('.save-btn');

             // Function to handle edit button click for new row
             editButton.addEventListener('click', () => {
                 const selectElements = newRow.querySelectorAll('select, input[type="text"], input[type="file"]');
                 selectElements.forEach((select) => {
                     select.removeAttribute('disabled');
                 });
                 editButton.style.display = 'none';
                 newRow.querySelector('.save-btn').style.display = 'inline-block';
             });

             // Function to handle save button click for new row
             saveButton.addEventListener('click', () => {
                 const selectElements = newRow.querySelectorAll('select, input[type="text"], input[type="file"]');
                 selectElements.forEach((select) => {
                     select.setAttribute('disabled', 'disabled');
                 });
                 saveButton.style.display = 'none';
                 newRow.querySelector('.edit-btn').style.display = 'inline-block';
             });

             // Function to handle delete button click for new row
             deleteButton.addEventListener('click', () => {
                 const confirmation = confirm("คุณแน่ใจหรือไม่ว่าต้องการลบ");
                 if (confirmation) {
                     newRow.remove();
                     updateRowNumbers(); // Update row numbers after deletion
                 }
             });
         });

         // Function to update row numbers after deletion
         function updateRowNumbers() {
             const rows = document.querySelectorAll('tbody tr');
             rows.forEach((row, index) => {
                 row.querySelector('td.text-center').textContent = index + 1;
             });
         }
     });
 </script>
</body>
</html>
