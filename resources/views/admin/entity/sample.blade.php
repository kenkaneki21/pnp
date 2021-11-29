@extends('admin.admin_master')

@section('admin')
 
<link rel="stylesheet" href="https://mooli.nsdbytes.com/laravel/public/assets/vendor/jquery-steps/jquery.steps.css">
<div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">

                   
                    
                  <h4 class="card-title"></h4>
                  <div id="wizard_horizontal" role="application" class="wizard clearfix"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard_horizontal-t-0" href="#wizard_horizontal-h-0" aria-controls="wizard_horizontal-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> First Step</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="wizard_horizontal-t-1" href="#wizard_horizontal-h-1" aria-controls="wizard_horizontal-p-1"><span class="number">2.</span> Second Step</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="wizard_horizontal-t-2" href="#wizard_horizontal-h-2" aria-controls="wizard_horizontal-p-2"><span class="number">3.</span> Third Step</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="wizard_horizontal-t-3" href="#wizard_horizontal-h-3" aria-controls="wizard_horizontal-p-3"><span class="number">4.</span> Forth Step</a></li></ul></div><div class="content clearfix">
<h2 id="wizard_horizontal-h-0" tabindex="-1" class="title current">First Step</h2>
<section id="wizard_horizontal-p-0" role="tabpanel" aria-labelledby="wizard_horizontal-h-0" class="body current" aria-hidden="false">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
dolor, tristique ac tempus nec, iaculis quis nisi. </p>
</section>
<h2 id="wizard_horizontal-h-1" tabindex="-1" class="title">Second Step</h2>
<section id="wizard_horizontal-p-1" role="tabpanel" aria-labelledby="wizard_horizontal-h-1" class="body" aria-hidden="true" style="display: none;">
<p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
</section>
<h2 id="wizard_horizontal-h-2" tabindex="-1" class="title">Third Step</h2>
<section id="wizard_horizontal-p-2" role="tabpanel" aria-labelledby="wizard_horizontal-h-2" class="body" aria-hidden="true" style="display: none;">
<p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
commodo lectus sollicitudin in auctor mauris venenatis. </p>
</section>
<h2 id="wizard_horizontal-h-3" tabindex="-1" class="title">Forth Step</h2>
<section id="wizard_horizontal-p-3" role="tabpanel" aria-labelledby="wizard_horizontal-h-3" class="body" aria-hidden="true" style="display: none;">
<p> Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
 tortor. </p>
</section>
</div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                </div>
              </div>
            </div>
          </div>
          <!--vertical wizard-->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            

          
        <script src="https://mooli.nsdbytes.com/laravel/public/assets/vendor/jquery-steps/jquery.steps.js" type="e9805811d767f7f560a9a177-text/javascript"></script>
          @endsection