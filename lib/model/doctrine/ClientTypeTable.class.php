<?php

/**
 * ClientTypeTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ClientTypeTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ClientTypeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ClientType');
    }
    public static function getListClientTypeForSelectBox()
    {
        $i18n = sfContext::getInstance()->getI18N();
        $listClientType[""] = $i18n->__("Tất cả");
        $arrClientType = ClientTypeTable::getInstance()->createQuery('a')
            ->select('a.clientId, a.name')->fetchArray();
        foreach($arrClientType as $valClientType){
            $listClientType[$valClientType['clientId']] = $valClientType['name'];
        }
        return $listClientType;
    }
    public static  function getListOs($os_id = null)
    {
        $sql =   ClientTypeTable::getInstance()->createQuery('a')
            ->select('a.clientId, a.name');
        if($os_id){
            $sql->andWhere("a.clientId =?", $os_id);
        }
        return $sql->fetchArray();
    }
}