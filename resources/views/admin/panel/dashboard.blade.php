@extends('templates.app')
@push('style')

<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs5/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons-bs5/buttons.bootstrap5.min.css') }}">

<style>
    .table-hover tbody tr:hover td,
    .table-hover tbody tr:hover th {
        background-color: #0d6efd !important;
        color: #ffff;
    }

    div.dataTables_wrapper div.dataTables_info {
        padding-top: 20px;
        white-space: nowrap;
    }
</style>
@endpush()
@section('content')


<!-- Main Container -->
<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark"></div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-success mb-0">
                            Total Penonton <i class="fas fa-check"></i>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark"></div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-warning mb-0">
                            Belum Konfirmasi <i class="fas fa-business-time"></i>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark"></div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-primary mb-0">
                            Terkonfirmasi<i class="fas fa-user-clock"></i>
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">List of Visitors</h3>
            </div>
            <div class="block-content  block-content-full">

                <div class="table-responsive">
                    <table class="table table-sm table-condensed table-hover table-bordered table-striped table-vcenter js-dataTable-full" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Nomer Tiket</th>
                                <th class="text-center">Band</th>
                                <th class="text-center">status</th>
                                <th class="text-center">action</th>
                            </tr>
                        </thead>

                        <tbody>
                            {{-- @if (!$attendance->count())
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data yang tersedia</td>
                            </tr>
                            @else --}}
                            @foreach ($datas as $data)
                            <tr>
                                <td class="text-center fs-sm text-center">{{ $loop->iteration }}</td>
                                <td class="fw-semibold fs-sm">{{ $data->name }}</td>
                                <td class="fw-semibold fs-sm">{{ $data->email }}</td>
                                <td class="fw-semibold fs-sm text-center">{{ $data->village->name }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Horizontal Outline Secondary">
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-pencil-alt"></i></a>
                                        <form action="" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-warning show_confirm" style="display: inline-block; margin-left: -3px"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>

                                    </div>
                                </td>
                                </td>
                            </tr>
                            @endforeach
                            {{-- @endif --}}
                        </tbody>
                    </table>
                </div>


            </div>

            <!-- END Image Sliders -->
        </div>
        <!-- END Page Content -->
</main>
<!-- END Main Container -->

@endsection
@push('scripts')

<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-bs5/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#table-1').on('click', 'tr td .show_confirm', function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah Kamu yakin ingin menghapus data ini ?`,
                    text: "Klik OK maka data tersebut akan terhapus permanen.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    })
</script>
@endpush