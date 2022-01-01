<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header dark-mode">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse #mymenu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="#mymenu">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{!! route('/')!!}">Home</a></li>
                    @foreach($categories as $category)
                        <li><a href="{!! route('category-product',['id'=>$category->id,'name'=>$category->category_name]) !!}">{!! $category->category_name !!}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
