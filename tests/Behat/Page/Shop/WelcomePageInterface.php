<?php

declare(strict_types=1);

namespace Lemisoft\Tests\SyliusBaselinkerPlugin\Behat\Page\Shop;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface WelcomePageInterface extends SymfonyPageInterface
{
    public function getGreeting(): string;
}
