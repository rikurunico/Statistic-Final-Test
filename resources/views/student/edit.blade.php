<x-template-layout>
    <div class="container mt-16  flex flex-col w-[1300px] ">
    <div class="justify-between bg-white h-11/12 py-14 px-14 rounded-xl">
        <a href="{{route('student.index')}}" class="text-white bg-black border-gray-300 rounded-lg w-20 block p-2.5"> < Back </a>
        <h1 class="my-10 text-2xl font-bold">Edit Data students</h1>
        <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">Student NIM</label>
                <input type="text" name="NIM" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5" value="{{ old('NIM',$student->NIM) }}" readonly>
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Student Name</label>
                <input type="text" name="name" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5" value="{{ old('name',$student->name) }}">
                @if ($errors->has('name'))
                    <span class="text-sm text-red-500">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-6">
                <label for="score" class="block mb-2 text-sm font-medium text-gray-900">Student Score</label>
                <input type="float" name="score" id="Score" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5" value="{{ old('score',$student->score) }}">
                @if ($errors->has('score'))
                    <span class="text-sm text-red-500">{{ $errors->first('score') }}</span>
                @endif
            </div>
            <button type="submit" class="text-white bg-teal-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Update Data</button>
        </form>
    </div>
</div>
</x-template-layout>
