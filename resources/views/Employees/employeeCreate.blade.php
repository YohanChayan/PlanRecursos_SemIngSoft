<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
    </x-slot>
    
   <h1>Create Employee</h1>

   <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
   

   <form action="{{ route ('chiefR.employees.store')}}" method="POST" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
    @csrf

    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Nombre</label>
      <input required autofocus type="text" id="name" name="name" placeholder="Nombre" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>


    <div class="relative pt-4">
      <label for="email" class="text-base leading-7 text-blueGray-500">Correo</label>
      <input required autofocus type="text" id="email" name="email" placeholder="Correo" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

    <div class="relative pt-4">
      <label for="password" class="text-base leading-7 text-blueGray-500">Contraseña</label>
      <input required autofocus type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

        <!-- Role -->
      <input type="hidden" id="role" name="role" value="2" >
        <!-- Role -->


    <div class="relative pt-4">
      <label for="address" class="text-base leading-7 text-blueGray-500">Direccion</label>
      <input required autofocus type="text" id="address" name="address" placeholder="Direccion" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

    <div class="relative pt-4">
      <label for="phone_number" class="text-base leading-7 text-blueGray-500">Telefono</label>
      <input required autofocus type="text" id="phone_number" name="phone_number" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

    <input type="hidden" id="id_sup" name="id_sup" value="{{auth()->user()->id}}" >

    <div style="padding:15px;">
        <button type="submit" class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 
        border-blue-300">Agregar</button>
    </div>

    <!-- Role  boolean or what ?????? --> 
    <!-- <input type="hidden" id="status" name="status" value="1" > -->
        <!-- Role -->

  </form>

</x-app-layout>
