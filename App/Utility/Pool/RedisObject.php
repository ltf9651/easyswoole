<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2019/9/28
 * Time: 14:14
 */

namespace App\Utility\Pool;

use Swoole\Coroutine\Redis;
use EasySwoole\Component\Pool\PoolObjectInterface;

class RedisObject extends Redis implements PoolObjectInterface
{
    function gc()
    {
        // TODO: Implement gc() method.
        $this->close();
    }

    function objectRestore()
    {
        // TODO: Implement objectRestore() method.
    }

    function beforeUse(): bool
    {
        // TODO: Implement beforeUse() method.
        return true;
    }
}