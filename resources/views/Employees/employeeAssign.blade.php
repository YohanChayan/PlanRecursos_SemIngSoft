<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignación de proyecto') }}
        </h2>
    </x-slot>

   <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

      <form action="{{ route ('chiefR.employees.update', $employee)}}" method="POST" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
      @csrf
      @method('PATCH')  

    
      <label hidden for="name" class="text-base leading-7 text-blueGray-500">Nombre</label>
      <input  type="hidden" id="name" name="name" required value="{{ old('nombre') ?? $employee->name ?? '' }}" placeholder="Nombre" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    
      <label hidden for="email" class="text-base leading-7 text-blueGray-500">Correo</label>
      <input  type="hidden" id="email" name="email" required value="{{ old('email') ?? $employee->email ?? '' }}" placeholder="Correo" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    
      <label hidden for="password" class="text-base leading-7 text-blueGray-500"  >Contraseña</label>
      <input  type="hidden" minlength="5" value="{{ $employee->password ?? '' }}" id="password" name="password" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">

        <!-- Role -->
      <input type="hidden" id="role" name="role" value="2" >
        <!-- Role -->

    
      <label hidden for="address" class="text-base leading-7 text-blueGray-500">Direccion</label>
      <input type="hidden" id="address" required value="{{ old('Direccion') ?? $employee->address ?? '' }}" name="address" placeholder="Direccion" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    

    
      <label hidden for="phone_number" class="text-base leading-7 text-blueGray-500">Telefono</label>
      <input type="hidden" id="phone_number" minlength="10" maxlength="10" required value="{{ old('Telefono') ?? $employee->phone_number ?? '' }}" name="phone_number" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    

    <input type="hidden" id="id_sup" name="id_sup" value="{{auth()->user()->id}}">


    <div class="mt-4">
        <x-jet-label for="id_project" value="{{ __('Proyectos: ') }}" />
        <select name="id_project" x-model="id_project" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            @foreach($projects as $project)
                <option value="{{$project->id}}">{{$project->name}}</option>
            @endforeach
        </select>
    </div>

    <div style="padding:15px;">
        <button type="submit" class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 
        border-blue-300">
        Asignar
      </button>
    </div>

  </form>

</x-app-layout>
