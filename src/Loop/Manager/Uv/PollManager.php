<?php

/*
 * This file is part of Icicle, a library for writing asynchronous code in PHP using promises and coroutines.
 *
 * @copyright 2014-2015 Aaron Piotrowski. All rights reserved.
 * @license Apache-2.0 See the LICENSE file that was distributed with this source code for more information.
 */

namespace Icicle\Loop\Manager\Uv;

class PollManager extends SocketManager
{
    /**
     * {@inheritdoc}
     */
    protected function beginPoll($pollHandle, callable $callback)
    {
        \uv_poll_start($pollHandle, \UV::READABLE, $callback);
    }
}