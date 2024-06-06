@extends('layouts.app')

@section('content')
<div class="page-content bottom-content">

    <!-- Banner -->
    <div class="head-details" style="padding-bottom: 10px">
        <div class=" container">
            <div class="dz-info">
                <span class="location d-block">Lengkapi Pendidikan</span>
                <h5 class="title">2. Form Pendidikan</h5>
            </div>
            <div class="dz-media media-95">
                <img src="{{ asset('assets/img/form-pend.png') }}" alt="">
            </div>
        </div>
    </div>


    <div class="container mt-5">
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
            <a href="{{url('form_pendidikan')}}" class="btn btn-primary w-100 btn-rounded">Simpan</a>
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
