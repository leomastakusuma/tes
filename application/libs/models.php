<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Models extends Controller{
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    public function selectfield($select,$table){
        $sql        = "SELECT {$select} ";
        $sql       .= "FROM {$table}";
        $query      = $this->db->prepare($sql);
        $query      ->execute();
//        print_r($query);die;  
        return      $query->fetchAll();   
    }
    #Funtion Search Row
    public function search($colums,$table,$conditon){
        echo $colums.$table.$conditon;
       
    }
    
}
