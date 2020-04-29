<div class="col-12 event-search-form">

    <div class="col-12 mb-5">
        <h3 class="text-dark">Search event recommendations</h3>
        <hr>
    </div>

    <form method="get" action="/events">

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

    <div class="col-12 p-0 collapse {{$class}}" id="optionalFields">
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
                    <input type="radio" value="18-24" name="age" checked>
                    18-24
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input value="25-34" type="radio" name="age">
                    25-34
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input value="35-44" type="radio" name="age">
                    35-44
                </label>
                <label class="btn btn-default col-3 text-center p-3">
                    <input value="45+" type="radio" name="age">
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

    @if(empty($class))
    <a href="/search" class="btn btn-link">
        more...
    </a>
    @endif

    <div class="col-12 col-md-12 mt-3 animated fadeInUp fast">
        <button type="submit" class="btn btn-big-round col-12 p-3 btn-primary mx-0 font-weight-bold animated fadeInUp faster">
            <span class="text-left float-left">Search Events</span>
            <i class="fas fa-arrow-right float-right pt-1"></i>
        </button>
    </div>
    </form>
</div>
