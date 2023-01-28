<x-app-layout>
    <x-slot name="header">
        <h2 class="text-slate-100 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    {{-- {{ __("You're logged in!") }} --}}
                    
                    <h1>
                    <b>
                    {{ $header }}
                    <br>
                    @if ( session('status'))
                    <div class="bg-white text-center py-4 lg:px-4">
                    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">User</span>
                        <span class="font-semibold mr-2 text-left flex-auto">{{ session('status')}}</span>
                    @endif
                    </div>
                    </div>
                    </b>
                    <br>
                    </h1>
                    


                    <a href="{{ url('/users/add') }}">
                    <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Add Users +</button>
                    </a>
    
                    {{-- Table --}}

                    <table class="min-w-full border-collapse block md:table">
                        <thead class="block md:table-header-group">
                            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th class="dark:bg-stone-800  p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                                <th class="dark:bg-stone-800  p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email Address</th>
                                <th class="dark:bg-stone-800  p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Created</th>
                                <th class="dark:bg-stone-800  p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="block md:table-row-group">

                            @foreach ($users as $user)
                                <tr class="dark:bg-stone-800 border border-grey-500 md:border-none block md:table-row">
                                    <td class="text-slate-100 p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="text-slate-100 inline-block w-1/3 md:hidden font-bold">Name</span> {{ $user->name }} </td>
                                    <td class="text-slate-100 p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="text-slate-100 inline-block w-1/3 md:hidden font-bold">Email Address</span> {{ $user->email }} </td>
                                    <td class="text-slate-100 p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="text-slate-100 inline-block w-1/3 md:hidden font-bold">Created</span> {{ $user->created_at }} </td>
                                    <td class="text-slate-100 p-2 md:border md:border-grey-500 text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                                        <a href="{{ url('/users/update/' . $user->id) }}">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Update</button>
                                        </a>
                                        <a href="{{ url('/users/delete/' . $user->id) }}">
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
	                </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>






