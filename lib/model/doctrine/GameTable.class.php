<?php

/**
 * GameTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GameTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object GameTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Game');
    }
    public static  function getListGame($gameId = null)
    {
        $sql =   GameTable::getInstance()->createQuery('a')
            ->select('a.gameid, a.name')
            ->where('status = 1');
        if($gameId){
            $sql->andWhere("a.gameid =?", $gameId);
        }
        return $sql->fetchArray();
    }
    public static function getListGameForSelectBox()
    {
        $i18n = sfContext::getInstance()->getI18N();
        $listType[""] = $i18n->__("Tất cả");
        $arrType = GameTable::getInstance()->createQuery('a')
            ->select('a.gameid, a.name')->fetchArray();
        foreach($arrType as $valType){
            $listType[$valType['gameid']] = $valType['name'];
        }
        return $listType;
    }

}