<?php
	date_default_timezone_set('Asia/Jakarta');
	ini_set('display_errors', '0');
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	$host	= "127.0.0.1";
	$user	= "root";
	$pass	= "";
	$db		= "mkm";
	$port   = 3307;

	// Global connection variable for PDO wrappers
	$global_pdo_link = null;
	$global_pdo_stmt = null;

	if (!function_exists('mysql_connect')) {
		function mysql_connect($host, $user, $pass, $new_link = false, $client_flags = 0) {
			global $global_pdo_link, $port;
			
			// Jika format lama "host:port", pisahkan
			if (strpos($host, ':') !== false) {
				list($host, $port) = explode(':', $host);
			}

			try {
				$global_pdo_link = new PDO("mysql:host=$host;port=$port;charset=utf8", $user, $pass);
				$global_pdo_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
				return $global_pdo_link;
			} catch (PDOException $e) {
				return false;
			}
		}
		
		function mysql_select_db($dbName, $link = null) {
			global $global_pdo_link;
			if (!$global_pdo_link) return false;
			try {
				$global_pdo_link->exec("USE `$dbName`");
				return true;
			} catch (PDOException $e) {
				return false;
			}
		}
		function mysql_query($query, $link = null) {
			global $global_pdo_link, $global_pdo_stmt;
			if (!$global_pdo_link) return false;
			$stmt = $global_pdo_link->query($query);
			if ($stmt !== false) {
				return $stmt;
			}
			return false;
		}
		function mysql_fetch_array($result) {
			if ($result instanceof PDOStatement) {
				$row = $result->fetch(PDO::FETCH_BOTH);
				return $row ? $row : false;
			}
			return false;
		}
		function mysql_num_rows($result) {
			if ($result instanceof PDOStatement) {
				return $result->rowCount();
			}
			return 0;
		}
		function mysql_error($link = null) {
			global $global_pdo_link;
			if ($global_pdo_link) {
				$err = $global_pdo_link->errorInfo();
				return isset($err[2]) ? $err[2] : '';
			}
			return 'Connection failed';
		}
		function mysql_close($link = null) {
			global $global_pdo_link;
			$global_pdo_link = null;
			return true;
		}
		function mysql_real_escape_string($string, $link = null) {
			global $global_pdo_link;
			if (!$global_pdo_link) return addslashes($string);
			$quoted = $global_pdo_link->quote($string);
			// PDO::quote() adds surrounding quotes, we need to strip them
			return substr($quoted, 1, -1);
		}
	}
	
	$koneksi=mysql_connect($host . ':' . $port,$user,$pass);
	$db_sel=mysql_select_db($db);
	
	if (!$koneksi || !$db_sel){
?>
	<script language="javascript">alert("Gagal Koneksi Database MySql !!")</script>
<?php
	}
?>