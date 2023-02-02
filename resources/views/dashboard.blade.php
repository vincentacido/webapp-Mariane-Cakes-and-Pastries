<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white-900 dark:bg-stone-800 text-slate-100">
                    
                    
                    {{-- <div class="flex flex-wrap justify-center"> --}}
                    <h1>Hello there! Thank you for Logging in {{Auth::user()->name}}!</h1>
                    <div class="flex flex-wrap justify-center">
                     <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
                        <div class="container">
                            <a class="navbar-brand" href="#page-top"><img src="assets/img/portfolio/Mariane_s_FINAL_LOGO-removebg-preview (1).png" alt="..." /></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
