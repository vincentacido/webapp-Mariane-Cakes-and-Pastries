<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="dark:bg-stone-800 p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

                    <h1>
                    <b>
                    {{ $header }}
                    <br>
                    @if ( session('status'))
                    <div class="bg-white text-center py-4 lg:px-4">
                    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                        
                        <span class="font-semibold mr-2 text-left flex-auto"></span> {{ session('status')}}
                    @endif
                    <br>
                    </b>
                    </h1>
                    

                    
                    <form method="POST" action="{{ ( url()->current() == url('/users/add') ) ? url('/users/add'):url('/users/update/' . $user->id) }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="( url()->current() == url('/users/add') ) ? old('name'):$user->name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="( url()->current() == url('/users/add') ) ? old('email'):$user->email" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        @if( url()->current() == url('/users/add') ) 
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="text"
                                                name="password"
                                                autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ $header }}
                            </x-primary-button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>