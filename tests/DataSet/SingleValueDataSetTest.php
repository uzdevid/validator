<?php

declare(strict_types=1);

namespace Yiisoft\Validator\Tests\DataSet;

use PHPUnit\Framework\TestCase;
use Yiisoft\Validator\DataSet\SingleValueDataSet;

final class SingleValueDataSetTest extends TestCase
{
    public function testBase(): void
    {
        $data = new SingleValueDataSet(['test' => 'hello']);

        $this->assertSame(['test' => 'hello'], $data->getData());

        $this->assertFalse($data->hasAttribute('test'));
        $this->assertNull($data->getAttributeValue('test'));
    }
}