<?php
/**
 * PHP-DI
 *
 * @link      http://mnapoli.github.com/PHP-DI/
 * @copyright 2012 Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace IntegrationTests\DI\Fixtures\SetterInjectionTest;

use DI\Annotation\Inject;

/**
 * Fixture class
 */
class Buggy1
{

    /**
     * @Inject
     * @param $dependency
     */
    public function setDependency($dependency)
    {
        $this->dependency = $dependency;
    }

}
