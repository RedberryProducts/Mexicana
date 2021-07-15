<x-layout :month="$month">
	<div class="flex justify-center">
		<x-statistic name="Glovo" clicks="{{ $glovoClicks }}" />
		<x-statistic name="Wolt" clicks="{{ $woltClicks }}" />
		<x-statistic name="Bolt" clicks="{{ $boltClicks }}" />
	</div>
</x-layout>