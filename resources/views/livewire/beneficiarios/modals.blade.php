<!-- Modal -->
<div wire:ignore.self class="modal fade" id="DataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="DataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DataModalLabel">{{ $selected_id ? 'Update Beneficiario' : 'Create Beneficiario' }}</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                @if ($selected_id)
                    <input type="hidden" wire:model="selected_id">
                @endif
                    <div class="form-group">
                        <label for="cui"></label>
                        <input wire:model.live="cui" type="text" class="form-control" id="cui" placeholder="Cui">@error('cui') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="primer_nombre"></label>
                        <input wire:model.live="primer_nombre" type="text" class="form-control" id="primer_nombre" placeholder="Primer Nombre">@error('primer_nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="segundo_nombre"></label>
                        <input wire:model.live="segundo_nombre" type="text" class="form-control" id="segundo_nombre" placeholder="Segundo Nombre">@error('segundo_nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido"></label>
                        <input wire:model.live="primer_apellido" type="text" class="form-control" id="primer_apellido" placeholder="Primer Apellido">@error('primer_apellido') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido"></label>
                        <input wire:model.live="segundo_apellido" type="text" class="form-control" id="segundo_apellido" placeholder="Segundo Apellido">@error('segundo_apellido') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="celular"></label>
                        <input wire:model.live="celular" type="text" class="form-control" id="celular" placeholder="Celular">@error('celular') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo"></label>
                        <input wire:model.live="correo" type="text" class="form-control" id="correo" placeholder="Correo">@error('correo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="sexo"></label>
                        <input wire:model.live="sexo" type="text" class="form-control" id="sexo" placeholder="Sexo">@error('sexo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento"></label>
                        <input wire:model.live="fecha_nacimiento" type="text" class="form-control" id="fecha_nacimiento" placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_civil"></label>
                        <input wire:model.live="estado_civil" type="text" class="form-control" id="estado_civil" placeholder="Estado Civil">@error('estado_civil') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="activo"></label>
                        <input wire:model.live="activo" type="text" class="form-control" id="activo" placeholder="Activo">@error('activo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="save()" class="btn btn-primary">{{ $selected_id ? 'Update' : 'Create' }}</button>
            </div>
        </div>
    </div>
</div>