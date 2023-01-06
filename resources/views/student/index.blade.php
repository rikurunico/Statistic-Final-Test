<x-template-layout>

    <div class="flex flex-col w-[1300px]">
   <div class="relative w-full overflow-x-auto ">
    <h1 class="my-10 text-3xl font-bold">Student Data</h1>
    <a href="{{ route('student.create') }}"><button class="focus:outline-none text-white bg-teal-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">Add Data</button></a>
    <a href=""><button class="focus:outline-none text-white bg-teal-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Export PDF</button></a>
    <a href=""><button class="focus:outline-none text-white bg-teal-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Export EXCEL</button></a>
        <style>
            dialog[open] {
                animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
            }

            dialog::backdrop {
                background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
                backdrop-filter: blur(3px);
            }

            @keyframes appear {
            from {
                opacity: 0;
                transform: translateX(-3rem);
                }

            to {
                opacity: 1;
                transform: translateX(0);
                }
            }
        </style>

            <section class="flex">
            <button onclick="document.getElementById('myModal').showModal()" id="btn" class="focus:outline-none text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Import Students Data</button>
            </section>

                <dialog id="myModal" class="p-2 bg-white rounded-md w-72 h-72 md:w-1/2 ">
                    <div class="flex flex-col w-full h-auto ">
                        <!-- Header -->
                            <div class="flex items-center justify-center w-full h-auto">
                            <div class="flex items-center justify-center w-10/12 h-auto py-3 text-2xl font-bold">
                            Import Students Data
                            </div>
                            <div onclick="document.getElementById('myModal').close();" class="flex justify-center w-1/12 h-auto cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </div>
                        <!--Header End-->
                        </div>
                         <!-- Modal Content-->
                         <div class="card-body">
                             <form action=""
                                            method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" name="file"
                                            class="mt-10 mx-72 form-control md-72">
                                            <br>
                                            <button class=" mt-10 focus:outline-none mx-72 md-72 text-white bg-teal-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 btn btn-success">
                                            Input
                                            </button>
                                    </form>
                                </div>
                             </div>
                         </div>

                <table class="w-full px-10 py-10 text-sm text-left text-graborder-y-red-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                         <tr>
                        <th scope="col" class="px-6 py-3">
                        Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Student NIM
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Student Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Score
                        </th>
                        <th scope="col" class="px-6 py-3">
                        action
                        </th>
                        <th scope="col" class="px-6 py-3">
                        action
                        </th>
                    </tr>
            </thead>
        <tbody>
            @foreach ($students as $student)
            <tr class="bg-white border-b">
            <td class="px-6 py-4">
            {{ $loop->iteration }}
                </td>
                <td class="px-6 py-4">
                {{ $student->NIM }}
                </td>
                <td class="px-6 py-4">
                {{ $student->name }}
                </td>
                <td class="px-6 py-4">
                {{ $student->score }}
                </td>
                <td class="px-6 py-4"><a href="admin/{{$student->id}}/edit"><button class="w-16 h-8 text-white bg-yellow-500 rounded-full">Edit</button></a></td>
                <td class="px-6 py-4">
                    <button class="w-16 h-8 text-white bg-red-500 rounded rounded-full modal-open hover:text-white">
                        Delete
                        </button>
                        <div class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
                          <div class="absolute w-full h-full opacity-50 bg-black-300 modal-overlay"></div>
                          <div
                            class="z-50 max-w-lg mx-auto overflow-y-auto bg-white rounded shadow-lg modal-container bg-gradient-to-r ">
                            <div class="px-6 py-4 text-left modal-content">
                              <div class="flex items-center justify-end pb-3">
                                <div class="z-50 p-2 cursor-pointer modal-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>

                                </div>
                              </div>
                              <h2 class="mt-1 text-2xl font-bold text-center text-black">Delete media?</h2>
                              <p class="mx-6 my-6 font-medium text-center text-black ">
                                Are you sure you want to delete this data student ? You can't undo this action.
                              </p>

                              <div class="flex-row items-center py-4 mx-auto text-center md:flex md:justify-between">
                                <div class="my-4 space-y-2 sm:space-x-2">
                                  <button
                                    class="px-5 py-2 font-semibold text-white bg-black rounded-full modal-close focus:outline-none">No,
                                    Keep it.</button>
                                    <form action="admin/{{$student->id}}" method="POST">
                                        @csrf
                                        @method ('delete')
                                <input class="px-5 py-2 font-semibold text-white bg-red-500 rounded-full modal-close focus:outline-none" type="submit" value="Delete">
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-4 mt-6 mb-6">
      {{ $students->links() }}
    </div>
  </div>
  <script>
      var openmodal = document.querySelectorAll('.modal-open')
      for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function (event) {
          event.preventDefault()
          toggleModal()
        })
      }

      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', toggleModal)

      var closemodal = document.querySelectorAll('.modal-close')
      for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
      }

      function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
      }
  </script>
</div>
</x-template-layout>
