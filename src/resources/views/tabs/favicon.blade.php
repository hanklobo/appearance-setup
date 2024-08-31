<div id="favicon" class="tab-content">
    <h2>Favicon</h2>
    <form action="{{ route('appearance.upload', ['type' => 'favicon']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*">
        <button type="submit">Upload Favicon</button>
    </form>
    <div class="favicon-preview">
        <img src="{{ $settings->favicon ?? asset('default-favicon.ico') }}" alt="Favicon Preview">
    </div>
</div>