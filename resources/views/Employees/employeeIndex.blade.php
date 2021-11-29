<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
    </x-slot>
    
    <div style="padding:15px;">
        <button class="p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 
		text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 
		focus:border-4 focus:border-green-300">
		<a href="{{{ route ('chiefR.employees.create')}}}">Agregar nuevo empleado</a>
			</button>
    </div>

    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

    <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nombre</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Estado</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Correo</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Numero de telefono</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">acciones</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
		@foreach($employees as $employee )
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nombre</span>{{$employee->name}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Estado</span>
			
			@if($employee->status == 1)
				Activo
			@endif
			@if($employee->status == 0)
				No activo
			@endif
			</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Correo</span>{{$employee->email}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Numero de telefono</span>{{$employee->phone_number}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
					<a href="{{ route('chiefR.employees.edit', $employee) }}">
						Editar
					</a>	
					</button>
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
					<form action="{{ route('chiefR.employees.destroy',$employee) }}" method="POST">
							@csrf
							@method('DELETE')
							<input style="background-color: rgba(0,0,0,0); color: black; border: none; " type="submit" value="Eliminar">
						</form>	
					</button>
				</td>
			</tr>
			
			@endforeach		
		</tbody>
	</table>
	

</x-app-layout>
