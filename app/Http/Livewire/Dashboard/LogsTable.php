<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class LogsTable extends Component
{
    public $sensors;
    public $regions = null;
    public $logs = null;

    public function render()
    {
        return view('livewire.dashboard.logs-table');
    }
}
