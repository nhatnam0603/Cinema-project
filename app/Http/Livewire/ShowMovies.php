<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Movie;

class ShowMovies extends Component
{
    public $movielist;

    protected $listeners = ['reloadMovies'];

    public function mount()
    {
        $this->movielist = Movie::get();
    }
    public function render()
    {
        return view('livewire.show-movies');
    }

    public function reloadMovies($type_id)
    {
        $this->movielist = Movie::query();

        if($type_id){
            $this->movielist = $this->movielist->where('type_id', $type_id);
        }

    }
}
