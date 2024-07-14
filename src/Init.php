<?php

namespace Ber;

use Ber\Acf\AcfRegister;
use Ber\Block\BlockRegister;
use Ber\Core\ClearWordpress;
use Ber\Core\Enqueue;
use Ber\CustomPostType\CustomPostTypeRegister;

final class Init
{
    private static function init(): array
    {
        return [
            ClearWordpress::class,
            Enqueue::class,
            CustomPostTypeRegister::class,
            AcfRegister::class,
            BlockRegister::class
        ];
    }

    public static function register(): void
    {
        foreach (self::init() as $class) {
            $service = new $class();
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
}