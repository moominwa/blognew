<?php

namespace App\Livewire\Project;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;


class Add extends Component
{
    use WithFileUploads;
    public $name, $lastname, $phonenumber, $department, $email, $password, $photo;
    public function add()
    {

        // dd($this->name);
        //กำหนดทำ Validation ข้อมูล ตรวจสอบข้อมูล
        $this->validate(
            [

                'name' => 'required|min:2',
                'lastname' => 'required',
            ],
            [
                'name.required' => "กรุณากรอกชื่อ",
                'name.min' => "กรุณากรอกมากกว่า 2 ตัวอักษร",
                'lastname.required' => "กรุณากรอกนามสกุล",
            ]
        );

        try {

            $data = User::create([
                'name' => $this->name,
                'lastname' => $this->lastname,
                'phonenumber' => $this->phonenumber,
                'department' => $this->department,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'created_by' => auth()->user()->id,
            ]);
            if ($this->photo) {
                $fullpath = $this->photo->store('photos', 'public');
                $data = User::find(auth()->user()->id);
                $data->profile_photo_path = $fullpath;
                $data->save();
            }



            return redirect()->to(route('project'));
        } catch (\Exception $e) {
            dd($e);
        }
    }



    public function render()
    {
        return view('livewire.project.add');
    }
}
