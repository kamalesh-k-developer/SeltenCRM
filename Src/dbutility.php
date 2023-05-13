<?php

header('Content-Type: application/json');

include_once ('../Includes/dbconnection.php');

class Controller extends Dbconnect {
    
    public function __construct() { 
         parent::__construct();        
    }  

    //function called handlerequest to check the URL method
    public function handleRequest($tableName) {

        $requestMethod = $_SERVER["REQUEST_METHOD"];

        if ($requestMethod == "POST") {
            $inputData = isset($inputData) ? $inputData : $_POST;
            $storeData = $this->storeData($tableName, $inputData);
            echo $storeData;
        } else if ($requestMethod == "DELETE") {
            $deleteData = $this->deleteData($_GET, $tableName);
            echo $deleteData;    
        } else if ($requestMethod == "GET") {
            if (isset($_GET['id'])) {
                $data = $this->getData($_GET, $tableName);
                echo $data;
            } else {
                $dataList = $this->getDataList($tableName);
                echo $dataList;
            }
        } else if ($requestMethod == "PUT") {
            $inputData = json_decode(file_get_contents("php://input"), true);
            $updateData = $this->updateData($inputData, $_GET, $tableName);
            echo $updateData;
        } else {
            $data = [
                'status' => 405,
                'message' => $requestMethod . " Request method not allowed",
            ];
            header("http/1.0 405 method not allowed");
            echo json_encode($data);
        }
    }

    //show  the status message
    private function statusMessage($message, $status, $value) {

        if($value) {
            $data = [
                'message' => $message,
                'data' => $value
            ];
            header("http/1.0 422 $status");
            echo json_encode($data);
        
        }else {
            $data = [
                'message' => $message,
            ];
            header("http/1.0 422 $status");
            echo json_encode($data);
        }
    }

    //function called storedata which store data of users and customers in database
    private function storeData($tableName, $inputData) {

        $columns = array_keys($inputData);
        $values = array_map(function ($value) {
            return mysqli_real_escape_string($this->connection, $value);
        }, array_values($inputData));
    
        $placeholders = array_fill(0, count($values), '?');
        $query = "INSERT INTO $tableName (" . implode(',', $columns) . ") VALUES (" . implode(',', $placeholders) . ")";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($values)), ...$values);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            return $this->statusMessage('Data Created', 'Created','');
        } else {
            return $this->statusMessage('Internal Server Error', '500 Internal Server Error', '');

        }
    }
    
    //function call getdatalist which is used to retrieve all the data of a particular table from the database
    private function getDataList($tableName) {

        $query = "SELECT * FROM $tableName";
        $query_run = mysqli_query($this->connection, $query);

        if($query_run) {
            if(mysqli_num_rows($query_run) > 0) {
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                return $this->statusMessage('Data List Fetched', '200 Data List Fetched', $res);
            }
            else {
                return $this->statusMessage('No Data Found', '404 No Data Found','');
            }
        }
        else {
            return $this->statusMessage('Internal Server Error', '500 Internal Server Error','');
        }
    }

    //function called getdata which is used to retrieve the specific data from a specific  table
    function getData($customerParams,$tableName) {
    
        if($customerParams['id'] == null) {
            return $this->statusMessage('Enter your customer id','','');
        }

        $customerId = mysqli_real_escape_string($this->connection,$customerParams['id']);
        $query = "SELECT * FROM $tableName WHERE id='$customerId' LIMIT 1";
        $result = mysqli_query($this->connection, $query);

        if($result) {
            if(mysqli_num_rows($result) == 1)
            {
                $res = mysqli_fetch_assoc($result);
                return $this->statusMessage('Data Fetched', '200 ok', $res);
            } else {
                return $this->statusMessage('No Data Found', '404 No Data Found','');
            }
        }else {
            return $this->statusMessage('Internal Server Error', '500 Internal Server Error','');
        }
    }

    //function called updatedate which is used to modify or changes in any specific data in specific table
    function updateData($inputData, $queryParams, $tableName) {

        $columns = array_keys($inputData);
        $setValues = array_map(function ($value) {
            return "$value=?";
        }, $columns);
        $values = array_values($inputData);
        
        $whereClause = "";
        foreach($queryParams as $param => $value) {
            $whereClause .= "$param=? AND ";
            $values[] = $value;
        }
        $whereClause = rtrim($whereClause, "AND ");
    
        if(empty($whereClause)) {
            return $this->statusMessage('Your id not found in the URL','', '');
        }
        
        $query = "UPDATE $tableName SET " . implode(',', $setValues) . " WHERE $whereClause";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($values)), ...$values);
        $result = mysqli_stmt_execute($stmt);
    
        if($result) {
            return $this->statusMessage('Data Updated', '200 Data Updated', '');
        } else {
            return $this->statusMessage('Internal Server Error', '500 Internal Server Error', '');
        }
    }
     
//function called deletedata which is used to delete data from a table 
    function deleteData($queryParams, $tableName) {
        $idColumnName = 'id'; 
        $idValue = null;
    
        if(isset($queryParams[$idColumnName])) {
            $idValue = mysqli_real_escape_string($this->connection, $queryParams[$idColumnName]);
        }
    
        if(!$idValue && isset($queryParams['data'][$idColumnName])) {
            $idValue = mysqli_real_escape_string($this->connection, $queryParams['data'][$idColumnName]);
        }
    
        if(!$idValue) {
            return $this->statusMessage('Id not found in request', '400 Bad Request', '');
        }
    
        $query = "DELETE FROM $tableName WHERE $idColumnName='$idValue' LIMIT 1";
        $result = mysqli_query($this->connection, $query);
    
        if($result) {
            return $this->statusMessage('Data Deleted', '204 No Content', '');
        } else {
            return $this->statusMessage('Data Not Found', '404 Not Found', '');
        }
    }
    
}
