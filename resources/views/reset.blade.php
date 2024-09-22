<!DOCTYPE html>
<head>
    <title> Reset </title>
</head>
    <body>
        <script src="https://cdn.tailwindcss.com"></script>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <h4 class="mt-20 text-center text-2xl font-bold"> Reset your password </h4>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="/reset">
                @csrf
               <div>
                <label for="phone number" class="block text-m font-bold">Enter your phone number</label>
                <div class="mt-5">
            <input id="phone number" name="phone number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
             </div>
                  </div>
                  <div class="mt-5">
                    <label for="otp" class="block text-m font-bold">Enter your OTP</label>
                    <div class="mt-5">
                <input id="otp" name="otp" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required>
                 </div>
                      </div>
                      <div class="mt-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                    </div>
               </div>
        </div>
            </form>
    </body>
</html>
