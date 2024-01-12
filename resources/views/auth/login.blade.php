
<x-guest-layout>

  <style>
  .cube
  {
    position: relative;
    width: 150px;
    height: 150px;
    transform-style: preserve-3d;
    transform:  rotateX(-30deg);
    animation: animate 4s linear infinite;

  }

  @keyframes animate {
    0%
    {
      transform: rotateX(-30deg) rotateY(0deg) ;
    }
    100%
    {
      transform: rotateX(-30deg) rotateY(360deg) ;
    }

  }

  .cube div{
    position: absolute;
    top: 50;
    left: 0;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;


  }


  .cube div span
  {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background: linear-gradient(#c10f2f52,#74bc1f69);
     transform:  rotateY(calc(90deg * var(--i))) translateZ(75px);

  }
  .top{
    position: absolute;
    top: 0;
    left: 0;
    width: 150px;
    height: 150px;
    background: #b3aca4a6;
    transform: rotateX(90deg) translateZ(75px);
  }
  .top::before
  {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 150px;
    height: 150px;
    background: #00ff6c;
    transform: translateZ(-200px);
    filter: blur(20px);
    box-shadow: 0 0 120px rgba(0,255, 0, 0.2),
    0 0 200px rgba(0,255, 0, 0.4),
    0 0 300px rgba(0,255, 0, 0.6),
    0 0 400px rgba(0,255, 0, 0.8),
    0 0 500px rgba(0,255, 0, 0.1),

  }
  </style>


    <x-auth-card>
        <x-slot name="logo">




            <a href="/">

                <div class="cube">
                  <div class="top" >

                  </div>
                  <div >

                    <span  style="--i:0;">  </span>
                    <span style="--i:1;">  </span>
                    <span style=""> <center>
                      <!--x-application-logo class="w-20 h-20 fill-current text-gray-500" /-->
                    <img src="{!! asset('images/IGECEM.png') !!}" style="/*width:230px;height:300px;*/ width:115px;height:150px;" />
                    </center>  </span>
                    <span style="--i:2;">  </span>
                    <span style="--i:3;">  </span>

                  </div>

                </div>

                <br><br>
                <br><br>
                <br><br>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo Electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me >
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div-->

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <!--a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a-->
                @endif

                <x-button class="ml-3">
                    {{ __('Iniciar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>


</x-guest-layout>
