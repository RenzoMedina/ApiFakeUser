<?php declare(strict_types=1);

use App\Database\QueryBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @testdox test of database
 */
final class ConnectionTest extends TestCase{

    public function testConnection(): void{
        $this->assertInstanceOf(RuntimeException::class, new Exception);
        /*$this->assertInstanceOf(QueryBuilder::class, new QueryBuilder());*/
    }
}