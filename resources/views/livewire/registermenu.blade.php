<div>
    {{-- Be like water. --}}
    <h3 class="text text-center py-2">ใบสมัครเข้าร่วมการแข่งขัน </h3>
    <h3 class="text text-center py-2"> ฟุตบอลคณะเกษตรศาสตร์และเทคโนโลยีต้านภัยยาเสพติด </h3>
    <h3 class="text text-center py-2">ครั้งที่ 17 “17th Agri-Tech CUP Anti Drugs” </h3>
    <section class="login-signup section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="signup">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ui>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ui>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}" class="signup-form row">
                            @csrf
                            <div class="col-md-3">
                                <div class="form-group">

                                    <label for="f-name">ชื่อทีม</label>
                                    <input type="text" class="form-control" id="f-name" name="name"
                                        placeholder="First name">
                                </div>
                            </div>

                            <div class="col-md-5">
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


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="phone">ประเภท</label>
                                    <select id="phone" name="phone" class="form-control">
                                        <option value="" disabled selected>เลือกประเภท</option>
                                        <option value="...............">ชาย</option>
                                        <option value="...............">หญิง</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <table class="col-md-12 text-dark">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>คำนำหน้า</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>รหัสนักศึกษา</th>
                                        <th>รูปภาพผู้เล่น</th>
                                        <th>หลักฐานยืนยันการเป็นนักศึกษา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name1" class="form-control"placeholder="Enter name"></td>
                                        <td><input type="text" name="code1" class="form-control"placeholder="Enter code"></td>
                                        <td><input type="file" name="image1" class="form-control-file"></td>
                                        <td><input type="file" name="imagee1" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name2" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code2" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image2" class="form-control-file"></td>
                                        <td><input type="file" name="imagee2" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name3" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code3" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image3" class="form-control-file"></td>
                                        <td><input type="file" name="imagee3" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name4" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code4" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image4" class="form-control-file"></td>
                                        <td><input type="file" name="imagee4" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name5" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code5" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image5" class="form-control-file"></td>
                                        <td><input type="file" name="imagee5" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name6" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code6" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image6" class="form-control-file"></td>
                                        <td><input type="file" name="imagee6" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name7" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code7" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image7" class="form-control-file"></td>
                                        <td><input type="file" name="imagee7" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name8" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code8" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image8" class="form-control-file"></td>
                                        <td><input type="file" name="imagee8" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name9" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code9" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image9" class="form-control-file"></td>
                                        <td><input type="file" name="imagee9" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name10" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code10" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image10" class="form-control-file"></td>
                                        <td><input type="file" name="imagee10" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name11" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code11" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image11" class="form-control-file"></td>
                                        <td><input type="file" name="imagee11" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name12" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code12" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image12" class="form-control-file"></td>
                                        <td><input type="file" name="imagee12" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name13" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code13" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image13" class="form-control-file"></td>
                                        <td><input type="file" name="imagee13" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name14" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code14" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image14" class="form-control-file"></td>
                                        <td><input type="file" name="imagee14" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
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
                                        </div>
                                    </div></td>
                                        <td><input type="text" name="name15" class="form-control"
                                                placeholder="Enter name"></td>
                                        <td><input type="text" name="code15" class="form-control"
                                                placeholder="Enter code"></td>
                                        <td><input type="file" name="image15" class="form-control-file"></td>
                                        <td><input type="file" name="imagee15" class="form-control-file"></td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- <div class="col-md-3">
                                <label for="f-name">หัวหน้าสาขา</label>
                                <input type="text" class="form-control" id="f-name" name="name"placeholder="ชื่อ">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone number">
                            </div>
                            <div class="col-md-3">
                                <label for="f-name">อาจารย์ที่ปรึกษา</label>
                                <input type="text" class="form-control" id="f-name" name="name"placeholder="ชื่อ">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone number">
                            </div>

                            <div class="col-md-3">
                                <label for="f-name">ผู้จัดการทีม/หัวหน้าทีม</label>
                                <input type="text" class="form-control" id="f-name"
                                    name="name"placeholder="ชื่อ">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone number">
                            </div> --}}


                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="cancel">cancel</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
