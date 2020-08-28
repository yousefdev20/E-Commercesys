@extends('voyager::master')

@section('content')
<div class="page-content">
  @include('voyager::alerts')
  @include('voyager::dimmers')
  <div class="container">
    <div class="mb-5">
    
    <a href="{{ url('/admin/delivery/orders/finishorder/'.request()->route('id').'/1') }}" class="btn btn-danger ml-2 mr-2 mb-5">Finish this Order</a>
    <a href="{{ url('/admin/delivery/orders') }}" class="btn btn-warning mb-5">Return to List</a>
    </div><br>

    <div class="table table-response mt-5">
      <table class="table table-hover">
        <thead class="bg-dark text-info">
          <tr class="bg-dark">
            <td>id</td>
            <td>Customer Name</td>
            <td>Order Id</td>
            <td>Actions</td>

          </tr>
        </thead>
        <tbody>
          @foreach($orders as $key=>$item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->id }}</td>

            <td>
              <a href="{{ url('/admin/delivery/orders/loadmap/'.$item->longitude.'/'.$item->latitude) }}" class="btn btn-info w-25">Map</a>
              <a href="tel:.{{$orders[0]->phone}}" class="btn btn-success mb-5">Call</a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    @if ($orders->lastPage() > 0)
<ul class="pagination float-right">
    <li class="{{ ($orders->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $orders->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $orders->lastPage(); $i++)
        <li class="{{ ($orders->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $orders->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($orders->currentPage() == $orders->lastPage()) ? ' disabled' : '' }}" >
        <a href="{{ $orders->url($orders->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif
    </div>
  </div>

</div>
@stop
