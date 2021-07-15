<x-layout :month="$month">
	<div>
		<x-statistic name="Glovo" clicks="{{ $glovoClicks }}" />
		<x-statistic name="Wolt" clicks="{{ $woltClicks }}" />
		<x-statistic name="Bolt" clicks="{{ $boltClicks }}" />
	</div>
</x-layout>