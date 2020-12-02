<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace LoyaltyLu\TccTransaction\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * @Annotation
 * @Target({"CLASS","METHOD"})
 */
class Compensable extends AbstractAnnotation
{
    /**
     * @var array
     */
    public $master;

    /**
     * @var array
     */
    public $slave;


//    public function __construct($value = null)
//    {
//
//        parent::__construct($value);
//
//    }

}
