
<?php 

require_once('config/config.php');


class Model{
    
    public static function dd($value) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }

    public static function getAllTable($table){
        $db = new DB;
        $getAll = $db->prepare("
            SELECT * FROM $table
        ");
        $getAll->execute(); 
        return $getAll->fetchAll();
    }

    public static function getRecordByID($table, $nameID, $id){
        $db = new DB;
        $getRecord = $db->prepare("
            SELECT * FROM $table 
            WHERE $nameID = $id
        ");
        $getRecord->execute();
        return $getRecord->fetch(PDO::FETCH_ASSOC);
    }

    public static function deleteRecordByID($table, $nameID, $id){
        $db = new DB;
        $getRecord = $db->prepare("
            DELETE FROM $table WHERE $nameID = $id
        ");
        $getRecord->execute();
        return $getRecord;
    }

    public static function validateDataKeys($data, $columns) {
        // Lọc các khóa trong $data mà không có trong $columns
        $invalidKeys = array_diff_key($data, array_flip($columns));

        if (!empty($invalidKeys)) {
            return false;
        }
        return true;
    }
}