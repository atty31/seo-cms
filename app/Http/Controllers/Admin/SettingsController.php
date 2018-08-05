<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Settings;
use DB;
use App\Http\Logs\Admin\Log;
use App\Exceptions\DatabaseException;
use Monolog\Logger;
use Exception;

/**
 * Class SettingsController
 * @package App\Http\Controllers\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class SettingsController extends Controller
{
    /**
     * Log file name
     * @var string
     */
    private $logFileName = 'settings';
    /**
     * @var
     */
    private $log;

    public function __construct()
    {
        $this->log = new Log($this->logFileName);
        $this->middleware('auth');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function footer()
    {
        return view('adminlte::settings/footer',  [
            'footer'      => $this->getSettingsValue(Settings::$footer),
            'footer_name' => serialize(Settings::$footer),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function menuSettings()
    {
        return view('adminlte::settings/menu-settings',  [
            'burger_menu'      => $this->getSettingsValue(Settings::$burgerMenu),
            'nameParams'       => serialize(Settings::$burgerMenu.'|'.Settings::$leftMenu),
            'left_menu'        => $this->getSettingsValue(Settings::$leftMenu),
        ]);
    }

    /**
     * Getting settings value
     * @param string $name
     * @return array
     */
    public function getSettingsValue($name) : array
    {
        $value = DB::table('settings')
            ->select('settings.value as settings_value')
            ->where('settings.name', $name)->first();
        return unserialize($value->settings_value);
    }

    /**
     * @param string $names
     * @param Requests\Admin\SettingsFormRequest $request
     * @return bool|\Illuminate\Http\RedirectResponse
     * @throws DatabaseException
     */
    public function update($names, Requests\Admin\SettingsFormRequest $request)
    {
        if (!$names){
            return false;
        }

        //@todo , do smth with router , refactor it :)
        $router = '';
        $names = explode('|', unserialize($names));
        // Success message
        $message = ['msg' => 'The settings for the '.implode(',', $names).' were updated!'];
        $value = $request->input();

        if (isset($value['_token']))
            unset($value['_token']);

        foreach ($names as $name) {
            $settings = Settings::where('name', '=', $name);
            if (is_null($settings->first())) {
                throw new DatabaseException('No settings value was found'); // custom exception
            }

            $settingValues = [
                'active' => isset($value[$name.'_active']) ? 1 : 0
            ];
            $router = 'menu-settings';
            if ((string) $name === (string) Settings::$footer){
                $router = 'settings.footer';
                $settingValues['type'] = isset($value[$name.'_type']) ? $value[$name.'_type'] : 0;
                $settingValues['after-footer'] = isset($value[$name.'_after-footer']) ? $value[$name.'_after-footer'] : 0;
                $settingValues['bottom-footer'] = isset($value[$name.'_bottom-footer']) ? $value[$name.'_bottom-footer'] : 0;
            }
            //set for only homepage
            if ((string) $name === (string) Settings::$homepage){
                unset($settingValues);
                $router = 'homepage';
                $settingValues['title'] = trim($request->input('title'));
                $settingValues['meta_tags'] = trim($request->input('meta_tags'));
            }
            try {
                //updates the settings for a `name` type
                $settings->update([
                    'value' => serialize($settingValues)
                ]);
            } catch (Exception $error) {
                $message = ['msg_error' => $error->getMessage()];
                $this->log->logMessage(Logger::ERROR, $error->getMessage());
            }
        }
        return redirect()->route('admin.'.$router)->with($message);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('adminlte::settings/homepage',  [
            'header' => $this->getSettingsValue(Settings::$homepage),
            'homepage_name'  => serialize(Settings::$homepage),
        ]);
    }
}