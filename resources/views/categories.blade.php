@extends('base')

@section('content')
    <h1 align="center">Category</h1>
    <hr>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
          <tr>
            <th>Product Category</th>
            <th>Definition</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>Industry</td>
                <td>An industry such as technology or hospitality.</td>
            </tr>
            <tr>
                <td>Functionality</td>
                <td>Functionality such as accounting software or running shoes.</td>
              </tr>
            <tr>
                <td>Customer Needs</td>
                <td>Customer needs such as summer versus winter tires.</td>
            </tr>
            <tr>
                <td>Customer Preferences</td>
                <td>Customer preferences such as healthy ingredients or a particular style.</td>
            </tr>
            <tr>
                <td>Comvenience</td>
                <td>Convenience such as fast moving consumer goods and fast food.</td>
            </tr>
          </tbody>
@endsection
