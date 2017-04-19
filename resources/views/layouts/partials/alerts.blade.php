@if(Session::has('info'))
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-info" role="alert">
                    <center>{{ Session::get('info') }}</center>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('success'))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success" role="alert">
                    <center>{{ Session::get('success') }}</center>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-danger" role="alert">
                    <center>{{ Session::get('error') }}</center>
                </div>
            </div>
        </div>
    </div>
@endif