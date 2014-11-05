<?php

namespace Itkg\LegacyBundle\Tests\Manager;

use Itkg\LegacyBundle\Manager\TreeManager;
use Itkg\LegacyBundle\Model\Element;

/**
 * Class TreeManagerTest
 */
class TreeManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TreeManager
     */
    protected $manager;

    /**
     * Set up the test
     */
    public function setUp()
    {
        $this->manager = new TreeManager();
    }

    /**
     * Test with one element
     */
    public function testWithOneElement()
    {
        $element = new Element('root');

        $tree = $this->manager->formatTree(array($element));

        $this->assertSame(array($element), $tree);
    }

    /**
     * With two element and no parents
     */
    public function testWithTwoElements()
    {
        $element1 = new Element('root');
        $element2 = new Element('element');

        $tree = $this->manager->formatTree(array($element1, $element2));

        $this->assertSame(array($element1, $element2), $tree);
    }

    /**
     * Test with one parent
     *
     */
    public function testWithOneParent()
    {
        $root = new Element('root');
        $child = new Element('child', 'root');

        $tree = $this->manager->formatTree(array($root, $child));

        $this->assertSame('root', $tree[0]->getName());
        $this->assertCount(1, $tree[0]->getSons());
        $this->assertSame('child', $tree[0]->getSons()[0]->getName());
    }
}
