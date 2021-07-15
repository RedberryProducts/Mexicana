<?php

/**
 * Get selectable years.
 */
function get_selectable_years(): array
{
	$selectableYears = [];
	for($i = now()->year; $i >= 2020 ; $i--)
	{
		$selectableYears []= $i;
	}

	return $selectableYears;
}

/**
 * Get months.
 */
function get_months()
{
	return [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'Jule',
		'August',
		'September',
		'October',
		'November',
		'December',
	];
}

/**
 * Get month.
 */
function get_month($idx)
{
	return get_months()[$idx];
}