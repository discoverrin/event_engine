<div class="col-12 event-search-form">
    <div class="col-12 pb-1 animated fadeInUp fast">
        <div class="form-group">
            <label class="font-weight-bold">Please select dates b/w which you want to search the events</label>
            <div class="row">
                <div class="col-6">
                    <label>Start Date</label>
                    <input type="date" class="form-control datepicker">
                </div>
                <div class="col-6">
                    <label>End Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-3 px-0 pb-3 animated fadeInUp fast">
        <div class="col-12">
            <div class="form-group">
                <label class="font-weight-bold">Please select a country</label>
                <select class="form-control">
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                </select>
            </div>
        </div>
    </div>

    <div class="d-none col-12 mt-3 px-0 pb-3 animated fadeInUp fast">
        <div class="col-12">
            <label class="font-weight-bold">Please select a country</label>
        </div>
        <div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
            <label class="btn btn-default col-3 text-center p-3">
                <input type="radio" name="options" id="option1" checked>
                <span class="flag-icon flag-icon-in d-block m-auto pb-2 pt-2"></span> India
            </label>
            <label class="btn btn-default col-3 text-center p-3">
                <input type="radio" name="options" id="option2">
                <span class="flag-icon flag-icon-us d-block m-auto pb-2 pt-2"></span> USA
            </label>
            <label class="btn btn-default col-3 text-center p-3">
                <input type="radio" name="options" id="option3">
                <span class="flag-icon flag-icon-gb d-block m-auto pb-2 pt-2"></span> UK
            </label>
        </div>
    </div>

    <div class="col-12 p-0 collapse" id="optionalFields">
        <div class="col-12 mt-3 px-0 pb-3 animated fadeInUp fast">
            <div class="col-12">
                <label class="font-weight-bold">Gender (optional)</label>
            </div>
            <div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option1" checked>
                    <i class="fas fa-male fs-30"></i>
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option2">
                    <i class="fas fa-female fs-30"></i>
                </label>
            </div>
        </div>
        <div class="col-12 mt-3 px-0 pb-3 animated fadeInUp fast">
            <div class="col-12">
                <label class="font-weight-bold">Age group (optional)</label>
            </div>
            <div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option1" checked>
                    18-24
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option2">
                    25-34
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option2">
                    35-44
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option2">
                    45+
                </label>
            </div>
        </div>
        <div class="col-12 mt-3 px-0 pb-3 animated fadeInUp fast">
            <div class="col-12">
                <label class="font-weight-bold">Price range (optional)</label>
            </div>
            <div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option1" checked>
                    <i class="fas fa-dollar-sign"></i>
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option2">
                    <i class="fas fa-dollar-sign"></i><i class="fas fa-dollar-sign"></i>
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="checkbox" name="options" id="option2">
                    <i class="fas fa-dollar-sign"></i><i class="fas fa-dollar-sign"></i><i class="fas fa-dollar-sign"></i>
                </label>
            </div>
        </div>
        <div class="col-12 mt-3 px-0 pb-3 animated fadeInUp fast">
            <div class="col-12">
                <label class="font-weight-bold">Child friendly events (optional)</label>
            </div>
            <div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="radio" name="options" id="option1" checked>
                    <i class="fas fa-thumbs-up"></i>
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input type="radio" name="options" id="option2">
                    <i class="fas fa-thumbs-down"></i>
                </label>
            </div>
        </div>
    </div>

    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#optionalFields" aria-expanded="false" aria-controls="collapseExample">
        more...
    </button>

    <div class="col-12 col-md-12 mt-3 animated fadeInUp fast">
        <a href="/events" class="btn btn-big-round col-12 p-3 btn-primary mx-0 font-weight-bold animated fadeInUp faster">
            <span class="text-left float-left">Search Events</span>
            <i class="fas fa-arrow-right float-right pt-1"></i>
        </a>
    </div>
</div>
