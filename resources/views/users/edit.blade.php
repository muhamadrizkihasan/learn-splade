<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-light">
            {{ __('Edit Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg-px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form class="space-y-4" action="{{ route('users.update', $user) }}" :default="$user" method="put">
                        <x-splade-input name="name" label="Name :" placeholder="Your Name" />
                        <x-splade-input name="email" type="email" label="Email :" placeholder="Your Email Address" />
                        <x-splade-input name="password" type="password" label="Password :" placeholder="Your password " />
                        <x-splade-submit label="Save" :spinner="false" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>