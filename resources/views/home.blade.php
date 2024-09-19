<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-500">
  <div class="flex justify-center items-center h-screen">
    <form action="/view_profile" method="POST" class="w-96 p-6 bg-white" enctype="multipart/form-data">
      @csrf

    <h1 class="text-3xl text-center">Enter Your Details</h1>

<label>User Name</label>
<input type="text" name="name" placeholder="Name" class="px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">

<label>Email</label>
<input type="email" name="email" placeholder="Email" class="px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"><br>


<label>Phone Number</label>
<input type="number" name="phonenumber" placeholder="Phone Number" class="px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">


<label>User Image</label>
 <input type="file" name="image" class="border rounded-md p-2 focus:outline-none focus:border-blue-500">


<button class="w-full bg-blue-700 text-white text-2xl mt-4">View Profile</button>
<button class="w-full bg-blue-700 text-white text-2xl mt-4">View Profile</button>

        
    </form>
   
  </div>
</body>
</html>
</body>
</html>
