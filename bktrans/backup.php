<?php
    // db config
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "forwalxm_logistics";
    // db connect
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // file header stuff
    $output = "";
    
    // get all table names in db and stuff them into an array
    $tables = array();
	$condition="where Tables_in_$dbname='custemer' or Tables_in_$dbname='supplier' or Tables_in_$dbname='files' or Tables_in_$dbname='financial_period' ";
    $stmt = $pdo->query("SHOW TABLES  	$condition ");
    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        $tables[] = $row[0];
    }
    // process each table in the db
    foreach($tables as $table){
        $fields = "";
        $sep2 = "";
        $stmt = $pdo->query("SELECT * FROM $table");
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            // runs once per table - create the INSERT INTO clause
            if($fields == ""){
                $fields = "INSERT INTO `$table` (";
                $sep = "";
                // grab each field name
                foreach($row as $col => $val){
                    $fields .= $sep . "`$col`";
                    $sep = ", ";
                }
                $fields .= ") VALUES";
                $output .= $fields . "\n";
            }
            // grab table data
            $sep = "";
            $output .= $sep2 . "(";
            foreach($row as $col => $val){
                // add slashes to field content
                $val = addslashes($val);
                // replace stuff that needs replacing
                $search = array("\'", "\n", "\r");
                $replace = array("''", "\\n", "\\r");
                $val = str_replace($search, $replace, $val);
                $output .= $sep . "'$val'";
                $sep = ", ";
            }
            // terminate row data
            $output .= ")";
            $sep2 = ",\n";
        }
        // terminate insert data
        $output .= ";\n";
    }  

// selection 1
  $tables = array();
	$condition2="where  Tables_in_$dbname='import' OR Tables_in_$dbname='export' ";
    $stmt = $pdo->query("SHOW TABLES  	$condition2 ");
    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        $tables[] = $row[0];
    }
    // process each table in the db
    foreach($tables as $table){
        $fields = "";
        $sep2 = "";
        $stmt = $pdo->query("SELECT * FROM $table");
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            // runs once per table - create the INSERT INTO clause
            if($fields == ""){
                $fields = "INSERT INTO `$table` (";
                $sep = "";
                // grab each field name
                foreach($row as $col => $val){
                    $fields .= $sep . "`$col`";
                    $sep = ", ";
                }
                $fields .= ") VALUES";
                $output .= $fields . "\n";
            }
            // grab table data
            $sep = "";
            $output .= $sep2 . "(";
            foreach($row as $col => $val){
                // add slashes to field content
                $val = addslashes($val);
                // replace stuff that needs replacing
                $search = array("\'", "\n", "\r");
                $replace = array("''", "\\n", "\\r");
                $val = str_replace($search, $replace, $val);
                $output .= $sep . "'$val'";
                $sep = ", ";
            }
            // terminate row data
            $output .= ")";
            $sep2 = ",\n";
        }
        // terminate insert data
        $output .= ";\n";
    }  
//selection 2
  $tables = array();
$condition3="where  Tables_in_$dbname='invoice' OR Tables_in_$dbname='purchase' OR Tables_in_$dbname='offre' OR Tables_in_$dbname='balance_invoice_purchase' OR Tables_in_$dbname='default_billing'   ";
    $stmt = $pdo->query("SHOW TABLES  	$condition3 ");

    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        $tables[] = $row[0];
    }
    // process each table in the db
    foreach($tables as $table){
        $fields = "";
        $sep2 = "";
        
        $stmt = $pdo->query("SELECT * FROM $table");
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            // runs once per table - create the INSERT INTO clause
            if($fields == ""){
                $fields = "INSERT INTO `$table` (";
                $sep = "";
                // grab each field name
                foreach($row as $col => $val){
                    $fields .= $sep . "`$col`";
                    $sep = ", ";
                }
                $fields .= ") VALUES";
                $output .= $fields . "\n";
            }
            // grab table data
            $sep = "";
            $output .= $sep2 . "(";
            foreach($row as $col => $val){
                // add slashes to field content
                $val = addslashes($val);
                // replace stuff that needs replacing
                $search = array("\'", "\n", "\r");
                $replace = array("''", "\\n", "\\r");
                $val = str_replace($search, $replace, $val);
                $output .= $sep . "'$val'";
                $sep = ", ";
            }
            // terminate row data
            $output .= ")";
            $sep2 = ",\n";
        }
        // terminate insert data
        $output .= ";\n";
    } 	
	//selection 3
	  $tables = array();
	$condition4="where Tables_in_$dbname !='custemer' AND Tables_in_$dbname !='supplier' AND Tables_in_$dbname !='files' AND Tables_in_$dbname !='import' AND Tables_in_$dbname !='export' AND Tables_in_$dbname !='invoice' AND Tables_in_$dbname !='purchase' AND Tables_in_$dbname !='offre' AND  Tables_in_$dbname!='balance_invoice_purchase' AND  Tables_in_$dbname!='default_billing' AND  Tables_in_$dbname!='finalinvoice' AND  Tables_in_$dbname!='finaloffre' AND  Tables_in_$dbname!='finalpurchase' AND  Tables_in_$dbname!='vueinvoicetotale' AND  Tables_in_$dbname!='vuepurchasetotale' AND  Tables_in_$dbname!='operation' AND  Tables_in_$dbname!='currency' AND Tables_in_$dbname!='financial_period' AND Tables_in_$dbname!='categorie'";
    $stmt = $pdo->query("SHOW TABLES  	$condition4 ");

    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        $tables[] = $row[0];
    }
    // process each table in the db
    foreach($tables as $table){
        $fields = "";
        $sep2 = "";
        
        $stmt = $pdo->query("SELECT * FROM $table");
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            // runs once per table - create the INSERT INTO clause
            if($fields == ""){
                $fields = "INSERT INTO `$table` (";
                $sep = "";
                // grab each field name
                foreach($row as $col => $val){
                    $fields .= $sep . "`$col`";
                    $sep = ", ";
                }
                $fields .= ") VALUES";
                $output .= $fields . "\n";
            }
            // grab table data
            $sep = "";
            $output .= $sep2 . "(";
            foreach($row as $col => $val){
                // add slashes to field content
                $val = addslashes($val);
                // replace stuff that needs replacing
                $search = array("\'", "\n", "\r");
                $replace = array("''", "\\n", "\\r");
                $val = str_replace($search, $replace, $val);
                $output .= $sep . "'$val'";
                $sep = ", ";
            }
            // terminate row data
            $output .= ")";
            $sep2 = ",\n";
        }
        // terminate insert data
        $output .= ";\n";
    }  
	

    header('Content-Description: File Transfer');
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $dbname . '.sql');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . strlen($output));
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    header('Pragma: public');
    echo $output;
?>