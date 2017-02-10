<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            Submit your suggestions
        </p>
    </header>
    <div class="card-content">
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Feedback Type</label>
            </div>
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="feedback_type">
                        <option value="">-Select-</option>
                        @foreach($feedback_types as $feedback_type)
                            <option value="{{ $feedback_type->id }}">{{ $feedback_type->name }}</option>
                        @endforeach
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
                    <select name="category">
                        <option value="">-Select-</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Subject</label>
            </div>
            <div class="control">
                <input type="text" name="subject" placeholder="Subject" class="input">
            </div>
        </div>
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Details</label>
            </div>
            <div class="control">
                <textarea name="details" placeholder="Details" rows="10" class="textarea"></textarea>
            </div>
        </div>
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Suggestions</label>
            </div>
            <div class="control">
                <textarea name="suggestions" placeholder="Suggestions" rows="10" class="textarea"></textarea>
            </div>
        </div>
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Attachment</label>
            </div>
            <div class="control">
                <input type="file" name="attachment">
            </div>
        </div>         

        <hr>
        <p><strong>Personal Information (Option)</strong></p>
        <hr>

        <!-- Personal info -->
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Initial</label>
            </div>
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="initial">
                        <option value="">-Select-</option>
                        <option value="">Mr.</option>
                        <option value="">Mrs.</option>
                        <option value="">Miss</option>
                        <option value="">Dr.</option>
                        <option value="">Prof.</option>
                    </select>
                </div>
            </div>
        </div>        
        <div class="control is-horizontal">
          <div class="control-label">
            <label class="label">Full name</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input class="input" name="first_name" type="text" placeholder="First name">
            </p>
            <p class="control is-expanded">
              <input class="input" name="last_name" type="text" placeholder="Last name">
            </p>
          </div>
        </div>
        <div class="control is-horizontal">
          <div class="control-label">
            <label class="label">Contact</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input class="input" name="phone" type="text" placeholder="Phone">
            </p>
            <p class="control is-expanded">
              <input class="input" name="email" type="email" placeholder="Email">
            </p>
          </div>
        </div> 
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label">Region</label>
            </div>
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="region">
                        <option value="">-Select-</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                </div>
            </div>
        </div>               
        <!--// Personal info -->

        <div class="control is-horizontal">
          <div class="control-label">
              <label class="label"></label>
          </div>
          <div class="control">
              <button type="submit" class="button is-info">Submit</button>
          </div>
        </div> 

    </div>
</div>