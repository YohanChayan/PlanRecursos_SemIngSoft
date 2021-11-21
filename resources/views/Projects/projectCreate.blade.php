<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>

    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

    <form action="{{ route ('chiefR.projects.store')}}" method="POST" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
    @csrf

    <div class="relative pt-4">
      <label for="name" class="text-base leading-7 text-blueGray-500">Nombre de proyecto</label>
      <input required autofocus type="text" id="name" name="name" placeholder="Nombre" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

    <div class="relative pt-4">
      <label for="totalSurveys" class="text-base leading-7 text-blueGray-500">Demandas de encuestas </label>
      <input required autofocus type="number" id="totalSurveys" name="totalSurveys" placeholder="Nombre" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

        
      <input type="hidden" id="manager" name="manager" value="{{ auth()->user()->name }}" >
      <input type="hidden" id="id_chief" name="id_chief" value="{{ auth()->user()->id }}" >
      <input type="hidden" id="status" name="status" value="0" >


    <div style="padding:15px;">
        <button type="submit" class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 
        border-blue-300">Agregar</button>
    </div>

  </form>

</x-app-layout>
