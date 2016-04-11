<?php
namespace Redbox\Tests\DNS\Constraint;


class IsSuccessfulResolveResponseConstraint extends \PHPUnit_Framework_Constraint
{
    public function matches($other)
    {
        if (isset($other['DNS']) === false || is_array($other['DNS']) === false)
            return false;

        if (count($other['DNS']) == 0)
            return false;

        return true;
    }


    public function toString()
    {
        return 'is valid response to the resolve method.';
    }

}