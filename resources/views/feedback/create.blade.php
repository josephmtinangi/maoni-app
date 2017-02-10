<form action="{{ url('feedbacks') }}" method="POST">
    <div class="control is-horizontal">
        <div class="control-label">
            <label class="label">Feedback Type</label>
        </div>
        <div class="control">
            <div class="select is-fullwidth">
                <select>
                    <option value="">-Select-</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
            </div>
        </div>
    </div>
    <div class="control is-horizontal">
        <div class="control-label">
            <label class="label">Category</label>
        </div>
        <div class="control">
            <div class="select is-fullwidth">
                <select>
                    <option value="">-Select-</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
            </div>
        </div>
    </div>
    <div class="control is-horizontal">
        <div class="control-label">
            <label class="label">Subject</label>
        </div>
        <div class="control">
            <input type="text" placeholder="Subject" class="input">
        </div>
    </div>
    <div class="control is-horizontal">
        <div class="control-label">
            <label class="label">Details</label>
        </div>
        <div class="control">
            <textarea placeholder="Details" rows="10" class="textarea"></textarea>
        </div>
    </div>
    <div class="control is-horizontal">
        <div class="control-label">
            <label class="label">Suggestions</label>
        </div>
        <div class="control">
            <textarea placeholder="Suggestions" rows="10" class="textarea"></textarea>
        </div>
    </div>
    <div class="control is-horizontal">
        <div class="control-label">
            <label class="label"></label>
        </div>
        <div class="control">
            <button type="submit" class="button is-info">Submit</button>
        </div>
    </div>
</form>