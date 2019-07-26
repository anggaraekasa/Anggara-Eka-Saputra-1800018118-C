<!DOCTYPE html>  
 <html>   
 <head>   
  <title>Daftar Pesenan</title>   
  <style type="text/css">
        body {
        background-color: #93b5b3;
        color:white;
        }
    </style>
 </head>   
 <body>   
 <?php  
 $no   = isset($_GET['no']) ? $_GET['no'] : "";   
 $nama  = isset($_GET['nama']) ? $_GET['nama'] : "";   
 $pembayaran = isset($_GET['pembayaran']) ? $_GET['pembayaran'] : "";  
 ?>  
 <h2>Daftar Menu Pesenan</h2>  
 <hr>  
 <?php if (empty($nominal)) { ?>  
 <form action="" method="get">   
 <table width="100%" border="0">  
  <tr>  
   <td width="100">No Meja</td>  
   <td><input type="text" name="no"></td>  
  </tr>  
  <tr>  
   <td width="100">Diterima dari</td>  
   <td><input type="text" name="nama" required></td>  
  </tr>   
  <tr>  
   <td width="100">Untuk Pemesenan</td>  
   <td><input type="text" name="pembayaran" required></td>
  </tr>
  <tr>  
   <td width="100"></td>  
   <td><input type="submit" value="Buat Kuitansi"></td>  
  </tr>   
 </table>  
 </form>  
 <?php } ?>  
 <?php if (!empty($nominal)) { ?>  
 <table width="800" border="0" cellpadding="4" cellspacing="0" style="border: 1px solid #000;">  
 <tr>  
   <td rowspan="6" width="120" style="border-right:1px solid #000;"> </td>  
   <td width="150" valign="top" > No Meja </td>  
   <td valign="top" > : <?php echo $no;?> </td>  
 </tr>  
 <tr>  
   <td valign="top" > Telah Diterima Dari </td>  
   <td valign="top" > : <?php echo $nama;?> </td>  
 </tr>    
 <tr>  
   <td valign="top" > Menu Pesanan </td>  
   <td valign="top" > : <?php echo $pembayaran;?></td>  
 </tr>  
 </table>  
 <style>  
 a { text-decoration: none; color: blue; font-family: arrial; }  
 a:hover { color: black }  
 </style>  
 <a href="pesan.php">Kembali</a>  
 <?php } ?>