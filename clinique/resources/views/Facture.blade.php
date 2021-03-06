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
      font-style: bold;
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
  font-size: 0.7rem;
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
  <title></title>
</head>
<body>



    &nbsp;  &nbsp; &nbsp; &nbsp;

    <br>
    <div style="float: left;">
    <img src="assets/media/logos/clinique6.jpg" height="2%" width="2%" ><br>
    <strong>GES-CLIN</strong> <br> T&eacute;l : +228 93-07-21-73/ 70-35-15-84<br>
    Facture  N??: {{$facture->id}}<br>Date : {{$facture->created_at->format('d/m/y')}} <br>

    </div><br><br>


    <center></center> <br> <br>
    <div style="float: right;" align="right">
        A M./Mme. : {{$facture->nomp}} {{$facture->prenomp}}<br></div><br>
    <hr color="blue" size="4"> <br>


    <!--
    <h4>Nom du Pharmacien : </h4>
    <h4>T??l??phone : +228 70 35 15 84 </h4>
    <h4>E-mail : sharifboukari68@gmail.com </h4>
    <h4>Adresse :Ago?? Koffi-Panou</h4>-->



    <table id="MaTable" class="table" CELLPADDING="2" CELLSPACING="2" WIDTH="100%">

      <thead>
        <tr>
          <th><h3>Description</h3></th>
          <th><h3>Prix</h3></th>
        </tr>
      </thead>




            <tr BGCOLOR="#CCCCCC">
              <td><h3>Prix de bon consultation:</h3><br>
                <h3> Prix de carnet m??dical</h3><br>
                <h3>Prix de traitement</h3><br>
                <h3> Prix total de produits</h3>
            </td>
              <td><h3>{{$facture->prixbonconsul}} FCFA</h3><br>
                <h3>{{$facture->prixcarnet}} FCFA</h3><br>
                <h3>{{$facture->prixtrait}} FCFA</h3><br>
                <h3>{{$facture->prixprod}} FCFA</h3><br>
            </td>


            </tr>



        </tbody><tfoot>
          <tr>
            <td ><h2>Total ?? payer:</h2></td>


            <td><h2>{{$facture->prixbonconsul+$facture->prixcarnet+$facture->prixtrait+$facture->prixprod}} FCFA</h2></td>

          </tr>
        </tfoot>

       <tbody>

    </table> <br>
    <div style="float: left;;" style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">

           <b>Arr??t??e la pr??sente facture ?? la somme de : {{$facture->prixbonconsul+$facture->prixcarnet+$facture->prixtrait+$facture->prixprod}} FCFA (Franc CFA)</b> <br><br>
           <b>Statut : {{$facture->statu}} </b>
           <h4 align="left"></h4>


      </div>

      <br> <br> <br> <br> <br>


      <div>
        <footer style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">
          <hr color="blue" size="4" align="center">
          <div style="float: left;;">
            E-mail : gesclin@gmail.tg
          </div>
          <div style="float: right;">
            T??l : +228 93 07 21 73
          </div>

        </footer>
      </div>


    </body>
    </html>
