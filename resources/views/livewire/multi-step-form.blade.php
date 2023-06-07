<div>
<form wire:submit.prevent="register">

{{-- STEP 1 --}}
@if ($currentStep == 1)

<div class="step-one">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 " style= " margin-left:3%" >STEP 1/8 - nom et fonction</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> <strong>nom et prenom du redacteur(trice):</strong></label>
                        <input type="text" class="form-control" placeholder="Enter nom et prenom" wire:model="nom_redacteur">
                       <span class="text-danger">@error('nom_redacteur'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for=""><strong>fonction:</strong></label>
                <input type="text" class="form-control" placeholder="Enter fonction" wire:model="fonction_redacteur">

                <span class="text-danger">@error('fonction_redacteur'){{ $message }}@enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label><strong>Service:</strong></label>
                <select wire:model="service_id" >
                    @foreach($service as $data)
                        <option value="{{$data->id}}" >{{$data->nom_service}}</option>
                        @endforeach
                    </select>

                <span class="text-danger">@error('service_id'){{ $message }}@enderror</span>
            </div>
        </div>
    </div>
</div>
@endif


{{-- STEP 2 --}}


@if ($currentStep == 2)

<div class="step-one">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 2/8 - Titre & Objet de la Procédure</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> <strong>Titre de la procédure:</strong></label>
                        <input type="text" class="form-control" placeholder="Enter titre procédure" wire:model="nom_proc">
                       <span class="text-danger">@error('nom_proc'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                        <label for=""> <strong>Référence:</strong></label>
                        <input type="text" class="form-control" placeholder="Enter le Référence" wire:model="reference_code">
                       <span class="text-danger">@error('reference_code'){{ $message }}@enderror</span>
                    </div>
            <br>
            <div class="form-group">
                        <label for=""> <strong>la date de creation:</strong></label>
                        <input type="date" class="form-control"  wire:model="date_creation">
                       <span class="text-danger">@error('date_creation'){{ $message }}@enderror</span>
                    </div>
            <br>
            <div class="form-group">
                <label for=""><strong>Objet:</strong></label>
                <textarea class="form-control" cols="2" rows="6" wire:model="objet"></textarea>
                <span class="text-danger">@error('objet'){{ $message }}@enderror</span>
            </div>
        </div>
    </div>
</div>
@endif

{{-- STEP 3 --}}

@if ($currentStep == 3)
    

<div class="step-two">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 3/8 - Domaine d'application</div>
        <div class="card-body">
           
                
                    <div class="form-group">
                        <label for=""><strong>Domaine d'application:</strong></strong></label>
                        <textarea class="form-control" cols="2" rows="8" wire:model="domaineapp"></textarea>
                        <span class="text-danger">@error('domaineapp'){{ $message }}@enderror</span>
                    </div>
                
            
        </div>
    </div>
</div>

@endif
{{-- STEP 4 --}}

@if ($currentStep == 4)
    

<div class="step-three">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 4/8 - Références</div>
        <div class="card-body">
           
                    <div class="form-group">
                        <label for=""><strong>Références:</strong></label>
                        <textarea class="form-control" cols="2" rows="8" wire:model="references"></textarea>
                        <span class="text-danger">@error('references'){{ $message }}@enderror</span>
                    </div>
              
            <span class="text-danger">@error('references'){{ $message }}@enderror</span>
        </div>
    </div>
</div>
@endif

{{-- STEP 5 --}}

@if ($currentStep == 5)
<div class="step-four">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 5/8 - Abréviations</div>
        <div class="card-body">
    
                    <div class="form-group">
                        <label for=""><strong>Abréviations et Définitions:</strong></label>
                        <textarea class="form-control" cols="2" rows="8" wire:model="abreviation"></textarea>
                        <span class="text-danger">@error('abreviation'){{ $message }}@enderror</span>
                    </div>
                
            <span class="text-danger">@error('abreviation'){{ $message }}@enderror</span>
        </div>
    </div>
</div>
@endif

{{-- STEP 6 --}}
@if ($currentStep == 6)
<div class="step-five">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 6/8 - Description de la Procédure</div>
        <div class="card-body">
        
                    <div class="form-group">
                        <label for=""><strong>Description:</strong></label>
                        <textarea class="form-control" cols="2" rows="8" wire:model="description"></textarea>
                        <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                    </div>
             
            <span class="text-danger">@error('description'){{ $message }}@enderror</span>
        </div>
    </div>
</div>
@endif

{{-- STEP 7 --}}
@if ($currentStep == 7)
    

<div class="step-six">
    <div class="card"> 
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 7/8 - Logigramme</div>
        <div class="card-body">
            Veuillez saisir votre Logigramme de type image ci-dessous :
            <div class="form-group">
                <label for="logigramme"></label>
                <input type="file" class="form-control" wire:model="logigramme">
                <span class="text-danger">@error('logigramme'){{ $message }}@enderror</span>
            </div>
        </div>
    </div>       
</div>

@endif

{{-- STEP 8 --}}

@if ($currentStep == 8)
<div class="step-seven">
    <div class="card">
        <div class="card-title fw-bolder text-gray-800 fs-2 "style= " margin-left:3%" style="margin-top:50px">STEP 8/8 - Liste des Enregistrements attachés</div>
        <div class="card-body">
            <div class="form-group">
                <label for=""><strong>Enregistrements attachés</strong></label>
                <textarea class="form-control" cols="2" rows="8" wire:model="enregistrement"></textarea>
                <span class="text-danger">@error('enregistrement'){{ $message }}@enderror</span>
            </div>
 
        <span class="text-danger">@error('enregistrement'){{ $message }}@enderror</span>
       </div>
       <div class="form-group">
                <label for=""><strong>Codes des enregistrement</strong></label>
                <textarea class="form-control" cols="2" rows="8" wire:model="enregistrement_code"></textarea>
                <span class="text-danger">@error('enregistrement_code'){{ $message }}@enderror</span>
            </div>
    </div>
</div>
@endif
<div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

   @if ($currentStep == 1)
       <div></div>
   @endif

   @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 || $currentStep == 8)
       <button type="button" class="buttoncss" wire:click="decreaseStep()">Back</button>
   @endif
   
   @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7)
       <button type="button" class="buttoncss" wire:click="increaseStep()">Next</button>
   @endif
   
   @if ($currentStep == 8)
        <button type="submit" class="buttoncss" >Créer</button>
   @endif
       
      
</div>

</form>


</div>
