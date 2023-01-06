<x-template-layout>
        <div class="container mt-16  flex flex-col w-[1300px] ">
        <div class="justify-between bg-white h-11/12 py-14 px-14 rounded-xl">
            <a href="{{route('student.index')}}" class="text-black"> < Back </a>
            <h1 class="my-10 text-2xl font-bold">Add Data students</h1>
            <form action="students" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">Student NIM</label>
                    <input type="text" name="NIM" id="NIM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.50">
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Student Name</label>
                    <input type="text" name="NAME" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
                </div>
                <div class="mb-6">
                    <label for="score" class="block mb-2 text-sm font-medium text-gray-900">Student Score</label>
                    <input type="float" name="Score" id="Score" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
                </div>
                <button type="submit" class="text-white bg-teal-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Add</button>
            </form>
        </div>
    </div>

    </x-template-layout>