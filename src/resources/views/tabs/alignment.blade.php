<div id="alignment" class="tab-content">
    <h2>Alignment</h2>
    <div>
        <label for="heading-alignment">Heading Alignment:</label>
        <select id="heading-alignment" name="heading_alignment">
            <option value="left" {{ ($settings->heading_alignment ?? 'left') == 'left' ? 'selected' : '' }}>Left</option>
            <option value="center" {{ ($settings->heading_alignment ?? '') == 'center' ? 'selected' : '' }}>Center</option>
            <option value="right" {{ ($settings->heading_alignment ?? '') == 'right' ? 'selected' : '' }}>Right</option>
        </select>
    </div>
    <div>
        <label for="container-alignment">Container Alignment:</label>
        <select id="container-alignment" name="container_alignment">
            <option value="left" {{ ($settings->container_alignment ?? 'center') == 'left' ? 'selected' : '' }}>Left</option>
            <option value="center" {{ ($settings->container_alignment ?? 'center') == 'center' ? 'selected' : '' }}>Center</option>
            <option value="right" {{ ($settings->container_alignment ?? '') == 'right' ? 'selected' : '' }}>Right</option>
        </select>
    </div>
    <div class="alignment-preview">
        <!-- Add preview elements here -->
    </div>
</div>