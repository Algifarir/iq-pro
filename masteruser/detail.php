<?php
   	include "../config/koneksi.php";
    //if($_POST['id']) {
        $id = $_REQUEST['id'];      
        $sql = mysql_query("SELECT * FROM master_user WHERE id = $id");
        while ($result = mysql_fetch_array($sql)){
		?>

        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group">
                <label>Nama </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $result['full_name']; ?>">
            </div>
            <div class="form-group">
                <label>User</label>
                <input type="text" class="form-control" name="umur" value="<?php echo $result['user']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php } 
		
		?>