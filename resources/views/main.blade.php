@extends('layouts.master')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="box box-success">
                <div class="panel-heading">
					<h1>Overview</h1>
                </div>

                <div class="panel-body">
                    <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$product_count}}</h3>

              <h4>Total Accessories</h4>
            </div>
          </div>
        </div>
		<div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>{{$blog_count}}</h3>

              <h4>Total Blog Posts</h4>
            </div>
          </div>
        </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

    </script>



@endsection
