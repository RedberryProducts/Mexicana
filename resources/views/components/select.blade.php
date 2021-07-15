<div class="grid grid-cols-1 my-5">
  <form action="{{ route('dashboard') }}" class="w-full flex flex-col items-center justify-center">
    <label class="mb-3">{{ $label }}</label>
    <select 
      class="w-3/4 py-2 rounded-lg border-2 border-blue-900 text-black focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
      name="month"
      onchange="this.parentNode.submit()"
    >
      @foreach($values as $key => $y)
        <option 
          value="{{ $key }}" 
          @if($value == $y) selected @endif
        >
          {{ $y }}
        </option>
      @endforeach
    </select>
  </form>
</div>
