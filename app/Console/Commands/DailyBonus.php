<?php

namespace App\Console\Commands;

use App\Models\PvAccumulationHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DailyBonus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:bonus';

    const ONE_STAR = 1;
    const TWO_STAR = 2;
    const THREE_STAR = 3;
    const FOUR_STAR = 4;

    const ONE_STAR_PERCENTAGE = 0.04;
    const TWO_STAR_PERCENTAGE = 0.07;
    const THREE_STAR_PERCENTAGE = 0.09;
    const FOUR_STAR_PERCENTAGE = 0.10;


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch daily bonus to MLM Member';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $yesterPvAccumulatedHistory = PvAccumulationHistory::whereDate('created_at', Carbon::yesterday())->get();

        $totalEarnedPv = !empty($yesterPvAccumulatedHistory) ? $yesterPvAccumulatedHistory->sum('accumulated_earned_bonus') : null;

        $users = User::all();

        if ($totalEarnedPv) {

            foreach ($users as $user) {

                if ($user->star_level == self::ONE_STAR) {
                    $bonusPercentage = (int)($totalEarnedPv * 0.04);

                    $user->earned_pv = $user->earned_pv + $bonusPercentage;

                    $user->save();
                
                } elseif ($user->star_level == self::TWO_STAR) {

                    $bonusPercentage = $totalEarnedPv * DailyBonus::TWO_STAR_PERCENTAGE;

                    $user->earned_pv +=  $bonusPercentage;

                    $user->save();
                } elseif ($user->star_level == DailyBonus::THREE_STAR) {

                    $bonusPercentage = $totalEarnedPv * DailyBonus::THREE_STAR_PERCENTAGE;

                    $user->earned_pv +=  $bonusPercentage;

                    $user->save();
                } elseif ($user->star_level == DailyBonus::FOUR_STAR) {

                    $bonusPercentage = $totalEarnedPv * DailyBonus::FOUR_STAR_PERCENTAGE;

                    $user->earned_pv +=  $bonusPercentage;

                    $user->save();
                }
            }
        }

        
    }
}