<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ProtectionRuleType
 *
 *
 * XSD Type: ProtectionRuleType
 *
 * @method ProtectionRuleType getName()
 * @method ProtectionRuleType setName(string $name)
 * @method ProtectionRuleType getUserOverridable()
 * @method ProtectionRuleType setUserOverridable(boolean $userOverridable)
 * @method ProtectionRuleType getPriority()
 * @method ProtectionRuleType setPriority(integer $priority)
 * @method ProtectionRuleType getCondition()
 * @method ProtectionRuleType setCondition(ProtectionRuleConditionType $condition)
 * @method ProtectionRuleType getAction()
 * @method ProtectionRuleType setAction(ProtectionRuleActionType $action)
 */
class ProtectionRuleType extends TypeTest
{

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property boolean $userOverridable
     */
    protected $userOverridable = null;

    /**
     * @property integer $priority
     */
    protected $priority = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ProtectionRuleConditionType $condition
     */
    protected $condition = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ProtectionRuleActionType $action
     */
    protected $action = null;


}

