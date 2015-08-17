<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RuleValidationErrorType
 *
 * Represents a single validation error on a particular rule property value, predicate property value or action property value
 * XSD Type: RuleValidationErrorType
 *
 * @method RuleValidationErrorType getFieldURI()
 * @method RuleValidationErrorType setFieldURI(string $fieldURI)
 * @method RuleValidationErrorType getErrorCode()
 * @method RuleValidationErrorType setErrorCode(string $errorCode)
 * @method RuleValidationErrorType getErrorMessage()
 * @method RuleValidationErrorType setErrorMessage(string $errorMessage)
 * @method RuleValidationErrorType getFieldValue()
 * @method RuleValidationErrorType setFieldValue(string $fieldValue)
 */
class RuleValidationErrorType extends TypeTest
{

    /**
     * @property string $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property string $errorCode
     */
    protected $errorCode = null;

    /**
     * @property string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @property string $fieldValue
     */
    protected $fieldValue = null;


}

