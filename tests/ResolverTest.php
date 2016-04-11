<?php
namespace Redbox\DNS\Tests;
use Redbox\DNS\Resolver as Resolver;
use Constraint;
use Redbox\Tests\DNS\Constraint\IsSuccessfulResolveResponseConstraint;

class ResolverTest extends \PHPUnit_Framework_TestCase
{
    public function test_resolve_returns_false_on_empty_string()
    {
        $resolver = new Resolver;
        $this->assertFalse($resolver->resolve(''));
        unset($resolver);
    }

    public function test_resolve_returns_false_on_error()
    {
        $resolver = new Resolver;
        $this->assertFalse($resolver->resolve('i dont exist'));
        unset($resolver);
    }

    public function test_resolve_returns_true_on_success()
    {
        $resolver = new Resolver;
        $this->assertTrue($resolver->resolve('php.net'));
        unset($resolver);
    }

    /**
     * @depends test_resolve_returns_true_on_success
     */
    public function test_resolve_returns_has_records_on_success() {
        $resolver = new Resolver;
        $resolver->resolve('php.net');
        $this->assertThat($resolver, new IsSuccessfulResolveResponseConstraint()) ;
        unset($resolver);
    }

}
