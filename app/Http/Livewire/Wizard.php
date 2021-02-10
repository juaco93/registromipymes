<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Empresa;

class Wizard extends Component
{
    public $currentStep = 1;
    public $cuit, $nombreFantasia, $numeroIngresosBrutos, $status = 1;
    public $successMsg = '';

    /**
     * Write code on Method
     */
    public function render()
    {
        return view('livewire.wizard');
    }

    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'cuit' => 'required|numeric',
            'nombreFantasia' => 'required',
            'numeroIngresosBrutos' => 'required|numeric',
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'status' => 'required',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        Empresa::create([
            'cuit' => $this->cuit,
            'nombreFantasia' => $this->nombreFantasia,
            'numeroIngresosBrutos' => $this->numeroIngresosBrutos,
            'status' => $this->status,
        ]);


        $this->successMsg = 'Empresa creada correctamente';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {
        $this->cuit = '';
        $this->nombreFantasia = '';
        $this->numeroIngresosBrutos = '';
        $this->status = 1;
    }
}
