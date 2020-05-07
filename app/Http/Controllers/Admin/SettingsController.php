<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Language;
use App\Model\Setting;
use DB;
use Crypt;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    // -----------------------------------------------Settings Section--------------------------------------------------

    public function settings()
    {
        $settings = Setting::all();
        $langs = Language::orderBy('language_name')->get();

        return view('admin.settings.settings', compact('langs', 'settings'));


    }

    public function saveSettings(Request $request)
    {

        try {

            DB::beginTransaction();

//            DB::table('settings')->delete();
            DB::table('settings')->truncate();

            $mySettings = [

                // General Settings
                ['event' => 'site_url', 'details' => $request->site_url],
                ['event' => 'site_title', 'details' => $request->site_title],
                ['event' => 'site_description', 'details' => $request->site_description],
                ['event' => 'google_analytics_code', 'details' => $request->google_analytics_code],
                ['event' => 'mailchimp_signup_form', 'details' => $request->mailchimp_signup_form],
                ['event' => 'logo', 'details' => $request->logo],
                ['event' => 'favicon', 'details' => $request->favicon],
                ['event' => 'timezone', 'details' => $request->timezone],
                ['event' => 'maintenance_mode_message', 'details' => $request->maintenance_mode_message],
                ['event' => 'header', 'details' => $request->header],
                ['event' => 'fotter', 'details' => $request->fotter],
                ['event' => 'app_id', 'details' => $request->app_id],
                ['event' => 'app_secret_key', 'details' => $request->app_secret_key],


                //SEO Settings
                ['event' => 'seo_keywords', 'details' => $request->seo_keywords],
                ['event' => 'seo_description', 'details' => $request->seo_description],
                ['event' => 'google_webmaster_domain_verify_code', 'details' => $request->google_webmaster_domain_verify_code],
                ['event' => 'bing_webmaster_domain_verify_code', 'details' => $request->bing_webmaster_domain_verify_code],


                // Language Settings
                ['event' => 'primary_language', 'details' => $request->primary_language],
                ['event' => 'secondary_language', 'details' => $request->secondary_language],


                // Mail Settings
                ['event' => 'mail_driver', 'details' => $request->mail_driver],
                ['event' => 'mail_host', 'details' => $request->mail_host],
                ['event' => 'mail_port', 'details' => $request->mail_port],
                ['event' => 'mail_username', 'details' => $request->mail_username],
                ['event' => 'mail_password', 'details' => $request->mail_password],
                ['event' => 'mail_encryption', 'details' => $request->mail_encryption],


                // Social Media Settings
                ['event' => 'facebook_page_url', 'details' => $request->facebook_page_url],
                ['event' => 'twitter_url', 'details' => $request->twitter_url],
                ['event' => 'google_page_url', 'details' => $request->google_page_url],
                ['event' => 'instagram_url', 'details' => $request->instagram_url],
                ['event' => 'fb_app_id_url', 'details' => $request->fb_app_id_url],
                ['event' => 'fb_app_secret_url', 'details' => $request->fb_app_secret_url],
                ['event' => 'tw_app_id_url', 'details' => $request->tw_app_id_url],
                ['event' => 'tw_app_secret_url', 'details' => $request->tw_app_secret_url],
                ['event' => 'go_app_id_url', 'details' => $request->go_app_id_url],
                ['event' => 'go_app_secret_url', 'details' => $request->go_app_secret_url],
                ['event' => 'ins_app_id_url', 'details' => $request->ins_app_id_url],
                ['event' => 'ins_app_secret_url', 'details' => $request->ins_app_secret_url],


                // Others Settings
                ['event' => 'email_template_design', 'details' => $request->email_template_design],
                ['event' => 'genarate_sitemap', 'details' => $request->genarate_sitemap],
                ['event' => 'database_optimization', 'details' => $request->database_optimization],
                ['event' => 'create_cache', 'details' => $request->create_cache],
                ['event' => 'clear_cache', 'details' => $request->clear_cache],
                ['event' => 'remove_old_data', 'details' => $request->remove_old_data],
                ['event' => 'database_backup', 'details' => $request->database_backup],
                ['event' => 'media_backup', 'details' => $request->media_backup],
                ['event' => 'hole_site_backup', 'details' => $request->hole_site_backup],

            ];

            DB::table("settings")->insert($mySettings);
            DB::commit();
            return redirect()->back()->with('message', 'Delete Successfully.');

        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }

    }


    //-----------------------------------------------Themes-------------------------------------------------------------
    public function themeList()
    {
        return view('admin.themes.themes');
    }


    //------------------------------------------------FAQ---------------------------------------------------------------
    public function faq()
    {
        return view('admin.faq');
    }


    //------------------------------------------------Languages---------------------------------------------------------
    public function addLanguage(Request $request)
    {
        try {
            $data_generate = '';
            if (isset($_GET['edit_id'])) {

                if (isset($_GET['edit_id'])) $lang = Language::find(Crypt::decrypt($_GET['edit_id']));
                return response()->json(['success' => true, 'lang' => $lang]);

            } else {
                $lang = new Language();
                if (!empty($request->id)) {
                    $lang = Language::find($request->id);
                }

                if (isset($lang)) {

                    $request->validate([
                        'lang_name' => 'required|string|max:64',
                        'lang_short_name' => 'required|string|max:4',
                    ]);

                    DB::beginTransaction();
                    $lang->language_name = $request->lang_name;
                    $lang->language_short_name = $request->lang_short_name;
                    $lang->status = $request->status;
                    $lang->save();
                    DB::commit();
                }

                return redirect()->back()->with('message', 'Save Successfully.');

            }

        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }
    }


    public function deleteLanguage($id)
    {
        try {

            $lang = Language::findOrFail($id);
            $lang->delete();

            return redirect()->back()->with('message', 'Delete Successfully.');

        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('message', 'Something went wrong, Please try again.');
        }

    }


    //------------------------------------------------Country-----------------------------------------------------------

}
