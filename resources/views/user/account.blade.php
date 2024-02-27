@extends('user.main')

@section('content')
<div id="acc" class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        
            <header>
                <h1 class="font-poppins font-semibold text-xl">My Account</h1>
            </header>

            <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">

                <section class="m-3 p-2 h-fit w-96 bg-gray-800 shadow-xl rounded-md">

                    <div class="flex flex-col border-b-2 py-5">
                        <p class="text-center text-white text-5xl"><i class="fas fa-user"></i></p>
                        <h3 class="font-poppins text-md text-white text-center mt-2">{{$user->username}}</h3>
                        <h4 class="font-poppins text-sm text-white text-center">{{$user->email}}</h4>
                    </div>

                    <div class=" m-3">
                        <p class="text-sm font-poppins text-gray-200">
                            Fullname : {{$user->fullname}}
                        </p>
                        <p class="text-sm font-poppins text-gray-200">
                            Created at : {{$user->created_at}}
                        </p>
                    </div>
                </section>

                <section class="m-3 p-2 h-fit w-96 bg-gray-800 shadow-xl rounded-md">

                    <div class="flex flex-col border-b-2 py-5">
                        <h1 class="text-center font-poppins text-white text-5xl"> {{$ortal}} </h1>
                        <h3 class="font-poppins text-md text-white text-center mt-2">Total order</h3>
                        <h4 class="font-poppins text-sm text-white text-center">Keep it up kiddo!</h4>
                    </div>

                    <div class=" m-3">
                       
                    </div>
                </section>

                <section class="m-3 p-2 h-fit w-96 bg-gray-800 shadow-xl rounded-md">

                    <div class="flex flex-col border-b-2 py-5">
                        <img class="rounded-full w-20 h-20 self-center" src="https://placehold.co/80x80" alt="">
                        <h3 class="font-poppins text-md text-white text-center mt-2">Kepodev</h3>
                        <h4 class="font-poppins text-sm text-white text-center">Kepodev@gmail.com</h4>
                    </div>

                    <div class=" m-3">
                        <p class="text-sm font-poppins text-gray-200">
                            Created at : 11-10-2023
                        </p>
                        <p class="text-sm font-poppins text-gray-200">
                            Created at : 11-10-2023
                        </p>
                    </div>
                </section>
            </div>


        </div>
    </div>

    <div class="p-4 sm:ml-64">
        <div id="riview" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <header>
                <h1 class="font-poppins font-semibold text-xl">Riview</h1>
            </header>

            <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">

                <section class="m-3 p-2 h-fit w-96 bg-gray-800 shadow-xl rounded-md">

                    <div class="flex flex-col border-b-2 py-5">
                        <img class="rounded-full w-20 h-20 self-center" src="https://placehold.co/80x80" alt="">
                        <h3 class="font-poppins text-md text-white text-center mt-2">Joki MLBB</h3>
                        <h4 class="font-poppins text-sm text-white text-center">EPIC V - MYTHIC GLORY</h4>
                    </div>

                    <div class="m-3">
                        <button class="bg-red-600 py-2 px-4 text-white font-poppins shadow-md rounded-md hover:bg-red-700"> Riview </button>
                    </div>
                </section>
            </div>


        </div>
    </div>
@endsection
