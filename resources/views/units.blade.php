@extends('base')

@section('content')
    <h1 align="center">Types of Products</h1>
    <hr>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th>Industrial Products</th>
                <th>Consumer Products</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Raw Materials</td>
                <td>Convenience Products</td>
            </tr>
            <tr>
                <td>Machinery</td>
                <td>Shopping Products</td>
            </tr>
            <tr>
                <td>Parts</td>
                <td>Specialty Products</td>
            </tr>
            <tr>
                <td>Tools & Supplies</td>
                <td>Unsought Products</td>
            </tr>
        </tbody>
    </table>

@endsection
