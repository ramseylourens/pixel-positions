@props(['employer', 'width' => 90])

<img src="{{ asset('storage/'.$employer->logo) }}" alt="" width="{{ $width }}" class="rounded-xl">
