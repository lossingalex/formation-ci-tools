<?php

namespace Itkg\LegacyBundle\Manager;

/**
 * Class TreeManager
 */
class TreeManager
{
    /**
     * @param array $elements
     *
     * @return array
     */
    public function formatTree(array $elements)
    {
        $hasParent = false;
        foreach ($elements as $element) {
            if (null !== $element->getParent()) {
                $hasParent = true;
            }
        }

        if (!($hasParent === true)) {
            return $elements;
        }

        if ($elements[1]->getParent() == $elements[0]->getName()) {
            $elements[0]->addSon($elements[1]);

            return array($elements[0]);
        } else {
            $elements[1]->addSon($elements[0]);

            return array($elements[1]);
        }
    }
}
