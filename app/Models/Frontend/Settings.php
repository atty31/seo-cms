<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Settings as SettingsModel;
use DB;
/**
 * Class Settings
 * @package App\Models\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Settings extends Model
{
    /**
     * Get website custom settings and configurations
     * @param string $name
     * @return array
     */
    public static function getAppSettings(string $name) : array
    {
        $leftBarSettings = DB::table('settings')->select('settings.value as value')
            ->where([
                'settings.name' => $name,
            ])
            ->get()->first();

        $leftBarSettings = unserialize($leftBarSettings->value);
        if ((int) count($leftBarSettings) === 0){
            return [];
        }
        return $leftBarSettings;
    }
}