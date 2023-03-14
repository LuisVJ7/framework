@extends('layoutprincipal')

<!-- component -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<section style="font-family: Montserrat" class=" bg-[#ebefe4] flex font-medium items-center justify-center h-screen">
@auth

    <section class="w-64 mx-auto bg-[#1981f0] rounded-2xl px-2 py-150 shadow-lg">
        <div class="flex items-center justify-between">
            <span class="">Hace un momento</span>
            <span class="text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
              </svg>
            </span>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/9734564-default-avatar-profile-icon-of-social-media-user-vetor.jpg" class="rounded-full w-28 " alt="profile picture" srcset="">
        </div>



        <div class="mt-8 ">

        </div>
        <p class="" >Correo
            {{$user->email}}
        </p>


        <div class="mt-3 text-white text-sm">Username
            <hr>

            <p class="text-white font-bold text-2xl tracking-wide">{{$user->name}}</p>

            <h1>  Bienvenido {{auth()->user()->username }}</h1>

            <form action="{{route('logout')}}" method="POST">
                @csrf
                <li> <input class="text white font-bold" type="submit" value="Cerrar Sesion"></li>

            </form>
            </div>



        @endauth
    </section>


</section>
