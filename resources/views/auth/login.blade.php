@extends('layouts.guest')
@section('guest-content')
<div class="relative flex h-full w-full">
    <div class="h-screen w-1/2 bg-black">
        <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
            <div>
                <p class="text-2xl">Login</p>
                <p>please login to continue</p>
            </div>
            <x-jet-validation-errors class="mb-4" />

            <div class="mt-10">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div>
                        <label class="mb-2.5 block font-extrabold" for="email">Email</label>
                        <input type="email" id="email" name="email"
                            class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30"
                            placeholder="mail@user.com" />
                    </div>
                    <div class="mt-4">
                        <label class="mb-2.5 block font-extrabold" for="email">Password</label>
                        <input type="password" id="email" name="password"
                            class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                    </div>
                    <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
                        <!-- Remember me -->
                        <div><input type="checkbox" id="remember" /><label for="remember" class="mx-2 text-sm">Remember
                                me</label></div>
                        <!-- Forgot password -->
                        <div>
                            <a href="#" class="text-sm hover:text-gray-200">Forgot password</a>
                        </div>
                    </div>
                    <div class="my-10">
                        <button class="w-full rounded-full bg-green-500 p-5 hover:bg-green-800">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="h-screen w-1/2 bg-blue-600">
        <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
    </div>
</div>

@endsection