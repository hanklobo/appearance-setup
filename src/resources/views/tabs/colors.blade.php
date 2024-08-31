<div id="colors" class="tab-content">
    <h2>Colors</h2>
    <div>
        <label for="text-color">Text Color:</label>
        <input type="color" id="text-color" name="text_color" value="{{ $settings->text_color ?? '#000000' }}">
    </div>
    <div>
        <label for="button-color">Button Color:</label>
        <input type="color" id="button-color" name="button_color" value="{{ $settings->button_color ?? '#007bff' }}">
    </div>
    <div>
        <label for="button-text-color">Button Text Color:</label>
        <input type="color" id="button-text-color" name="button_text_color" value="{{ $settings->button_text_color ?? '#ffffff' }}">
    </div>
    <div>
        <label for="input-text-color">Input Text Color:</label>
        <input type="color" id="input-text-color" name="input_text_color" value="{{ $settings->input_text_color ?? '#000000' }}">
    </div>
    <div>
        <label for="input-border-color">Input Border Color:</label>
        <input type="color" id="input-border-color" name="input_border_color" value="{{ $settings->input_border_color ?? '#ced4da' }}">
    </div>
</div>