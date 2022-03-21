@extends('layouts.app')
@section('title', 'Haris | Data Contact' )
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">From | Data Contact Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $contact->nama}}">

                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $contact->email}}">

                                    </div>
                                    <div class="form-group">
                                        <label for="nf-pesan" class=" form-control-label">Pesan</label>
                                        <textarea name="pesan" class="form-control">{{ $contact->pesan}}</textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
