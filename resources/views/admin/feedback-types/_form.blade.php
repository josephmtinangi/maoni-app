<div class="field">
    <label for="name" class="label">Name</label>
    <p class="control">
        <input class="input" type="text" name="name" id="name"
               value="{{ isset($feedbackType->name) ? $feedbackType->name : old('name') }}" placeholder="Name">
    </p>
</div>

<br>

<div class="field is-grouped">
    <p class="control">
        <button type="submit" class="button is-primary">{{ $btn_text }}</button>
    </p>
    <p class="control">
        <a href="/admin/feedback-types" class="button is-link">Cancel</a>
    </p>
</div>