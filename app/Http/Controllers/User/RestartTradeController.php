<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\TradeStatus;
use Illuminate\Http\Request;

class RestartTradeController extends Controller
{
    use TradeStatus;
    public function restartTrade($id, $model)
    {
        $trade = ($model == 'segment trading') ? SectionTrade::findOrFail($id) : PursueTrade::findOrFail($id);

        $trade->state = $this->processing;
        $trade->segment_bought = 0;
        $trade->segment_sold = 0;

        $trade->save();

        return redirect(route('user.tradinghistory'))->with('toast_success', 'Trading Re-start Successfully!');
    }
}