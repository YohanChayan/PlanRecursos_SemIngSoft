<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

    
    <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Proyecto</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Estado</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Empleados</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Encuestas producidas </th>
				<!-- <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Acciones</th> -->
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
		@foreach($projects as $project )
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Proyecto</span>{{$project->name}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Estado</span>
			
			@if($project->status == 1)
                Terminado
			@endif
			@if($project->status == 0)
				No terminado
			@endif
			</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"> Empleados </span>
                <ul>
                    @foreach( $project->users as $user )
                    <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
                
            </td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Encuestas producidas</span> {{$project->surveysDone}} </td>
				<!-- <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> -->
					<!-- <span class="inline-block w-1/3 md:hidden font-bold">Actions</span> -->
					<!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
					<a href="#">
						Editar
					</a>	
					</button> -->
					<!-- <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
					<form action="#" method="POST">
							@csrf
							@method('DELETE')
							<input style="background-color: rgba(0,0,0,0); color: black; border: none; " type="submit" value="Eliminar">
						</form>	
					</button> -->
				</td>
			</tr>
			
			@endforeach		
		</tbody>
	</table>


</x-app-layout>
