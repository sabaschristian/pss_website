<x-layout>

    <div class="max-w-sm p-6 mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Please provide an email to reset your password.</p>
        
        <form class="max-w-sm mx-auto" action="{{ route('password.email') }}" method="post"> 
            @csrf
            @if (session('status'))
                <p class="text-sm text-lime-600">{{ session('status') }}</p>
            @endif
            <div class="mb-3">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                <input type="email" name="email" id="email" aria-describedby="helper-text-explanation" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@example.com">
                @error('email')
                 <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-end">
                <button class="flex items-center justify-end px-3 py-2 text-sm font-medium text-center text-white bg-lime-600 rounded-lg hover:bg-lime-400">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>

</x-layout>