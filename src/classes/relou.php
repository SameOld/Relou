<?php

/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 10/12/2015
 * Time: 21:45
 */
class relou
{
    private $_cnx;

    private $_num;
    private $_pseudo;
    private $_comm;

    function __construct()
    {
        $bdd = new Connexiondb();
        $this->_cnx = $bdd->getcnx();
    }

    function relouExist($n){
        $this->_num=$n;

        $request=$this->_cnx->prepare('SELECT * FROM relou AND commentaire WHERE relou.numero=:num AND relou.numero=commentaire.relou_numero');
        $request->bindValue(':num', $this->_num, PDO::PARAM_STR);
        $request->execute();

        if($request->fetch()){
            return true;
        }

        return false;
    }

    function relouInit($n){
        if($this->relouExist($n)==true){

            return $this;
        }
        else return null;
    }


}