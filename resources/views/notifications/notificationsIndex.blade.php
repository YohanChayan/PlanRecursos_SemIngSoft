<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">


    <div style="padding:15px;">
    <button class="p-3 pl-12 pr-12 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
        <a href="{{{ route ('notifications.create')}}}">Nueva notificacion</a>
        
    </button>
    </div>


    <!-- component -->
<div class="w-10/12 md:w-7/12 lg:6/12 mx-auto relative py-20">
      <h1 class="text-3xl text-center font-bold text-blue-500">Notificaciones</h1>
      <div class="border-l-2 mt-10">        


        @foreach($notifications as $notification)
        <!-- Card 5 -->
        <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-yellow-600 text-white rounded mb-10 flex-col md:flex-row">
          <!-- Dot Follwing the Left Vertical Line -->
          <div class="w-5 h-5 bg-yellow-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 -mt-2 md:mt-0"></div>

          <!-- Line that connecting the box with the vertical line -->
          <div class="w-10 h-1 bg-yellow-300 absolute -left-10 z-0"></div>

          
          <div class="flex-auto">
            <h1 class="text-lg"> {{$notification->header}} </h1>
            <h1 class="text-xl font-bold"> {{$notification->message}} </h1>
            <h3>
                @if($notification->transmitter_role == 0)
                    Gerente
                @endif

                @if($notification->transmitter_role == 1)
                    Jefe de proyecto
                @endif

                @if($notification->transmitter_role == 2)
                    Empleado
                @endif
            </h3>
          </div>

          <!-- <div style="padding:10px;">
              <a href="#" class="text-center text-white hover:text-gray-300">Ver</a>
            </div> -->
          <div style="padding:10px;">
              <a href="#" class="text-center text-white hover:text-gray-300">
                  
              <form action="{{ route('notifications.destroy',$notification) }}" method="POST">
							@csrf
							@method('DELETE')
							<input style="background-color: rgba(0,0,0,0); color: white; border: none; " type="submit" value="Eliminar">
						</form>
                
                </a>
            </div>

        </div>

        @endforeach
      </div>
    </div>

    

</x-app-layout>
