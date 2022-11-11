@extends('base')

@section('content')
    <h1 align="center">Merchandises</h1>
    <hr>
    <table class="table caption-top table-bordered border-primary">
        <caption>List of Merchandises</caption>
        <thead class="table-dark">
          <tr>
            <th>Quantity</th>
            <th>Food</th>
            <th>Hygiene Products</th>
            <th>Cleaning Supplies</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Vegetables</td>
            <td>Soap</td>
            <td>Detergent</td>
          </tr>
        </tbody>
        <tbody>
            <tr>
              <td>2</td>
              <td>Fruits</td>
              <td>Shampoo</td>
              <td>Mr. Muscle</td>
            </tr>
          </tbody>
      </table>
  @endsection
