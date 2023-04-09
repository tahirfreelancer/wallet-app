@extends('master')
@section('content')
@include('includes/breadcrumb')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                    <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/oslo.jpg" alt="Bologna">
                <div class="card-body text-center">
                    <img class="avatar rounded-circle" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/robert.jpg" alt="Bologna">
                    <h4 class="card-title">Robert Downey Jr.</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Famous Actor</h6>
                    <p class="card-text">Robert John Downey Jr.'career has included critical and popular success in his youth, followed by a period of substance abuse and legal difficulties, and a resurgence of commercial success in middle age. </p>
                    <a href="#" class="btn btn-info">Follow</a>
                    <a href="#" class="btn btn-outline-info">Message</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-light">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection