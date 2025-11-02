<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Beneficiario;
use Livewire\Attributes\Computed;

class Beneficiarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cui, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $celular, $correo, $sexo, $fecha_nacimiento, $estado_civil, $activo;

    #[Computed]
	public function filteredBeneficiarios()
	{
		$keyWord = '%' . $this->keyWord . '%';
		return Beneficiario::latest()
			->where(function ($query) use ($keyWord) {
				$query
						->orWhere('cui', 'LIKE', $keyWord)
						->orWhere('primer_nombre', 'LIKE', $keyWord)
						->orWhere('segundo_nombre', 'LIKE', $keyWord)
						->orWhere('primer_apellido', 'LIKE', $keyWord)
						->orWhere('segundo_apellido', 'LIKE', $keyWord)
						->orWhere('celular', 'LIKE', $keyWord)
						->orWhere('correo', 'LIKE', $keyWord)
						->orWhere('sexo', 'LIKE', $keyWord)
						->orWhere('fecha_nacimiento', 'LIKE', $keyWord)
						->orWhere('estado_civil', 'LIKE', $keyWord)
						->orWhere('activo', 'LIKE', $keyWord);
			})
			->paginate(10);
	}

	public function render()
	{
		return view('livewire.beneficiarios.view', [
			'beneficiarios' => $this->filteredBeneficiarios,
		]);
	}
	
    public function cancel()
    {
        $this->reset();
    }

    public function save()
    {
        $this->validate([
		'cui' => 'required',
		'primer_nombre' => 'required',
		'segundo_nombre' => 'required',
		'primer_apellido' => 'required',
		'segundo_apellido' => 'required',
		'celular' => 'required',
		'correo' => 'required',
		'sexo' => 'required',
		'fecha_nacimiento' => 'required',
		'estado_civil' => 'required',
		'activo' => 'required',
        ]);

        Flight::updateOrCreate(
			['id' => $this->selected_id],
			[
				'cui' => $this-> cui,
				'primer_nombre' => $this-> primer_nombre,
				'segundo_nombre' => $this-> segundo_nombre,
				'primer_apellido' => $this-> primer_apellido,
				'segundo_apellido' => $this-> segundo_apellido,
				'celular' => $this-> celular,
				'correo' => $this-> correo,
				'sexo' => $this-> sexo,
				'fecha_nacimiento' => $this-> fecha_nacimiento,
				'estado_civil' => $this-> estado_civil,
				'activo' => $this-> activo
			]
		);

        $message = $this->selected_id ? 'Beneficiario Successfully updated.' : 'Beneficiario Successfully created.';
		$this->dispatch('closeModal');
        $this->reset();
		session()->flash('message', $message);
    }

    public function edit($id)
    {
        $this->selected_id = $id;
		$this->fill(Beneficiario::findOrFail($id)->toArray());
    }

    public function destroy($id)
    {
        if ($id) {
            Beneficiario::where('id', $id)->delete();
        }
    }
}