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
  <title>Détails ordonnance</title>
</head>
<body>



    &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;   &nbsp;   &nbsp;  &nbsp;

    <br>
    <div style="float: left;">
    <img src="assets/media/logos/clinique6.jpg" height="5%" width="5%" ><br>
    <strong>GES-CLIN</strong> <br> T&eacute;l : +228 93-07-21-73/ 70-35-15-84<br>
     E-mail : gesclin@gmail.tg<br>
     Votre santé c'est notre priorité!!!


    </div><br> <br> <br> <br>


    <center></center> <br> <br>





    <h4 align="right">Dr {{auth()->user()->name}} {{auth()->user()->prenom}} </h4>
    <h4 align="right">Médecin Général</h4>
    <h4 align="right">Téléphone: 93072173</h4>
    <h4 align="right">Email: {{auth()->user()->email}} </h4>
    <hr color="blue" size="4"> <br>
    <!--
    <h4>Nom du Pharmacien : </h4>
    <h4>Téléphone : +228 70 35 15 84 </h4>
    <h4>E-mail : sharifboukari68@gmail.com </h4>
    <h4>Adresse :Agoè Koffi-Panou</h4>-->

        <h2 align="center"><u>Ordonnance médicale</u></h2>
        <h4 align="right">Ordonnance N°: {{$ordonnance->id}}</h4>
        <h4 align="right">Fait à: Lomé/ Le: {{$ordonnance->created_at->format('d/m/y')}}</h4>
        <p>{{$ordonnance->produits}}</p>


      <div>
        <footer style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">
          <hr color="blue" size="4" align="center">
          <div style="float: left;;">

          </div>
          <div style="float: right;;">
            Merci à vous!!!
          </div>

        </footer>
      </div>


    </body>
    </html>
