@extends('layout')

@section('content')
    <section class="slogan_section">
        <div class="slogan_content">
            <h3 style="overflow-wrap: break-word">Slogan</h3>

            <p>Viết tên công ty vào đây</p>

            <p class="info"><i>Có sẵn thông tin dưới dạng âm thanh</i></p>
        </div>
    </section>

    <section class="section-1">
        <div class="row align-items-center flex-grow-1 w-100">
            <div class="col-md-5 text-center mb-4 mb-md-0 d-flex justify-content-center align-items-center">
                <div class="image-circle">
                    <img src="{{ asset('img/about3.png') }}" alt="Hình ảnh công ty">
                </div>
            </div>
            <div class="text-content col-md-7 d-flex flex-column justify-content-center px-5">
                <div class="text-top px-3">
                    <h2 class="mb-4">
                        KCQ One Solution là một đơn vị chuyên nghiệp với bề dày kinh nghiệm, chúng tôi tự hào về khả năng làm việc linh hoạt và đối tác đáng tin cậy trong ngành
                    </h2>
                </div>
                <div class="text-under px-3">
                    <p>101 Song Hành, Phường 10, Quận 6, TP.Hồ Chí Minh</p>
                    <p>Mã số thuế: 0317345719</p>
                    <p>Người đại diện: Ông Lê Hữu Vinh</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission_vision">
        <div class="title">
            <p>Chúng tôi đã xây dựng mối quan hệ mạnh mẽ với nhiều đối tác và khách hàng, chia sẻ giải pháp và tạo ra giá trị lâu dài</p>
        </div>

        <div class="mission_vision_box row">
            <div class="mission_box col-md-6">
                <h1>Mission</h1>
                <p>Our mission is to build the digital</p>
            </div>

            <div class="vision_box col-md-6">
                <h1>Vision</h1>
                <p>Meet go fast - Meet the Expert</p>
            </div>
        </div>
    </section>

    <section class="milestone">
        <div class="title">
            <h1>Các cột mốc quan trọng</h1>
            <p>Chúng tôi đã xây dựng mối quan hệ mạnh mẽ
                với nhiều đối tác và khách hàng, chia sẻ giải
                pháp và tạo ra giá trị lâu dài.</p>
        </div>

        <div class="milestone_box row mt-5">
            <div class="year2022 col-md-3">
                <h1>2020</h1>
                <p>Ứng Dụng Di Động Kiểm Kê Tài Sản TTC
                    Đầu Tư: Phát triển giải pháp di động tiên
                    tiến để hỗ trợ quá trình kiểm kê tài sản cho
                    TTC Đầu Tư.</p>
            </div>

            <div class="year2023 col-md-3">
                <h1>2023</h1>
                <p>Ứng Dụng Di Động Quản Lý Tòa Nhà TTC
                    Land: Tạo ra ứng dụng hiệu quả giúp quản
                    lý tòa nhà một cách thông minh cho TTC
                    Land.</p>
            </div>

            <div class="year2024 col-md-3">
                <h1>2023</h1>
                <p> Ứng Dụng Web PNL Module, Warehouse
                    ITL Logistics: Phát triển module PNL và giải
                    pháp quản lý kho hiệu quả cho ITL
                    Logistics.</p>
            </div>

            <div class="year2025 col-md-3">
                <h1>2024</h1>
                <p>Web Customer Portal Khu Công Nghiệp
                    TTC IZ: Xây dựng cổng thông tin trực
                    tuyến giúp tối ưu hóa quản lý khu công
                    nghiệp TTC IZ.
                </p>
            </div>
        </div>
    </section>

    <section class="information_image">
        <div class="title text-center mb-4">
            <h1>THÔNG TIN</h1>
        </div>
    
        <div class="container-fluid">
            <div class="row gx-3 align-items-center justify-content-between slider">
                <div class="col-1 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/list3.jpg') }}" alt="Hình 1" class="img-fluid img-small" data-index="0">
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/list2.jpg') }}" alt="Hình 2" class="img-fluid img-medium" data-index="1">
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/list1.jpg') }}" alt="Hình 3" class="img-fluid img-large" data-index="2">
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/list4.jpg') }}" alt="Hình 4" class="img-fluid img-medium" data-index="3">
                </div>
                <div class="col-1 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/list5.jpg') }}" alt="Hình 5" class="img-fluid img-small" data-index="4">
                </div>
            </div>
        </div>
    </section>
    
    <div id="lightbox" class="lightbox">
        <span class="close-btn" id="close-btn">&times;</span>
        <img src="" alt="Preview" id="lightbox-img" class="lightbox-img">
        <button id="prev-btn" class="nav-btn prev-btn">
            <i class="bi bi-chevron-left"></i> Previous
        </button>
        <button id="next-btn" class="nav-btn next-btn">
            Next <i class="bi bi-chevron-right"></i>
        </button>
    </div>
    
    {{-- <<-- section information--}}
@endsection
