<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Proyecto') }}
        </h2>
    </x-slot>

    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">


    <form action="{{ route ('notifications.store')}}" method="POST" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
    @csrf

    <div class="relative pt-4">
      <label for="header" class="text-base leading-7 text-blueGray-500">Titulo</label>
      <input required autofocus type="text" id="header" name="header" placeholder="Titulo" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>

    <div class="mt-4">
                <x-jet-label for="id_receptor" value="{{ __('Enviar a:') }}" />
                <select name="id_receptor" x-model="id_receptor" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                
                    <option value="{{$SUP->id}}">{{$SUP->name}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                 @endforeach   
                </select>
            </div>

    <div class="flex flex-wrap mt-4 mb-6 -mx-3">
      <div class="w-full px-3">
        <label class="text-base leading-7 text-blueGray-500" for="message">Mensaje </label>
        <textarea id="message" type="text" name="message" placeholder="Mensaje..." required="" class="w-full h-32 px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" ></textarea>
      </div>
    </div>
        
      <input type="hidden" id="id_transmitter" name="id_transmitter" value="{{ auth()->user()->id }}" >
      <input type="hidden" id="transmitter_role" name="transmitter_role" value="{{ auth()->user()->role }}" >


    <div style="padding:15px;">
        <button type="submit" class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 
        border-blue-300">
        Enviar
      </button>
    </div>

  </form>

</x-app-layout>
