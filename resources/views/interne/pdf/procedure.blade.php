<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* just a reset of the css */

.image{
    justify-items: center;
    align-items: center;
    
}
img{
    height: 80px;
    width: 80px;
}



.parent-container {
  display: block;
  margin-left: 10%;
}
.titre { 
    background-color: #dadada;
    width: 95%;
}

.tableau1 {
    margin-left: 5%;
    border-collapse: collapse;
    width: 90%;
}

.tableau1 td, th {
  border: 1px solid black;
  padding: 8px;
  margin-left: 5%;
  border-collapse: collapse;
  width: 18%;
}

.tableau{
    margin-left: 5%;
  border-collapse: collapse;
  width: 90%;
}

.tableau td, th {
  border: 1px solid black;
  padding: 8px;
}

.tableau2  {
    
    border: 1px solid black;
    margin-left: 23%;
    width: 72%;
    
  }
  .page-break {
    page-break-after: always;
	}
  .logigramme{
    width: 90%;
    height: 75%;
    margin-left: 5%;
  }
  .logigramme img{
    width: 90%;
    height: 75%;
    margin-left: 5%;
  }

</style>
</head>
<body>
    <table class="tableau">
        <tr>
            <td  rowspan="2">
                
                <div class="image">
                <img  src="assets/chu-new.png"  />
                </div>
                
            </td>
          <td>Procedure</td>
          <td>Référence : {{$procedure->reference_code}} <br> Edition :</td>
        </tr>
        <tr>
          <td>{{$procedure->nom_proc}}</td>
          <td>Date : {{$procedure->date_creation}}  <br> Page : 1/5</td>
        </tr>
      </table>
    
    <br>
    <div >
      <div class="titre" >SUIVI DES MODIFICATIONS</div>
	  <br>
      <table class="tableau1">
        <tr>
          <th>Edition</th>
          <th>Date</th>
          <th>Nature de modification</th>
        </tr>
        <tr>
          <td>1</td>
          <td>{{$procedure->date_creation}}</td>
          <td>création </td>
        </tr>
        
      </table>
      <br>
      <div class="parent">
        <div class="titre" >LISTE DE DIFFUSION</div>
      </div>
      <br>
      <p>
       <center>{{$service->where('id', $procedure->service_id)->pluck('nom_service')->first()}}</center> 
      </p>
      <br>
      <div class="parent">
        <div class="titre" >MATRICE DE RESPONSABILITE</div>
      </div>
      <br>
      
      

      <table class="tableau" >
        <tr>
          <td>#</td>
          <td>Nom</td>
          <td>fonction</td>
          <td>Date</td>
          <td>Signature</td>
        </tr>
        <tr>
          <td>Rédigé par :</td>
          <td>{{$procedure->nom_redacteur}}</td>
          <td>{{$procedure->fonction_redacteur}}</td>
          <td>{{$procedure->date_creation}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Vérifié et Revue par :</td>
          <td>{{$procedure->nom_ver}}</td>
          <td>{{$procedure->fonction_ver}}</td>
          <td>{{$procedure->date_verification}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Approuvé par :</td>
          <td>{{$procedure->nom_app}}</td>
          <td>{{$procedure->fonction_app}}</td>
          <td>{{$procedure->date_approvation}}</td>
          <td></td>
        </tr>
      </table>
      							<div class="page-break"></div>
	  <table class="tableau">
        <tr>
            <td  rowspan="2">
                
                <div class="image">
                <img  src="assets/chu-new.png"  />
                </div>
                
            </td>
          <td>Procedure</td>
          <td>Référence : {{$procedure->reference_code}} <br> Edition :</td>
        </tr>
        <tr>
          <td>{{$procedure->nom_proc}}</td>
          <td>Date : {{$procedure->date_creation}}  <br> Page : 2/5</td>
        </tr>
      </table>
	  <br>
	  <div class="titre" > I.	 OBJET</div>
	  <br>
	  <p>
	  {{$procedure->objet}}
	  </p>
	  <br>
	  <div class="titre" > II.	DOMAINE D’APPLICATION</div>
	  <br> 
	  <p>
	  {{$procedure->domaineapp}}
	  </p>
	  <br>
	  <div class="titre" > III.	REFERENCES</div>
	  <br>
	  <p>
	  {{$procedure->references}}
	  </p>
	  <br>
	  <div class="titre" > IV.	ABREVEATIONS ET DEFINITIONS </div>
	  <br>
	  <p>
	  {{$procedure->abreviation}}
	  </p>
	  <br>
	  
	  						<div class="page-break"></div>
	  <table class="tableau">
        <tr>
            <td  rowspan="2">
                
                <div class="image">
                <img  src="assets/chu-new.png"  />
                </div>
                
            </td>
          <td>Procedure</td>
          <td>Référence : {{$procedure->reference_code}} <br> Edition :</td>
        </tr>
        <tr>
          <td>{{$procedure->nom_proc}}</td>
          <td>Date : {{$procedure->date_creation}}  <br> Page : 3/5</td>
        </tr>
      </table>
	  <br>
	  <div class="titre" > V.	DESCRIPTION DE LA PROCEDURE </div>
	  <br>
	  <p>
	  {{$procedure->description}}
	  </p>
	  							<div class="page-break"></div>
		<table class="tableau">
        <tr>
            <td  rowspan="2">
                
                <div class="image">
                <img  src="assets/chu-new.png"  />
                </div>
                
            </td>
          <td>Procedure</td>
          <td>Référence : {{$procedure->reference_code}} <br> Edition :</td>
        </tr>
        <tr>
          <td>{{$procedure->nom_proc}}</td>
          <td>Date : {{$procedure->date_creation}}  <br> Page : 4/5</td>
        </tr>
      </table>
	  <br> 
	  <div class="logigramme">
    <img src="<?php echo $pic ?> " width="500px"height="700px" >
	  </div>
	  								<div class="page-break"></div>
									  <table class="tableau">
        <tr>
            <td  rowspan="2">
                
                <div class="image">
                <img  src="assets/chu-new.png"  />
                </div>
                
            </td>
          <td>Procedure</td>
          <td>Référence : {{$procedure->reference_code}} <br> Edition :</td>
        </tr>
        <tr>
          <td>{{$procedure->nom_proc}}</td>
          <td>Date : {{$procedure->date_creation}}  <br> Page : 5/5</td>
        </tr>
      </table>
	  <br>
	  <div class="titre" > IV.	Liste des enregistrements attachés  </div>
	  <br>
	  <table class="tableau" >
        <tr>
          <td>Enregistrement</td>
          <td>Code</td>
        </tr>
        <tr>
          <td>{{$procedure->enregistrement}}</td>
          <td>{{$procedure->enregistrement_code}}</td>
        </tr>
      </table>



      
      
      


    
</body>
</html>