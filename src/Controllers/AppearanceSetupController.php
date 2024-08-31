<?php

namespace HankLobo\AppearanceSetup\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class AppearanceSetupController extends Controller
{
    public function index()
    {
        $settings = config('appearance');
        return view('appearance-setup::layout', compact('settings'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'logo_height' => 'nullable|integer|min:1|max:500',
            'background_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'background_position' => 'nullable|in:left,center,right,top,bottom',
            'background_repeat' => 'nullable|in:no-repeat,repeat,repeat-x,repeat-y',
            'overlay_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'overlay_opacity' => 'nullable|numeric|min:0|max:1',
            'text_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'button_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'button_text_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'input_text_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'input_border_color' => 'nullable|regex:/^#[a-fA-F0-9]{6}$/',
            'heading_alignment' => 'nullable|in:left,center,right',
            'container_alignment' => 'nullable|in:left,center,right',
            'custom_css' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $this->updateConfigFile($request->all());

        return response()->json(['message' => 'Settings updated successfully']);
    }

    public function uploadImage(Request $request, $type)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $image = $request->file('image');
        $path = $image->store('appearance', 'public');
        $url = asset('storage/' . $path);

        $this->updateConfigFile([$type => $url]);

        return response()->json(['url' => $url]);
    }

    private function updateConfigFile($newSettings)
    {
        $config = config('appearance');
        $updatedConfig = array_merge($config, $newSettings);
        
        $configPath = config_path('appearance.php');
        file_put_contents($configPath, '<?php return ' . var_export($updatedConfig, true) . ';');

        // Update the config in memory for the current request
        Config::set('appearance', $updatedConfig);
    }
}