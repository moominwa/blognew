<?php

namespace App\Livewire\Project;

use Livewire\Component;
use App\Models\User;

class Edit extends Component


{

    public $id,  $name, $lastname, $phonenumber, $email, $department;
    public function mount($id)
    {
        $data = User::find($id);
        $this->name = $data->name;
        $this->lastname = $data->lastname;
        $this->phonenumber = $data->phonenumber;
        $this->email = $data->email;
        $this->department = $data->department;
    }
    public function edit()
    {
        User::where('id', $this->id)->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'department' => $this->department,
            'phonenumber' => $this->phonenumber,
        ]);
    }
    public function render()
    {
        return view('livewire.project.edit');
    }
}
