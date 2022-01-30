<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\TradeStatus;
use Illuminate\Http\Request;

class SuspendTradeController extends Controller
{
    use TradeStatus;
    
    public function suspendTrade($id, $model) 
    {
        $trade = ($model == 'segment trading') ? SectionTrade::findOrFail($id) : PursueTrade::findOrFail($id); 
        
        $trade->state = $this->paused;

        $trade->save();

        return redirect(route('user.tradinghistory'))->with('toast_success', 'Trading Suspended Successfully!');
    }
}