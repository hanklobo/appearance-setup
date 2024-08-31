<div id="background" class="tab-content">
    <h2>Background</h2>
    <div>
        <label for="background-color">Background Color:</label>
        <input type="color" id="background-color" name="background_color" value="{{ $settings->background_color ?? '#ffffff' }}">
    </div>
    <form action="{{ route('appearance.upload', ['type' => 'background_image']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*">
        <button type="submit">Upload Background Image</button>
    </form>
    <div>
        <label for="background-position">Background Position:</label>
        <select id="background-position" name="background_position">
            <option value="center" {{ ($settings->background_position ?? 'center') == 'center' ? 'selected' : '' }}>Center</option>
            <option value="left" {{ ($settings->background_position ?? '') == 'left' ? 'selected' : '' }}>Left</option>
            <option value="right" {{ ($settings->background_position ?? '') == 'right' ? 'selected' : '' }}>Right</option>
            <option value="top" {{ ($settings->background_position ?? '') == 'top' ? 'selected' : '' }}>Top</option>
            <option value="bottom" {{ ($settings->background_position ?? '') == 'bottom' ? 'selected' : '' }}>Bottom</option>
        </select>
    </div>
    <div>
        <label for="background-repeat">Background Repeat:</label>
        <select id="background-repeat" name="background_repeat">
            <option value="no-repeat" {{ ($settings->background_repeat ?? 'no-repeat') == 'no-repeat' ? 'selected' : '' }}>No Repeat</option>
            <option value="repeat" {{ ($settings->background_repeat ?? '') == 'repeat' ? 'selected' : '' }}>Repeat</option>
            <option value="repeat-x" {{ ($settings->background_repeat ?? '') == 'repeat-x' ? 'selected' : '' }}>Repeat X</option>
            <option value="repeat-y" {{ ($settings->background_repeat ?? '') == 'repeat-y' ? 'selected' : '' }}>Repeat Y</option>
        </select>
    </div>
    <div>
        <label for="overlay-color">Overlay Color:</label>
        <input type="color" id="overlay-color" name="overlay_color" value="{{ $settings->overlay_color ?? '' }}">
    </div>
    <div>
        <label for="overlay-opacity">Overlay Opacity:</label>
        <input type="range" id="overlay-opacity" name="overlay_opacity" min="0" max="1" step="0.1" value="{{ $settings->overlay_opacity ?? 0 }}">
    </div>
</div>