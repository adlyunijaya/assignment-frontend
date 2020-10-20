@extends('layouts.main')

@section('content')
<div class="grid grid-cols-12 gap-6 mt-5">

    @if (session('success'))
    <div class="col-span-6">
        <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-9 text-theme-9 dark:border-theme-9">
            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {{ session('success') }} </div>
    </div>

    @endif


    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
        <a href="{{ route('create.post') }}" class="button text-white bg-theme-1 shadow-md mr-2">Add New Post</a>
        <div class="dropdown">
            {{-- <button id="testToast">test toast</button> --}}
            {{-- <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i>
                </span>
            </button> --}}
            {{-- <div class="dropdown-box w-40">
                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                </div>
            </div> --}}
        </div>
        {{-- <div class="hidden md:block mx-auto text-gray-600">Showing 1 to {{ $paginations['limit'] }} of
        {{ $paginations['total'] }} entries
    </div> --}}
    {{-- <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
            </div>
        </div> --}}
</div>
<!-- BEGIN: Data List -->
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-no-wrap">ID</th>
                <th class="text-center whitespace-no-wrap">Title</th>
                <th class="text-center whitespace-no-wrap">Body</th>
                <th class="text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr class="intro-x">
                <td class="text-center">{{ $data['id'] }}</td>
                <td class="text-center">{{ $data['title'] }}</td>
                <td class="text-center">{{ $data['body'] }}</td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="{{ route('edit.post', $data['id']) }}"> <i
                                data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href="{{ route('destroy.post', $data['id']) }}"
                            data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- END: Data List -->
<!-- BEGIN: Pagination -->

<!-- END: Pagination -->
</div>
{{-- <div class="modal" id="delete-confirmation-modal">
    <div class="modal__content">
        <div class="p-5 text-center">
            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
            <div class="text-3xl mt-5">Are you sure?</div>
            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.
            </div>
        </div>
        <div class="px-5 pb-8 text-center">
            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
            <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
        </div>
    </div>
</div> --}}
@endsection