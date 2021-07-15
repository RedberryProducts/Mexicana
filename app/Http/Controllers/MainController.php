<?php

namespace App\Http\Controllers;

use App\Models\Statistic;

class MainController extends Controller
{
	public function landing()
	{
		$data = [
			'glovoLink' => Statistic::Glovo,
			'woltLink' => Statistic::Wolt,
			'boltLink' => Statistic::Bolt,
		];

		return view('landing', $data);
	}

	/**
	 * Get current month statistics.
	 */
	public function statistics()
	{
		$year = now()->year;
		$month = (int) request()->get('month') ?? now()->month - 1;
		
		$statistic = Statistic::query()
			->whereMonth('created_at', $month + 1)
			->whereYear('created_at', $year)
			->first();

		$data = [
			'glovoClicks' => $statistic ? $statistic->glovo_clicks: 0,
			'woltClicks' => $statistic ? $statistic->wolt_clicks : 0,
			'boltClicks' => $statistic ? $statistic->bolt_clicks : 0,
			'month' => $month,
			'year' => $year,
		];

		return view('dashboard', $data);
	}
	
	/**
	 * Click special restoraunt.
	 */
	public function click()
	{
		$restoraunt = request()->get('restoraunt');
		$link = request()->get('link');
		$statistic = Statistic::letsFindOrCreate();

		$restoraunt === 'glovo' && $statistic->increment('glovo_clicks');
		$restoraunt === 'wolt' && $statistic->increment('wolt_clicks');
		$restoraunt === 'bolt' && $statistic->increment('bolt_clicks');
		
		return redirect()->to($link);
	}
}
