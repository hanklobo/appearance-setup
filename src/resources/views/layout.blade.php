<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appearance Setup</title>
    <link rel="stylesheet" href="{{ asset('vendor/appearance-setup/css/appearance-setup.css') }}">
</head>
<body>
    <div class="app-container">
        @include('appearance-setup::sidebar')
        <main class="content">
            <button class="back-button">Back</button>
            <button class="preview-button">Preview</button>
            <div class="tabs">
                @include('appearance-setup::tabs.logo')
                @include('appearance-setup::tabs.background')
                @include('appearance-setup::tabs.colors')
                @include('appearance-setup::tabs.alignment')
                @include('appearance-setup::tabs.favicon')
                @include('appearance-setup::tabs.custom-css')
            </div>
        </main>
    </div>
    <script src="{{ asset('vendor/appearance-setup/js/appearance-setup.js') }}"></script>
</body>
</html>