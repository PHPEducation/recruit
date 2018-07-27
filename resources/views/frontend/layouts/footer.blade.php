<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7">{{ Config::get('settings.copyright') }}</div>
                <div class="col-md-5 text-right">{{ trans('frontend.address') }}: {!! Config::get('settings.address') !!}</div>
            </div>
        </div>
    </div>
</footer>
