<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $name, $lastname, $photo;
    public function render()
    {
        $this->name = auth()->user()->name;
        $this->lastname = auth()->user()->lastname;

        // this mean take a photo in class photo

        return view('livewire.profile');
    }
    public function UpdateProfile()
    {


        try {
            if ($this->photo) {
                // upload file ใน in project
                // $this->photo->store('photo','public');
                $fullpath = $this->photo->store('photos', 'public');
                $model = User::find(auth()->user()->id);
                $model->profile_photo_path = $fullpath;
                $model->save();
            }
            User::where('id', auth()->user()->id)
                ->update([
                    'name' => $this->name,
                    'lastname' => $this->lastname
                ]);
            session()->flash('message', 'แก้ไขโปรไฟล์สำเร็จ');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }
    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->lastname = auth()->user()->lastname;
    }
}
