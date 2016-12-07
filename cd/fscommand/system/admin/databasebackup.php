<?php
//Copyright Lawrence Truett and www.FluffyCat.com January 23, 2007  

  $ccyymmdd = date("Ymd");
  $file = fopen("backup".$ccyymmdd.".sql","w");
  $line_count = create_backup_sql($file);
  fclose($file);
  echo "lines written: ".$line_count;

  function create_backup_sql($file) {
    $line_count = 0;
    $db_connection = db_connect();
    mysql_select_db (db_name()) or exit();
    $tables = mysql_list_tables(db_name());
    $sql_string = NULL;
    while ($table = mysql_fetch_array($tables)) {   
      $table_name = $table[0];
      $sql_string = "DELETE FROM $table_name";
      $table_query = mysql_query("SELECT * FROM `$table_name`");
      $num_fields = mysql_num_fields($table_query);
      while ($fetch_row = mysql_fetch_array($table_query)) {
        $sql_string .= "INSERT INTO $table_name VALUES(";
        $first = TRUE;
        for ($field_count=1;$field_count<=$num_fields;$field_count++){
          if (TRUE == $first) {
            $sql_string .= "'".mysql_real_escape_string($fetch_row[($field_count - 1)])."'";
            $first = FALSE;            
          } else {
            $sql_string .= ", '".mysql_real_escape_string($fetch_row[($field_count - 1)])."'";
          }
        }
        $sql_string .= ");";
        if ($sql_string != ""){
          $line_count = write_backup_sql($file,$sql_string,$line_count);        
        }
        $sql_string = NULL;
      }    
    }
    return $line_count;
  }

  function write_backup_sql($file, $string_in, $line_count) { 
    fwrite($file, $string_in);
    return ++$line_count;
  }
  
  function db_name() {
      return ("ched");
  }
  
  function db_connect() {
    $db_connection = mysql_connect("localhost", "root", "");
    return $db_connection;
  }
			echo "<script>alert('Database Backed up!!')</script>";
			echo "<script>window.location.href='utilities.php'</script>";?>