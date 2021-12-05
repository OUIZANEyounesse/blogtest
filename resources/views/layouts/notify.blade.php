@if (session()->has('success'))
<div class="body">
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-6 col-md-4 col-lg-2">
          <button hidden  class="notify" data-placement-from="top" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-text="{{session()->get('success')}}" data-color-name="alert-success"></button>
        </div>
    </div>
</div>
@endif

@if (session()->has('danger'))
<div class="body">
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-6 col-md-4 col-lg-2">
          <button hidden class="notify" data-placement-from="top" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-text="{{session()->get('danger')}}" data-color-name="alert-danger">  </button>
        </div>
    </div>
</div>
@endif

@if (session()->has('warning'))
<div class="body">
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-6 col-md-4 col-lg-2">
          <button hidden class="notify" data-placement-from="top" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-text="{{session()->get('warning')}}" data-color-name="alert-warning">  </button>
        </div>
    </div>
</div>
@endif

@if (session()->has('info'))
<div class="body">
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-6 col-md-4 col-lg-2">
          <button hidden class="notify" data-placement-from="top" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-text="{{session()->get('info')}}" data-color-name="alert-info">  </button>
        </div>
    </div>
</div>
@endif


@if ($errors->any())
<div class="body">
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-6 col-md-4 col-lg-2">
            @foreach ($errors->all() as $error)
            <button hidden class="notify" data-placement-from="top" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-text="{{$error}}" data-color-name="alert-danger">  </button>
            @endforeach
        </div>
    </div>
</div>
@endif


<script>
    window.onload = (event) => {
        for (let i = 0; i < document.getElementsByClassName('notify').length; i++) {
            document.getElementsByClassName('notify')[i].click();
        }

   };
</script>
