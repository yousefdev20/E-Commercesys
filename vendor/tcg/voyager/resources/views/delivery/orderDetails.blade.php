@extends('voyager::master')

@section('content')
<div class="page-content">
  @include('voyager::alerts')
  @include('voyager::dimmers')
  <div class="container">
    <div class="mb-5">
    <a href="tel:.{{$products[0]->phone}}" class="btn btn-success mb-5">Call</a>
    <a href="{{ url('/admin/delivery/orders/finishorder/'.request()->route('id').'/4') }}" class="btn btn-danger ml-2 mr-2 mb-5">Finish this Order</a>
    <a href="{{ url('/admin/delivery/orders') }}" class="btn btn-warning mb-5">Return to List</a>
    </div><br>

    <div class="table table-response mt-5">
      <table class="table table-hover">
        <thead class="bg-dark text-info">
          <tr class="bg-dark">
            <td>id</td>
            <td>Product</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Branch</td>
            <td>Weight Unit</td>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $key=>$item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>
              <img src="{{ url('/storage/'.$item->image_url) }}"alt="There Some Proble Here"width="100px" height="50px">
              </img>
            </td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->branch_name }}</td>
            <td>{{ $item->weight_name }}</td>
          </tr>
          @endforeach
          <tr>
            <td><b>Total</b></td>
            <td></td>
            <td></td>
            <td>{{ $sum }} $</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

    @if ($products->lastPage() > 0)
<ul class="pagination float-right">
    <li class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $products->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $products->lastPage(); $i++)
        <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $products->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}" >
        <a href="{{ $products->url($products->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif
    </div>
  </div>

</div>
@stop
