<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .float{
      float: left;
      text-align: center;
      font-size: xx-small;
    }
    .float_right{
      float: right;

    }
    .rep{

      text-align: center;
      font-size: x-small;
    }
    .rep1{
      font: bold;

      text-align: center;
      font-size: small;
    }
    .line1{
      border: 0.5px solid;
    }
    .line2{
      border: 1.5px solid;

    }
    .title{
            text-align: center;
            font: bold;

    }
    .fieldset1{
      border-radius: 10px;
      width: 350px;
      float: left;
      position: relative;
      top: 10px;
      bottom: 50px;
    }
    .fieldset2{
      border-radius: 10px;
      width: 200px;
      margin-left: 385px;
    }
    table{
      border-collapse: collapse;

    }
    td,th{
      border:2px solid black;
    }
    .br{
      line-height: 10px;
    }

    input {
      position: absolute;
    }

    #filigrane {
      position: fixed;
      top: 22%;
      text-align: center;

      transform: rotate(10deg);
      transform-origin: 50% 50%;
      z-index: -1000;
    }

    .tabcenter{
     margin-left:auto;
     margin-right:auto;
    }

    td
    {
      text-align: center;
    }

    th
    {
      text-align: center;
    }
    #MaTable {
     width: 100%;
     padding: 1px;
     border-spacing: 1px;
    }

    tbody {
      font-size: 90%;
      font-style: italic;
    }

    tfoot {
      font-weight: bold;
    }

    html {
  font-family: sans-serif;
}

table {
  border-collapse: collapse;
  border: 2px solid rgb(200,200,200);
  letter-spacing: 1px;
  font-size: 0.8rem;
}

td, th {
  border: 1px solid rgb(190,190,190);
  padding: 10px 20px;
}

th {
  background-color: rgb(235,235,235);
}

td {
  text-align: center;
}

tr:nth-child(even) td {
  background-color: rgb(250,250,250);
}

tr:nth-child(odd) td {
  background-color: rgb(245,245,245);
}

caption {
  padding: 10px;
}
  </style>
  <title>Détails patient</title>
</head>
<body>



    &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;   &nbsp;   &nbsp;  &nbsp;

    <br>
    <div style="float: left;">
    <img src="assets/media/logos/clinique6.jpg" height="1%" width="1%" ><br>
    <strong>GES-CLIN</strong> <br> T&eacute;l : +228 93-07-21-73/ 70-35-15-84<br>
     Adresse: Agbalépédo<br>
     E-mail : gesclin@gmail.tg<br>



    </div><br> <br> <br> <br>


    <center></center> <br> <br>





    <h4 align="right">Enrégistré par M./Mme. {{auth()->user()->name}} {{auth()->user()->prenom}}  </h4>
    <h4 align="right">Fonction: Infirmière</h4>
    <h4 align="right">Téléphone: {{auth()->user()->telephone}}</h4>
    <h4 align="right">Email: {{auth()->user()->email}}  </h4>
    <hr color="blue" size="4"> <br>
    <!--
    <h4>Nom du Pharmacien : </h4>
    <h4>Téléphone : +228 70 35 15 84 </h4>
    <h4>E-mail : sharifboukari68@gmail.com </h4>
    <h4>Adresse :Agoè Koffi-Panou</h4>-->

    <h2 align="center"><u>Détails du patient N°{{$patient->id}}</u></h2>

    <fieldset>
    <legend>Informations de base</legend>
    <div><span style="padding-left: 20%">Nom : <strong>{{$patient->nomp}}</strong></span>
         <span style="padding-left: 30%">Prénom : <strong>{{$patient->prenomp}}</strong></span>
    </div><br>
    <div><span style="padding-left: 20%">Age : <strong>{{$patient->age}} ans</span>
         <span style="padding-left: 33%">Profession: <strong>{{$patient->profession}}</strong></span>
    </div><br>
    <div><span style="padding-left: 20%">Nationalité : <strong>{{$patient->nationalite}}</strong></span>
         <span style="padding-left: 25.5%">Adresse : <strong>{{$patient->adressep}}</strong></span>
    </div><br>
    <div><span style="padding-left: 20%">Contact : <strong>{{$patient->tel}}</strong></span>
         <span style="padding-left: 28%">Email : <strong>{{$patient->Email}}</strong></span>
    </div><br>
   <div><span style="padding-left: 20%">Sexe: <strong>{{$patient->sexe}}</strong></span></div><br>
    </fieldset>

    <fieldset><br>
    <legend>Constantes</legend>
    <div><span style="padding-left: 20%">Température : <strong>{{$patient->temperature}} °C</strong></span>
         <span style="padding-left: 30%">Poids : <strong>{{$patient->poids}} Kg</strong></span>
    </div><br>
    <div><span style="padding-left: 20%">Tension : <strong>{{$patient->tension}} mmHg</strong></span>
         <span style="padding-left: 29.5%">Pouls: <strong>{{$patient->pouls}} bpm</strong></span>
    </div><br>
    <div><span style="padding-left: 20%">Taille : <strong>{{$patient->taille}} m</strong></span>
         <span style="padding-left: 34.5%">Maladie particulière : <strong>{{$patient->maladiepart}}</strong></span>
    </div><br>
    <div><span style="padding-left: 20%">Allergie : <strong>{{$patient->allergie}}</strong></span>
         <span style="padding-left: 33.5%">Groupage et rhésus : <strong>{{$patient->groupage}}</strong></span>
    </div><br>
    </fieldset>

   <div>
        <footer style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">
          <hr color="blue" size="4" align="center">
          <div style="float: left;;">

          </div>
          <div style="float: right;;">

          </div>

        </footer>
      </div>


    </body>
    </html>
