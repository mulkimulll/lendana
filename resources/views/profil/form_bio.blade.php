@extends('layouts.app')

@section('content')
<div class="page-content bottom-content">

    <!-- Banner -->
    <div class="head-details">
        <div class=" container">
            <div class="dz-info">
                <span class="location d-block">Lengkapi Biodata Pengguna</span>
                <h5 class="title">1. Biodata</h5>
            </div>
            <div class="dz-media media-65">
                <img src="{{ asset('assets/img/form-bio.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="fixed-content p-0">
        <div class="container">
            <div class="main-content">
                <div class="left-content">
                    <a href="javascript:void(0);" class="back-btn">
                        <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                fill="#a19fa8" />
                        </svg>
                    </a>
                </div>
                <div class="mid-content">
                    <h5 class="mb-0">Beranda</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <div class="container">
        <form class="my-2">
            <div class="input-group">
                <input type="text" placeholder="Nama lengkap" class="form-control">
            </div>
            <div class="input-group">
                <input type="text" placeholder="NIK" class="form-control">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Tempat Lahir" class="form-control">
            </div>
            <div class="input-group">
                <input type="date" placeholder="Tanggal Lahir" class="form-control">
            </div>
            <div class="input-group">
                <div class="radio circle-radio row" style="margin-left: 10px">
                    <label class="radio-label col-6">Laki - Laki
                        <input type="radio" checked="checked" name="radio2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-label col-6">Perempuan
                        <input type="radio" name="radio2">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <select name="" id="" class="form-control">
                    <option value="" disabled selected>-- Status pernikahan --</option>
                    <option value="">Menikah</option>
                    <option value="">Lajang</option>
                    <option value="">Duda</option>
                    <option value="">Janda</option>
                </select>
            </div>
            <div class="input-group">
                <select name="" id="" class="form-control">
                    <option value="" disabled selected>-- Kewarganegaraan --</option>
                    <option value="">WNI</option>
                    <option value="">WNA</option>
                </select>
            </div>
            <div class="input-group">
                <input type="number" placeholder="Nomor KK" class="form-control">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nama Ibu Kandung" class="form-control">
            </div>
            <div class="input-group">
                <textarea name="" id="" class="form-control">Alamat lengkap sesuai KTP</textarea>
            </div>
            <div class="input-group">
                <input type="number" placeholder="Nomor Handphone" class="form-control">
            </div>
            <div class="input-group">
                <input type="number" placeholder="Nomor telp rumah" class="form-control">
            </div>
            <div class="input-group">
                <label for="">KTP</label>
                <input type="file" class="imageuplodify" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
            </div>
            <div class="input-group">
                <label for="">KK</label>
                <input type="file" class="imageuplodify" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
            </div>
        </form>
    </div>
    <!-- Page Content End -->

    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="company-detail.html" class="btn btn-primary w-100 btn-rounded">Apply job</a>
        </div>
    </footer>
    <!-- Footer End -->

</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('input[type="file"]').imageuploadify();
    })

</script>
@endsection
