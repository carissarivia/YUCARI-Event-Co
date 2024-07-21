@extends('admin.layouts.main')

@section('title', 'Dashboard')
@section('page', 'Dashboard')

@section('content')
<div class="row">
    <!-- Total Sales Card -->
    <div class="col-xl-3 col-sm-6 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Penjualan</p>
                            <h5 class="font-weight-bolder">{{ number_format($totalSales, 0, ',', '.') }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Members Card -->
    <div class="col-xl-3 col-sm-6 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Members</p>
                            <h5 class="font-weight-bolder">{{ $totalMembers }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                            <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Feedback Card -->
    <div class="col-xl-3 col-sm-6 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Feedback</p>
                            <h5 class="font-weight-bolder">{{ $totalFeedback }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                            <i class="ni ni-chat-round text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Events Card -->
    <div class="col-xl-3 col-sm-6 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Events</p>
                            <h5 class="font-weight-bolder">{{ $totalEvents }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                            <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sales Chart -->
<div class="row mt-4">
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <h6>Sales Overview</h6>
                <form method="GET" action="{{ route('admin.dashboard') }}" class="d-flex align-items-center">
                    <label for="year" class="form-label mb-0 mr-2">Year</label>
                    <select class="form-control form-control-sm mr-2" id="year" name="year">
                        <option value="All">All</option>
                        @foreach(range(date('Y'), date('Y') - 5) as $y)
                            <option value="{{ $y }}" @if($y == request('year', date('Y'))) selected @endif>{{ $y }}</option>
                        @endforeach
                    </select>
                    <label for="month" class="form-label mb-0 mr-2">Month</label>
                    <select class="form-control form-control-sm mr-2" id="month" name="month">
                        <option value="All">All</option>
                        @foreach(range(1, 12) as $m)
                            <option value="{{ $m }}" @if($m == request('month')) selected @endif>{{ $m }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                </form>
            </div>
            <div class="card-body p-3">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Feedback Chart -->
    <div class="col-lg-6 mb-4">
        <div class="card h-100">
            <div class="card-header pb-0">
                <h6>Feedback Overview</h6>
            </div>
            <div class="card-body p-3">
                <canvas id="feedbackChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Recent Sales Table -->
<div class="row mt-4">
    <div class="col-lg-6 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-header pb-0">
                <h6>Recent Sales</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Acara</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Customer</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tiket Terjual</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Per Tiket</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Penjualan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentSales as $sale)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($sale->Tanggal)->format('d M Y') }}</td>
                                    <td>{{ $sale->Nama_Acara }}</td>
                                    <td>{{ $sale->Nama_Customer }}</td>
                                    <td>{{ $sale->Tiket_Terjual }}</td>
                                    <td>{{ number_format($sale->Harga_per_Tiket, 0, ',', '.') }}</td>
                                    <td>{{ number_format($sale->Total_Penjualan, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Feedback Table -->
    <div class="col-lg-6 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-header pb-0">
                <h6>Recent Feedback</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentFeedback as $feedback)
                                <tr>
                                    <td>{{ $feedback->id }}</td>
                                    <td>{{ $feedback->nama }}</td>
                                    <td>{{ $feedback->email }}</td>
                                    <td>{{ $feedback->subjek }}</td>
                                    <td>{{ $feedback->pesan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Members Table -->
    <div class="col-lg-12 mb-4">
        <div class="card animate__animated animate__fadeInUp">
            <div class="card-header pb-0">
                <h6>Recent Members</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentMembers as $member)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->phone }}</td>
                                    <td>{{ $member->address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const salesData = @json($salesData);
    const feedbackData = @json($feedbackData);

    const salesOverviewCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesOverviewCtx, {
        type: 'line',
        data: {
            labels: salesData.map(data => data.date),
            datasets: [{
                label: 'Total Penjualan',
                data: salesData.map(data => data.total),
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            animation: {
                duration: 2000,
                easing: 'easeInOutQuad'
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const feedbackOverviewCtx = document.getElementById('feedbackChart').getContext('2d');
    new Chart(feedbackOverviewCtx, {
        type: 'bar',
        data: {
            labels: feedbackData.map(data => data.subjek),
            datasets: [{
                label: 'Feedback Count',
                data: feedbackData.map(data => data.count),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            animation: {
                duration: 2000,
                easing: 'easeInOutQuad'
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
@endsection
