<?php

/**
 * @desc EncryptionTest
 * @author cbw7172002
 * @date 2024/8/12 14:27
 */

declare(strict_types=1);

class EncryptionTest extends \PHPUnit\Framework\TestCase
{
  public function test()
  {
    $data = '开源技术小栈';
    $key = '53vYPpTJIR1aYFiFh0PppZzF';

    /** 加密*/
    $encrypt = \Xifan\ComposerHello\Encryption::encrypt($data, $key);
    self::assertIsString($encrypt);

    /** 解密*/
    $decrypt = \Xifan\ComposerHello\Encryption::decrypt($encrypt, $key);

    // 判断解密明文是否和预期的相等
    self::assertEquals($decrypt, $data);
  }
}
