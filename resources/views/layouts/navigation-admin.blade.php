<aside class="w-11/12 px-3 py-4 mr-5 text-white bg-blue-800 rounded h-11/12 w-72" aria-label="Sidebar">
    <div class="">
      <h3 class="mt-5 mb-5 text-2xl font-bold text-center" >
      <img src="{{ asset('img/ILKOM.webp') }}" class="pl-6 py-3 px-10 mt-6 h-auto w-auto" alt=""> Computer Science</h3>
      <ul class="space-y-2">
        <li>
          <a href="/" class="flex items-center p-2 text-base font-normal rounded-lg text-white-900">
            <i class="fa-solid fa-table-columns"></i>
            <span class="block py-2 pl-3 pr-4 ml-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0"">Home</span>
          </a>
        </li>
        <li>
          <a href="{{route('student.index')}}" class="flex items-center p-2 text-base font-normal rounded-lg text-white-900">
            <i class="fa-solid fa-table-columns " ></i>
            <span class="block py-2 pl-3 pr-4 ml-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0">Student Data</span>
          </a>
        </li>
        <li>
          <div class="flex items-center p-2 text-base font-normal rounded-lg text-white-900">
              <i class="mr-3 fa-solid fa-table-columns"></i>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
          </div>
        </li>
      </ul>
    </div>
  </aside>
