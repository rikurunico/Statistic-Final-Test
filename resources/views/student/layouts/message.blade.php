{{-- @if ($errors->any())
  <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
  </div>
@endif --}}
@if (Session::get('success'))
  <div class="p-4 fixed top-0 right-0 text-sm text-green-700 bg-green-100 rounded-lg shadow-lg z-[5]" role="alert">
    {{ Session::get('success') }}
  </div>
@endif
