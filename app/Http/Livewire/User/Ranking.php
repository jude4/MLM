<?php

namespace App\Http\Livewire\User;

use App\Models\Ranking as ModelsRanking;
use Livewire\Component;
use Carbon\Carbon;

class Ranking extends Component
{
    public $startDate;
    public $endDate;

    public $searchOption = 'day';
    public $rankings;
    public $timeInstance;

    public function mount()
    {
        $this->rankings = ModelsRanking::orderBy('yield', 'DESC')->get();
    }

    public function showDateFor($value)
    {
        $this->searchOption = $value;
        $carbon = new Carbon();
        
        switch ($value) {
            case 'day':
                $this->timeInstance = now()->subDay()->toDateTimeString();
                break;

            case 'week':
                $this->timeInstance = now()->subWeek()->toDateTimeString();
                break;

            case 'month':
                $this->timeInstance = now()->subMonth()->toDateTimeString();
                break;

            case '3months':
                $this->timeInstance = now()->subMonths(3)->toDateTimeString();
                break;

            default:
                # code...
                break;
        }

        $this->rankings = ModelsRanking::where('created_at', '>=', $this->timeInstance)
                ->orderBy('yield', 'DESC')
                ->get();
    }

    public function search()
    {
        $startDate = Carbon::parse($this->startDate)->toDateTimeString() ?? now();
        $endDate = Carbon::parse($this->endDate)->toDateTimeString() ?? now();

        $this->rankings = ModelsRanking::where('created_at', '>=', $startDate)
        ->where('created_at', '<=', $endDate)
        ->orderBy('yield', 'DESC')
        ->get();
    }

    public function render()
    {
        return view('livewire.user.ranking');
    }
}
