<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Star;

class StarComponent extends Component
{
    public Star $star;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $this->star = Star::firstOrCreate(['id' => $id]);
    }

    public function toggleStar()
    {
        sleep(1);
        $this->star->is_star = !$this->star->is_star;
        $this->star->save();
    }

    public function render()
    {
        return view('livewire.star-component');
    }
}
