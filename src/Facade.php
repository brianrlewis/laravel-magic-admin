<?php

namespace BrianRLewis\LaravelMagicAdmin;

/**
 * @method static BrianRLewis\MagicAdmin\Modules\UsersModule users()
 * @method static BrianRLewis\MagicAdmin\Modules\TokenModule token()
 * @method static BrianRLewis\MagicAdmin\Modules\UtilsModule utils()
 *
 * @see \BrianRLewis\LaravelMagicAdmin\Magic
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return Magic::class;
    }
}
