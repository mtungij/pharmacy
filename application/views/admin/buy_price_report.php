
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Buying price Report</title>
</head>
<body>

<div id="container">
 <!--  <div style='width: 100%;align-items: center; display: flex;justify-content:space-between;flex-direction: row;'>
 </div> -->
  <style>
    .pull{
    text-align: center;
    margin-top: 100px;
    margin-bottom: 0px;
    margin-right: 150px;
    margin-left: 80px;

    }
  </style>
  <style>
    .display{
      display: flex;
      
    }
  </style>

       <div class="pull">
        <p style="font-size:12px;"> <?php echo $shop->shop_name; ?><br>
        <?php echo $shop->po_box; ?> <?php echo $shop->location; ?> <br>
        Mob: <?php echo $shop->phone; ?>
        </p>  
         <p style="font-size:12px;"><b>BUYING PRICE REPORT</b></p>
       </div>

     
 
  <div id="body">
  <style> 
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body>



<table>
  <tr>
    <th style="font-size:12px;">S/No.</th>
    <th style="font-size:12px;">Product name</th>
    <th style="font-size:12px;">Buy Price</th>
  </tr>
    <?php echo $no = 1; ?>
  <?php foreach ($all_product as $selling_priceDatas): ?>
    
 
 <tr>
     <td style="font-size:12px;"><?php echo $no++; ?></td>
    <td style="font-size:12px;"><?php echo $selling_priceDatas->name; ?></td>
    <td style="font-size:12px;">
      <?php echo number_format($selling_priceDatas->buy_price); ?>/=
    </td>
  </tr>
 <?php endforeach; ?>
</table>
  </div>

</div>

</body>
</html>




