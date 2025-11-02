@section('title', __('Beneficiarios'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Beneficiario Listing </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model.live='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Beneficiarios">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#DataModal">
						<i class="bi-plus-lg"></i>  Add Beneficiarios
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.beneficiarios.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Cui</th>
								<th>Primer Nombre</th>
								<th>Segundo Nombre</th>
								<th>Primer Apellido</th>
								<th>Segundo Apellido</th>
								<th>Celular</th>
								<th>Correo</th>
								<th>Sexo</th>
								<th>Fecha Nacimiento</th>
								<th>Estado Civil</th>
								<th>Activo</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($beneficiarios as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->cui }}</td>
								<td>{{ $row->primer_nombre }}</td>
								<td>{{ $row->segundo_nombre }}</td>
								<td>{{ $row->primer_apellido }}</td>
								<td>{{ $row->segundo_apellido }}</td>
								<td>{{ $row->celular }}</td>
								<td>{{ $row->correo }}</td>
								<td>{{ $row->sexo }}</td>
								<td>{{ $row->fecha_nacimiento }}</td>
								<td>{{ $row->estado_civil }}</td>
								<td>{{ $row->activo }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#DataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Beneficiario id {{$row->id}}? \nDeleted Beneficiarios cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Delete </a></li>  
										</ul>
									</div>								
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $beneficiarios->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>