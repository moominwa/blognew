@extends('test')
<<<<<<< HEAD
@section('content')
@livewire('registermenu')
=======
@section('contentt')
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
                                        <option value="...............">..............</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <table class="col-md-12">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>รหัสนักศึกษา</th>
                                        <th>รูปภาพผู้เล่น</th>
                                        <th>หลักฐานยืนยันการเป็นนักศึกษา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" name="name1" class="form-control" placeholder="Enter name"></td>
                                        <td><input type="text" name="code1" class="form-control" placeholder="Enter code"></td>
                                        <td><input type="file" name="image1" class="form-control-file"></td>
                                        <td><input type="file" name="imagee1" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" name="name2" class="form-control" placeholder="Enter name"></td>
                                        <td><input type="text" name="code2" class="form-control" placeholder="Enter code"></td>
                                        <td><input type="file" name="image2" class="form-control-file"></td>
                                        <td><input type="file" name="imagee2" class="form-control-file"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" name="name3" class="form-control" placeholder="Enter name"></td>
                                        <td><input type="text" name="code3" class="form-control" placeholder="Enter code"></td>
                                        <td><input type="file" name="image3" class="form-control-file"></td>
                                        <td><input type="file" name="imagee3" class="form-control-file"></td>
                                    </tr>
                                </tbody>
                            </table>







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
>>>>>>> 36b72b22a502b6ee8b95b96aa4fb9a6767f4fc93
@endsection
