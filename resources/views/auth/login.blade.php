{{-- <x-guest-layout>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    

    

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Ocu Sense</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
        }

        .bg-img {
            background: url('assets/img/logo.png');
            height: 100vh;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .bg-img:after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 999;
            text-align: center;
            padding: 60px 32px;
            width: 370px;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.04);
            box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
        }

        .content header {
            color: white;
            font-size: 33px;
            font-weight: 600;
            margin: 0 0 35px 0;
            font-family: 'Montserrat', sans-serif;
        }

        .field {
            position: relative;
            height: 45px;
            width: 100%;
            display: flex;
            background: rgba(255, 255, 255, 0.94);
        }

        .field span {
            color: #222;
            width: 40px;
            line-height: 45px;
        }

        .field input {
            height: 100%;
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: #222;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
        }

        .space {
            margin-top: 16px;
        }

        .show {
            position: absolute;
            right: 13px;
            font-size: 13px;
            font-weight: 700;
            color: #222;
            display: none;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }

        .pass-key:valid~.show {
            display: block;
        }

        .pass {
            text-align: left;
            margin: 10px 0;
        }

        .pass span {
            color: white;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        .pass:hover a {
            text-decoration: underline;
        }

        .field input[type="submit"] {
            background: #3498db;
            border: 1px solid #2691d9;
            color: white;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 600;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }

        .field input[type="submit"]:hover {
            background: #2691d9;
        }

        .login {
            color: white;
            margin: 20px 0;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Login</header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" required placeholder="Email">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" class="pass-key" required placeholder="Password">
                </div>
                <div class="pass">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="field">
                    <input type="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
