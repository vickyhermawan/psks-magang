@extends('layouts.main')
@section('content')
            <div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span>Tabel Hak Akses User</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>PSKS</a>
                      <span class="breadcrumb-item active">Tabel Hak Akses</span>
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
                    <h5 class="card-title">Tabel Hak Akses User</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="reload"></a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                          @if ($message = Session::get('success'))
                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#modal_theme_primary').modal();
                            });
                          </script>
                          <div id="modal_theme_primary" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header bg-primary">
                                  <h6 class="modal-title">Pemberitahuan</h6>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                  <h6 class="font-weight-semibold">{{ $message }}</h6>
                                </div>

                              </div>
                            </div>
                          </div>
                        @endif
                        @if ($message = Session::get('delete'))
                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#modal_theme_danger').modal();
                            });
                          </script>
                          <div id="modal_theme_danger" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header bg-danger">
                                  <h6 class="modal-title">Pemberitahuan</h6>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                  <h6 class="font-weight-semibold">{{ $message }}</h6>
                                </div>

                              </div>
                            </div>
                          </div>
                        @endif
                        @if ($message = Session::get('edit'))
                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#modal_theme_warning').modal();
                            });
                          </script>
                          <div id="modal_theme_warning" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header bg-warning">
                                  <h6 class="modal-title">Pemberitahuan</h6>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                  <h6 class="font-weight-semibold">{{ $message }}</h6>
                                </div>

                              </div>
                            </div>
                          </div>
                        @endif
                    </div>
                    <table class="table datatable-basic table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIK PSKS</th>
                          <th>Nama PSKS</th>
                          <th>Hak Akses User</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>  
                      @foreach($users as $data)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$data->NikPSKS}}</td>
                          <td>{{$data->NamaPSKS}}</td>
                          <td>{{$data->nama}}</td>
                          <td class="text-center">
                          <div class="list-icons">
                            <div class="dropdown">
                              <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                              </a>
                                  <div class="dropdown-menu dropdown-menu-center" style="padding-left:30px;">
                                  <a href="{{route('edithakakses', 'id='.$data->id) }}" > <button action type="button" class="btn btn-warning">Edit</button></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_theme_danger{{$data->id}}">Hapus</button>
                                  </div>
                                </div>  
                            </div>
                          </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                    </tbody>
                  </table>
                </div>
				<!-- /bordered table -->

        <!-- Danger modal -->
				@foreach($users as $data)
				<div id="modal_theme_danger{{$data->id}}" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-danger">
								<h4 class="modal-title">Delete</h4>
							</div>

							<div class="modal-body">
								Anda yakin ingin menghapus data ini?
							</div>
							<form action="{{Route('hapushakakses', $data->id)}}" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="GET">
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="submit" class="btn bg-danger">Yes</button>
							</div>
							</form>
                        
						</div>
					</div>
				</div>
				@endforeach
				<!-- /default modal -->
</div>
				
@endsection

@section('js')    
	 <script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	 <script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection