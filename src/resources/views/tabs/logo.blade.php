<div id="logo" class="tab-content">
    <h2>Logo</h2>
    <form action="{{ route('appearance.upload', ['type' => 'logo']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="logo" accept="image/*,image/svg+xml">
        <button type="submit">Upload Logo</button>
    </form>
    <button id="remove-logo">Remove Logo</button>
    <div>
        <label for="logo-height">Logo Height (px):</label>
        <input type="number" id="logo-height" name="logo_height" value="{{ $settings->logo_height ?? 50 }}">
    </div>
    <div class="logo-preview">
        <img src="{{ $settings->logo ?? asset('default-logo.png') }}" alt="Logo Preview">
    </div>
</div>