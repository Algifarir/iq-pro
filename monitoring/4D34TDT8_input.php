<?php
$host="localhost";
$user="root";
$password="";
$db="mkm";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>

!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap dan Select2 melalui CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Load file JS untuk JQuery dan Selec2.js melalui CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $(".select2").select2({
            });
        });
    </script>
    
</head>
<body>
<div class="container">
    <br>
    <h4>Multiple Select (Combo Box) di PHP</h4>
    <form  id="form" method="post">
    <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control select2"  name="jur1" id="jur1" onchange='changeValue(this.value)'>
		<option  value=""></option>

            <?php
            include "koneksi.php";
            //Perintah sql untuk menampilkan semua data pada tabel jurusan
            $sql="select * from master_type_form";

            $hasil=mysqli_query($kon,$sql);
            $no=0;
            while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <option  value="<?php echo $data['form_code'];?>"><?php echo $data['form_code'];?></option>
            <?php
	}
  ?>
        </select>
    </div>
	 <div class="form-group">
        <label for="sel2">Select list2:</label>
        <select class="form-control select2"  name="jur2" id="jur2" onchange='changeValue2(this.value)'>
			
		<option  value=""></option>

        </select>
    </div>
    </form>
    <div id="tampil">
    </div>
<script>
	function changeValue(id){
    var jur1 = id;
	
				$.ajax({
				url: 'test1.php',	
				method: 'post',	
				data: {jur1:jur1},
				success:function(data){	
				 $("#engine_number").html(data);
				}
			});
	}

</script>
<script>
	function changeValue2(id){
    var jur2 = id;

				$.ajax({
				url: 'test2.php',	
				method: 'post',	
				data: {jur2:jur2},
				success:function(data){	
				 $("#tampil").html(data);
				}
			});
	}

</script>
   
</div>
</body>
</html>