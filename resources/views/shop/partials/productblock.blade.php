@foreach($products->chunk(3) as $row)
    <div class="row">
        @foreach($row as $product)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ $product->imagePath }}" class="img-reponsive" alt="...">
                    <div class="caption">
                            <h4 class="label label-primary pull-right price">{{ $product->price }}.- CHF</h4><br>
                            <h5 class="pull-left producttt"> {{ $product->title }}</h5><br><br>
                            <h6 class="teaserde"> {!! $product->teaserde !!}</h6>
                            <h6 class="teaseres"> {!! $product->teaseres !!}</h6>
                        <div class="clearfix">
                            <!--<div class="pull-left price">{{ $product->offer }} in stock</div><br>-->
                            
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">{{ trans('index.add') }}</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach