<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    @vite('resources/css/app.css')

</head>
<body>
        @foreach ($viewuser as $user)

          <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
            <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
              <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
                <h1 class="mt-1 text-lg font-semibold text-blue-600 sm:text-slate-900 md:text-2xl dark:sm:text-blue-800">{{$user->name}}</h1>
                <p class="text-sm leading-4 font-medium text-gray-700 sm:text-slate-500 dark:sm:text-slate-400">{{$user->phonenumber}}</p>
              </div>
              <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                <img src="{{asset($user->image)}}" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
              </div>
              <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
                <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
                <dd class="flex items-center">
                  <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                  </svg>
                </dd>
              </dl>
              <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
              </div>
              <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">{{$user->email}}      
              </p>
             <a href="{{url('delete_profile',  $user->email)}}"> <button class="w-full bg-blue-700 text-white text-2xl mt-4">Delete</button></a>

            </div>
          </main>
          
    @endforeach
    </div>
</body>
</html>