<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Project extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($idd)
    {


        $model =  User::find($idd);
        $model->deleted_by = auth()->user()->id;
        $model->save();
        $model->delete();
    }
    public function render()
    {

        $data = User::Paginate(5);
        return view('livewire.project')->with(compact('data'));
    }
}
