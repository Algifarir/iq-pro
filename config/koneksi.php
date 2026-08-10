<?php
	ini_set('display_errors',FALSE);
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "mkm";
	$db_name = $db;
	
	if (!function_exists('mysql_connect')) {
		$global_pdo_link = null;

		function mysql_connect($host, $user, $pass) {
			global $global_pdo_link;

			$port = null;
			if (strpos($host, ':') !== false) {
				list($host, $port) = explode(':', $host, 2);
			}

			try {
				$dsn = "mysql:host=$host" . ($port ? ";port=$port" : "") . ";charset=utf8";
				$global_pdo_link = new PDO($dsn, $user, $pass);
				$global_pdo_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
				$global_pdo_link->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
				return $global_pdo_link;
			} catch (PDOException $e) {
				return false;
			}
		}

		function mysql_select_db($dbName) {
			global $global_pdo_link;

			if (!$global_pdo_link) {
				return false;
			}

			return $global_pdo_link->exec("USE `$dbName`") !== false;
		}

		function mysql_query($query) {
			global $global_pdo_link;

			if (!$global_pdo_link) {
				return false;
			}

			return $global_pdo_link->query($query);
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

		function mysql_field_name($result, $fieldOffset) {
			if ($result instanceof PDOStatement) {
				$meta = $result->getColumnMeta($fieldOffset);
				return isset($meta['name']) ? $meta['name'] : false;
			}

			return false;
		}

		function mysql_field_len($result, $fieldOffset) {
			if ($result instanceof PDOStatement) {
				$meta = $result->getColumnMeta($fieldOffset);
				return isset($meta['len']) ? $meta['len'] : 0;
			}

			return 0;
		}

		function mysql_real_escape_string($string) {
			global $global_pdo_link;

			if (!$global_pdo_link) {
				return addslashes($string);
			}

			$quoted = $global_pdo_link->quote($string);
			return substr($quoted, 1, -1);
		}

		function mysql_error() {
			global $global_pdo_link;

			if (!$global_pdo_link) {
				return 'Connection failed';
			}

			$error = $global_pdo_link->errorInfo();
			return isset($error[2]) ? $error[2] : '';
		}

		function mysql_close() {
			global $global_pdo_link;
			$global_pdo_link = null;
			return true;
		}
	}
	
	$koneksi=mysql_connect($host,$user,$pass);
	$db=mysql_select_db($db_name);
	if (!$koneksi || !$db) {
		$koneksi=mysql_connect('127.0.0.1:3307',$user,$pass);
		$db=mysql_select_db($db_name);
	}
	
	if ($koneksi&&$db){
		//echo "berhasil : )";
	}else{
?>
	<script language="javascript">alert("Gagal Koneksi Database MySql !!")</script>
<?php
	}
	
?>
