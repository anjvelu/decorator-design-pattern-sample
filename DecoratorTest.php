<?php 

require_once __DIR__ . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function test_red_color_of_t_shirt() : void
    {
        $t_shirt = new App\TShirt();
        $this->assertSame($t_shirt->getPrice(), 30);

        $t_shirt = new App\RedColor($t_shirt);
        $this->assertSame($t_shirt->getPrice(), 40);

        $t_shirt = new App\Discount($t_shirt);
        $this->assertSame($t_shirt->getPrice(), 20);
    }
}