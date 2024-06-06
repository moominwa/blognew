<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">จัดการเปิดปิดการรับสมัคร</h1>
        <form method="POST" action="update_registration_status.php">
            <div class="form-group">
                <label for="registration_status">สถานะการรับสมัคร:</label>
                <select class="form-control" id="registration_status" name="registration_status">
                    <option value="open">เปิด</option>
                    <option value="closed">ปิด</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">อัพเดทสถานะ</button>
        </form>
        <div class="mt-4">
            <h2>สถานะปัจจุบัน: <span id="current_status"></span></h2>
        </div>
    </div>




    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fetch current registration status from the server
        $(document).ready(function () {
            $.ajax({
                url: 'get_registration_status.php',
                method: 'GET',
                success: function (response) {
                    $('#current_status').text(response);
                    $('#registration_status').val(response);
                }
            });
        });
    </script>

</body>

</html>
