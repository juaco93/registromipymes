<div>
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="multi-wizard-step">
                <a href="#step-1" type="button"
                    class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Paso 1</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-2" type="button"
                    class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Paso 2</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-3" type="button"
                    class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>Paso 3</p>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="col-md-12">
            <h3> Paso 1</h3>
            <div class="form-group">
                <label for="title">CUIT:</label>
                <input type="text" wire:model="cuit" class="form-control" id="taskTitle">
                @error('cuit') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Nombre Fantasia:</label>
                <input type="text" wire:model="nombreFantasia" class="form-control" id="teamPrice" />
                @error('nombreFantasia') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="detail">Numero Ingresos Brutos:</label>
                <textarea type="text" wire:model="numeroIngresosBrutos" class="form-control"
                    id="taskDetail">{{{ $numeroIngresosBrutos ?? '' }}}</textarea>
                @error('numeroIngresosBrutos') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="col-md-12">
            <h3> Paso 2</h3>
            <div class="form-group">
                <label for="description">Empresa STATUS</label><br />
                <label class="radio-inline"><input type="radio" wire:model="status" value="1"
                        {{{ $status == '1' ? "checked" : "" }}}> Activa</label>
                <label class="radio-inline"><input type="radio" wire:model="status" value="0"
                        {{{ $status == '0' ? "checked" : "" }}}> Inactiva</label>
                @error('status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="col-md-12">
            <h3> Paso 3</h3>
            <table class="table">
                <tr>
                    <td>CUIT</td>
                    <td><strong>{{$cuit}}</strong></td>
                </tr>
                <tr>
                    <td>Nombre de Fantasia:</td>
                    <td><strong>{{$nombreFantasia}}</strong></td>
                </tr>
                <tr>
                    <td>Empresa status:</td>
                    <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                </tr>
                <tr>
                    <td>Empresa Detalle:</td>
                    <td><strong>{{$detail ?? ''}}</strong></td>
                </tr>
            </table>
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finalizar</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Atrás</button>
        </div>
    </div>
</div>
