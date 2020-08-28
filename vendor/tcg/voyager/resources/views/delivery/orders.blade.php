@extends('voyager::master')

@section('content')
<div class="page-content">
  @include('voyager::alerts')
  @include('voyager::dimmers')
  <div class="container">
    <div class="table table-response">
      <table class="table table-hover">
        <thead class="bg-dark text-info">
          <tr class="bg-dark">
            <td>id</td>
            <td>Consumer Name</td>
            <td>Consumer Phone</td>
            <td>Order Id</td>
            <td>Payment Way</td>
            <td>Created At</td>
            <td>actions</td>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $key=>$item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->payment_way }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
              <a href="{{ url('/admin/delivery/orders/deatils/'.$item->id) }}" class="btn btn-warning btn-sm">browse</a>
              <a href="tel:{{ $item->phone }}" class="btn btn-success btn-sm">call</a>
              <button class="btn btn-danger btn-sm" disabled type="button" name="button">block</button>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>

    @if ($orders->lastPage() > 1)
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
