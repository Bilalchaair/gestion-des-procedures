<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Procedure;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $reference_code;
    public $date_creation;
    public $nom_redacteur;
    public $fonction_redacteur;
    public $service_id;
    public $enregistrement_code;
    public $service;
    public $nom_ver;
    public $fonction_ver;
    public $date_verification;
    public $nom_app;
    public $fonction_app;
    public $date_approvation;
    public $nom_proc;
    public $objet;
    public $domaineapp;
    public $references;
    public $abreviation;
    public $description;
    public $logigramme;
    public $enregistrement;
    public $totalSteps = 8;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
    
        $this->service = DB::table('services')->get();
        return view('livewire.multi-step-form');    
        
    }



    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }



    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'nom_redacteur'=>'required|string',
                'fonction_redacteur'=>'required|string',
                'service_id'=> 'required'
            ]);
        }

        if($this->currentStep == 2){
            $this->validate([
                'nom_proc'=>'required|string',
                'reference_code'=>'required|string',
                'date_creation'=> 'required|string',
                'objet'=>'required|string'
            ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                 'domaineapp'=>'required|string'
              ]);
        }

        elseif($this->currentStep == 4){

              $this->validate([
                  'references'=>'required|string'
              ]);
        }

        elseif($this->currentStep == 5){

              $this->validate([
                  'abreviation'=>'required|string'
              ]);
        }

        elseif($this->currentStep ==6){

            $this->validate([
                'description'=>'required|string'
            ]);
      }

      elseif($this->currentStep ==7){
        $this->validate([
            'logigramme'=>'required|mimes:jpeg,png|max:2048',

            
        ]);
  }
    }

    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 8){
          $this->validate([
              'enregistrement'=>'required|string',
              'enregistrement_code'=>'required|string'
           ]);
        }
           $logi_name = $this->logigramme->getClientOriginalName();
           $upload_logi = $this->logigramme->storeAs('Logigrammes', $logi_name);
           
        if($upload_logi){
            $values = array(
                "nom_redacteur"=>$this->nom_redacteur,
                "fonction_redacteur"=>$this->fonction_redacteur,
                "service_id"=>$this->service_id,
                "reference_code"=>$this->reference_code,
                "date_creation"=>$this->date_creation,
                "reference_code"=>$this->reference_code,
                "nom_proc"=>$this->nom_proc,
                "objet"=>$this->objet,
                "domaineapp"=>$this->domaineapp,
                "references"=>$this->references,
                "abreviation"=>$this->abreviation,
                "description"=>$this->description,
                "logigramme"=>$logi_name,
                "enregistrement"=>$this->enregistrement,
                "enregistrement_code"=>$this->enregistrement_code
            );

            procedure::insert($values);
            return redirect()->route('showprocedure')->with('success','Votre procédure a bien été créée');
            
      }    
  }

}

