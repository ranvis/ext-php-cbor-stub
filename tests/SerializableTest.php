<?php
/**
 * @author SATO Kentaro
 * @license BSD-2-Clause
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SerializableTest extends TestCase implements Cbor\Serializable
{
    public function cborSerialize(): mixed
    {
        return 1;
    }

    public function testImplementable(): void
    {
        $this->assertSame(1, $this->cborSerialize());
    }
}
