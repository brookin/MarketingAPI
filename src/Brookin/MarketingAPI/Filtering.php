<?php


namespace Brookin\MarketingAPI;


class Filtering
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string[]
     */
    public $values;

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return \string[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param \string[] $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }


}