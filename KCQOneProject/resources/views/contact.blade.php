@extends('layout')

@section('content')
<section>
    <div class="contact_div row">
        <div class="contact_information col-md-6">
            <h1 class="title mb-5">CONTACTS</h1>
            
            <div class="info_row d-flex align-items-center">
                <span class="info_label">Email:</span>
                <span class="info_value mx-2">vinh.le@kcqonesolution.com</span>
            </div>

            <div class="info_row d-flex justify-content-between align-items-center">
                <div class="info_column">
                    <span class="info_label">Social:</span>
                    <span class="info_value">...</span>
                    <span class="info_label">Call:</span>
                    <span class="info_value">+84-965-601-692</span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="contact_img">
                <img src="img/about3.png" alt="Hình ảnh công ty">
            </div>
        </div>
    </div>
</section>
@endsection