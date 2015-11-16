<?php

/*
 * This file is part of Icicle, a library for writing asynchronous code in PHP using promises and coroutines.
 *
 * @copyright 2014-2015 Aaron Piotrowski. All rights reserved.
 * @license MIT See the LICENSE file that was distributed with this source code for more information.
 */

namespace Icicle\Promise\Internal;

use Icicle\Promise\Thenable;

abstract class ResolvedPromise implements Thenable
{
    use SharedMethods;
    
    /**
     * {@inheritdoc}
     */
    public function cancel($reason = null) {}
    
    /**
     * {@inheritdoc}
     */
    public function isPending()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isCancelled()
    {
        return false;
    }
    
    /**
     * {@inheritdoc}
     */
    public function timeout($timeout, $reason = null)
    {
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function delay($time)
    {
        return $this;
    }
}
