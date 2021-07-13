@extends('layoutUser.layout')
@section('titleweb','Car Rental')
@section('bodycode')


<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Xe của tôi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section" style="margin-top: 10%">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Xe của tôi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table" style="text-align: center">
						  <thead class="thead-dark">
						    <tr>
						      <th>Trạng thái xe</th>
						      <th style="width: 15%;">Biển số</th>
						      <th>Hãng xe</th>
						      <th>Mẫu xe</th>
                              <th>Ngày đăng ký</th>
                              <th style=""></th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                              @foreach ($mycar as $item)
                
						    <tr class="alert" role="alert">
						      <td>
                                  @if ($item->status == 1)
                                  <span class="badge badge-success">Đang chờ duyệt</span>
                                  @endif
                                  @if ($item->status == 2)
                                  <span class="badge badge-success">Đang hoạt động</span>
                                  @endif
								  @if ($item->status == 3)
                                  <span class="badge badge-danger">Đã bị từ chối</span>
                                  @endif
								  @if ($item->status == 4)
                                  <span class="badge badge-danger">Đang tạm ngưng</span>
                                  @endif
                                </td>
						      <td>{{ $item->plate_id }}</td>
						      <td>{{ $item->brand }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->created_at }}</td>
						
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" >
                                    <td class="project-actions text-right">
										<a class="btn btn-info btn-sm" href="{{ route('rental.update', $item->car_id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Ảnh xe
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{ route('rental.update', $item->car_id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Sửa
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('rental.delete', $item->car_id) }}">
                                            Xóa
                                        </a>
                                    </td>
				          		</a>
				        	</td>
						    </tr>
                                              
                            @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	
		

	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

@endsection