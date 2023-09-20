<?php

//public function deleteRows($table, $params = [])
//{
//    try{
//        $sql = 'DELETE ';
//    }
//
//}

//Notes the queries we can use for later

//public function select()
//{
//    //Queries
//    SELECT username, email FROM user WHERE userid=1
//    SELECT user,username, user.email, order.date FROM user, order
//    SELECT kolommen FROM TABEL WHERE vergelijking
//     select => [username, email]
//    WHERE
//    user.username = "piet";
//    order.date BETWEEN datum AND datum
//    user.username LIKE %p_
//    user.id = order.userid     //    user. JOIN order
//
//}

//Mysql.php
public function select(array $columns, array $params)
{
    try {
        $query = "SELECT ";
        $columnClauses = [];

        if (is_array($columns)) {
            foreach ($columns as $columnTable => $columnNames) {
                if (is_array($columnNames)) {
                    foreach ($columnNames as $columnString)
                        $columnClauses[] = $columnTable . "." . $columnString;
                }
            }
        }


        $query .= implode(", ", $columnClauses);
        $query .= "FROM " . implode(", ", array_key($columns));

        if (!empty($params)) {
            $query .= " WHERE ";
            $conditions = [];

            foreach ($params as $key => $value) {
                foreach ($params as $key => $value) {
                    $tableAndColumn = explode(".", $key, 2);
                    if (count($tableAndColumn) === 2) {
                        $table = $tableAndColumn[0];
                        $column = $tableAndColumn[1];
                    } else {
                        $table = array_keys($columns)[0];
                        $column = $key;
                    }

                    if (is_array($value)) {
                        // BETWEEN
                        $conditions[] = $table . '.' . $column . " '" . $value[0] . "' AND '" . $value[1]."'";
                    } elseif (strpos($params, "LIKE") !== false) {
                        //LIKE
                        $conditions[] = $table . "." . $column . " '$value'";
                    } elseif (strpos($params, "=") !== false) {
                        //JOIN
                        $conditions[] = $key;
                    } else {
                        // equally to values
                        $conditions[] = $table . "." . $column . " = '$value'";
                    }

                    $conditions[] = $table . '.' . $column . " = '$value'";
                }
            }
            $query .= implode('AND', $conditions);


        }
    }
    catch
        (PDOException $error)
    {
        throw new PDOException($error->getMessage());
    }

//This is for in the index.php

//I've added a extra $_GET['action'], so that the 'switch statement' will work!
$action = isset($_GET['action']) ? $_GET['action'] : null;

switch ($action) {
    case 'test':
//for testing in index.php also using switch case
        $columns = [
            'user' => ['username', 'email'],
             'order' => ['date']
        ];

//The line $tables doesn't need to be written, because it is already in the property $columns
//$tables = ['user', 'order'];

$params = [
    'username' => 'piet',
    'date BETWEEN' => ['2023-09-01', '2023-09-15'],
    'username LIKE' => '%p_',
    'id = order.userid' => true
];

Db::$db->select($columns, $table, $params);
break;
    default:
 }
}

//foreach ($params as $keys => $value) {
//    $tableAdnColumn = explode(".", $key, 2);
//    if (count($tableAndColumn) === 2) {
//        $table = $tableAndColumn[0];
//        $columns = $tableAndColumn[1];
//    } else {
//        $table = array_keys($columns)[0];
//        $columns = $key;
//    }
//}