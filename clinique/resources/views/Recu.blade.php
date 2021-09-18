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
     padding: 2px;
     border-spacing: 2px;
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
  <title>Reçu</title>
</head>
<body>





&nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;   &nbsp;   &nbsp;  &nbsp;

<br>
<div style="float: left;">
<img src="assets/media/logos/clinique6.jpg" height="5%" width="5%" ><br>
Clinique GES-CLIN <br> T&eacute;l : +228 93-07-21-73/ 70-35-15-84<br>
 E-mail : gesclin@gmail.tg<br>
Etre en bonne santé c'est le plus important

</div><br> <br> <br>


<center></center> <br>





<h4 align="right">Reçu  N°:2</h3><br>
<h4 align="right">Date : 01 Sept 2021</h4>
<hr color="blue" size="4"> <br>
<!--
<h4>Nom du Pharmacien : </h4>
<h4>Téléphone : +228 70 35 15 84 </h4>
<h4>E-mail : sharifboukari68@gmail.com </h4>
<h4>Adresse :Agoè Koffi-Panou</h4>-->



<table id="MaTable" class="table" CELLPADDING="2" CELLSPACING="2" WIDTH="100%">

  <thead>
    <tr>
      <th>Nom produit</th>
      <th>Quantité achet&eacute;e</th>
      <th>Date</th>
      <th>prix unitaire</th>
      <th>Prix total</th>

    </tr>
  </thead>



  @foreach (Cart::content() as $produit)
        <tr BGCOLOR="#CCCCCC">
          <td>{{$produit->model->nomprod}}</td>
          <td>1</td>
          <td>01/09/2021</td>
          <td>{{$produit->model->getprix()}}</td>
          <td>{{getprix($produit->subtotal())}}</td>

        </tr>
        @endforeach


    </tbody><tfoot>
      <tr>
        <td colspan="4">Somme</td>


        <td>{{getprix(Cart::subtotal())}}</td>

      </tr>
    </tfoot>

   <tbody>

</table> <br>
<div style="float: left;;" style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">

       <b>Arrêtée la présente facture à la somme de : {{getprix(Cart::total())}} (Franc CFA)</b> <br>

       <h4 align="left"></h4>


  </div>
  <br> <br> <br> <br> <br>


  <div>
    <footer style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">
      <hr color="blue" size="4" align="center">
      <div style="float: left;;">

      </div>
      <div style="float: right;;">
        Tél : +228 93 07 21 73
      </div>

    </footer>
  </div>
</body>
</html>
