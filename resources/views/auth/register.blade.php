@extends('common.layout')

@section("title", "Community List")

@section("content")
<form class="w-full max-w-lg m-auto" method="POST" action="/register">
    @csrf

    <div class="text-2xl">Sign Up</div>
    {{--  userID  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userID">ID</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userID" name="userID" type="text" placeholder="YOUR ID">
            <p class="text-gray-600 text-xs italic">You can use this ID.</p>
        </div>
    </div>

    {{--  userPassword  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userPassword">PASSWORD</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="userPassword" name="userPassword" type="password" placeholder="********">
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div>
        <div class="w-full md:w-1/2 px-2">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userPasswordCheck">PASSWORD CHECk</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userPasswordCheck" type="password" placeholder="********">
        </div>
    </div>

    {{--  userName  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userName">NAME</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userName" name="userName" type="text" placeholder="YOUR NAME">
        </div>
    </div>

    {{--  userZipcode  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userZipcode">ZIP CODE</label>
            <input class="appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userZipcode" name="userZipcode" type="text" placeholder="0000000 or 000-0000">
        </div>
        <div class="w-full md:w-1/2 px-2">
            <button type="button" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 mt-7 hover:border-transparent rounded">Search</button>
        </div>
    </div>

    {{--  userAddress1  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userAddress1">ADDRESS1</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userAddress1" name="userAddress1" type="text" placeholder="YOUR ADDRESS">
        </div>
    </div>

    {{--  userAddress2  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userAddress2">ADDRESS2</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userAddress2" name="userAddress2" type="text" placeholder="YOUR ADDRESS">
        </div>
    </div>

    {{--  userEmail  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="userEmail">E-mail</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="userEmail" name="userEmail" type="email" placeholder="user@gmail.com">
        </div>
    </div>

    {{--  BUTTON  --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full px-3 text-right">
            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Signup</button>
            <button type="button" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">Cancel</button>
        </div>
    </div>
</form>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection
