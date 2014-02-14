<?php

$filename = 'test.csv'; // CSV file to be imported to MySQL
$tablename = "book"; // MySQL table name in which data to be inserted
new csvimport($tablename,$filename);


class csvimport
{
    var $separator = ',';
    var $field_names = false;
    var $dbhost = '';   // mysql database server
    var $dbuser = 'root';       // database username
    var $dbpass = '';       // database password
    var $dbname = 'icslol';       // database name
    var $data = '';
    var $error = '';
    var $result = false;
	
function __construct($tablename,$filename)
{
    $Conn = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass)
                 or $this->error_msg("Error: Invalid MySQL Server Information");
    
    $DB_select = mysql_select_db($this->dbname, $Conn);
    
    //if ($this->temp_path == '')
    //   $this->temp_path = sys_get_temp_dir();
    $this->filename = $filename;
	$this->tablename = $tablename;
    //$this->sql = $sql;          
    $this->import();
	
}

function execute($sql)
{
    if ($sql!="")
    {
        $result = mysql_query($sql) or $this->error_msg("Error: Check MySQL Query($sql)");
        if ($result)
            return $result;
        else
            return false;
    }
	
	
}
 
//function to check number of record of resource id
function count_check($result)
{
    if ($result)
    {
        if (mysql_num_rows($result) > 0)
            return true;
        else
            return false;                  
    }
}      
 
//function to fetch mysql data from resource id in associative array
function recordset($result)
{
    if ($result)
    {
        while($row = mysql_fetch_assoc($result))
            $data[] = $row;
		
		
    }
    return $data;
}
 
//function to display error message
function error_msg($msg)
{
    if ($msg != '')
        die($msg);
    else
        return true;
}

function import()
{
    if (file_exists($this->filename))
    {
        $this->data = file_get_contents($this->filename);
        if ($this->data != '')
        {
            $lines = explode("\n", $this->data);
			if (is_array($lines) && count($lines) > 0)
            {
                $insert_string = '';
                $data_array = array();				
                for($i=0;$i<count($lines);$i++)
                {
                    if ($lines[$i] != '')
                    {
                        $data_array = explode($this->separator, $lines[$i]);
                        if (is_array($data_array) && count($data_array) > 0)
                        {
                            $t_str = '';
                            foreach($data_array as $data_row)
                            {
                                $t_str .= "'".$data_row."',";
                            }
                        }
                        $insert_string .= '('.trim($t_str,",").'),';
                    }
                }
                $insert_string = trim($insert_string,",");
				if ($insert_string != '')
                {
                    $insert_query = "INSERT INTO ".$this->tablename." VALUES $insert_string";
					
					$ins = $this->execute($insert_query);
                    if ($ins)
                        $this->error_msg("Data Inserted Successfully...");
                    else
                        $this->error_msg("Problem While Inserting Data...");
                }
            }                  
        }
        else
        {
            $this->error_msg("Error: No Data In CSV file");
        }
         
    }
    else
    {
        $this->error_msg("Error: Cannot open file(".$this->filename.")");
    }
}

}