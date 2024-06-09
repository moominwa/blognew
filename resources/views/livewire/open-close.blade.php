<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
        }

        .status-container {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">จัดการเปิดปิดการรับสมัคร</h1>
        <form id="registrationForm">
            <div class="form-group">
                <label for="registration_status">สถานะการรับสมัคร:</label>
                <select class="form-control" id="registration_status" name="registration_status">
                    <option value="open">เปิด</option>
                    <option value="closed">ปิด</option>
                </select>
            </div>
            <button type="button" class="btn btn-custom mt-3" onclick="updateRegistrationStatus()">อัพเดทสถานะ</button>
        </form>
        <div class="status-container mt-4">
            <h2>สถานะปัจจุบัน: <span id="current_status" class="font-weight-bold"></span></h2>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fetch current registration status from the server
        $(document).ready(function () {
            updateStatus();
        });

        // Function to fetch and update registration status
        function updateStatus() {
            $.ajax({
                url: 'get_registration_status.php',
                method: 'GET',
                success: function (response) {
                    $('#current_status').text(response);
                    $('#registration_status').val(response);
                }
            });
        }

        // Function to update registration status
        function updateRegistrationStatus() {
            var newStatus = $('#registration_status').val();
            $.ajax({
                url: 'update_registration_status.php',
                method: 'POST',
                data: { registration_status: newStatus },
                success: function (response) {
                    $('#current_status').text(response);
                }
            });
        }
    </script>

</body>

</html>
