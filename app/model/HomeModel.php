<?php
class HomeModel extends Model{
    function __construct(){
        parent::__construct();
    }
    function tableFill(){
        return " ";
    }
    function fieldFill(){
        return " ";
    }
    function primaryKey(){
        return " ";
    }
    public function getListNotif(){
        return [
            'item1',
            'item2',
            'item3'
        ];
    }
    public function getDetail($id){
        $data = [
            'item1',
            'item2',
            'item3'
        ];
        return $data[$id];
    }
}