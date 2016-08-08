<?php

/**
 * ClientType filter form base class.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     diepth2
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClientTypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'     => new sfWidgetFormFilterInput(),
      'name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'code'     => new sfValidatorPass(array('required' => false)),
      'name'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('client_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClientType';
  }

  public function getFields()
  {
    return array(
      'clientId' => 'Number',
      'code'     => 'Text',
      'name'     => 'Text',
    );
  }
}
