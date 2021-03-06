@extends('layouts.main')
@section('content')
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span>Tabel Rekap Keluarga Terdamping</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>PSKS</a>
                      <span class="breadcrumb-item active">Tabel Rekap Keluarga Terdamping</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none">
                    
                  </div>
                </div>
              </div>

<!-- Bordered table -->
          <div class="card">
					  <div class="card-header header-elements-inline">
						  <h5 class="card-title">Tabel Keluarga Terdamping</h5>
						  <div class="header-elements">
							  <div class="list-icons">
		              <a class="list-icons-item" data-action="reload"></a>
		            </div>
	            </div>
					  </div>

					<div class="card-body"></div>

					<table class="table datatable-responsive-row-control table-bordered">
						<thead>
							<tr>
                <th></th>
								<th>No</th>
                <th>Nomor KK</th>
								<th>Nama PSKS</th>
								<th>Nik Keluarga</th>
								<th>Nama Kepala Keluarga</th>
								<th>Alamat</th>
							</tr>
						</thead>
						<tbody>
						<?php $i = 1; ?>
              @foreach($keluargaterdamping as $data)
							<tr>
                <td></td>
								<td>{{$i}}</td>
								<td>{{$data->NomorKK}}</td>
								<td>{{$data->NamaPSKS}}</td>
								<td>{{$data->NikKeluarga}}</td>
								<td>{{$data->NamaKepalaKeluarga}}</td>
								<td>{{$data->Alamat}}</td>
							</tr>
							<?php $i++ ?>
              @endforeach
						</tbody>
					</table>
				</div>			
				<!-- /bordered table -->
</div>
@endsection

@section('js')    
  <script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>	
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_responsive.js"></script>
@endsection