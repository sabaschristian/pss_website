<x-layout>

    <div class="flex min-h-full flex-col justify-center p-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="{{ URL('images/pss_logo.jpeg') }}" alt="Your Company">
          <h1 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Passionist Sisters' School</h1>
          <h2 class="mt-8  text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign Up</h2>
        </div>
      
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{ route('register') }}" method="post">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                <div class="mt-2">
                  <input id="username" name="username" type="username" autocomplete="username" class="input @error('username') ring-red-500 @enderror">
                </div>
                  @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                  @enderror
            </div>

            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" class="input @error('email') ring-red-500 @enderror">
              </div>
                @error('email')
                  <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password"  class="input @error('password') ring-red-500 @enderror">
              </div>
              @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                  @enderror
            </div>

            <div>
                <div class="flex items-center justify-between">
                  <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                </div>
                <div class="mt-2">
                  <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password"  class="input @error('password') ring-red-500 @enderror">
                </div>
              </div>
      
            <div>
              <button type="submit" class="login-btn">Sign up</button>
            </div>
          </form>
      
        
        </div>
      </div>
</x-layout>