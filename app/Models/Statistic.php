<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'date',
        'updated_at' => 'date',
    ];

    const Glovo = 'https://glovo.app.link/PlDSyTgszab?fbclid=IwAR0ZNI8dALhrQhC1FuIejSVvKCNudTShjugQ70xCmYLORBC7wRx-_H56Bws&_p=c91729c39f057af1e51c90fbee';
    const Wolt = 'https://wolt.com/ka/geo/tbilisi/restaurant/mexicana-churros-bite-poketeria?utm_source=socialmedia&utm_medium=restaurant&utm_campaign=GEO_SOCIAL_Geo_Mexicana&utm_content=';
    const Bolt = 'https://bolt.eu/en/';

    protected $fillable = [
        'glovo_clicks',
        'wolt_clicks',
        'bolt_clicks',
    ];

    public static function letsFindOrCreate()
    {
        $statistic = Statistic::query()
			->whereMonth('created_at', now()->month)
			->whereYear('created_at', now()->year)
			->first();

		if($statistic === null)
		{
			$statistic = Statistic::create(
				[
					'glovo_clicks' => 0,
					'wolt_clicks' => 0,
					'bolt_clicks' => 0,
				]
			);
		}

        return $statistic;
    }
}
