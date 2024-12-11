@extends('layouts.about')

@section('title', 'About us')

@section('content')
<section class="section-1">
    <div class="row align-items-center flex-grow-1 w-100">
        <div class="col-md-5 text-center mb-4 mb-md-0 d-flex justify-content-center align-items-center">
            <div class="image-circle">
                <img src="img/about3.png" alt="Hình ảnh công ty">
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

<section class="section-2">
    <div class="text-content text-center text-white d-flex flex-column align-items-center justify-content-center">
        <h1 class="section-title">Mục tiêu</h1>
        <p class="section-content">
            KCQ One Solution luôn hướng tới việc cung cấp các giải pháp hiệu quả, tối ưu chi phí cho đối tác
            và khách hàng, đảm bảo giá trị bền vững lâu dài.
        </p>
    </div>
</section>

<section class="section-3">
    <div class="row">
        <p class ="section-title text-center">SỰ TĂNG TRƯỞNG CỦA CHÚNG TÔI</p>
        <div class="chart-container mx-4">
            <canvas id="growthChart"></canvas>
        </div>
    </div>
</section>

<section class="section-4">
    <div class="container-fluid">
        <div class="director-text row text-white text-center">
            <h2 class="section-title">BAN GIÁM ĐỐC</h2>
        </div>
        <div class="director-card row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="leader-circle">
                    <div class="director-circle">
                        <img src="img/male.png" alt="Lê Hữu Vinh" class="img-fluid">
                    </div>
                </div>
                <div class="leader-text pt-5">
                    <h5 class="director-name" id="color-name">Lê Hữu Vinh</h5>
                    <p class="director-position text-white">Giám đốc điều hành</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="leader-circle">
                    <div class="director-circle">
                        <img src="img/male.png" alt="Trần Hữu Quốc Vân" class="img-fluid">
                    </div>
                </div>
                <div class="leader-text">
                    <p class="director-degree mx-5 px-5" id="color-name">Thạc sĩ</p>
                    <h5 class="director-name" id="color-name">Trần Hữu Quốc Văn</h5>
                    <p class="director-position text-white">Giám đốc kỹ thuật</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="leader-circle">
                    <div class="director-circle">
                        <img src="img/male.png" alt="Nguyễn Hải Đăng" class="img-fluid">
                    </div>
                </div>
                <div class="leader-text pt-5">
                    <h5 class="director-name" id="color-name">Nguyễn Hải Đăng</h5>
                    <p class="director-position text-white">Engineering Team Leader</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="leader-circle">
                    <div class="director-circle">
                        <img src="img/male.png" alt="Trần Tiến Sơn" class="img-fluid">
                    </div>
                </div>
                <div class="leader-text pt-5">
                    <h5 class="director-name" id="color-name">Trần Tiến Sơn</h5>
                    <p class="director-position text-white">Business Analyst Team Leader</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="leader-circle">
                    <div class="director-circle">
                        <img src="img/female.png" alt="Nguyễn Thị Kim Ngân" class="img-fluid">
                    </div>
                </div>
                <div class="leader-text pt-5">
                    <h5 class="director-name" id="color-name">Nguyễn Thị Kim Ngân</h5>
                    <p class="director-position text-white">UI/UX Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-5">
    <div class="container-fluid">
        <div class="project-text row mb-4">
            <div class="title text-white text-center mb-4">
                <p class="fs-1">DỰ ÁN NỔI BẬT</p>
            </div>
        </div>
        <div class="row gx-3 align-items-center justify-content-between">
            <!-- Card 1 -->
            <div class="col-3 d-flex flex-column text-white align-items-center justify-content-center">
                <div class="card position-relative custom-card-1 mb-4">
                    <img src="img/TTC1.png" alt="Hình 1" class="img-fluid img-small">
                </div>

                <p style="width: 70%">Ứng dụng di động <br>- Kiểm Kê Tài Sản Đầu Tư <br>- Phát triển giải pháp di động tiên tiến hỗ trợ quá trình kiểm kê tài sản cho TTC đầu tư</p>
            </div>
            <!-- Card 2 -->
            <div class="col-3 d-flex flex-column text-white align-items-center justify-content-center">
                <div class="card position-relative custom-card-2 mb-4">
                    <img src="img/TTC2.png" alt="Hình 2" class="img-fluid img-small">
                </div>

                <p style="width: 70%">Ứng dụng di động <br>- Quản Lý Toà Nhà TTC Land <br>- Tạo ra một ứng dụng hiệu quả giúp quản lý tòa nhà một cách thông minh cho TTC Land</p>
            </div>
            <!-- Card 3 -->
            <div class="col-3 d-flex flex-column text-white align-items-center justify-content-center">
                <div class="card position-relative custom-card-3 mb-5">
                    <img src="img/TTC3.png" alt="Hình 3" class="img-fluid img-small">
                </div>

                <p style="width: 70%">Ứng dụng Web PNL Module, Warehouse ITL Logistics: Phát triển module PNL và giải pháp quản lý kho hiệu quả cho ITL Logistics</p>
            </div>
            <!-- Card 4 -->
            <div class="col-3 d-flex flex-column text-white align-items-center justify-content-center">
                <div class="card position-relative custom-card-4 mb-5">
                    <img src="img/TTC4.png" alt="Hình 4" class="img-fluid img-small">
                </div>

                <p style="width: 70%">Web Customer Portal Khu Công Nghiệp TTC IZ. Xây dựng cổng thông tin trực tuyến giúp tối ưu hóa quản lý khu công nghiệp TTC IZ </p>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
{{-- section 3 --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('growthChart').getContext('2d');
const growthChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5'],
        datasets: [
            {
                label: 'Dataset 1',
                data: [10, 20, 30, 38, 50],
                borderColor: '#00FFFF',
                tension: 0.2,
                fill: true,
            },
            {
                label: 'Dataset 2',
                data: [5, 15, 30, 35, 50],
                borderColor: '#FFFFFF',
                tension: 0.2,
                fill: true,
            },
            {
                label: 'Dataset 3',
                data: [0, 10, 23, 29, 47],
                borderColor: 'black',
                tension: 0.2,
                fill: true,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                labels: {
                    color: 'white',
                    font: { size: 14 },
                },
            },
        },
        scales: {
            x: {
                offset: true,
                ticks: {
                    color: 'white',
                    font: { size: 17 },
                    padding:10,
                },
            },
            y: {
                ticks: {
                    color: 'white',
                    stepSize: 10,
                    font: { size: 20 },
                },
                grid: {
                    color: 'rgba(255, 255, 255, 0.2)',
                },
            },
        },
    },
});
</script>
@endsection