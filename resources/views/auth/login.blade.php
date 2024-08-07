<x-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-16 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="{{ URL('images/pss_logo.jpeg') }}" alt="Your Company">
          <h1 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Passionist Sisters' School</h1>
          <h2 class="mt-8  text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign In</h2>
        </div>
      
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-5" action="{{ route('login') }}" method="post">
            @csrf

            <div>
              @if (session('status'))
                <p class="text-sm text-lime-600">{{ session('status') }}</p>
              @endif

              @error('failed')
                <p class="text-red-500 text-sm" id="message">{{ $message }}</p>
              @enderror
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" value="{{ old('email') }}" name="email" type="email" autocomplete="email" class="input @error('email') ring-red-500 @enderror">
              </div>
              @error('email')
              <p class="text-red-500 text-sm" id="message">{{ $message }}</p>
              @enderror
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="text-sm">
                  <a href="{{ route('password.request') }}" class="font-semibold text-lime-600 hover:text-lime-500">Forgot password?</a>
                </div>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" class="input @error('password') ring-red-500 @enderror">
              </div>
              @error('password')
              <p class="text-red-500 text-sm" id="message">{{ $message }}</p>
              @enderror
            </div>

            <p class="text-sm text-right mr-3">Don't have an account? <a href="{{ route('register') }}" class="underline decoration-lime-500 text-lime-500">Sign up here.</a></p>
      
            <div>
              <button type="submit" class="login-btn">Sign in</button>
            </div>
          </form>
      
        </div>
      </div>
</x-layout>