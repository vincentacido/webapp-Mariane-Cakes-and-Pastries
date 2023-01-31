<x-app-layout>
    <x-slot name="header">
        <h2 class="text-slate-100 font-semibold text-xl leading-tight">
            {{ __('Add Sliders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ( session('status'))
                    <div class="bg-white text-center py-4 lg:px-4">
                    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Annoucement</span>
                        <span class="font-semibold mr-2 text-left flex-auto">{{ session('status')}}</span>
        @endif



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ url('/sliders/create') }}" enctype = "multipart/form-data">
                        @csrf

                        <div class = "mb-4">
                            <label class="font-bold">Title</label>
                            <input type = "text" name = "title" class = "block mt-1 w-full text-black" placeholder="Input message..." required>
                        </div>
                        {{-- <div class = "mb-4">
                            <label class="font-bold">Description</label>
                            <textarea name = "description" class = "block mt-1 w-full text-black" rows = "3" placeholder="Input description..." required></textarea>
                        </div> --}}
                        <div class = "mb-4">
                            <label class="font-bold">Image</label>
                            <input type = "file" name="image" class = "block mt-1">
                        </div>
                        {{-- <div class = "mb-3">
                            <label>Status</label>
                            <input type = "checkbox" name = "status" class = "block mt-1">
                            Check = hidden, Unchecked = Visible
                        </div> --}}
                        <div class = "mb-4 text-center">
                            {{-- <button type = "Submit"  class = "block mt-1 w-full">Submit</button> --}}

                            {{-- <a href="{{ url('/users/update/' . $user->id) }}"> --}}
                            <button type="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Submit</button>
                            {{-- </a> --}}
                        </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>

